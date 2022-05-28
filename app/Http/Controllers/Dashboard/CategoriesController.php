<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
//use App\Http\Enumerations\CategoryType;
use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use Illuminate\Support\Str;
use DB;

class CategoriesController extends Controller
{
    public function index ()
    {
        $categories = Category::with('_parent')->orderBy('id', 'DESC')->paginate(PAGINATION_COUNT);
        //$categories = Category::parent()->orderBy('id', 'DESC')->paginate(PAGINATION_COUNT);
        return view('dashboard.categories.index', compact('categories'));
    }

    public function create()
    {
        $categories = Category::select('id', 'parent_id')->get();
        return view('dashboard.categories.create', compact('categories'));
    }

    public function store(CategoryRequest $request)
    {
        try {
            DB::beginTransaction();

            //validation
            if (!$request->has('is_active'))
                $request->request->add(['is_active' => 0]);
            else
                $request->request->add(['is_active' => 1]);

            $fileName = "";
            if ($request->has('photo')) {
                $fileName = uploadImage('categories', $request->photo);
            }

            // //if user choose main category then we must remove paret id from the request

            if($request -> type == 1) //main category
            {
                $request->request->add(['parent_id' => null]);
            }

            // if($request -> type == CategoryType::mainCategory) //main category
            // {
            //     $request->request->add(['parent_id' => null]);
            // }

            //if he choose child category we must add parent id
            $category = Category::create($request->except('_token', 'photo'));

            //save translations
            $category->name = $request->name;
            $category->photo = $fileName;
            $category->save();

            DB::commit();
            return redirect()->route('admin.categories')->with(['success' => 'Successfully Added']);

        } catch (\Exception $ex) {
            DB::rollback();
            return redirect()->route('admin.categories')->with(['error' => 'Something Wrong, Please Try Again']);
        }
    }

    public function edit($id)
    {
        //get specific categories and its translations
        $category = Category::orderBy('id', 'DESC')->find($id);

        if (!$category)
            return redirect()->route('admin.categories')
                            ->with(['error' => 'This Section Does Not Exist']);

        return view('dashboard.categories.edit', compact('category'));
    }

    public function update($id, CategoryRequest $request)
    {
        try {
            DB::beginTransaction();
            //validation
            //update DB
            $category = Category::find($id);

            if (!$category)
                return redirect()->route('admin.categories')->with(['error' => __('admin/categories.This Section Does Not Exist')]);

            if ($request->has('photo')) {
                $fileName = uploadImage('categories', $request->photo);
                Category::where('id', $id)
                    ->update([
                        'photo' => $fileName,
                    ]);
            }

            if (!$request->has('is_active'))
                $request->request->add(['is_active' => 0]);
            else
                $request->request->add(['is_active' => 1]);

            //$category->update($request->except('_token', 'id', 'photo'));

            $category->update($request->all());

            //save translations
            $category->name = $request->name;
            $category->save();

            DB::commit();
            return redirect()->route('admin.categories')->with(['success' => __('admin/categories.Successfully Updated')]);

        } catch (\Exception $ex) {
            DB::rollback();
            return redirect()->route('admin.categories')->with(['error' => __('admin/categories.Something Wrong, Please Try Again')]);
        }
    }

    public function destroy($id)
    {
        try {
            //get specific categories and its translations
            $category = Category::orderBy('id', 'DESC')->find($id);

            if (!$category)
                return redirect()->route('admin.categories')->with(['error' => 'This Section Does Not Exist']);

            $image = Str::after($category->photo, 'ashry/cpanel/images/categories/');
            $image = public_path('ashry/cpanel/images/categories/' . $image);
            unlink($image); //delete from folder

            $category->delete();

            return redirect()->route('admin.categories')->with(['success' => 'Deleted Successfully']);

        } catch (\Exception $ex) {
            return redirect()->route('admin.categories')->with(['error' => 'Something Wrong, Please Try Again']);
        }
    }

}


