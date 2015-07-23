<?php namespace printon\Services;

use printon\User;
use Validator;
use Illuminate\Contracts\Auth\Registrar as RegistrarContract;
use Bican\Roles\Models\Role;

class Registrar implements RegistrarContract {

	public function validator(array $data)
	{
		return Validator::make($data, [
			'name' => 'required|max:255',
			'email' => 'required|email|max:255|unique:users',
			'password' => 'required|confirmed|min:6',
		]);
	}

	public function create(array $data)
	{
		$user = User::create([
			'name' => $data['name'],
			'email' => $data['email'],
			'password' => bcrypt($data['password']),
		]);

        $user->attachRole($data['role']);
        $user->attachPermission($data['permission']);

        return $user;
	}

}


