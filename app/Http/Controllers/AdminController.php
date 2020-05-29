<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Post;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
class AdminController extends Controller
{

    
    //
      /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $recent_posts = Post::orderBy('created_at', 'desc')->get();
        $data = array(
            'recent_posts' => $recent_posts
        );
        return view('inc.admin-dashboard')->with($data);
       
    }
    public function users(){
        $admins = User::where('role', '!=', 'Student')->get();
        return view('inc.users')->with('admins', $admins);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('inc.create-user');
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
            'name'=>'required',
            'email'=>'required',
            'password'=>'required',
            'role'=>'required'
        ]);

        //create user
        $admin =new User;
        $admin->name = $request->input('name');
        $admin->email = $request->input('email');
        $admin->password = Hash::make($request->input('password'));
        $admin->is_admin=1;
        $admin->role = $request->input('hidden-role');
       // $admin->role = $request->input('hidden-role');
        // $admin->user_id=auth()->user()->id;
        
        $admin->save();
        return redirect('admin/users')->with('success','User created successfully');
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
        $admin = User::find($id);
        $admin->delete();
        return redirect('admin/users')->with('success','User Removed');
    }
    public function destroy1($id)
    {
        $post = Post::find($id);
        if ($post->cover_image !=='noimage.jpg') {
            //Delete image
            //Storage::delete('/Nariphon_Technologies/FirstApp/public/storage/cover_images/'.$post->cover_image);
            Storage::delete('public/cover_images/'.$post->cover_image);
            
        }
        if($post->book_file !=='nobook.pdf'){
            Storage::delete('public/books/'.$post->book_file);
        }
        $post->delete();
        return redirect('admin')->with('success','Book Removed');
    }

    // public function dashboard(){
    //     $user_id=auth()->user()->id;
    //     $user= User::find($user_id);
    //     return view('inc.lec-dashboard')->with('posts', $user->posts);
    // }
}