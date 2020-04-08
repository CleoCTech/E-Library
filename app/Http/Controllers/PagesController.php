<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
        return view("pages.home");
    }

    public function agriculture()
    {
        return view("pages.agriculture");
    }

    public function science()
    {
        return view("pages.science");
    }

    public function arts()
    {
        return view("pages.arts");
    }

    public function business()
    {
        return view("pages.business");
    }

    public function education()
    {
        return view("pages.education");
    }
}
