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
        //$flashcards = \App\Flashcard::where('user_id','=',\Auth::id())->orderBy('id','DESC')->get();
        //return 'Flashcard get index';
        return view('flashcard.index');
    }
    public function postindex(Request $request)
    {
        //validate the Flashcard data
        $this->validate($request, [
            'card_entry'=>'required',
            'definition_entry'=>'required',
            'relation_entry'=>'required',
            ]);

        //consolidate all of the flashcard data into a single array
        $data = $request->all();
        dd($data);
        //Create a new flashcard
        /*$flashcard = new flashcard;
        $flashcard
            ->setCard_Entry($data['card_entry'])
            ->setDefinition_Entry($data['definition_entry'])
            ->setRelation_Entry($data['relation_entry']);
*/
        //dd($request->all());
        //return 'flashcard postindex';
    }

}
