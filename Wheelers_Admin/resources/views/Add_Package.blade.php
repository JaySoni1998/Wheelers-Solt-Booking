@extends('Layout.app')
@section("main-content")
    <title>Package</title>
    

      <style>
        .package{
          margin-top: 50px;
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
  </head>  


  <body>
    
    <center>
      <div class="package">
        <div class="card card-noti mx-auto mt-5" >
          <form class="" action="{{route('Package_SaveData')}}" method="post">
            <!-- add csrf token field in every form  -->
            {{csrf_field()}}
          
            <table class="table table-hover">
              <div class="card-header"><b>PACKAGE</b></div>
              <tbody>
                <tr class="tr">
                  
                    <th scope="row" colspan="2">
                      <label for="">Package Name</label>
                    </th>    
                    <th> 
                      <input type="text" name="PackageName" id="inputPName" class="form-control" placeholder="Enter Package Name"> 
                    </th> 
                  
                </tr>
                <tr>
                  <th scope="row" colspan="2">
                    <label for="">Discount</label>
                  </th>
                  <th><input  name="discount" class="form-control" placeholder="Enter Description"></input> </th>
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