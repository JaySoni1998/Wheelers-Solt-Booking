@extends('Layout.app')
@section("main-content")

  <style>
    div.AdminProfile{
      margin-top: 20px;
      margin-right: 520px;
      margin-left: 520px;
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
        <div class="card card-profile mx-auto" >
          <form class="" action="{{route('Profile_SaveData')}}" method="post">
          {{csrf_field()}}
          
            <table class="table table-hover">
              <div class="card-header"><b>ADMIN PROFILE</b></div>
              
              <tbody>
                @foreach($Profile_ViewData as $post)
                <tr>
                  <div class="col" style="margin: 10px;">
                     <div  align="center"> 
                      <img class="admin_img" src="Images/Admin.jpg" id="profile-image1"/>
                     </div>
                   </div>
                </tr>            

                <tr>
                  
                  <td>ID :</td>
                  <td>{{$post->A_ID}}</td>
                </tr>
                <tr>
                  
                  <td>Name :</td>
                  <td>{{$post->A_Name}}</td>
                </tr>

                <tr>
                  
                  <td>Gender :</td>
                  <td>{{$post->Gender}}</td>
                </tr>

                <tr>
                  <td>Address :</td>
                  <td>{{$post->A_Add}}</td>
                </tr>
                
                <tr>
                  <td>Mobile Number :</td>
                  <td>{{$post->Cont_No}}</td>
                </tr>

                <tr>
                  <td>Email ID :</td>
                  <td>{{$post->Email_ID}}</td>             
                </tr>

                <tr>
                    <center>
                      <th colspan="2" >
                        <div class="btnUpdate">
                          <a href="{{route('Profile_UpdateData',['A_ID'=>$post->A_ID])}}">Update</a>
                        </div>
                      </th>

                      
                    </center>
                </tr>  

                @endforeach              
              </tbody>
            </table>
          </form>
            
            
          </div>
        </div>
      </div>
    </center>
  @endsection
