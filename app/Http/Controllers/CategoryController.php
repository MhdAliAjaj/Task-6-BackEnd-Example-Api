<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();
        return response()->json($categories);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $input = $request->validate([
            'category_name' => ['required'],
        ]);
        $category = Category::create([
            'category_name' => $request['category_name'],
        ]);
        if ($category->save()) {

            return response()->json([
                'Message: ' => 'Success!',
                'Category created: ' => $category,
            ], 200);

        } else {

            return response([

                'Message: ' => 'We could not create a new category.',

            ], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $category=Category::find($id);
        return response()->json($category);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        $input = $request->all();
        $category->category_name=$input['category_name'];
        // $category->Category($input['category_name']) ;
        $category= Category::where('id',$request->id)->update($categoryory);
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $category=Category::find($id);
        $category->delete();
        response()->json($category);
    }
}
