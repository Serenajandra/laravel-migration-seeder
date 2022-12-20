<?php

namespace Database\Seeders;

use App\Models\train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10; $i++) {
            $Train = new train();
            $Train->Azienda = $faker->sentence(1, false);
            $Train->Stazione_partenza = $faker->city();
            $Train->Stazione_arrivo = $faker->city();
            $Train->Orario_partenza = $faker->DateTime();
            $Train->Orario_arrivo = $faker->dateTime();
            $Train->Codice_Treno = $faker->randomFloat(2, 1, 100);
            $Train->Numero_Carrozze = $faker->randomFloat(1, 1, 100);
            $Train->In_orario = $faker->boolean();
            $Train->Cancellato = $faker->boolean();
            // dd($Train);
            $Train->save();
        }
    }
}
