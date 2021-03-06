<?php

namespace App\Http\Controllers;

use App\Department;
use App\Activities;
use App\Notification;
use App\Fuculty;
use App\User;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Post;
use DB;
class PostsController extends Controller
{

    /**nn
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth',['except'=>['index','show']]);
      //  $this->middleware('auth');
        // $this->middleware('admin');
    }
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
            'book_file'=>'mimes:pdf|max:99999'
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

        $deptname = Department::select('dept_name')
        ->where('id', $request->department)
        ->first();

        $post = new Post;
        $post ->tittle =$request->input('title');
        $post ->author =$request->input('author');
        $post->user_id=auth()->user()->id;
        $post->fuculty_id=$request->faculty;
        $post->dept_id=$request->department;
        $post->cover_image =$fileNameToStore;
        $post->book_file =$bookfileNameToStore;
        $post->save();

        /**notify targeted users**/
        //get the targeted users->users who have simillar download history from activities table
        $targetedUsers = Activities::select('user_id')
        ->where('dept_id', $request->department)
        ->get();

         //update notifications
        foreach ($targetedUsers as $targetedUser) {

            if ($targetedUser !=null) {

                $notification = new Notification;
                $notification->dept_name =$deptname->dept_name;
                $notification->message = "New time from ".' '.$deptname->dept_name." department has been uploaded.";
                $notification->user_id=$targetedUser->user_id;
                $notification->save();
            }elseif($targetedUser ==null){
                $allstudents =User::select('id')
                ->where('role', 'Student')
                ->get();

                foreach ($allstudents as $allstudent) {
                    $notification = new Notification;
                    $notification->dept_name =$deptname->dept_name;
                    $notification->message = "New time from ".' '.$deptname->dept_name." department has been uploaded. Unsubscibe from this if you don't need notifications from this department";
                    $notification->user_id=$allstudent->id;
                    $notification->save();
                }
            }
        }



        return redirect('posts')->with('success','Post Created');
    }
    public function testss(){
          /**notify targeted users**/
        //get the targeted users->users who have simillar download history from activities table
    //     $targetedActivities = Activities::select('activity_id')
    //     ->where('activity_name', 'Download')
    //     ->get();
    //    // return $targetedActivities;
        // return "Found";
    //     foreach ($targetedActivities as $targetedActivity) {
    //         if ($targetedActivity !=null) {

    //         }
    //     }
        $deptname = Department::select('dept_name')
        ->where('id',1)
        ->first();

        return $deptname->dept_name;
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
        //$items = Department::all('id','dept_name');
        $items2 = Fuculty::all('id', 'fuculty_name');

        $post= Post::find($id);

        //check for coreect user
        if(auth()->user()->id !==$post->user_id){
             return redirect('posts')->with('error', 'Unauthorized page');
        }
        $data = array(
            'post' => $post,
            'items2' => $items2
        );
         return view('pages.edit-post')->with($data);
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
        $this->validate($request, [
            'title' => 'required',
            'author' => 'required',
           // 'cover_image'=>'image|nullable|max:1999',
            // 'book_file'=>'required|application/msword|text/pdf'
           // 'book_file'=>'mimes:pdf'
        ]);

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
        }


        $post = Post::find($id);
        $post ->tittle =$request->input('title');
        $post ->author =$request->input('author');
        $post->user_id=auth()->user()->id;
        $post->fuculty_id=$request->faculty;
        $post->dept_id=$request->department;
       // $post->cover_image =$fileNameToStore;
       // $post->book_file =$bookfileNameToStore;
        if($request->hasFile('cover_image')){
            $post->cover_image =$fileNameToStore;
        }
        if($request->hasFile('book_file')){
            $post->book_file =$bookfileNameToStore;
        }
        $post->save();
        return redirect('admin')->with('success','Post Updated');
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