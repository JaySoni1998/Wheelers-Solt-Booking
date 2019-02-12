
@extends('Layout.app')
@section("main-content")
    <title>Add New Location</title>
    

      <style>
        .New_Location{
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
      <div class="New_Location">
        <div class="card card-plot_slot mx-auto mt-5" >
          <form class="" action="{{route('Location_SaveData')}}" method="post">
            <!-- add csrf token field in every form  -->
            {{csrf_field()}}
          
            <table class="table table-hover">
              <div class="card-header"><b>ADD NEW LOCATION</b></div>
              <tbody>
                <tr class="tr">
                  <div class="form-group" >
                    <th scope="row" colspan="2"" >Place No :</th>    
                    <th> <input name="PlaceNo" id="inputNo" class="form-control" placeholder="Enter Place No"> </th> 
                  </div>
                </tr>
                <tr class="tr">
                  <div class="form-group" >
                    <th scope="row" colspan="2"" >Area Code :</th>    
                    <th> <input name="AreaCode" id="inputCode" class="form-control" placeholder="Enter Area Code" > </th> 
                  </div>
                </tr>
                <tr>
                  <th scope="row" colspan="2">Location Name</th>
                  <th><input name="Location" id="inputAName" class="form-control" placeholder="Enter Location Name" > </th>
                </tr>
                <tr>
                  <th scope="row" colspan="2">Parking Place</th>
                  <td><input name="ParkingPlace" id="inputPlace" class="form-control" placeholder="Enter Parking Place" > </td>
                </tr>
                <tr>
                  <th colspan="3"><center><input type="submit" class="btn btn-primary" id="submit" name="Submit"></center></th>
                </tr>
                                
              </tbody>
            </table>
          </form>
            
        </div>
      
    </center>
  </div>

  @endsection