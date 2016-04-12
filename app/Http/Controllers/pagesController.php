<?php

namespace App\Http\Controllers;

//use App\User;
use App\Http\Controllers\Controller;

class pagesController extends Controller
{

    public function getIndex(){
        return view('welcome');
    }
    
    public function getLogin(){

        $name = 'ik ben een var met de naam (name)';

        $loggedInStatus = false;

        return view('pages.login')
            ->with('name', $name)
            ->with('loginStatus', $loggedInStatus);
    }
    
}