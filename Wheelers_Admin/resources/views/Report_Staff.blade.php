@extends('Layout.app')
@section("main-content")


<style >
	div.Location{
		margin-top: 20px;
		margin-right: 100px;
		margin-left: 100px;

	}
</style>

<title>Staff Report</title>
<center>
	<div class="Location">
        <div class="card card-feedback mx-auto mt-5" >
            <table class="table table-hover">
              	<div class="card-header"><b>STAFF DETAILS</b></div>
               		<div class="card-header">
 	
               			<input class="form-control" type="text" placeholder="Search" aria-label="Search" id="myInput" onkeyup="myFunction()" title="Type in a name">
               		
					<thead>
                        <tr>
                          <th scope="col">ID</th>
                          <th scope="col">Name</th>
                          <th scope="col">Gender</th>
                          <th scope="col">Mobile No</th>
                          <th scope="col">Email ID</th>
                          <th scope="col">Joining Date</th>
                          <th scope="col">Birth Date</th>
                          <th scope="col">Address</th>
                        </tr>
                      </thead>

                      <tbody id="myTable">
                        @foreach($Staffpostdata as $post)
                        <tr>
                            <th scope="row">{{$post->Emp_ID}}</th>
                            <td>{{$post->Emp_Name}}</td>
                            <td>{{$post->Gender}}</td>
                            <td>{{$post->Mob_No}}</td>
                            <td>{{$post->Email_ID}}</td>
                            <td>{{$post->Join_Date}}</td>
                            <td>{{$post->DOB}}</td>
                            <td>{{$post->Address}}</td>
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
