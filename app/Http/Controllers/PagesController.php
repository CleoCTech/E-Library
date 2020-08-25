<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Department;
use DB;
use SebastianBergmann\Environment\Console;

class PagesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function home()
    {
        return view("pages.home");
    }
    public function profile()
    {
        return view("pages.profile");
    }
    public function notifications()
    {

        
        return view("pages.user-notifications");
    }
    public function actvities()
    {
        return view("pages.recent-activities");
    }

    public function agriculture()
    {
        $recent_posts = Post::where('fuculty_id', 4)->take(6)->get();
        $departments = Department::where('fuculty_id', 4)->get();

        $data = array(
            'recent_posts' => $recent_posts,
            'departments' => $departments
        );
        return view("pages.agriculture")->with($data);
    }

    public function search($dept_id,$dept_name)
    {
        //$dept_id = $request->dept_id;
        // $dept=Department::select('id')->where('dept_name', 'like', "%$dept_name%")->first();
        // $dept_id = $dept->id;
        $recent_posts = Post::where('dept_id', $dept_id)->get();
        // $departments = Department::where('fuculty_id', 4)->get();
        // dd($recent_posts);
        $data = array(
            'recent_posts' => $recent_posts
        );
        // return response()->json($dept_id);
        return view("pages.search-results")->with($data);
    }
    public function science()
    {
        $recent_posts = Post::where('fuculty_id', 1)->take(6)->get();
        $departments = Department::where('fuculty_id', 1)->get();
        $data = array(
            'recent_posts' => $recent_posts,
            'departments' => $departments
        );
        return view("pages.science")->with($data);
    }

    public function arts()
    {
        $recent_posts = Post::where('fuculty_id', 6)->take(6)->get();
        $departments = Department::where('fuculty_id', 6)->get();
        $data = array(
            'recent_posts' => $recent_posts,
            'departments' => $departments
        );
        return view("pages.arts")->with($data);
    }

    public function business()
    {
        $recent_posts = Post::where('fuculty_id', 3)->take(6)->get();
        $departments = Department::where('fuculty_id', 3)->get();
        $data = array(
            'recent_posts' => $recent_posts,
            'departments' => $departments
        );
        return view("pages.business")->with($data);
    }

    public function education()
    {
        $recent_posts = Post::where('fuculty_id', 2)->take(6)->get();
        $departments = Department::where('fuculty_id', 2)->get();
        $data = array(
            'recent_posts' => $recent_posts,
            'departments' => $departments
        );
        return view("pages.education")->with($data);
    }
}