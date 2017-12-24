<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Model\admin\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	//Post
        Permission::create([//1
        	'name' => 'Post-Create',
        	'for' => 'post'
        ]);
        Permission::create([//2
        	'name' => 'Post-Update',
        	'for' => 'post'
        ]);
        Permission::create([//3
        	'name' => 'Post-Delete',
        	'for' => 'post'
        ]);
        //User
        Permission::create([//4
        	'name' => 'User-Create',
        	'for' => 'user'
        ]);
        Permission::create([//5
        	'name' => 'User-Update',
        	'for' => 'user'
        ]);
        Permission::create([//6
        	'name' => 'User-Delete',
        	'for' => 'user'
        ]);
        //Post-publish
        Permission::create([//7
        	'name' => 'Post-Publish',
        	'for' => 'post'
        ]);
        //Tag y Category
        Permission::create([//8
        	'name' => 'Tag-CRUD',
        	'for' => 'other'
        ]);
        Permission::create([//9
        	'name' => 'Category-CRUD',
        	'for' => 'other'
        ]);
    }
}
