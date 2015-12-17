<?php

namespace flashcarddb\Http\Controllers;

use Illuminate\Http\Request;

use flashcarddb\Http\Requests;
use flashcarddb\Http\Controllers\Controller;

class userdata extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getindex()
    {
        return view('userdata.index');
    }
    public function postindex(Request $request)
    {
        //validate the user data
        $this->validate($request, [
            'username'=>'required',
            'password'=>'required',
            'first_name'=>'required',
            'last_name'=>'required',
            'email_address'=>'required',
            ]);

        //consolidate all of the flashcard data into a single array
        $data = $request->all();
        dd($data);
    }

}
