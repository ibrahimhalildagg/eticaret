<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $id=DB::table('categories')->insertGetId(['name'=>'Elektronik', 'slug'=>str::slug('elektronik'), 'parent_id'=>0]);
        DB::table('categories')->insert(['name'=>'Ev Aletleri', 'slug'=>str::slug('Ev-Aletleri'), 'parent_id'=>$id]);
        DB::table('categories')->insert(['name'=>'Televizyon', 'slug'=>str::slug('Televizyon'), 'parent_id'=>$id]);
        DB::table('categories')->insert(['name'=>'Cep Telefonu', 'slug'=>str::slug('Cep-Telefonu'), 'parent_id'=>$id]);
        DB::table('categories')->insert(['name'=>'Eğlence', 'slug'=>str::slug('eğlence'), 'parent_id'=>0]);
        DB::table('categories')->insert(['name'=>'Ev', 'slug'=>str::slug('ev'), 'parent_id'=>0]);
        $id=DB::table('categories')->insertGetId(['name'=>'Doğa', 'slug'=>str::slug('doğa'), 'parent_id'=>0]);
        DB::table('categories')->insert(['name'=>'Çadır', 'slug'=>str::slug('Çadır'), 'parent_id'=>$id]);
        DB::table('categories')->insert(['name'=>'Mat', 'slug'=>str::slug('Mat'), 'parent_id'=>$id]);
        DB::table('categories')->insert(['name'=>'Lamba', 'slug'=>str::slug('Lamba'), 'parent_id'=>$id]);
    }
}
