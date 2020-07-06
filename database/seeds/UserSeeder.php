<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\users::create([
            'name'  => 'SayaAdmin',
            'phone' => '081234567890',
            'state' => 'Malang',
            'email' => 'OrangeDeCafe.SayaAdmin.Dummy@Gmail.com',
            'role'  => '2',
            'password'  => 'AdministratorOrangeDeCafe',
        ]);

        App\users::create([
            'name'  => 'SayaPesanPage',
            'phone' => '081234567890',
            'state' => 'Malang',
            'email' => 'OrangeDeCafe.SayaPesanPage.Dummy@Gmail.com',
            'role'  => '3',
            'password'  => 'AdministratorOrangeDeCafe',
        ]);

        App\users::create([
            'name'  => 'SayaKasir',
            'phone' => '081234567890',
            'state' => 'Malang',
            'email' => 'OrangeDeCafe.SayaKasirPage.Dummy@Gmail.com',
            'role'  => '3',
            'password'  => 'AdministratorOrangeDeCafe',
        ]);

        App\users::create([
            'name'  => 'SayaDapur',
            'phone' => '081234567890',
            'state' => 'Malang',
            'email' => 'OrangeDeCafe.SayaDapurPage.Dummy@Gmail.com',
            'role'  => '4',
            'password'  => 'AdministratorOrangeDeCafe',
        ]);
    }
}
