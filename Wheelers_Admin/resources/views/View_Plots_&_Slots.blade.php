<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-12">
				<table class="table">
					<thead>
					    <tr>
					      <th scope="col">Place No</th>
					      <th scope="col">Location Name</th>
					      <th scope="col">Place Name</th>
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
						      <th scope="row">{{$post->Place_no}}</th>
						      <td>{{$post->Staff_No}}</td>
						      <td>-</td>
						      <td>-</td>
						      <td>{{$post->V_Type}}</td>
						      <td>{{$post->No_of_Slot}}</td>
						      <td><a href="{{route('P_S_DeleteData',['Place_no'=>$post->Place_no])}}">Delete</a></td>
						      <td><a href="{{route('P_S_UpdateData',['Place_no'=>$post->Place_no])}}">Update</a></td>
						    </tr>
					  	@endforeach
					  </tbody>

				</table>

			</div>
		</div>
		
	</div>
</body>
</html>