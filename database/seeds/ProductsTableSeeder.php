<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert(array(
            array('nom'=>'Schweppes', 'prix_ventre'=>2,'famille_id'=>1),
            array('nom'=>'M&M\'s', 'prix_ventre'=>1,'famille_id'=>2),
            array('nom'=>'Américain Bouchon', 'prix_ventre'=>3,'famille_id'=>2),
        ));
       
    }
}
