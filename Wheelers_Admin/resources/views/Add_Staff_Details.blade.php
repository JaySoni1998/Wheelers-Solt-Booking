@extends('Layout.app')
@section("main-content")

	<title>Add Staff Details</title>

  <body>

    <center>

      <div class="AddStaf">
        <div class="card card-feedback mx-auto mt-5" >
          <form class="" action="{{route('Staff_SaveData')}}" method="post">
          {{csrf_field()}}
            <table class="table table-hover">
              <div class="card-header"><b>Add Staf Ditails</b></div>
              
              <tbody>
              
                <tr>
                  
                  <td>Name :</td>
                  <td><input type="fn" name="StaffName" id="inputFN" class="form-control" placeholder="Enter First Name" required="required"></td>

                  <td>Gender:</td>
                  <td><input type="Gender" name="Gender" id="inputgender" class="form-control" placeholder="Enter Gender" required="required"></td>
                        
                </tr>

                <tr>
                  <td>Email ID :</td>
                  <td><input type="email" name="Email_ID" id="inputEmail" class="form-control" placeholder="Enter Email ID" required="required"></td>

                  <td>Password :</td>
                  <td><input type="Password" name="pass" id="inputEmail" class="form-control" placeholder="Enter Password" required="required"></td>
                  
                </tr>
                
                <tr>
                  <td>Birth Date :</td>
                  <td><input type="DOB" name="DOB" id="inputDOB" class="form-control" placeholder="Enter DOB" required="required"></td>

                  <td>Mobile Number :</td>
                  <td><input type="mob_no" name="Mob_No" id="inputMob" class="form-control" placeholder="Enter Mobile Number" required="required"></td>
                
                </tr>

                <tr>
                  <td>Joining Date :</td>
                  <td><input type="JDate" name="Join_Date" id="inputJDate" class="form-control" placeholder="Enter Joining Date required"required="required"></td>

                  <td>Address :</td>
                  <td><input type="Address" name="Address" id="inputAddress" class="form-control" placeholder="Enter Address" required="required"></td>
                
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
  @endsection