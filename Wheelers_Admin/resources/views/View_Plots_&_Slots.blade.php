@extends('Layout.app')
@section("main-content")

	<style >
	div.plot_slot{
		margin-top: 20px;
		margin-right: 100px;
		margin-left: 100px;

	}
	tr.heading {
    white-space: nowrap;
    overflow: hidden;
    width: 125px;
    height: 25px;
	}
	body{
	  margin-bottom: 50px;
	}
</style>

<title>View Plots & Slots</title>
<body>
	<center>
		<div class="plot_slot">
        	<div class="card card-feedback mx-auto mt-5" >
          		<form class="" action="{{route('P_S_SaveData')}}" method="post">
          			{{csrf_field()}}
            		<table class="table table-hover">
              			<div class="card-header"><b>PLOTS & SLOTS DETAILS</b></div>
									<thead>
							    		<tr class="heading">
								      	<th scope="col">Place No</th>
									      <th scope="col">Place Name</th>
									      <th scope="col">Address</th>
									      <th scope="col">Slot Number</th>
									      <th scope="col">Vehicle Type</th>
									      <th scope="col">Number of Slot</th>
									      <th scope="col">Delete</th>
									      <th scope="col">Update</th>
								    	</tr>
					  				</thead>
							  		<tbody>
							  			@foreach($P_S_ViewData as $post)
								  		<tr>
									      <th scope="row">{{$post->Place_No}}</th>
									      <td>{{$post->Parking_Place_Name}}</td>
									      <td>{{$post->Address}}</td>
									      <td>{{$post->Slot_No}}</td>
									      <td>{{$post->V_Type}}</td>
									      <td>{{$post->No_of_Slot}}</td>
									      <td><a href="{{route('P_S_DeleteData',['Place_No'=>$post->Place_No])}}">Delete</a></td>
									      <td><a href="{{route('P_S_UpdateData',['Place_No'=>$post->Place_No])}}">Update</a></td>
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
