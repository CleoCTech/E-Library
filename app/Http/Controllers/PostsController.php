<?php

namespace App\Http\Controllers;

use App\Department;
use App\Fuculty;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Post;
use DB;
class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $recent_posts = Post::orderBy('created_at', 'desc')->take(2)->get();
        
        $data = array(
            'recent_posts' => $recent_posts
        );
        //return view('pages.index', compact('title'));

        return view('pages.home')->with($data);
        // return view('pages.home');
    }

    /**
     * Show the form for creating a new resource. dept_name 
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $items = Department::all('id','dept_name');
        $items2 = Fuculty::all('id', 'fuculty_name');
        return view('pages.create') ->with(compact('items', 'items2'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'author' => 'required',
            'cover_image'=>'image|nullable|max:1999',
            // 'book_file'=>'required|application/msword|text/pdf'
            'book_file'=>'mimes:pdf' 
        ]);
        
        //Handle cover_image file upload
        //if function to check if the user has uploaded the file
        if($request->hasFile('cover_image')){
            //get filename with extension
            $filenameWithExt =$request->file('cover_image')->getClientOriginalName();
            //get just filenaem
            $filename = pathinfo($filenameWithExt,PATHINFO_FILENAME);
            //get just Ext
            $extension =$request->file('cover_image')->getClientOriginalExtension();
            //filename to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            //upload image
            $path = $request->file('cover_image')->storeAs('public/cover_images/', $fileNameToStore);
        }else{
            //if the user did not upload the image, we create a variable down here to hold a static tittle 'noimage.jpg' of a file which will be used as defualt image if no image uploaded
            $fileNameToStore='noimage.jpg';
        }

        //Handle book_file file upload
        //if function to check if the user has uploaded the file
        if($request->hasFile('book_file')){
            //get filename with extension
            $bookfilenameWithExt =$request->file('book_file')->getClientOriginalName();
            //get just filenaem
            $bookfilename = pathinfo($bookfilenameWithExt,PATHINFO_FILENAME);
            //get just Ext
            $bookextension =$request->file('book_file')->getClientOriginalExtension();
            //filename to store
            $bookfileNameToStore = $bookfilename.'_'.time().'.'.$bookextension;
            //upload image
            $path = $request->file('book_file')->storeAs('public/books/', $bookfileNameToStore);
        }else{
            die("Please Upload the book");
        }

        //create post

        $post = new Post;
        $post ->tittle =$request->input('title');
        $post ->author =$request->input('author');
        $post->user_id=auth()->user()->id; 
        $post->fuculty_id=$request->faculty;
        $post->dept_id=$request->department;
        $post->cover_image =$fileNameToStore;
        $post->book_file =$bookfileNameToStore;
        $post->save();
        return redirect('posts')->with('success','Post Created');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}