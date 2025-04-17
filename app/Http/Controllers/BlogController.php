<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Contracts\Session\Session;
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
        $categories = Category::all();

        return view('blog.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'category' => ['required', 'integer'],
            'title' => ['required', 'max:255', 'min:2'],
            'body' => ['required'],
            'status' => ['required', 'boolean'],
            'image' => ['required', 'image', 'max:3000']
        ]);

        //upload file
        $imagePath = $this->uploadFile($request);

        //store data
        $blog = new Blog();
        $blog->category_id = $request->category;
        $blog->image = $imagePath;
        $blog->title = $request->title;
        $blog->body = $request->body;
        $blog->status = $request->status;
        $blog->save();

        Session()->flash('Success', 'Your blog has been created successfully!');
        return redirect()->back();

    }

    public function uploadFile(Request $request){
        if($request->hasFile('image')){
            $image = $request->file('image');
            $imageName = $image->getClientOriginalName();
            $image->move(public_path('uploads'), $imageName);
            return $imagePath = 'uploads/'.$imageName;
        }
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
