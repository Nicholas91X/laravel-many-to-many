<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function cathegory() {
        return $this->belongsTo("App\Cathegory");
    }

    public function tags() {
        return $this->belongsToMany("App\Tag");
    }
}
