<?php

namespace App\Http\Controllers;

use App\Models\Section;
use Illuminate\Http\Request;

class CategoryUserController extends Controller
{
    public function categoryMain()
    {
        $data=[];
//        $data['sliders'] = Slider::get(['photo']);
//        $data['sliderups'] = Sliderup::get(['picture']);

        $data['categories'] = Category::parent()
            ->select('id', 'slug', 'photo')
            ->with(['childrens' => function($q) {
                $q->select('id', 'parent_id', 'slug');
                $q->with(['childrens' => function ($qq) {
                    $qq->select('id', 'parent_id', 'slug');
                }]);
            }])->get();

        return view('front.main', $data);
    }


}
