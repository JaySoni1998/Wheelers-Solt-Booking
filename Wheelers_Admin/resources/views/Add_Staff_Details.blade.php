@extends('Layout.app')
@section("main-content")

  <style>
    div.AddStaf{
      margin-top: 20px;
      margin-right: 250px;
      margin-left: 250px;
    }
    body{
      margin-bottom: 50px;
    }
  </style>

<title>Add New Staff</title>

  <body>

    <center>

      <div class="AddStaf">
        <div class="card card-feedback mx-auto mt-5" >
          <form class="" action="{{route('Staff_SaveData')}}" method="post">
          {{csrf_field()}}
            <table class="table table-hover">
              <div class="card-header"><b>ADD NEW STAFF DETAILS</b></div>
              
              <tbody>
              
                <tr>
                  
                  <td>Name :</td>
                  <td><input type="fn" name="StaffName" id="inputFN" class="form-control" placeholder="Enter First Name" required="Please fill out this field"></td>

                  <td>Gender:</td>
                  <td><input type="Gender" name="Gender" id="inputgender" class="form-control" placeholder="Enter Gender" required="Please fill out this field"></td>
                        
                </tr>

                <tr>
                  <td>Email ID :</td>
                  <td><input type="email" name="Email_ID" id="inputEmail" class="form-control" placeholder="Enter Email ID" required="Please fill out this field"></td>

                  <td>Password :</td>
                  <td><input type="Password" name="pass" id="inputEmail" class="form-control" placeholder="Enter Password" required="Please fill out this field"></td>
                  
                </tr>
                
                <tr>
                  <td>Birth Date :</td>
                  <td><input type="DOB" name="DOB" id="inputDOB" class="form-control" placeholder="yyyy-mm-dd" required="Please fill out this field"></td>

                  <td>Mobile Number :</td>
                  <td><input type="mob_no" name="Mob_No" id="inputMob" class="form-control" placeholder="Enter Mobile Number" required="Please fill out this field"></td>
                
                </tr>

                <tr>
                  <td>Joining Date :</td>
                  <td><input type="JDate" name="Join_Date" id="inputJDate" class="form-control" placeholder="yyyy-mm-dd" required="Please fill out this field"></td>

                  <td>Address :</td>
                  <td><textarea type="Address" name="Address" id="inputAddress" class="form-control" placeholder="Enter Address" required="Please fill out this field""></textarea></td>
                
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