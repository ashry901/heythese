<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\SectionRequest;
use App\Http\Requests\SubsectionRequest;
use App\Models\Section;
use App\Models\Subsection;
use CodeZero\UniqueTranslation\UniqueTranslationRule;
use Illuminate\Http\Request;
//use Illuminate\Support\Facades\DB;
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

//        try {
//            DB::beginTransaction();

            $validated = $request->validated();
            foreach ($list_classes as $list_class) {
                $subsections = new Subsection();
                $subsections->name_subsection = ['en' => $list_class['name_subsection_en'], 'ar' => $list_class['name']];
                $subsections->section_id = $list_class['section_id'];
                $subsections->save();
            }

//            DB::commit();
            toastr()->success(trans('cpanel/messages.success'));

            return redirect()->route('admin.subsections');

//        } catch (\Exception $e) {
//            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
//        }
    }

    public function edit($id)
    {
        //
    }

    public function update($id, SectionRequest $request)
    {
        try {
            //validation
            //update DB
            $section = Section::find($id);

            if (!$section)
                return redirect()->route('admin.section')->with(['error' => 'This Brand Does Not Exist']);

            DB::beginTransaction();

            $section->update($request->except('_token', 'id'));

            //save translations
            $section->name = $request->name;
            $section->save();

            DB::commit();
            return redirect()->route('admin.section')->with(['success' => 'Successfully Updated']);

        } catch (\Exception $ex) {

            DB::rollback();
            return redirect()->route('admin.section')->with(['error' => 'Something Wrong, Please Try Again']);
        }
    }

    public function destroy($id)
    {
        try {
            DB::beginTransaction();

            //get specific categories and its translations
            $section = Section::find($id);

            if (!$section)
                return redirect()->route('admin.section')->with(['error' => 'This Brand Does Not Exist']);

            $section->delete();

            DB::commit();
            return redirect()->route('admin.section')->with(['success' => 'Deleted Successfully']);

        } catch (\Exception $ex) {
            DB::rollback();
            return redirect()->route('admin.section')->with(['error' => 'Something Wrong, Please Try Again']);
        }
    }

}
