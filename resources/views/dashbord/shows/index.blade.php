@extends('dashbord.app')


@section('content')



		
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Artist</h1>
</div>
</div><!--/.row-->










<a href="{{route('shows.create')}}"><button class="btn btn_primary">Add Show</button></a>

<table class="table table-borderd table-hover">
	<thead>
    <tr>
      
      <th scope="col">ArtistName</th>
      <th scope="col">MusicalVenusName</th>
      
    </tr>
  </thead>
  <tbody>
  @foreach($musicalvenus as $venus) 	
@foreach($artists as $artist)
<tr>
<td> {{$artist->name}}</td>
<td>{{$venus->name}} </td>




</td>
</tr>
@endforeach
@endforeach
</tbody>





</table>

@endsection











