<?php

namespace Database\Seeders;

use App\Models\Comic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $configcomics = config('comics');
        // dd($configcomics);

        foreach ($configcomics as $comic) {
            $modelComic = new Comic();
            $modelComic->name = $comic['title'];
            $modelComic->description = $comic['description'];
            $modelComic->price = $comic['price'];
            $modelComic->series = $comic['series'];
            $modelComic->sale_date = $comic['sale_date'];
            $modelComic->type = $comic['type'];
            $modelComic->thumb = $comic['thumb'];

            $modelComic->save();
        }
    }
}
