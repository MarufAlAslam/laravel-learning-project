<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    function Home()
    {
        return view('homePage');
    }

    function About()
    {
        return view("aboutPage");
    }

    function Contact()
    {
        return view("contactPage");
    }
}
