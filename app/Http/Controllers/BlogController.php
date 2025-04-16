<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //$blog = Blog::first();
        //return $blog;

        // $blog = new Blog();
        // $blog->title = 'NOT NEW TITLE';
        // $blog->body = 'BODIIII';
        // $blog->status = 0;
        // $blog->save();

        // $blog = Blog::find(2);
        // $blog->title = 'UPDET ONEE';
        // $blog->body = 'APDET';
        // $blog->status = 1;
        // $blog->save();

        // GET DATAS
        //$blog = Blog::where(['status' => 1, 'id' => 1])->get();

        // DELETE DATA
        // $blog = Blog::findOrFail();
        // $blog->delete();

        //dd($blog);

        // $blog = Blog::with('category')->get();
        // foreach($blog as $blog){
        // echo $blog->title . ' => '. $blog->category->name;
        // echo '</br>';
        // }
        //return $blog;

        // $category = Category::with('blogs')->find(1);

        // return $category;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('blog.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
