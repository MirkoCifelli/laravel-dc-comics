<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

// Models
use App\Models\Comic;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    
    public function run(): void
    {
        Comic::truncate();
        $comicsData = config('comics');

        foreach ($comicsData as $index => $singleComic) {
            $comics = new Comic();
            $comics->title = $singleComic['title'];
            $comics->description = $singleComic['description'];
            $comics->thumb = $singleComic['thumb'];
            $comics->price = $singleComic['price'];
            $comics->series = $singleComic['series'];
            $comics->sale_date= $singleComic['sale_date'];
            $comics->type= $singleComic['type'];
            $comics->artists= json_encode($singleComic['artists']);
            $comics->writers= json_encode($singleComic['writers']);
            $comics->save();
            
        }
    }
}
