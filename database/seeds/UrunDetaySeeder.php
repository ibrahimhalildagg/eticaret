<?php

use Illuminate\Database\Seeder;
use App\Models\Urun;
use App\Models\UrunDetay;
use Illuminate\Support\Str;
class UrunDetaySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker\Generator $faker)
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        Urun::truncate();
        UrunDetay::truncate();
        for($i=0; $i<30; $i++){
            $baslik=$faker->sentence(2);
            $urun=Urun::create([
                'baslik'=>$baslik,
                'slug'=>str::slug($baslik),
                'aciklama'=> $faker->sentence(23),
                'fiyat'=>$faker->randomFloat(3,1, 23),
                'parabirimi'=>$faker->sentence(1),
            ]);
            $detay=$urun->detay()->create([
               'goster_slider'=>rand(0,1),
               'goster_gunun_firsati'=>rand(0,1),
               'goster_one_cikan'=>rand(0,1),
               'goster_cok_satan'=>rand(0,1),
               'goster_indirimli'=>rand(0,1)
            ]);
        }
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
