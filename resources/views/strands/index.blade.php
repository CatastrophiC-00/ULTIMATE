@extends('layouts.master')
@extends('layouts.nav')
@section('content')
	<div class="container">
		<table class="table">
			<thead>
				<tr>
					<th scope="col">ID</th>
					<th scope="col">Strand Name</th>
				</tr>
			</thead>
			<tbody>
				@foreach($strands as $strand)
					<tr>
						<td>{{ $strand->id }}</td>
						<td>{{ $strand->name }}</td>
					</tr>
				@endforeach
			</tbody>
		</table>
		<a class="btn btn-primary" href='/home/strands/add'>Add New Subject</a>
		<a class="btn btn-primary" href='/home/strands/update'>Update</a>
	</div>
@endsection