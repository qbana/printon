<?php namespace printon\Http\Requests;

use printon\Http\Requests\Request;

class OptionRequest extends Request {

    public function authorize() {
        //here set auth like who can store it /Admin only
        // if .... return false;
        return true;
    }

    public function rules() {
        return [
            'name'      => 'required|min:2|max:255',
            'body'      => 'required'
        ];
    }

}
