<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\News;
use App\Models\Subcategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class NewsController extends Controller
{

    public function index()
    {

        $all_news = News::latest()->get();
        return view('admin_panel/pages/news/index', compact(['all_news']));
    }


    public function create()
    {
        $all_cat = Category::where('status', 1)->latest()->get();
        $all_subcat = Subcategory::where('status', 1)->latest()->get();
        return view('admin_panel/pages/news/create', compact(['all_cat', 'all_subcat']));
    }


    public function store(Request $request)
    {
        //Validation
        $validated = $request->validate([
            'title' => 'required',
            // 'image' => 'nullable|image|mimes:jpeg,png,jpg,gif',
        ]);
        $model = new News();
        $model->title = $request->title;
        $slug = Str::slug($request->title);
        //check slug
        $checkSlug = News::where('slug', $slug)->count();

        if ($checkSlug > 0) {
            $slug = time() . '-' . $slug;
        }

        $model->slug = $slug;
        $model->category_id = $request->category_id;
        $model->subcategory_id = $request->subcategory_id;
        $model->writter = $request->writter;
        $model->description = $request->description;

        //image upload
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $new_name = time() . '.' . $request->image->getClientOriginalExtension();
            $path = '/common/images/news/';
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



        $news = News::with(['category'])->where('id', $id)->first();

        if ($news) {
            $all_subcat = Subcategory::where('category_id', $news->category_id)->latest()->get();
            return view('admin_panel/pages/news/edit', compact('news', 'all_cat', 'all_subcat'));
        }
        return abort(404);
    }


    public function update(Request $request, $id)
    {

        //Validation
        $validated = $request->validate([
            'title' => 'required|unique:news,title,' . $id,
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif',
        ]);
        $model = News::find($id);

        $model->title = $request->title;
        $slug = Str::slug($request->title);
        //check slug
        $checkSlug = News::where('slug', $slug)->where('id', '!=', $id)->count();

        if ($checkSlug > 0) {
            $slug = time() . '-' . $slug;
        }

        $model->slug = $slug;
        $model->category_id = $request->category_id;
        $model->subcategory_id = $request->subcategory_id;
        $model->writter = $request->writter;
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
            $path = '/common/images/news/';
            $image->move(public_path($path), $new_name);
            $model->image = $path . $new_name;
        }

        $model->save();

        return redirect()->route('admin.news.index')->with('message', 'Update Successful.');
    }

    public function destroy($id)
    {
        $model = News::find($id);

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
        $model = News::find($id);

        if ($model) {
            ($model->status == 1) ? $model->status = 0 : $model->status = 1;
            $model->save();
            return redirect()->back()->with('message', 'Status update successful.');
        }
    }
    public function herostatusUpdate($id)
    {
        $model = News::find($id);

        if ($model) {
            ($model->is_hero == 1) ? $model->is_hero = 0 : $model->is_hero = 1;
            $model->save();
            return redirect()->back()->with('message', 'Status changed.');
        }
    }

    public function cat_wise_subCat($cat_id)
    {
        $subcat = Subcategory::where('category_id', $cat_id)->latest()->get();
        if ($subcat) {
            return response()->json([
                'status' => 200,
                'data' => $subcat,
            ]);
        } else {
            return response()->json([
                'status' => 404,
                'message' => "Not Found.",
            ]);
        }
    }
}
