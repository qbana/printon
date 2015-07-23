<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

	public function run()
	{
		Model::unguard();
        DB::table('parameter_tag')->delete();
        DB::table('option_tag')->delete();
        DB::table('file_format')->delete();
        DB::table('files')->delete();
        DB::table('formats')->delete();
        DB::table('image_tag')->delete();
        DB::table('images')->delete();
        DB::table('parameter_subs')->delete();
        DB::table('option_subs')->delete();
        DB::table('options')->delete();
        DB::table('parameters')->delete();
        DB::table('tags')->delete();
        DB::table('permission_role')->delete();
        DB::table('permission_user')->delete();
        DB::table('role_user')->delete();
        DB::table('users')->delete();
        DB::table('roles')->delete();
        DB::table('permissions')->delete();




        $this->call('UserTableSeeder');
        $this->call('PermissionsTableSeeder');
        $this->call('RolesTableSeeder');
        $this->call('TagsTableSeeder');
        $this->call('RolePermissionTableSeeder');
        $this->call('UserInRoleTableSeeder');
        $this->call('PermissionUserTableSeeder');
        $this->call('ParameterTableSeeder');
        $this->call('OptionTableSeeder');
        $this->call('OptionSubTableSeeder');
        $this->call('ParameterSubTableSeeder');
        $this->call('ImageTableSeeder');
        $this->call('ImageTagTableSeeder');
        $this->call('FormatTableSeeder');
        $this->call('FileTableSeeder');
        $this->call('FileFormatTableSeeder');
        $this->call('ParametersTagsTableSeeder');
        $this->call('OptionsTagsTableSeeder');
    }

}
