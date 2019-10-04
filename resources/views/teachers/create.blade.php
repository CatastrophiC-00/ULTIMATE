@extends('layouts.master')
@section('content')
	<div class="container">
		@include('layouts.errors')
		<form method="POST" action="/home/teachers/store">
			@csrf
		  <div class="form-group">
		    <label for="Teacher Name">Teachers Name</label>
		    <input type="text" class="form-control" name="name">
		  </div>
		  <div class="form-group">
		    <label for="Advisory">Advisory Section</label>
		    <input type="text" class="form-control" name="advisory_section">
		  </div>
		  <button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
@endsection