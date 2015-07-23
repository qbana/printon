<?php namespace printon\Http\Controllers;

use printon\Http\Requests;
use printon\Option;
use printon\OptionSub;

use Illuminate\Http\Request;


class OptionController extends Controller {

    private $_subs;

    public function __construct(OptionSub $sub)
    {
        #$this->middleware('admin'); use roles bican instead
        #$this->middleware('jedi');
        $this->_subs = $sub;
    }

	public function index(Option $option)
	{
        $options = $option->orderBy('name', 'ASC')->get();
        return $options;
	}

	public function create(Option $option)
	{
        $oldSubs = null;
        $options = $option->orderBy('name', 'ASC')->get();

        return view('options.create', compact('option', 'oldSubs', 'options'));
	}

	public function store(Requests\OptionRequest $request)
	{
        $input = $request->except('subOpts');

        $user = \Auth::id();

		\Auth::user()->options()->create($input+['slug' => str_replace(' ', '-', $input['name']), 'created_id' => $user, 'updated_id' => $user]);
 
		// flash()->success('New service has been created', 'Success'); 

		return redirect('options'); 
	}

	public function show(Option $option)
	{
        return $option;
	}

	public function edit(Option $option)
	{
        $oldSubs = null; //$option->getOptionSubListsAttribute();
      
        $subs = $this->_subs->lists('name', 'id');
       
        $options = $option->orderBy('name', 'ASC')->get();

        return view('options.edit', compact('oldSubs', 'option', 'subs', 'options'));
	}

	public function update(Option $option, Requests\OptionRequest $request)
	{
		$option->update($request->except('subs')+['slug' => str_replace(' ', '-', $request->input('name')),'updated_id' => \Auth::id()]);
            
        //flash()->overlay('Service has been updated', 'Success');
            
        return redirect('options');
	}

	public function destroy(Option $option)
	{
		$option->delete();
            
        // flash()->overlay('Service has been deleted', 'Success');
        
        return redirect('options');
	}

    private function syncSubs()
    {
        //
    }

}
