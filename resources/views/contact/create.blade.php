@extends('contact.layout')

@section('header')
	<title>Add Contact</title>
@stop

@section('content')
	<h1>Add New Contact</h1>
	<form method="post" action="store">
		<div class="form-group">
			{{-- Brings in the common contact form fields --}}
			@include('contact.form')
		</div>
	</form>
@stop