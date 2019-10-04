@extends('layouts.master')
@section('content')
	<div class="container">
		@include('layouts.errors')
		<form method="POST" action="/home/sections/store">
			@csrf
		  <div class="form-group">
		    <label for="Section Name">Section Name</label>
		    <input type="text" class="form-control" name="name">
		  </div>
		  <div class="form-group">
		    <label for="Status">Status</label>
		    <input type="text" class="form-control" name="is_active">
		  </div>
		  <button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
@endsection