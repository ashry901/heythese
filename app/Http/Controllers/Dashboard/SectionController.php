<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\SectionRequest;
use App\Models\Section;
use App\Models\Subsection;
use Illuminate\Http\Request;
use DB;

class SectionController extends Controller
{
    public function index()
    {
        $sections = Section::all();
        return view('dashboard.sections.index', compact('sections'));
    }

    public function create()
    {
        return view('dashboard.sections.create');
    }

    public function store(SectionRequest $request)
    {
        //try {
        $validated = $request->validated();
        $section = new Section();

        $section->name = ['en' => $request->name_en, 'ar' => $request->name];

        $section->save();

        toastr()->success(trans('cpanel/messages.success'));

        return redirect()->route('admin.section');

        //      }
        //          catch (\Exception $e){
        //              return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        //          }
    }

    public function edit($id)
    {
        $section = Section::find($id);
        if (!$section)
            return redirect()->route('admin.section')
                ->with(['error' => 'This Section Does Not Exist']);

        return view('dashboard.sections.edit', compact('section'));
    }

    public function update($id, SectionRequest $request)
    {
        try {
            $section = Section::find($id);

            if (!$section)
                return redirect()->route('admin.section')->with(['error' => 'This Brand Does Not Exist']);

            DB::beginTransaction();

            //save translations
            $section->name = ['en' => $request->name_en, 'ar' => $request->name];
            $section->save();

            DB::commit();
            return redirect()->route('admin.section')->with(['success' => 'Successfully Updated']);

        } catch (\Exception $ex) {

            DB::rollback();
            return redirect()->route('admin.section')->with(['error' => 'Something Wrong, Please Try Again']);
        }


    }

    public function destroy(Request $request)
    {
        $subsection = Subsection::where('section_id', $request->id)->pluck('section_id');

        if($subsection->count() == 0){

            $sections = Section::findOrFail($request->id)->delete();
            toastr()->error(trans('cpanel/messages.Delete'));
            return redirect()->route('admin.section');
        }else{
            toastr()->error(trans('Grades_trans.delete_Grade_Error'));
            return redirect()->route('admin.section');
        }
    }
}
