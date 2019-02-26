@extends('Layout.app')
@section("main-content")
    <title>Add New Package</title>
    

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

      </style>


  <body>
    
    <center>
      <div class="package">
        <div class="card card-noti mx-auto mt-5" >
          <form class="" action="{{route('Package_SaveData')}}" method="post">
            <!-- add csrf token field in every form  -->
            {{csrf_field()}}
          
            <table class="table table-hover">
              <div class="card-header"><b>ADD NEW PACKAGE</b></div>
              <tbody>
                <tr class="tr">
                  
                    <th scope="row" colspan="2">
                      <label for="">Package Name</label>
                    </th>    
                    <th> 
                      <input type="text" name="PackageName" id="inputPName" class="form-control" placeholder="Enter Package Name" required="Please fill out this field"> 
                    </th> 
                  
                </tr>
                <tr>
                  <th scope="row" colspan="2">
                    <label for="">Discount</label>
                  </th>
                  <th><input  name="discount" class="form-control" placeholder="Enter Discount" required="Please fill out this field"></input> </th>
                </tr>
                <tr>
                  <th colspan="3"><center><input type="submit" class="btn btn-primary" id="submit" name="Submit"></center></th>
            
                </tr>
                                                
              </tbody>
            </table>
          </form>
            
        </div>
      </div>
      
    </center>
  @endsection