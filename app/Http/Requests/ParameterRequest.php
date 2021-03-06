<?php namespace printon\Http\Requests;

use printon\Http\Requests\Request;

class ParameterRequest extends Request {

	public function authorize()
	{
		return true;
	}

	public function rules()
	{
        return [
            'name'      => 'required|min:2|max:255',
            'body'      => 'required'
        ];
	}

}
