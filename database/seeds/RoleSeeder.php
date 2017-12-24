<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Model\admin\role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        role::create([
            'name' => 'Editor',
        ]);
        role::create([
            'name' => 'Escritor',
        ]);
        role::create([
            'name' => 'Publicador',
        ]);
    }
}
