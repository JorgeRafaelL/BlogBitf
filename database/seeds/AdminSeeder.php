<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Model\admin\admin;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        admin::create([
            'name' => 'Jorge L. A. Rafael',
            'email' => 'jorge@admin.com',
            'password' => bcrypt('admin'),
            'phone' => '3223035154',
            'status' => 1
        ]);
    }
}
