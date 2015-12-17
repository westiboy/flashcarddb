<?php

namespace flashcarddb\Http\Controllers;

use Illuminate\Http\Request;

use flashcarddb\Http\Requests;
use flashcarddb\Http\Controllers\Controller;

class flashcard extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getindex()
    {
        //return 'Flashcard get index';
        return view('flashcard.index');
    }
    public function postindex()
    {
        return 'flashcard postindex';
    }

}
