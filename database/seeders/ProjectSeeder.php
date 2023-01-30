<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Project;
use Faker\Generator as Faker;
use Illuminate\Support\Str;
class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {   
        for( $i = 0; $i < 10; $i++ ){
            $new_project = new Project();
            $new_project->title = $faker->sentence();
            $new_project->description = $faker->text(1000);
            $new_project->version = $faker->randomFloat(1, 20, 30);
            $new_project->customer = $faker->name();
            $new_project->slug = Str::slug($new_project->title, '-');
            $new_project->save();
        }
    }
}
