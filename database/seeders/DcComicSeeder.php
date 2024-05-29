<?php

namespace Database\Seeders;

use App\Models\DcComic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DcComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('dc_comics')->truncate();

        $comics = config('comics');

        foreach ($comics as $comic) {
            $dc_comic = new DcComic();

            $dc_comic->title = $comic['title'];
            $dc_comic->description = $comic['description'];
            $dc_comic->thumb = $comic['thumb'];
            $dc_comic->price = trim($comic['price'], "$");
            $dc_comic->series = $comic['series'];
            $dc_comic->sale_date = $comic['sale_date'];
            $dc_comic->type = $comic['type'];

            $dc_comic->save();
        }
    }
}
