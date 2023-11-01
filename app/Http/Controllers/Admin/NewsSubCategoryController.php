<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class NewsSubCategoryController extends Controller
{

    public function index()
    {

        $all_sub_cat = Subcategory::with(['category'])->latest()->get();
        return view('admin_panel/pages/sub_category/index', compact(['all_sub_cat']));
    }


    public function create()
    {
        $all_cat = Category::where('status', 1)->latest()->get();
        return view('admin_panel/pages/sub_category/create', compact(['all_cat']));
    }

    public function store(Request $request)
    {
        //Validation
        $validated = $request->validate([
            'name' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif',
        ]);
        $model = new Subcategory();
        $model->name = $request->name;
        $model->category_id = $request->category_id;
        $slug = Str::slug($request->name);
        //check slug
        $checkSlug = Subcategory::where('slug', $slug)->count();

        if ($checkSlug > 0) {
            $slug = time() . '-' . $slug;
        }

        $model->slug = $slug;
        $model->description = $request->description;

        //image upload
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $new_name = time() . '.' . $request->image->getClientOriginalExtension();
            $path = '/common/images/product_cat/subcat/';
            $image->move(public_path($path), $new_name);
            $model->image = $path . $new_name;
        }
        $model->save();
        return back()->with('message', "Add Successfull.");
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $all_cat = Category::latest()->get();

        $subcat = Subcategory::where('id', $id)->first();
        if ($subcat) {
            return view('admin_panel/pages/sub_category/edit', compact(['subcat', 'all_cat']));
        }
        return abort(404);
    }


    public function update(Request $request, $id)
    {

        //Validation
        $validated = $request->validate([
            'name' => 'required|unique:categories,name,' . $id,
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif',
        ]);
        $model = Subcategory::find($id);

        $model->name = $request->name;
        $model->category_id = $request->category_id;
        $slug = Str::slug($request->name);
        //check slug
        $checkSlug = Subcategory::where('slug', $slug)->where('id', '!=', $id)->count();

        if ($checkSlug > 0) {
            $slug = time() . '-' . $slug;
        }

        $model->slug = $slug;
        $model->description = $request->description;


        //image upload
        if ($request->hasFile('image')) {
            //remove old image form folder if new image comes
            if ($model->image != null || $model->image != "") {
                $image_file = public_path($model->image);
                if (file_exists($image_file)) {
                    unlink($image_file);
                }
            }
            $image = $request->file('image');
            $new_name = time() . '.' . $request->image->getClientOriginalExtension();
            $path = '/common/images/product_cat/subcat/';
            $image->move(public_path($path), $new_name);
            $model->image = $path . $new_name;
        }

        $model->save();

        return redirect()->route('admin.news.subcategory.index')->with('message', 'Update Successful.');
    }

    public function destroy($id)
    {
        $model = Subcategory::find($id);

        if ($model) {
            //remove old image form folder if new image comes
            if ($model->image != null || $model->image != "") {
                $image_file = public_path($model->image);
                if (file_exists($image_file)) {
                    unlink($image_file);
                }
            }
            $model->delete();
            return back()->with('message', 'Delete Successful.');
        }
        return abort(404);
    }
    public function statusUpdate($id)
    {
        $model = Subcategory::find($id);

        if ($model) {
            ($model->status == 1) ? $model->status = 0 : $model->status = 1;
            $model->save();
            return redirect()->back()->with('message', 'Status update successful.');
        }
    }
    public function popularitystatusUpdate($id)
    {
        $model = Subcategory::find($id);

        if ($model) {
            ($model->is_popular == 1) ? $model->is_popular = 0 : $model->is_popular = 1;
            $model->save();
            return redirect()->back()->with('message', 'Popularity status changed.');
        }
    }
}
