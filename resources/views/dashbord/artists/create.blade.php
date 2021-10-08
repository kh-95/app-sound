


@extends('dashbord.app')
@section('content')
<form class="form-group" action="{{route('artists.store')}}" method="post" > 

@csrf

<label> Name </label>
<td><input type ="text" class="form-control" name="name"  placeholder="name">
<br>
<label> Typeofmusic </label>
<input type ="text" class="form-control" name="typeofmusic"  placeholder="typeofmusic">
<br>
<label> About Artist </label>
<input type ="text" class="form-control" name="about"   placeholder="aboutartist">
	<br>

   <input type ="submit" class="btn btn-info" name="submit" value="add">
</form>









@endsection

