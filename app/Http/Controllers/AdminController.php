<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Http\Requests;

class AdminController extends Controller
{
    //
    public function index()
    {
        $user = \Auth::user();
        $userCount = User::count();

        if($this->isAdmin())
            return view('admin.index', compact('userCount'));
        else
            return redirect('');
    }

}
