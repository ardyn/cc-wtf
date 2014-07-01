<?php

class CompaniesTableSeeder extends Seeder {

    /**
     * Run database seeds.
     *
     * @return void
     */

    public function run()
    {
        $company             = new Company;
        $company->contact_id = 0;
        $company->address_id = 1;
        $company->phone      = '123-123-1234';
        $company->name       = 'Cooperative Computing';
        $company->email      = 'muhammad.irfan@cooperativecomputing.com';
        $company->timezone   = 'EST';
        $company->created_at = date('Y-m-d h:i:s');
        $company->updated_at = date('Y-m-d h:i:s');
        $company->save();
        /*Company::create([
            'created_at' => date('Y-m-d h:i:s'),
            'updated_at' => date('Y-m-d h:i:s'),
            'phone'      => '123-123-1234',
            'address_id' => '1',
            'contact_id' => 0,
            'name'       => 'Cooperative Computing',
            'email'      => 'ayaz@cooperativecomputing.com',
            'timezone'   => 'EST'
        ]);*/
    }

}