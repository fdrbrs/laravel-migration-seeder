<?php
use App\Package;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;

class PackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(faker $faker)
    {
        for ($i=0; $i < 11; $i++) { 
            $package = new Package();
            $package->country = $faker->country();
            $package->nights = $faker->numberBetween(3, 9);
            $package->price = $faker->numberBetween(30, 250);
            $package->image = $faker->imageUrl(640, 480, 'beaches', true);
            $package->description = $faker->paragraph();
            $package->save();

        }
    }
}
