<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
Use App\Post;
Use App\Activities;
use DB;
use Exception;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        // $user_id = auth()->user('id');
        // $user = User::find($user_id);
        $recent_posts = Post::orderBy('created_at', 'desc')->take(6)->get();
        $data = array(
            'recent_posts' => $recent_posts
        );
        // $posts = Post::orderBy('created_at', 'desc')->get();
        // return view('pages.home')->with('posts', $posts);
        return view('pages.home')->with($data);
        //return view('pages.home')->with('posts', $user->posts);

        // return view('pages.home')->with('posts', $user->posts);
    }

    public function saveActivities(Request $request){

        $data=Post::select('dept_id','book_file')
        ->where('id',$request->id)
        ->get();


        foreach ($data as $book) {
            $dept_id =$book->dept_id;
            $file_name= $book->book_file;
        }
        // return response()->json($file_name);
        //save
        $activity = new Activities;
        $activity->activity_name = "Download";
        $activity->activity_id = $request->id;
        $activity->actual_act = $file_name;
        $activity->dept_id = $dept_id;
        $activity->user_id =auth()->user()->id;
        $activity->save();

    }
}