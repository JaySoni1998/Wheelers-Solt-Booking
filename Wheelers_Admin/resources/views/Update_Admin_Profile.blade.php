@extends('Layout.app')
@section("main-content")

  <style>
    div.AdminProfile{
      margin-top: 20px;
      margin-right: 500px;
      margin-left: 500px;
    }

    #profile-image1 {
      cursor: pointer;
      width: 100px;
      height: 100px;
      border:2px solid  ;
    }

    .btnUpdate{
      text-align: right; 
    }
    img.admin_img
    {
      border-radius: 50%;
    }

  </style>

<title>Admin Profile</title>

  <center>
    <div class="AdminProfile">
      <div class="card card-profile mx-auto mt-5" >
        <form class="" action="{{route('Profile_SaveUpdate')}}" method="post">
          <!-- add csrf token field in every form  -->
          {{csrf_field()}}
            <table class="table table-hover">
              <div class="card-header"><b>ADMIN PROFILE</b></div>
                <tbody>
                  
                  <tr>
                    <div class="col-sm-6" style="margin: 10px;">
                      <div  align="center"> 
                        <img class="admin_img" src="{{ asset($post->img) }}" id="profile-image1"/>
                      </div>
                    </div>
                  </tr>            
                  <tr>
                    <td>ID :</td>
                    <td>{{$post->A_ID}}</td>
                  </tr>
                  <tr>
                    <td>Name :</td>
                    <td><input name="A_Name" id="name" class="form-control" placeholder="Enter Name" value="{{$post->A_Name}}" required="Please fill out this field"></td>
                  </tr>
                  <tr>
                    <td>Gender :</td>
                    <td><input name="Gender" id="gender" class="form-control" placeholder="Enter Gender" value="{{$post->Gender}}" required="Please fill out this field"></td>
                  </tr>
                  <tr>
                    <td>Address :</td>
                    <td><input name="Address" id="address" class="form-control" placeholder="Enter Address" value="{{$post->A_Add}}" required="Please fill out this field"></td>
                  </tr>
                  <tr>
                    <td>Mobile Number :</td>
                    <td><input name="Mobile" id="mob" class="form-control" placeholder="Enter Mobile Number" value="{{$post->Cont_No}}" required="Please fill out this field"></td>
                  </tr>
                  <tr>
                    <td>Email ID :</td>
                    <td><input name="Email" id="email" class="form-control" placeholder="Enter Email ID" value="{{$post->Email_ID}}" required="Please fill out this field"></td>             
                  </tr>
                  <tr>
                      <center>
                        <th colspan="4" >
                          <div class="btnUpdate">
                          <BUTTON type="submit" class="btn btn-primary" id="submit" align="left">Upadte</BUTTON> 
                          </div>
                        </th>
                      </center>
                  </tr>
                </tbody>
              </table>
            </form>  
          </div>
        </form>
      </div>
    </div>
  </center>
@endsection
