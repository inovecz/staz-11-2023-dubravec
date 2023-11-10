<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request; 
use App\Models\Category;   

class CategoryController extends Controller
{
    public function index()
    {

        $categories = \App\Models\Category::all();
        return view('categories.index', ['categories' => $categories]);

    }

    public function view($id) {

        $category = \App\Models\Category::where('id',$id)->first();
        return view('categories.view', ['category' => $category]);


    }

    public function edit($id) {

        $category = \App\Models\Category::where('id',$id)->first();
        return view('categories.edit', ['category' => $category]);


    }


    public function create()
    {
        return view('categories.create');
    }

    public function createPost(Request $request) {

        
        $array = $this->extractDataFromRequest($request);

        //dd($array);
        // ulozime do db
        $category = Category::create($array);

        return redirect($category->getViewLink());

    }

    public function editPost(Request $request) {

        $id = $request->input('id');
        $array = $this->extractDataFromRequest($request);

        //dd($array);
        // ulozime do db
        $category = Category::find($id);
        if($category) {
            $category->update($array);
        }

        return redirect($category->getViewLink());

    }

    public function deletePost(Request $request) {

        $id = $request->input('id');

        //dd($array);
        // ulozime do db
        $category = Category::find($id);
        if($category) {
            $category->delete();
        }

        return redirect(route('categories.index'));

    }

    public function extractDataFromRequest(Request $request) {

        $array = [
            'name' => $request->input('name'),
            
        ];

        return $array;

    }



}
