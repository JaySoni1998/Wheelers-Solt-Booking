@extends('Layout.app')
@section("main-content")

	<title>View Package</title>
	 
</head>
<style >
	div.Package{
		margin-top: 20px;
		margin-right: 250px;
		margin-left: 250px;

	}
</style>

<title>View Packages</title>
<center>

	<div class="Package">
        <div class="card card-feedback mx-auto mt-5" >
          <form class="" action="{{route('Package_SaveData')}}" method="post">
          {{csrf_field()}}
            <table class="table table-hover">
              <div class="card-header"><b>PACKAGE DETAILS</b></div>
					<thead>
					    <tr>
					      <th scope="col">Package No</th>
					      <th scope="col">Package Name</th>
					      <th scope="col">Discount</th>
					      <th scope="col">Delete</th>
					      <th scope="col">Update</th>
					      
					    </tr>
					  </thead>
					  <tbody>
					  	@foreach($Package_ViewData as $post)
					  		<tr>
						      <th scope="row">{{$post->P_No}}</th>
						      <td>{{$post->P_Name}}</td>
						      <td>{{$post->P_Discount}}</td>
						      <td><a href="{{route('Package_DeleteData',['P_No'=>$post->P_No])}}">Delete</a></td>
						      <td><a href="{{route('Package_UpdateData',['P_No'=>$post->P_No])}}">Update</a></td>
						    </tr>
					  	@endforeach
					  </tbody>

				</table>

			</div>
		</div>
		
	</div>
  @endsection