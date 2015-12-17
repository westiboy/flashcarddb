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
    <h1>User Entry</h1>

	<form method="POST" action="/user">
    	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	    <fieldset id="userdata">
	    	<h3>User Entry</h3>
	    	<label for="username">Username</label>
	    	<input type="text" id="username" name="username">
	    	<br>
	    	<label for="password">Password</label>
	    	<input type="password" id="password" name="password">
	    	<br>
	    	<label for="first_name">First Name</label>
	    	<input type="text" id="first_name" name="first_name">
	    	<br>
	    	<label for="last_name">Last Name</label>
	    	<input type="text" id="last_name" name="last_name">
			<br>
	    	<label for="email_address">Email Address</label>
	    	<input type="email" id="email_address" name="email_address">
			@if(count($errors) > 0)
			    <ul>
			        @foreach ($errors->all() as $error)
			            <li>{{ $error }}</li>
			        @endforeach
			    </ul>
			@endif
	    	<button id="submit" name="submit" value="Submit User" class="ui-btn ui-corner-all">Submit</button>
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