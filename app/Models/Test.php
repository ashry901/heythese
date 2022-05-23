<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\Types\Self_;
use Astrotomic\Translatable\Translatable;


class Test extends Model
{
    use HasFactory;
    use Translatable;

    //$image = $post->image;
    protected $translatedAttributes = ['name'];

    protected $table = "tests";

    protected $fillable = ['name', 'slug', 'photo'];

    protected $hidden = ['translations', 'created_at', 'updated_at'];




}
