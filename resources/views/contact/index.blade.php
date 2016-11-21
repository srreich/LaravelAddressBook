@extends('contact.layout')

@section('header')
	<title>Address Book</title>
	<script>
		// Runs when user selects a value from the dropdown menu.
		// Causes the "show" method to run in ContactsController
		function run_filter()
		{
			var url = "contacts/" + document.getElementById("filter_dropdown").value;
			window.location.replace(url);
		}
	</script>
@stop

@section('content')
	{{-- Will create the contact filter dropdown if at least one contact exists --}}
	@if (isset($contactList) )
		<select onchange="run_filter()" id="filter_dropdown">
			<option>Select contact to filter for</option>
			@foreach ($contactList as $contact)
				<option value="{{ $contact->id }}">
					(ID: {{ $contact->id }}) {{ $contact->name }}
				</option>
			@endforeach
		</select>
	@endif

	@if ( isset($contactList) or isset($contact) )
		<table class="table table-striped">
			<thead>
				<tr>
				{{-- ID field also shown in case of one or more of a similar name --}}
					<th>ID</th>
					<th>Name</th>
					<th>Cell Phone</th>
					<th>Address</th>
					<th>Email Address</th>
					<th>Notes</th>
					<th></th>
				</tr>
			</thead>
			<tbody class="table-bordered table-condensed">

			{{-- This section will run for viewing all contacts --}}
			@if ( isset($contactList) )
				@foreach ($contactList as $contact)
					<tr>
						<td>{{ $contact->id }}</td>
						<td>{{ $contact->name or '' }}</td>
						<td>{{ $contact->phone or '' }}</td>
						<td>{{ $contact->address or '' }}</td>
						<td>{{ $contact->email or '' }}</td>
						<td>{{ $contact->notes or '' }}</td>
						<td>
							<a href="edit/{{ $contact->id }}">
								<button type="button" class="btn">Edit/Delete</button>
							</a>
						</td>
					</tr>
				@endforeach
			{{-- This section will run if viewing a single filtered result --}}
			@elseif ( isset($contact) )
				<tr>
					<td>{{ $contact->id }}</td>
					<td>{{ $contact->name or '' }}</td>
					<td>{{ $contact->phone or '' }}</td>
					<td>{{ $contact->address or '' }}</td>
					<td>{{ $contact->email or '' }}</td>
					<td>{{ $contact->notes or '' }}</td>
					<td>
						<a href="edit/{{ $contact->id }}">
							<button type="button" class="btn">Edit/Delete</button>
						</a>
					</td>
				</tr>
			@endif
			</tbody>
		</table>
	@else
		<div>
			No contacts exist. Add a new contact by clicking on "Add new contact" above.
		</div>
	@endif

@stop