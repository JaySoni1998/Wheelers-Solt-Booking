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
					      <th scope="col">Feedback ID</th>
					      <th scope="col">User ID</th>
					      <th scope="col">Review</th>
					      <th scope="col">Delete</th>
					      
					    </tr>
					  </thead>
					  <tbody>
					  	@foreach($Feedback_ViewData as $post)
					  		<tr>
						      <th scope="row">{{$post->F_ID}}</th>
						      <td>{{$post->U_ID}}</td>
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
</html>