@extends('dashbord.app')

@section('content')
<form class="form-group" action="{{route('artists.update',['id'=>$artist->id])}}" method="get"  >
	@csrf
	<label>Name</label>
	<input type="text" class="form-control" name="name" placeholder="name" value="{{$artist->name}}">
	

	<br>
	<label>Typeofmusic</label>
	<input type="text" class="form-control" name="typeofmusic" placeholder="typeofmusic" value="{{$artist->typeofmusic}}" >
	<br>
	<label>About</label>
	<input type="text" class="form-control" name="about" placeholder="about" value="{{$artist->about}}">

	<br>
	<input type ="submit" class="btn btn-primary" name="submit" value="update">
	



</form>

@endsection 