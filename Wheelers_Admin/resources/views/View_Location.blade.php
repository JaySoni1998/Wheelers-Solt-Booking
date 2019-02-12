@extends('Layout.app')
@section("main-content")
	<div class="container">
		<div class="row">
			<div class="col-12">
				
				<table class="table">
					<thead>
					    <tr>
					      <th scope="col">Place No</th>
					      <th scope="col">Area Code</th>
					      <th scope="col">Location Name</th>
					      <th scope="col">Parking Place</th>
					      <th scope="col">Delete</th>
					      <th scope="col">Update</th>
					      
					    </tr>
					  </thead>
					  <tbody>
					  	@foreach($Locationpostdata as $post)
					  		<tr>
						      <th scope="row">{{$post->Place_No}}</th>
						      <td>{{$post->Area_Code}}</td>
						      <td>{{$post->Location_Name}}</td>
						      <td>{{$post->parking_Place}}</td>
						      <td><a href="{{route('Location_DeleteData',['Place_No'=>$post->Place_No])}}">Delete</a></td>
						      <td><a href="{{route('Location_UpdateData',['Place_No'=>$post->Place_No])}}">Update</a></td>
						    </tr>
					  	@endforeach
					  </tbody>

				</table>

			</div>
		</div>
		
	</div>
@endsection
