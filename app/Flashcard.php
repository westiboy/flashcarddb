<?php

namespace flashcarddb;

use Illuminate\Database\Eloquent\Model;

class Flashcard extends Model
{

	public function getIndex() {
	    $flashcards = \App\flashcard::all();
	    return view('flashcard.index')->with('flashcard',$flashcards);
	}

}
