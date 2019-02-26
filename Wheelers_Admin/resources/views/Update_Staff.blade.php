@extends('Layout.app')
@section("main-content")

    <style>
  		 .AddStaf{
          margin-top: 20px;
          margin-left: 200px;
          margin-right: 200px;
        } 
  		
    </style>
  <title>Update Staff</title>
  <body>

    <center>

      <div class="AddStaf">
        <div class="card card-feedback mx-auto mt-5" >
          <form class="" action="{{route('Staff_SaveUpdate')}}" method="post">
          {{csrf_field()}}
            <table class="table table-hover">
              <div class="card-header"><b>UPDATE STAFF DETAILS</b></div>
              
              <tbody>
              
                <tr>
                  
                  <td>Name :</td>
                  <td><input type="fn" name="StaffName" id="inputFN" class="form-control" placeholder="Enter First Name" required="Please fill out this field" value="{{$post->Emp_Name}}"></td>

                  <td>Gender:</td>
                  <td><input type="Gender" name="Gender" id="inputgender" class="form-control" placeholder="Enter Gender" required="Please fill out this field" value="{{$post->Gender}}"></td>
                        
                </tr>

                <tr>
                  <td>Email ID :</td>
                  <td><input type="email" name="Email_ID" id="inputEmail" class="form-control" placeholder="Enter Email ID" required="Please fill out this field" value="{{$post->Email_ID}}"></td>
                  
                  <td>Joining Date :</td>
                  <td><input type="JDate" name="Join_Date" id="inputJDate" class="form-control" placeholder="Enter Joining Date required" required="Please fill out this field" value="{{$post->Join_Date}}"></td>
                </tr>
                
                <tr>
                  <td>Birth Date :</td>
                  <td><input type="DOB" name="DOB" id="inputDOB" class="form-control" placeholder="Enter DOB" required="Please fill out this field" value="{{$post->DOB}}"></td>

                  <td>Mobile Number :</td>
                  <td><input type="mob_no" name="Mob_No" id="inputMob" class="form-control" placeholder="Enter Confirm Password" required="Please fill out this field" value="{{$post->Mob_No}}"></td>
                
                </tr>

                <tr>
                  

                  <td>Address :</td>
                  <td colspan="3"><input type="Address" name="Address" id="inputAddress" class="form-control" placeholder="Enter Address" required="required" value="{{$post->Address}}"></td>
                
                </tr>

                <tr>
                    <center>
                      <th colspan="4" >
                        <center><input type="submit" class="btn btn-primary" id="submit" name="Submit">
                        </center>
                      </th>
                    </center>
                </tr>
                
              </tbody>
            </table>
          </form>
            
            
          </div>
        </div>
      </div>
    </center>
  
</body>
@endsection