<!DOCTYPE html>
<html>
<head>
	 <title>Add Staff Details</title>

	 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

    <style>
  		 .AddStaf{
          margin-top: 50px;
          margin-left: 200px;
          margin-right: 200px;
        } 
  		
    </style>
  </head>
  <body>

    <center>

      <div class="AddStaf">
        <div class="card card-feedback mx-auto mt-5" >
          <form class="" action="{{route('Staff_SaveUpdate')}}" method="post">
          {{csrf_field()}}
            <table class="table table-hover">
              <div class="card-header"><b>Add Staf Ditails</b></div>
              
              <tbody>
              
                <tr>
                  
                  <td>Name :</td>
                  <td><input type="fn" name="Emp_Name" id="inputFN" class="form-control" placeholder="Enter First Name" required="required" value="{{$post->Emp_Name}}"></td>

                  <td>Gender:</td>
                  <td><input type="Gender" name="Gender" id="inputgender" class="form-control" placeholder="Enter Gender" required="required" value="{{$post->Gender}}"></td>
                        
                </tr>

                <tr>
                  <td>Email ID :</td>
                  <td><input type="email" name="Email_ID" id="inputEmail" class="form-control" placeholder="Enter Email ID" required="required" value="{{$post->Email_ID}}"></td>
                  
                  <td>Joining Date :</td>
                  <td><input type="JDate" name="Join_Date" id="inputJDate" class="form-control" placeholder="Enter Joining Date required"required="required" value="{{$post->Join_Date}}"></td>
                </tr>
                
                <tr>
                  <td>Birth Date :</td>
                  <td><input type="DOB" name="DOB" id="inputDOB" class="form-control" placeholder="Enter DOB" required="required" value="{{$post->DOB}}"></td>

                  <td>Mobile Number :</td>
                  <td><input type="mob_no" name="Mob_No" id="inputMob" class="form-control" placeholder="Enter Confirm Password" required="required" value="{{$post->Mob_No}}"></td>
                
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
</html>