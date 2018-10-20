<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $faker = Faker\Factory::create();
       for ($i=0; $i <=20 ; $i++) { 
      App\Noticias::create([
      	'titulo' => $faker->company,
    'conteudo' =>$faker->text,
    'categoria' =>$faker->jobTitle,
    'autor' =>$faker->name,
    'palavraschave'=>$faker->name
	]);
      echo "registro(". $i .")cadastrado" . "\n";
  }
    }
}
