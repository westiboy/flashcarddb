@extends('layouts.master')


@section('title')
    Show Flashcards
@stop


{{--
This `head` section will be yielded right before the closing </head> tag.
Use it to add specific things that *this* View needs in the head,
such as a page specific stylesheets.
--}}
@section('head')
    
@stop


@section('content')
    <h1>Show Flashcards</h1>

	<form method="POST" action="/flashcard">
    	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	    <fieldset id="flashdata">
	    	<h3>Flashcard Data</h3>
	    	<label for="card_entry">Word or phrase</label>
	    	<input type="text" id="card_entry" name="card_entry" placeholder="Input Types" value="{{ old('card_entry')}}">
	    	<br>
	    	<label for="definition_entry">Personal written definition</label>
	    	<input type="text" id="definition_entry" name="definition_entry" placeholder="Describes specified type of input in an HTML form" value="{{ old('definition_entry')}}">
	    	<br>
	    	<label for="relation_entry">Personal relation or use of said term or action</label>
	    	<input type="text" id="relation_entry" name="relation_entry" placeholder="In a form requiring a phone number, you can define the type as 'tel' to specify it as a telephone number" value="{{ old('relation_entry')}}">
	    	<br>
	    	<label for="card_entry_url">URL of page describing the term and its use definition</label>
	    	<input type="url" id="card_entry_url" name="card_entry_url" placeholder="http://www.w3schools.com/html/html_form_input_types.asp" value="{{ old('card_entry_url')}}">
			<br>
	    	<div class="ui-field-contain">
		    	<h4>School and class data (for later reference)</h4>
		    	<label for="school">School name (e.g. Harvard Extension School)</label>
		    	<select name="school" id="school">
		    		<option>Select a school from the list:</option>
		    		<option value="HES">Harvard Extension School</option>
		    		<option value="SEAS">School for Engineering and Applied Sciences</option>
		    		<option value="GSE">Graduate Schol of Education</option>
			    </select>
		    </div>	
		    <label for="department">Class department (eg CSCI)</label>
	    	<input type="text" id="department" autocomplete="on" name="department">
	    	<br>
	    	<label for="area" class="select">Class Area (eg. E)</label>
	    	<select id="area" name="area" data-mini="true" data-inline="true">
	    		<option value="a">A</option>
	    		<option value="b">B</option>
		    	<option value="c">C</option>
		    	<option value="d">D</option>
		    	<option value="e">E</option>
	    	</select>
	    	<br>
	    	<label for="classnumber">Class number (e.g. 20)</label>
	    	<input type="text" id="classnumber" name="classnumber">
	    <div>
		    	<label for="semester">Semester</label>
		    	<select type="text" id="semester" autocomplete="on" name="semester">
		    		<option value="fall">Fall</option>
		    		<option value="winter">Winter</option>
			    	<option value="spring">Spring</option>
			    	<option value="summer">Summer</option>
				</select>
	    </div>
	    	<label for="year">Year</label>
	    	<input type="number" id="year" name="year" max="9999" min="1900" value="2015">
	    	<label class="ui-hidden-accessible" for="submit"></label>
			<br>
			@if(count($errors) > 0)
			    <ul>
			        @foreach ($errors->all() as $error)
			            <li>{{ $error }}</li>
			        @endforeach
			    </ul>
			@endif
	    	<button id="submit" name="submit" value="Submit Flashcard" class="ui-btn ui-corner-all">Submit</button>
	    </fieldset>
	</form>

@stop


{{--
This `body` section will be yielded right before the closing </body> tag.
Use it to add specific things that *this* View needs at the end of the body,
such as a page specific JavaScript files.
--}}
@section('body')
    
@stop