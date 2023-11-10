<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request; 
use App\Models\Product;   

class ProductController extends Controller
{
    public function index()
    {

        $products = \App\Models\Product::all();
        return view('products.index', ['products' => $products]);

    }

    public function view($id) {

        $product = \App\Models\Product::where('id',$id)->first();
        return view('products.view', ['product' => $product]);


    }

    public function edit($id) {

        $categories = \App\Models\Category::all();
        $product = \App\Models\Product::where('id',$id)->first();
        return view('products.edit', ['product' => $product, 'categories' => $this->transformCategories($categories)]);


    }


    public function create()
    {
        $categories = \App\Models\Category::all();
        return view('products.create', ['categories' => $this->transformCategories($categories)]);
    }

    public function createPost(Request $request) {

        
        $array = $this->extractDataFromRequest($request);

        //dd($array);
        // ulozime do db
        $product = Product::create($array);

        return redirect($product->getViewLink());

    }

    public function editPost(Request $request) {

        $validated = $request->validate([
            'name' => 'required|unique:posts|max:255',
            'supplier' => 'required',
            'cost' => 'required',
            'category_id' => 'required',
        ]);

        if(!$validated) {
            return redirect()->back();
        }


        $id = $request->input('id');
        $array = $this->extractDataFromRequest($request);

        //dd($array);
        // ulozime do db
        $product = Product::find($id);
        if($product) {
            $product->update($array);
        }

        return redirect($product->getViewLink());

    }

    public function deletePost(Request $request) {

        $id = $request->input('id');

        //dd($array);
        // ulozime do db
        $product = Product::find($id);
        if($product) {
            $product->delete();
        }

        return redirect(route('products.index'));

    }

    public function extractDataFromRequest(Request $request) {

        $array = [
            'name' => $request->input('name'),
            'supplier' => $request->input('supplier'),
            'cost' => $request->input('cost'),
            'category_id' => $request->input('category_id'),
            
        ];

        return $array;

    }

    public function transformCategories($categories) {

            $returnArray = [];
            foreach($categories as $category) {
                $returnArray[$category->getId()] = $category->getName();
            }


            return $returnArray;

    }



}
