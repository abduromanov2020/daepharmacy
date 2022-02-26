<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Item;
use App\Models\Supplier;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        Item::create([
            'supplier_id' => 1,
            'name' => "Panadol",
            'price' => 7500,
            'value' => 27
        ]);

        Item::create([
            'supplier_id' => 2,
            'name' => "Antangin",
            'price' => 6000,
            'value' => 22
        ]);

        Item::create([
            'supplier_id' => 2,
            'name' => "Paracetamol",
            'price' => 8500,
            'value' => 32
        ]);

        Item::create([
            'supplier_id' => 1,
            'name' => "Tramadol",
            'price' => 4500,
            'value' => 27
        ]);

        Supplier::create([
            'name' => 'Apotek K-24'
        ]);

        Supplier::create([
            'name' => 'Kimia Farma'
        ]);

        User::create([
            'username' => 'alfatih',
            'email' => 'abduromanov2020@gmail.com',
            'password' => Hash::make('12345')
        ]);

        User::create([
            'username' => 'zhafira',
            'email' => 'zhafira@gmail.com',
            'password' => Hash::make('12345')
        ]);

        User::create([
            'username' => 'ninys',
            'email' => 'ninys@gmail.com',
            'password' => Hash::make('12345')
        ]);

        User::create([
            'username' => 'alya',
            'email' => 'alya@gmail.com',
            'password' => Hash::make('12345')
        ]);

        User::create([
            'username' => 'adib',
            'email' => 'adib@gmail.com',
            'password' => Hash::make('12345')
        ]);

        User::create([
            'username' => 'faza',
            'email' => 'faza@gmail.com',
            'password' => Hash::make('12345')
        ]);
    }
}
