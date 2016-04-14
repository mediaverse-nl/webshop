<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Http\Requests;

class UserController extends Controller {

    /**
     * Store user info.
     *
     *
     * @return Response
     */
    public function store(Request $request) {

        //$v = User::validate(Input::all());

        $email = $request->input('email');;

        //if ( $v->passes() ) {

        $user = new User;
        $user->email = $email;
        $user->save();

        //}

        return $email;

    }

    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */
    public function showProfile()
    {
        return view('user.profile', ['user' => User::findOrFail($id)]);
    }
}
