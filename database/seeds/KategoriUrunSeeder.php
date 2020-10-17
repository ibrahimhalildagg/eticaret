<?php

use Illuminate\Database\Seeder;

class KategoriUrunSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('kategori_uruns')->insert(['category_id'=>1, 'urun_id'=>1,]);
        DB::table('kategori_uruns')->insert(['category_id'=>2, 'urun_id'=>3,]);
        DB::table('kategori_uruns')->insert(['category_id'=>1, 'urun_id'=>20,]);
        DB::table('kategori_uruns')->insert(['category_id'=>3, 'urun_id'=>5,]);
        DB::table('kategori_uruns')->insert(['category_id'=>2, 'urun_id'=>7,]);
    }
}
