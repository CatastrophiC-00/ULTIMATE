@extends('layouts.master')
@section('content')
	<div class="container">
		@include('layouts.errors')
		<form method="POST" action="/home/strands/store">
			@csrf
		  <div class="form-group">
		    <label for="Strand Name">Strand Name</label>
		    <input type="text" class="form-control" name="name">
		  </div>
		  <button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
@endsection