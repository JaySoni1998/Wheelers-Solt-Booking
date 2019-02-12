@extends('Layout.app')
@section("main-content")


  <body>
      <center>
        <div class="container">
          <div class="row">
            <div class="col-12">
              <table class="table">
                 <div class="card-header"><b>STAFF DETAILS</b></div>
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
                          <th scope="col">Delete</th>
                          <th scope="col">Update</th>
                        </tr>
                      </thead>

                      <tbody>
                        @foreach($Staff_ViewData as $post)
                        <tr>
                            <th scope="row">{{$post->Emp_ID}}</th>
                            <td>{{$post->Emp_Name}}</td>
                            <td>{{$post->Gender}}</td>
                            <td>{{$post->Mob_No}}</td>
                            <td>{{$post->Email_ID}}</td>
                            <td>{{$post->Join_Date}}</td>
                            <td>{{$post->DOB}}</td>
                            <td>{{$post->Address}}</td>
                            <td><a  href="{{route('Staff_DeleteData',['Emp_ID'=>$post->Emp_ID])}}">Delete</a></td>
                            <td><a href="{{route('Staff_UpdateData',['Emp_ID'=>$post->Emp_ID])}}">Update</a></td>
                          </tr>
                        @endforeach
                       
                      </tbody>
                    </div>

              </table>

            </div>
          </div>
          
        </div>
      
    </center>
  @endsection