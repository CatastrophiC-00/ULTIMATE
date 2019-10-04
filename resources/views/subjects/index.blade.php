@extends('layouts.master')
@extends('layouts.nav')
@section('content')
	<div class="container">
		<table class="table">
			<thead>
				<tr>
					<th scope="col">ID</th>
					<th scope="col">Subject Name</th>
				</tr>
			</thead>
			<tbody>
				@foreach($subjects as $subject)
					<tr>
						<td>{{ $subject->id }}</td>
						<td>{{ $subject->name }}</td>
					</tr>
				@endforeach
			</tbody>
		</table>
		<a class="btn btn-primary" href='/home/subjects/add'>Add New Subject</a>
		<a class="btn btn-primary" href='/home/subjects/update'>Update</a>
	</div>
@endsection