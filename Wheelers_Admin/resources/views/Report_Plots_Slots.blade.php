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

<title>Reprot Report</title>
<body>
<center>
	<div class="Location">
        <div class="card card-feedback mx-auto mt-5" >
            <table class="table table-hover">
              	<div class="card-header"><b>REPORT DETAILS</b></div>
               		<div class="card-header">

               			<input class="form-control" type="text" placeholder="Search" aria-label="Search" id="myInput" onkeyup="myFunction()" title="Type in a name">
               		</div>
					<thead>
							    		<tr class="heading">
								      	<th scope="col">Place No</th>
									      <th scope="col">Place Name</th>
									      <th scope="col">Address</th>
									      <th scope="col">Slot Number</th>
									      <th scope="col">Vehicle Type</th>
									      <th scope="col">Total Slot</th>
								    	</tr>
					  				</thead>
							  		<tbody id="myTable">
							  			@foreach($PlotsSlotspostdata as $post)
								  		<tr>
									      <th scope="row">{{$post->Place_No}}</th>
									      <td>{{$post->Parking_Place_Name}}</td>
									      <td>{{$post->Address}}</td>
									      <td>{{$post->Slot_No}}</td>
									      <td>{{$post->V_Type}}</td>
									      <td>{{$post->No_of_Slot}}</td>
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
