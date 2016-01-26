<?php

use App\User;

class SentinelUpdateSeeder extends DatabaseSeeder {

    public function run()
    {
        /* move all groups to roles table */
        $groups = DB::select('select * from groups');
        foreach($groups as $group)
        {
            $id = $group->id;
            $name = $group->name;
            $slug = str_slug($name);

            if($group->id == '1')
            {
                $permissions = array('admin' => 1);
            }
            else
            {
                $permissions = array();
            }

            Sentinel::getRoleRepository()->createModel()->create([
                'id'    => $id,
                'name'  => $name,
                'slug'  => $slug,
                'permissions' => $permissions
            ]);

        }

        /* move users_groups data into role_users table */
        $users_groups = DB::select('select * from users_groups');
        foreach($users_groups as $user_group)
        {
            $user = Sentinel::findById($user_group->user_id);

            $group = DB::table('groups')->where('id', '=', $user_group->group_id)->first();

            $role_current = DB::table('roles')->where('name', '=', $group->name)->first();

            $role = Sentinel::findRoleById($role_current->id);

            $role->users()->attach($user);
        }

        $this->command->info('groups, users_groups successfully migrated to roles, role_users tables');

        /* insert each user into activations table */
        $users = DB::select('select * from users');
        foreach($users as $user)
        {
            $current_user = Sentinel::findById($user->id);
            $activation = Activation::create($current_user);
            if($user->activated)
            {
                Activation::complete($current_user, $activation->code);
            }
        }

        $this->command->info('activations created successfully');


    }

}