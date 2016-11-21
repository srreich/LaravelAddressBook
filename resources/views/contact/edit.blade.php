@extends('contact.layout')

@section('header')
	<title>Edit/Delete Contact</title>
@stop

@section('content')
	<h1>Edit/Delete Contact</h1>
	<p>Enter a value in the fields you want to change.</p>
	<p>Leave any fields you want unchanged blank.</p>
	<p>Press submit to confirm the changes you want.</p>
	<p>Press delete to delete the entry altogether.</p>
	<form method="post" action="/alter/{{$contact->id}}">
		<div class="form-group">
			{{-- Brings in the common contact form fields --}}
			@include('contact.form')
			<button type="submit" formaction="/delete/{{$contact->id}}" class="btn btn-primary">
				Delete
			</button>
		</div>
	</form>
@stop
