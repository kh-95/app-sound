@extends('dashbord.app')

@section('content')
<form class="form-group" action="{{route('venus.update',['id'=>$venus->id])}}" method="get"  >
	@csrf
	<label>Name</label>
	<input type="text" class="form-control" name="name" placeholder="name" value="{{$venus->name}}">
	

	<br>
	<label>Location</label>
	<input type="text" class="form-control" name="location" placeholder="location" value="{{$venus->location}}" >
	
	
	<br>
	<input type ="submit" class="btn btn-primary" name="submit" value="update">
	



</form>

@endsection 