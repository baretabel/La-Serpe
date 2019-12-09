<?php

use Illuminate\Database\Seeder;

class AdminsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(array(
            array('id_role'=>3, 'pseudo'=>'admin1','email'=>'admin1@root.com','password'=>bcrypt('azerty'),'created_at' => date("Y-m-d H:i:s"),'updated_at' => date("Y-m-d H:i:s")),
            array('id_role'=>3, 'pseudo'=>'admin2','email'=>'admin2@root.com','password'=>bcrypt('azerty'),'created_at' => date("Y-m-d H:i:s"),'updated_at' => date("Y-m-d H:i:s")),
        ));
    }
}
