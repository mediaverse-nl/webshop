<?php

namespace App\Http\Controllers;


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

}
