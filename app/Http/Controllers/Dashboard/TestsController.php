<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\IssueImagesRequest;
use App\Http\Requests\IssueRequest;
use App\Http\Requests\TestRequest;
use App\Models\Image;
use App\Models\Issue;
use App\Models\Test;
use Illuminate\Http\Request;
use DB;


class TestsController extends Controller
{
//    public function index ()
//    {
//        $issues = Issue::with('_parent')
//            ->orderBy('id', 'DESC')
//            ->paginate(PAGINATION_COUNT);
//        return view('dashboard.issues.index', compact('issues'));
//    }

    public function create()
    {
        $tests = Test::select('id')->get();
        return view('dashboard.tests.create', compact('tests'));
    }

    public function store(TestRequest $request)
    {
        try {
            DB::beginTransaction();

            $file_extension = $request->photo->getClientOriginalExtension;
            $file_name = time().'.'.$file_extension;
            $path = 'ashry/img/tests';
            $request->photo->move($path, $file_name);

            Test::create([
                'name' => $request->name,
                'slug' => $request->slug,
                'photo' => $file_name
            ]);

            //save translations
            //$tests->name = $request->name;
            //$category->photo = $fileName;
            //$tests->save();

            DB::commit();
            return redirect()->route('admin.tests.create')->with(['success' => 'Successfully Added']);

        } catch (\Exception $ex) {
            DB::rollback();
            return redirect()->route('admin.tests.create')->with(['error' => 'Something Wrong, Please Try Again']);
        }
    }



}
