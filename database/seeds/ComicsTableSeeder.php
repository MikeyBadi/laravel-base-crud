<?php

use App\Comics;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comics = config('products');

        foreach($comics as $comic) {
            $new_comic = new comics();
            $new_comic->title = $comic->title;
            $new_comic->slug = Str::slug($comic->title, '-');
            $new_comic->image = $comic->image;
            $new_comic->type = $comic->type;

            $new_comic->save();
            // dump($new_comic);
        }

    }
}
