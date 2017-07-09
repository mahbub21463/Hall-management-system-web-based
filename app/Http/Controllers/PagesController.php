<?php

namespace App\Http\Controllers;

use App\User;

use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */
      public function __construct()
    {
        $this->middleware('auth');
    }
    public function showAbout()
    {
        $companyName = "mahbub";
        $isRegistered = false;
        return view('pages.about')
        ->with("name",$companyName)
        ->with("registered",$isRegistered);
    }
    public function showAccount()
    {
        if (App::environment('local')) {
             echo " The environment is local";
         }

        $environment = App::environment(); 
        echo $environment;
    }
}   