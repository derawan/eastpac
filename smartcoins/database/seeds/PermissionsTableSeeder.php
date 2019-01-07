<?php

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('permissions')->delete();
        
        \DB::table('permissions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'edit-profile',
                'guard_name' => 'web',
                'created_at' => '2018-12-27 08:24:35',
                'updated_at' => '2018-12-27 08:24:35',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'give-permission-to',
                'guard_name' => 'web',
                'created_at' => '2018-12-27 08:42:56',
                'updated_at' => '2018-12-27 08:42:56',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'ban-member',
                'guard_name' => 'web',
                'created_at' => '2018-12-27 08:49:07',
                'updated_at' => '2018-12-27 08:49:07',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'delete-member',
                'guard_name' => 'web',
                'created_at' => '2018-12-27 08:49:24',
                'updated_at' => '2018-12-27 08:49:24',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'edit-profile-member',
                'guard_name' => 'web',
                'created_at' => '2018-12-27 08:49:34',
                'updated_at' => '2018-12-27 08:49:34',
            ),
        ));
        
        
    }
}