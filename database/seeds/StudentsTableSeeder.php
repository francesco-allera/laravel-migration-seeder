<?php

use Faker\Generator as Faker;
use App\Student;
use Illuminate\Database\Seeder;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 100; $i++) {
            $student = new Student();
            $student->first_name = $faker->firstName();
            $student->last_name = $faker->lastName();
            $student->birth = $faker->date();
            $student->class = rand(1, 10);
            $student->description = $faker->sentence(4);
            $student->url = $faker->imageUrl(640, 480);
            $student->save();
        }
    }
}
