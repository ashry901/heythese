<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Profile extends Model
{
    use HasFactory;
    use HasTranslations;

    protected $fillable =[
        //'user_id',
        'section_id',
        'category',
        'gender_id',
        'nationalitie_id',
        'phone',
        'avatar',
    ];
    //protected $guarded =[];
    public $translatable = ['category'];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function section()
    {
        return $this->belongsTo('App\Models\Section', 'section_id');
    }

    public function gender()
    {
        return $this->belongsTo('App\Models\Gender', 'gender_id');
    }

    public function nationality()
    {
        return $this->belongsTo('App\Models\Nationalitie', 'nationalitie_id');
    }

    public function setCategoryAttribute($value)
    {
        $this->attributes['category'] = json_encode($value);
    }

    public function getCategoryAttribute($value)
    {
        return $this->attributes['category'] = json_decode($value);
    }

}
