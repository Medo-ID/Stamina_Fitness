<?php

use Illuminate\Database\Seeder;
use App\ToDo;

class ToDoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Let's truncate our existing records to start from scratch.
        ToDo::truncate();

        $faker = \Faker\Factory::create();

        // And now, let's create a few ToDos in our database:
        for ($i = 0; $i < 50; $i++) {
            ToDo::create([
                'title' => $faker->sentence,
                'desc' => $faker->sentence,
                'isImportant' => $faker->boolean(),
                'isStarred' => $faker->boolean(),
                'tags' => json_encode(["key" => "value"] ),
                'isCompleted' => $faker->boolean(),
                'isTrashed' => $faker->boolean(),
            ]);
        }
    }
}
