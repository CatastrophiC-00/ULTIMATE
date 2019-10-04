@extends('layouts.master')
@extends('layouts.nav')
@section('content')
	<div class="container">
		<table class="table">
			<thead>
				<tr>
					<th scope="col">ID</th>
					<th scope="col">Section Name</th>
					<th scope="col">Status</th>
				</tr>
			</thead>
			<tbody>
				@foreach($sections as $section)
					<tr>
						<td>{{ $section->id }}</td>
						<td>{{ $section->name }}</td>
						<td>{{ $section->is_active }}</td>
					</tr>
				@endforeach
			</tbody>
		</table>
		<a class="btn btn-primary" href='/home/sections/add'>Add New Section</a>
		<a class="btn btn-primary" href='/home/sections/update'>Update</a>
	</div>
@endsection