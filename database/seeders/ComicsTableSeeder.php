<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Comic;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //importo il file di dati comics da config e lo salvo in una variabile
        $comics = config('comics');

        //per ogni elemento dell'array
        foreach ($comics as $comic) {
            //creo un nuovo record di tipo comic
            $item = new Comic();
            $item->title = $comic['title'];
            $item->description = $comic['description'];
            $item->thumb = $comic['thumb'];
            $item->price = $comic['price'];
            $item->series = $comic['series'];
            $item->sale_date = $comic['sale_date'];
            $item->type = $comic['type'];
            $item->artists = $comic['artists'];
            $item->writers = $comic['writers'];
            $item->save();
        }
    }
}
