<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\SectionRequest;
use App\Models\Section;
use CodeZero\UniqueTranslation\UniqueTranslationRule;
use Illuminate\Http\Request;
//use Illuminate\Support\Facades\DB;
use DB;

class SectionController extends Controller
{
//    public function index()
//    {
//        $sections = Section::all();
//        return view('dashboard.sections.index', compact('sections'));
//    }

    public function index()
    {
        $sections = Section::orderBy('id', 'DESC')->paginate(10);
        return view('dashboard.sections.index', compact('sections'));
    }

    public function create()
    {
        $sections = Section::select('id')->get();
        return view('dashboard.sections.create', compact('sections'));
    }

    public function store(SectionRequest $request)
    {
        try {
            DB::beginTransaction();

            $section = Section::create($request->except('_token'));

            // save translations
            //$section->name = $request->name;
            $section->name = ['en' => $request->name_en, 'ar' => $request->name];
            $section->save();

            DB::commit();
            return redirect()->route('admin.section')->with(['success' => 'Added Successfully']);

        } catch (\Exception $ex) {
            DB::rollback();
            return redirect()->route('admin.section')->with(['error' => 'Something Wrong, Please Try Again']);
        }
    }

    public function edit($id)
    {
        //get specific categories and its translations
        $section = Section::find($id);

        if (!$section)
            return redirect()->route('admin.section')->with(['error' => 'This Brand Does Not Exist']);

        return view('dashboard.sections.edit', compact('section'));
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
