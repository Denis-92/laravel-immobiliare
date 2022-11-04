<?php

use Illuminate\Database\Seeder;

// Models
use App\models\House;

// Faker
use Faker\Generator as Faker;

class HousesTableSeeder extends Seeder
{

    private array $energyClasses = ["A", "B", "C", "D", "E", "F", "G"];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        /*
dimensione
prezzo
descrizione
classe energetica
indirizzo
piani
proprietario
numero di stanze
data di costruzione
garage
*/


        for($i = 0; $i < 50; $i++) {
            $house = new House();

            $house->dimensione = $faker->randomFloat(2, 5, 500); // To test if Float works for decimals
            $house->prezzo = $faker->randomFloat(2, 70000);
            $house->descrizione = $faker->paragraph(5);
            $house->classe_energetica = $faker->randomElement($this->energyClasses);
            $house->indirizzo = $faker->address();
            $house->piani = $faker->numberBetween(1, 5);
            $house->proprietario = $faker->name();
            $house->numero_di_stanze = $faker->numberBetween(3, 15);
            $house->data_di_costruzione = $faker->date();
            $house->garage = $faker->boolean();

            $house->save();
        }
    }
}
