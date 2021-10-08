@extends('dashbord.app')


@section('content')



		
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Artist</h1>
</div>
</div><!--/.row-->

<form action="{{route('artists.index')}}" method="get">
<div class="row">
  <div class="col-md-4">
<input type="text" name="search" class="form-control" placeholder="search" value="{{ request()->search }}">

</div>

<div class="col-md-4">

<button type="submit" class="btn btn-primary"><i class="fa fa-search"></i> Search</button>

</div>

</div>




</form>








<a href="{{route('artists.create')}}"><button class="btn btn_primary">Add Artist</button></a>

<table class="table table-borderd table-hover">
	<thead>
    <tr>
      
      <th scope="col">Name</th>
      <th scope="col">Typeofmusic</th>
      <th scope="col">About</th>
    </tr>
  </thead>
  <tbody>
  	
@foreach($artists as $artist)
<tr>
<td> {{$artist->name}}</td>
<td>{{$artist->typeofmusic}} </td>
<td>{{$artist->about}} </td>


<td><a href="{{route('artists.edit',['id'=>$artist->id])}}"><button class="btn btn-info">ArtistUpdate</button></a>

</td>
</tr>
@endforeach
</tbody>





</table>

@endsection











