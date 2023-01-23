<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data['title'] = "My Home Page";
        return view('welcome_message', $data);
       
    }
    public function about()
    {
        $data['title'] = "About Us";
        return view('about_us', $data);
    }
    public function contact()
    {
        $data['title'] = "Contact Us";
        return view('Contact_us', $data);
    }
}
