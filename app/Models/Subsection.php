<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Subsection extends Model
{
    use HasTranslations;

    public $translatable = ['name_subsection'];

    protected $table = 'subsections';

    public $timestamps = true;

    protected $fillable=['name_subsection', 'section_id'];

    public function sections()
    {
        return $this->belongsTo('App\Models\Section', 'section_id');
    }


}
