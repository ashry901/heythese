<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Subsection extends Model
{
    use HasFactory;
    use HasTranslations;

    public $translatable = ['name_class'];

    protected $table = 'subsections';

    public $timestamps = true;

    protected $fillable=['name_class', 'section_id'];

    public function sections()
    {
        return $this->belongsTo('App\Models\Section', 'section_id');
    }
}
