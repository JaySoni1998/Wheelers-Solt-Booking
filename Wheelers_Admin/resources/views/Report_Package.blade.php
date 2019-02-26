@extends('Layout.app')
@section("main-content")


<style >
	div.Location{
		margin-top: 20px;
		margin-right: 100px;
		margin-left: 100px;

	}
</style>

<title>Reprot Report</title>
<center>
	<div class="Location">
        <div class="card card-feedback mx-auto mt-5" >
            <table class="table table-hover">
              	<div class="card-header"><b>REPORT DETAILS</b></div>
               		<div class="card-header">
 	
               			<input class="form-control" type="text" placeholder="Search" aria-label="Search" id="myInput" onkeyup="myFunction()" title="Type in a name">
               		
					<thead >
					    <tr>
					      <th scope="col">Package No</th>
					      <th scope="col">Package Name</th>
					      <th scope="col">Discount</th>
					    </tr>
					  </thead>
					  <tbody id="myTable">
					  	@foreach($Packagepostdata as $post)
					  		<tr>
						      <th scope="row">{{$post->P_No}}</th>
						      <td>{{$post->P_Name}}</td>
						      <td>{{$post->P_Discount}}</td>
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
