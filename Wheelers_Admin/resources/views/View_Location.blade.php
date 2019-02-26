@extends('Layout.app')
@section("main-content")

<style >
	div.Location{
		margin-top: 20px;
		margin-right: 250px;
		margin-left: 250px;

	}
</style>

<title>View Location</title>
<center>

	<div class="Location">
        <div class="card card-feedback mx-auto mt-5" >
          <form class="" action="{{route('Location_SaveData')}}" method="post">
          {{csrf_field()}}
            <table class="table table-hover">
              <div class="card-header"><b>LOCATION DETAILS</b> </div>
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
	</center>
@endsection
