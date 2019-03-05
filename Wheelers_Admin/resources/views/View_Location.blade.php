@extends('Layout.app')
@section("main-content")

<style >
	div.Location{
		margin-top: 20px;
		margin-right: 50px;
		margin-left: 50px;
	}

	tr.heading {
    white-space: nowrap;
    overflow: hidden;
    width: 125px;
    height: 25px;
	}

	td.heading {
    white-space: nowrap;
    overflow: hidden;
    width: 125px;
    height: 25px;
	}
	body{
	  margin-bottom: 50px;
	}
</style>

<title>View Location</title>
<body>
<center>
	<div class="Location">
        <div class="card card-feedback mx-auto mt-5" >
          	<form class="" action="{{route('Location_SaveData')}}" method="post">
          		{{csrf_field()}}
            	<table class="table table-hover">
              		<div class="card-header"><b>LOCATION DETAILS</b> </div>
						<thead >
							<tr class="heading">
						      	<th scope="col">Place No</th>
						      	<th  scope="col">Place Name</th>
								<th scope="col">Address</th>
							    <th scope="col">Area Code</th>
							    <th scope="col">Latitude</th>
							    <th scope="col">Longitude</th>
							    <th scope="col">Delete</th>
							    <th scope="col">Update</th>
					      	</tr>
					  	</thead>
					  	<tbody>
					  		@foreach($Locationpostdata as $post)
					  		<tr>
						      <th scope="row">{{$post->Place_No}}</th>
						      <td class="heading">{{$post->Parking_Place_Name}}</td>
						      <td>{{$post->Address}}</td>
						      <td>{{$post->Area_Code}}</td>
						      <td>{{$post->Latitude}}</td>
						      <td>{{$post->Longitude}}</td>
						      <td><a href="{{route('Location_DeleteData',['Place_No'=>$post->Place_No])}}">Delete</a></td>
						      <td><a href="{{route('Location_UpdateData',['Place_No'=>$post->Place_No])}}">Update</a></td>
						    </tr>
					  		@endforeach
					  	</tbody>
				</table>
			</form>
		</div>
	</div>
</center>
</body>

@endsection
