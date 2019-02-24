<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\user\category;
use App\Model\user\post;
use App\Model\user\tag;
use Illuminate\Http\Request;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     $posts = post::orderBy('id', 'DESC')->get();
//    Post::orderBy('id', 'DESC')->get();
      return view('admin.post.show', compact('posts'));
       // return view('admin.post.show');

         //return view('admin.post.show');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tags       = tag::all();
        $categories = category::all();
        return view('admin.post.post', get_defined_vars());
        //compact('tags','categories')
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

       $this->validate($request,[
        'title'     =>  'required',
        'subtitle'  =>  'required',
        'slug'      =>  'required',
        'body'      =>  'required',            
       ]);

       $post = new post;

       $post->title = $request->title; 
       $post->subtitle = $request->subtitle; 
       $post->slug = $request->slug; 
       $post->body = $request->body; 
       $post->save();
       $post->tags()->sync($request->tags[]);
       $post->categories()->sync($request->categories[]);

       return redirect(route('post.index'));


        //return $request->all();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //return $id;
        $post       = post::where('id', $id)->first();
        $tags       = tag::all();
        $categories = category::all();
        return view('admin.post.edit', get_defined_vars());
        //return view('admin.post.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //return $request->all();
        exit();
        $this->validate($request,[
        'title'     =>  'required',
        'subtitle'  =>  'required',
        'slug'      =>  'required',
        'body'      =>  'required',            
       ]);

       $post = post::find($id);

       $post->title = $request->title; 
       $post->subtitle = $request->subtitle; 
       $post->slug = $request->slug; 
       $post->body = $request->body;
        $post->save();
        $post->tags()->sync($request->tags); 
        $post->categories()->sync($request->categories); 

       return redirect(route('post.index'));




        //return $request->all();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        post::where('id', $id)->delete();
        return redirect()->back();

        //return $id;
    }
}
