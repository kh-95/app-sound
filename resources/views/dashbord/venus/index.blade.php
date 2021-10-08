@extends('dashbord.app')


@section('content')



		
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Venus</h1>
</div>
</div><!--/.row-->

<form action="{{route('venus.index')}}" method="get">
<div class="row">
  <div class="col-md-4">
<input type="text" name="search" class="form-control" placeholder="search" value="{{ request()->search }}">

</div>

<div class="col-md-4">

<button type="submit" class="btn btn-primary"><i class="fa fa-search"></i> Search</button>

</div>

</div>




</form>








<a href="{{route('venus.create')}}"><button class="btn btn_primary">Add venus</button></a>

<table class="table table-borderd table-hover">
	<thead>
    <tr>
      
      <th scope="col">Name</th>
      <th scope="col">Location</th>
   
    </tr>
  </thead>
  <tbody>
  	
@foreach($venus as $venus)
<tr>
<td> {{$venus->name}}</td>
<td>{{$venus->location}} </td>



<td><a href="{{route('venus.edit',['id'=>$venus->id])}}"><button class="btn btn-info">venusUpdate</button></a>

</td>
</tr>
@endforeach
</tbody>





</table>

@endsection











