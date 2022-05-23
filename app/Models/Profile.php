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
        'user_id',
        'section_id',
        'subsection_id',
        'gender_id',
        'nationalitie_id',
        'phone',
        'profile_photo_path',
    ];
    //protected $guarded =[];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

//    public function user()
//    {
//        return $this->belongsTo(User::class);
//    }

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



}
