<?php

use Illuminate\Database\Seeder;
use App\Models\Urun;
use Illuminate\Support\Str;
class UrunlerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker\Generator $faker)
    {

        for($i=0; $i<30; $i++){
            $baslik=$faker->sentence(2);
            Urun::create([
               'baslik'=>$baslik,
                'slug'=>str::slug($baslik),
                'aciklama'=> $faker->sentence(23),
                'fiyat'=>$faker->randomFloat(3,1, 23),
                'parabirimi'=>'₺'
            ]);
        }
    }
}
