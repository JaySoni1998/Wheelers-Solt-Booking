@extends('Layout.app')
@section("main-content")


<style >
	div.Location{
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

<title>User Report</title>
<body>
<center>
	<div class="Location">
        <div class="card card-feedback mx-auto mt-5" >
            <table class="table table-hover">
              	<div class="card-header"><b>USER DETAILS</b></div>
               		<div class="card-header">
 	
               			<input class="form-control" type="text" placeholder="Search" aria-label="Search" id="myInput" onkeyup="myFunction()" title="Type in a name">
               		
					<thead>
					    <tr class="heading">
					      <th scope="col">User ID</th>
					      <th scope="col">User Name</th>
					      <th scope="col">Gender</th>
					      <th scope="col">Email ID</th>
					      <th scope="col">Contact No</th>					      
					    </tr>
					  </thead>
					  <tbody id="myTable">
					  	@foreach($Userpostdata as $post)
					  		<tr>
						      <th scope="row">{{$post->U_ID}}</th>
						      <td>{{$post->U_FirstName}} {{$post->U_LastName}}</td>
						      <td>{{$post->U_Gender}}</td>
						      <td>{{$post->Email_ID}}</td>
						      <td>{{$post->Cont_No}}</td>
						    </tr>
					  	@endforeach
					  </tbody>
				</div>
					
				</table>
				<div class="card-footer">
						<tr>
   							<td colspan="4">
					  			<a href="" name="Print" title="print" alt="print" onclick="window.print();" target="_blank" style="cursor:pointer;">Print</a>
					  		</td>
					  	</tr>
				</div>

			</div>
		</div>
	</div>
</center>
</body>

<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>

@endsection
