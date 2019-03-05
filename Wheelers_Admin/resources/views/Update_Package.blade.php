@extends('Layout.app')
@section("main-content")

      <style>
        .package{
          margin-top: 20px;
          margin-left: 400px;
          margin-right: 400px;
        }     

        .checkbox{
          margin-left: 20px;
          margin-right: 20px;
        } 

        .Submit_btn{
          margin-bottom: 10px;
        }
        body{
          margin-bottom: 50px;
        }

      </style>
  <title>Update Package</title> 


  <body>
    
    <center>
      <div class="package">
        <div class="card card-noti mx-auto mt-5" >
          <form class="" action="{{route('Package_SaveUpdate')}}" method="post">
            <!-- add csrf token field in every form  -->
            {{csrf_field()}}
            <input type="hidden" name="P_No" value="{{$post->P_No}}">
            <table class="table table-hover">
              <div class="card-header"><b>UPDATE PACKAGE</b></div>
              <tbody>
                <tr class="tr">
                    
                    <th scope="row" colspan="2">
                      <label for="">Package Name</label>
                    </th>    
                    <th> 
                      <input type="text" name="PackageName" id="inputPName" class="form-control" value="{{$post->P_Name}}" required="Please fill out this field"> 
                    </th> 
                  
                </tr>
                <tr>
                  <th scope="row" colspan="2">
                    <label for="">Discount</label>
                  </th>
                  <th><input  name="discount" class="form-control" value="{{$post->P_Discount}}" required="Please fill out this field"></input> </th>
                </tr>
                <tr>
                  <th colspan="3"><center><input type="submit" class="btn btn-primary" id="update" name="Update" required="Please fill out this field"></center></th>
            
                </tr>
                                                
              </tbody>
            </table>
          </form>
            
        </div>
      </div>
      
    </center>
  
  </body>
@endsection