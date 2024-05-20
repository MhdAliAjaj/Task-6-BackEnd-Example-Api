<?php

namespace App\Http\Controllers;

use App\Http\Resources\PostResource;
use App\Http\Trait\apiPostTrait;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    use apiPostTrait;
  
    public function index()
    {
        $posts = Post::all();
        
        return $this->customapi(PostResource::collection($posts),'all post',200);
    }


    public function store(Request $request)
    {
        $input = $request->validate([
            'tile' => ['required'],
            'category_id' => ['required'],
            'body' => ['required'],
        ]);
        $post = Post::create([
            'tile' => $request['tile'],
            'category_id' => $request['category_id'],
            
            'body' =>$request['body'],
        ]);
        if ($post->save()) {

            return response()->json([
                'Message: ' => 'Success!',
                'Post created: ' => $post,
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
        $post=Post::findOrFail($id);
        return response()->json($post);
    }


    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $post=Post::find($id);
        $post->delete();
        return response()->json($post);
    }
}
