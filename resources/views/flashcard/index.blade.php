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
	    <fieldset id="flashdata">
	    	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	    	<legend>Flashcard Data</legend>
	    	<label for="item">Word or phrase</label>
	    	<input type="text" id="item" autofocus name="item" placeholder="e.g. Input Types">
	    	<br>
	    	<label for="definition">Personal written definition</label>
	    	<input type="text" id="definition" name="definition" placeholder="e.g. Describes specified type of input in an HTML form">
	    	<br>
	    	<label for="relation">Personal relation or use of said term or action</label>
	    	<input type="text" id="relation" name="relation" placeholder="e.g. In a form requiring a phone number, you can define the type as 'tel' to specify it as a telephone number">
	    	<br>
	    	<label for="itemurl">URL of page describing the term and its use definition</label>
	    	<input type="url" id="itemurl" name="itemurl" placeholder="e.g. http://www.w3schools.com/html/html_form_input_types.asp">
	    </fieldset>
	    <fieldset>
	    	<legend>School and class data (for later reference)</legend>
	    	<label for="school">School name (e.g. Harvard Extension School)</label>
	    	<select id="school">
	    		<option checked>Select a school from the list:</option>
	    		<option value="HES">Harvard Extension School</option>
	    		<option value="SEAS">School for Engineering and Applied Sciences</option>
	    		<option value="GSE">Graduate Schol of Education</option>
		    </select>
		    <br>
		    <label for="department">Class department (eg CSCI)</label>
	    	<input type="text" id="department" autocomplete="on" name="department">
	    	<br>
	    	<label for="area">Class Area (eg. E)</label>
	    	<input type="text" id="area" autocomplete="on" name="area">
	    	<br>
	    	<label for="classnumber">Class number (e.g. 20)</label>
	    	<input type="text" id="classnumber" name="classnumber">
	    	<br>
	    	<label for="semester">Semester</label>
	    	<input type="text" id="semester" autocomplete="on" name="semester">
	    	<br>
	    	<label for="year">Year</label>
	    	<input type="number" id="year" name="year" max="9999" min="1900" value="2015">
	    </fieldset>
	    <fieldset>
	    	<legend>Submit</legend>
	    	<label for="submit">Submit</label>
	    	<input type="submit" id="submit" name="submit" value="Submit Flashcard">
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