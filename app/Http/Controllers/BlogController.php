<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::get();
        return view('Blog/list', ['blogs' => $blogs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Blog/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'description' => 'required',
        ]);
        $imageName1 = '';
        if ($request->file('main_photo')) {
            $imageName1 = time() . '.' . $request->file('main_photo')->getClientOriginalExtension();
            $request->file('main_photo')->move(public_path('img'), $imageName1);
        }
        $blog = new Blog;
        $blog->main_photo = $imageName1 ? $imageName1 : '';
        $blog->name = $request->input('name');
        $blog->description = $request->input('description');
        $blog->sub_text = $request->input('sub_text');

        $blog->save();
        return redirect('/admin/blog')->with('info', 'Blog saved successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blog = Blog::find($id);
        return view('Blog/update', ['blog' => $blog]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $blog = Blog::find($id);
        $path = 'img/' . $blog->main_photo;

//        dd($request);
        $this->validate($request, [
            'name' => 'required|string|max:255',
        ]);
        $blog = Blog::find($id);
        $blogData = array(
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'sub_text' => $request->input('sub_text'),
        );
        if ($request->file('main_photo')) {
            $oldImage = public_path($path);
            File::delete($oldImage);
            $imageName = time() . '.' . $request->file('main_photo')->getClientOriginalExtension();
            $request->file('main_photo')->move(public_path('img'), $imageName);
            $blogData['main_photo'] = $imageName;
        }
        $blog->update($blogData);
        return redirect('/admin/blog')->with('info', 'Blog saved successfully!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $blog = Blog::find($id);
        $blog->delete();
        return redirect('/admin/blog')->with('info', 'Blog deleted!');
    }

}
