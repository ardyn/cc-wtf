<?php

class UserTableSeeder extends Seeder {

    /**
     * Run database seeds.
     *
     * @return void
     */

    public function run()
    {
        $user             = new User;
        $user->company_id = 1;
        $user->address_id = 1;
        $user->username   = 'crmadmin';
        $user->password   = Hash::make('sscrm@9820');
        $user->email      = 'muhammad.irfan@cooperativecomputing.com';
        $user->last_login = date('Y-m-d h:i:s');
        $user->created_at = date('Y-m-d h:i:s');
        $user->updated_at = date('Y-m-d h:i:s');
        $user->save();
        /*User::create([
            'created_at' => date('Y-m-d h:i:s'),
            'updated_at' => date('Y-m-d h:i:s'),
            'email'      => 'muhammad.irfan@cooperativecompuging.com',
            'username'   => 'crmadmin',
            'password'   => Hash::make('sscrm@9820'),
            'last_login' => date('Y-m-d h:i:s'),
            'company_id' => 1
        ]);*/
    }

}