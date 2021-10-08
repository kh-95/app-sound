


@extends('dashbord.app')
@section('content')
<form class="form-group" action="{{route('venus.store')}}" method="post" > 

@csrf

<label> Name </label>
<td><input type ="text" class="form-control" name="name"  placeholder="name">
<br>
<label> Location </label>
<input type ="text" class="form-control" name="location"  placeholder="location">
<br>


   <input type ="submit" class="btn btn-info" name="submit" value="add">
</form>









@endsection

