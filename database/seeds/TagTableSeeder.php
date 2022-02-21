<?php

use Illuminate\Database\Seeder;
use App\Tag;
use Illuminate\Support\Str;

class TagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags = ["squat", "functionaltraining", "crossfit", "coach", "mangiaresano", "running", "gymmotivation", "forza", "lifestyle", "healthy", "nutrizionista", "nopainnogain", "perderepeso", "corsa", "pesi", "determinazione"];

        foreach( $tags as $tag ) {
            $newTag = new Tag();
            $newTag->name = $tag;
            $newTag->slug = Str::of($newTag->name)->slug("-");
            $newTag->save();
        }
    }
}
