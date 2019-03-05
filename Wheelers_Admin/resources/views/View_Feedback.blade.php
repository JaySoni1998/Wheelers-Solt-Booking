@extends('Layout.app')
@section("main-content")

<style>
	div.Feedback
	{
		margin-top: 20px;
		margin-left: 250px;
		margin-right: 250px;
	}
	body{
		  margin-bottom: 50px;
		}

</style>

<title>View Feedback</title>

<center>

<body>
	<div class="Feedback">
        <div class="card card-feedback mx-auto mt-5" >
          <form class="" action="{{route('Staff_SaveData')}}" method="post">
          {{csrf_field()}}
            <table class="table table-hover">
              <div class="card-header"><b>USER FEEDBACK</b></div>

					<thead>
					    <tr>
					      <th scope="col">Feedback ID</th>
					      <th scope="col">User Name</th>
					      <th scope="col">Review</th>
					      <th scope="col">Delete</th>
					      
					    </tr>
					  </thead>
					  <tbody>
					  	@foreach($Feedback_ViewData as $post)
					  		<tr>
						      <th scope="row">{{$post->F_ID}}</th>
						      <td>{{$post->U_FirstName}}</td>
						      <td>{{$post->Review}}</td>
						      <td><a href="{{route('Feedback_DeleteData',['F_ID'=>$post->F_ID])}}">Delete</a></td>
						    </tr>
					  	@endforeach
					  </tbody>

				</table>

			</div>
		</div>
		
	</div>
</body>
</center>
  @endsection