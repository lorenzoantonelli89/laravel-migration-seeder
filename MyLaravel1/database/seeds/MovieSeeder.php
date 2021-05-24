<?php

use Illuminate\Database\Seeder;
use App\Movies;


class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Movies::class, 15)->create();
    }
}
