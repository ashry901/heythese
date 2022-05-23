<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\SubsectionRequest;
use Illuminate\Http\Request;
use App\Models\Section;
use App\Models\Subsection;
use DB;

class SubsectionController extends Controller
{
    public function index()
    {
        $subsections = Subsection::all();
        $sections = Section::all();
        return view('dashboard.subsections.index', compact('subsections', 'sections'));
    }

    public function create()
    {
        $subsections = Subsection::all();
        $sections = Section::all();
        return view('dashboard.subsections.create', compact('subsections', 'sections'));
    }

    public function store(SubsectionRequest $request)
    {
        //return $request;

        $list_classes = $request->list_classes;

        try {
            DB::beginTransaction();

            $validated = $request->validated();

            //if (is_array($list_classes) || is_object($list_classes))

            foreach ($list_classes as $list_class) {

                $my_classes = new Section();

                $my_classes->name_class = ['en' => $list_class['name_class_en'], 'ar' => $list_class['name']];

                $my_classes->section_id = $list_class['section_id'];

                $my_classes->save();

            }

            DB::commit();
            toastr()->success(trans('cpanel/messages.success'));

            return redirect()->route('admin.subsections');

        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function edit()
    {
        //
    }

    public function update()
    {
        //
    }

    public function destroy()
    {
        //
    }
}
