@extends('Layout.app')
@section("main-content")


<style >
	div.Location{
		margin-top: 20px;
		margin-right: 100px;
		margin-left: 100px;

	}
</style>

<title>Feedback Report</title>
<center>
	<div class="Location">
        <div class="card card-feedback mx-auto mt-5" >
            <table class="table table-hover">
              	<div class="card-header"><b>FEEDBACK DETAILS</b></div>
               		<div class="card-header">
 	
               			<input class="form-control" type="text" placeholder="Search" aria-label="Search" id="myInput" onkeyup="myFunction()" title="Type in a name">
               		
					<thead>
					    <tr>
					      <th scope="col">Feedback ID</th>
					      <th scope="col">User Name</th>
					      <th scope="col">Review</th>
					      
					    </tr>
					  </thead>
					  <tbody id="myTable">
					  	@foreach($Feedbackpostdata as $post)
					  		<tr>
						      <th scope="row">{{$post->F_ID}}</th>
						      <td>{{$post->U_FirstName}}</td>
						      <td>{{$post->Review}}</td>
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
