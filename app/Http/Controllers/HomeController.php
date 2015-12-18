<?php

namespace flashcarddb\Http\Controllers;

use Illuminate\Http\Request;

use flashcarddb\Http\Requests;
use flashcarddb\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getindex()
    {
        return view('home.index');
    }

}
