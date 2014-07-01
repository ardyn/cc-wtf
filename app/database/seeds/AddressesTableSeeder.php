<?php

class AddressesTableSeeder extends Seeder {

    /**
     * Run database seeds.
     *
     * @return void
     */

    public function run()
    {
        $address             = new Address;
        $address->company_id = 0;
        $address->zone_id    = 0;
        $address->address    = '825 Market Street';
        $address->city       = 'Allen';
        $address->state      = 'TX';
        $address->zip        = '79013';
        $address->created_at = date('Y-m-d h:i:s');
        $address->updated_at = date('Y-m-d h:i:s');
        $address->save();
    }

}