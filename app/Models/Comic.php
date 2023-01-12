<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Comic extends Model
{
    use HasFactory;

    public static function generateSlug($string){
        $slug = Str::slug($string, '-');
        /*
            - salvare lo slug originale
            - controllare se esiste
            - generarne uno con in aggiunta un contataore
            -- se esiste generarne un'altro e così via fino a che se ne trova uno non esistente
        */
        $original_slug = $slug;
        $c = 1;
        $comic_exists = Comic::where('slug', $slug)->first();

        while($comic_exists){
            $slug = $original_slug . '-' . $c;
            $comic_exists = Comic::where('slug',$slug)->first();
            $c++;
        }
        return $slug;
    }
}
