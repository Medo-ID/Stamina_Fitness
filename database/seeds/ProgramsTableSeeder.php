<?php

use Illuminate\Database\Seeder;
use App\Program;
class ProgramsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // Let's truncate our existing records to start from scratch.
        Program::truncate();

        $faker = \Faker\Factory::create();

        // And now, let's create a few Programs in our database:
        for ($i = 0; $i < 50; $i++) {
            Program::create([
                'name' => $faker->sentence,
                'type' => $faker->word,
                'gif' => $faker->word,
            ]);
        }
    }
}
