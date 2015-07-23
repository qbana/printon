<?php namespace printon\Http\Controllers;

use printon\Http\Requests;
use printon\Parameter;
use printon\ParameterSub;

use Illuminate\Http\Request;


class ParameterController extends Controller {

    private $_subs;

    public function __construct(ParameterSub $parameterSub)
    {
        #$this->middleware('admin');
        #$this->middleware('jedi');

        $this->_subs = $parameterSub;
    }

	public function index(Parameter $parameter)
	{
        $parameters = $parameter->orderBy('name', 'ASC')->get();
        return $parameters;
	}

	public function create(Parameter $parameter)
	{
        $subs = $this->_subs->lists('name', 'id');
        $oldSubs = null;

        $params = $parameter->orderBy('name', 'ASC')->get();

        return view('parameters.create', compact('subs', 'parameter', 'oldSubs', 'params'));
	}

	public function store(Requests\ParameterRequest $request)
	{
		$input = $request->except('subs');

		$user = \Auth::id();

		\Auth::user()->params()->create($input+['slug' => str_replace(' ', '-', $input['name']), 'created_id' => $user, 'updated_id' => $user]);

		// flash()->success('New service has been created', 'Success'); 

		return redirect('parameters'); 
	}

	public function show(Parameter $parameter)
	{
        return $parameter;
	}

	public function edit(Parameter $parameter)
	{
        $oldSubs = null;//$parameter->getParameterSubListsAttribute();

        $subs = $this->_subs->lists('name', 'id');

        $params = $parameter->orderBy('name', 'ASC')->get();

        return view('parameters.edit', compact('oldSubs', 'parameter', 'subs', 'params'));
	}

	public function update(Parameter $parameter, Requests\ParameterRequest $request)
	{
		$parameter->update($request->except('subs')+['slug' => str_replace(' ', '-', $request->input('name')),'updated_id' => \Auth::id()]);
            
        //flash()->overlay('Service has been updated', 'Success');
            
        return redirect('parameters');
	}

	public function destroy(Parameter $parameter)
	{
		$parameter->delete();
            
        // flash()->overlay('Service has been deleted', 'Success');
        
        return redirect('parameters');
	}

}
