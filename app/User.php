<?php namespace printon;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Bican\Roles\Contracts\HasRoleAndPermissionContract;
use Bican\Roles\Traits\HasRoleAndPermission;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract, HasRoleAndPermissionContract {

	use Authenticatable, CanResetPassword, HasRoleAndPermission;

	protected $table = 'users';

	protected $fillable = ['name', 'email', 'password'];

	protected $hidden = ['password', 'remember_token'];

    // public function products()
    // {
    //     return $this->hasMany('printon\Product', 'created_id');
    // }

    // public function orders()
    // {
    //     return $this->hasMany('printon\Order', 'user_id');
    // }

    public function tags()
    {
        return $this->hasMany('printon\Tag', 'owner_id');
    }

    public function options()
    {
        return $this->hasMany('printon\Option', 'owner_id');
    }

    public function params()
    {
        return $this->hasMany('printon\Parameter', 'owner_id');
    }

}


