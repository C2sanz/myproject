<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class MyProfileController extends Controller
{
   public function create( )
	{
        return view("myprofile/create");
    
    }
    public function edit($id)
    {   
        $profile = (object)[
            "id" => $id,
            "name" => "James" ,
            "lastname" =>  "Mars",
            "email" => "james@vru.ac.th",
        ];
        $others = "hello world";
        return view("myprofile/edit" , compact('profile','others') );
    }
    public function show($id)
    {   
        $profile = (object)[
            "id" => $id,
            "name" => "James" ,
            "lastname" =>  "Mars",
            "email" => "james@vru.ac.th",
        ];
        $others = "hello world";
        return view("myprofile/show" , compact('profile','others') );
    }
    public function gallery( )
    {   $ant =url("images/ant.jpg");
        $bird =url("images/bird.jpg");
         return view("test/index",compact('ant','bird'));
    }
    public function ant()
    {
        $ant =url("images/ant.jpg");
        return view("test/ant",compact("ant"));
    }
    public function bird()
    {
        $bird =url("images/bird.jpg");
        return view("test/bird",compact("bird"));
    }

}