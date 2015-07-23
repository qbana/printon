<?php namespace printon\Http\Controllers;

use printon\Http\Requests;
use printon\Tag;
use printon\Option;
use printon\Parameter;
use printon\Image;
use GrahamCampbell\Flysystem\Facades\Flysystem;

class TagController extends Controller {

    private $_param;
    private $_option;

    public function __construct(Parameter $param, Option $option)
    {
        #$this->middleware('admin');
        #$this->middleware('jedi');

        $this->_param = $param;
        $this->_option = $option;
    }

	public function index(Tag $tag)
	{
        $tags = $tag->orderBy('name', 'ASC')->get();
        return view('tags.index', compact('tags'));
	}

	public function create(Tag $tag)
	{
        $params = $this->_param->get(['id','name']);
        
        $options = $this->_option->get(['id','name']);

        $oldOptions = [];
        $oldParams = [];
        $oldImages = null;

        $tags = $tag->orderBy('name', 'ASC')->get();

        return view('tags.create', compact('params', 'options', 'oldParams', 'oldOptions', 'tags', 'oldImages'));
	}

	public function store(Requests\TagRequest $request)
	{
        $user = \Auth::id();

        $input = $request->all();
 
        $tag = \Auth::user()->tags()->create($input+['slug' => str_replace(' ', '-', $input['name']), 'created_id' => $user, 'updated_id' => $user]);

        $tag->options()->attach($request->input('options'));

        $tag->params()->attach($request->input('params'));

        if ($request->hasFile('images'))
        $this->saveImages($request->file('images'), $tag, $input['img_desc']);

        // flash()->overlay('Service has been updated', 'Success');

        return redirect('tags');
    }

	public function show(Tag $tag)
	{
        return view('tags.show', compact('tag'));
    }

	public function edit(Tag $tag)
	{
        $oldParams = $tag->getParamtersListsAttribute();
        
        $oldOptions = $tag->getOptionsListsAttribute();

        $oldImages = $tag->getImagesAttributes();
        
        $params = $this->_param->get(['id','name']);
        
        $options = $this->_option->get(['id','name']);
          
        return view('tags.edit', compact('tag', 'oldOptions', 'oldParams', 'params', 'options', 'oldImages'));
    }

	public function update(Tag $tag, Requests\TagRequest $request)
	{
        $input = $request->all();

		$tag->update($input+['slug' => str_replace(' ', '-', $input['name']),'updated_id' => \Auth::id()]);
         
        $tag->options()->sync($request->input('options'));

        $tag->params()->sync($request->input('params'));   

        if ($request->hasFile('images'))
        $this->saveImages($request->file('images'), $tag, $input['img_desc']);

        return redirect('tags');
	}

	public function destroy(Tag $tag)
	{
        $this->deleteImages($tag->id);
        $tag->delete();
        // flash()->overlay('Service has been deleted', 'Success');
        
        return redirect('tags');
	}

    private function saveImages($images, $tag, $img_desc)
    {    
        $this->deleteImages($tag->id);

        foreach($images as $image)
        {
            $uniqueId = rand(1,5000);

            $ext = $image->getClientOriginalExtension();

            $images = Image::create(['slug' => $tag->slug.".".$ext, 'img_name' => $image->getFilename().'.'.$ext, 'body' => $img_desc, 'unique_id' => $uniqueId ]);   

            $tag->images()->attach($images);

            $file_info  = pathinfo($image->getClientOriginalName());

            \Image::make($image->getRealPath())->save(storage_path().'/tag_images/'.$tag->slug.'-'.$uniqueId.'-'.$tag->id.'.'.$file_info['extension'])->destroy(); 
        }
    }

    private function deleteImages($id)
    {
        $files = [];

        $files = glob(storage_path().'/tag_images/*-'.$id.'.jpg');
        if(count($files) > 0)
        {
            foreach($files as $file)
            unlink($file);
        }
        $tag = Tag::find($id);

        $tag->images()->delete();
    }

  

}