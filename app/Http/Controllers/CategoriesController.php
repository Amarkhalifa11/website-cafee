<?php

namespace App\Http\Controllers;

use App\Models\categories;
use Illuminate\Http\Request;
use Auth;

class CategoriesController extends Controller
{

    public function index()
    {
        $categories = categories::all();
        return view('admin' , compact('categories'));
    }

    public function category()
    {
        $categories = categories::all();
        return view('backend.category.all_category' , compact('categories'));
    }

    public function create()
    {
        return view('backend.category.add_category');
    }

    public function store(Request $request)
    {
        $name = $request->input('title');

        $category = new categories();
        $category->title = $name;

        $category->save();

        return redirect()->route('category');
    }

    public function edit($id)
    {
        $categories = categories::find($id);
        return view('backend.category.edit_category' , compact('categories'));
    }

    public function update(Request $request , $id)
    {
        $categories = categories::find($id);
        $categories->update([
            'title'  => $request->input('title'),
        ]);

        return redirect()->route('category');
    }

    public function destroy($id)
    {
        $categories = categories::find($id);
        $categories->delete();

        return redirect()->route('category');

    }
}
