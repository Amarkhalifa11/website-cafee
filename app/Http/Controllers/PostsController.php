<?php

namespace App\Http\Controllers;

use App\Models\posts;
use App\Models\coments;
use App\Models\categories;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PostsController extends Controller
{

    public function index()
    {
        $posts = posts::all();
        $categories = categories::all();

        return view('posts' , compact('posts' , 'categories'));
    }


    public function single($id)
    {
        $posts = posts::find($id);
        $coments = coments::all()->where('coment_post_id' , $id);
        $categories = categories::all();

        return view('single' , compact('posts' , 'categories' , 'coments'));

    }

    public function random()
    {
        $posts = posts::paginate(3);
        $categories = categories::all();
        $single = posts::all()->random();

        return view('admin' , compact('posts' , 'categories' , 'single'));
    }

    public function category( $category)
    {
        $posts = posts::all()->where('category' , $category);
        return view('posts' , compact('posts'));
    }




    public function all_posts()
    {
        $posts = posts::all();
        return view('backend.posts.all_posts' , compact('posts'));
    }


    public function create (Request $request)
    {
        return view('backend.posts.add_post');
    }

    public function store(Request $request){

                //image

                $brand_image = $request->file('image'); 
 
                $name_gen = hexdec(uniqid()); 
                $img_ext = strtolower($brand_image->getClientOriginalExtension()); 
                $img_name = $name_gen . '.' . $img_ext; 
                 
                $upload_location = 'frontend/images/demo/'; 
                $image = $img_name; 
                $brand_image->move($upload_location,$img_name); 
        

                $name            = $request->input('name');
                $auther          = $request->input('auther');
                $date            = $request->input('date');
                $category        = $request->input('category');
                $description     = $request->input('description');
                $image           = $image;
        
                $posts = new posts();

                $posts->name         = $name;        
                $posts->auther       = $auther;        
                $posts->date         = $date;        
                $posts->category     = $category;        
                $posts->description  = $description;        
                $posts->image        = $image; 

                $posts->save();
        
                return redirect()->route('bac_all_posts');
    }

    public function edit($id)
    {
        $posts = posts::find($id);
        return view('backend.posts.edit_post' , compact('posts'));
    }

    public function update(Request $request, $id)
    {
        //image

        $brand_image = $request->file('image'); 
 
        $name_gen = hexdec(uniqid()); 
        $img_ext = strtolower($brand_image->getClientOriginalExtension()); 
        $img_name = $name_gen . '.' . $img_ext; 
                         
        $upload_location = 'frontend/images/demo/'; 
        $image = $img_name; 
        $brand_image->move($upload_location,$img_name); 
                
        
        $name            = $request->input('name');
        $auther          = $request->input('auther');
        $date            = $request->input('date');
        $category        = $request->input('category');
        $description     = $request->input('description');
        $image           = $image;

        $posts = posts::find($id);
        $posts->update([
            'name'          => $name,
            'auther'        => $auther,
            'date'          => $date,
            'category'      => $category,
            'description'   => $description,
            'image'         => $image,
        ]);
        
        return redirect()->route('bac_all_posts');



    }

    public function destroy( $id)
    {
        $posts = posts::find($id);
        $posts->delete();

        return redirect()->route('bac_all_posts');
    }
}
