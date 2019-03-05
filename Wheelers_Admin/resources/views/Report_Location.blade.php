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

<title>Location Report</title>
<body>
<center>
	<div class="Location">
        <div class="card card-feedback mx-auto mt-5" >
            <table class="table table-hover">
              	<div class="card-header"><b>LOCATION DETAILS</b></div>
               		<div class="card-header">
 	
               			<input class="form-control" type="text" placeholder="Search" aria-label="Search" id="myInput" onkeyup="myFunction()" title="Type in a name">
               		
               			<thead >
						
					    <tr class="heading">
					      <th scope="col">Place No</th>
					      <th scope="col">Place Name</th>
					      <th scope="col">Address</th>
					      <th scope="col">Area Code</th>
					      <th scope="col">Latitude</th>
					      <th scope="col">Longitude</th>
					      
					    </tr>
					  </thead>
					  <tbody>
					  	@foreach($Locationpostdata as $post)
					  		<tr>
						      <th scope="row">{{$post->Place_No}}</th>
						      <td>{{$post->Parking_Place_Name}}</td>
						      <td>{{$post->Address}}</td>
						      <td>{{$post->Area_Code}}</td>
						      <td>{{$post->Latitude}}</td>
						      <td>{{$post->Longitude}}</td>
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
