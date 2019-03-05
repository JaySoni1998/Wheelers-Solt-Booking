@extends('Layout.app')
@section("main-content")

<style>
  .New_Location{
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
        
  font.normal {
    font-weight: normal;
  }
  body{
    margin-bottom: 50px;
  }

</style>

<title>Update Location</title>
<body>
<center>
  <div class="New_Location">
    <div class="card card-plot_slot mx-auto mt-5" >
      <form class="" action="{{route('Location_SaveUpdate')}}" method="post">
        <!-- add csrf token field in every form  -->
        {{csrf_field()}}
          <table class="table table-hover">
            <div class="card-header">
              <b>UPDATE LOCATION</b>
            </div>

            <tbody>
              <tr class="tr">
                <div class="form-group" >
                  <th scope="row" colspan="2" >Place No :</th>    
                  <th> <input name="PlaceNo" id="inputNo" class="form-control" placeholder="Enter Place No" value="{{$post->Place_No}}" required="Please fill out this field"> </th> 
                </div>
              </tr>

              <tr>
                <th scope="row" colspan="2">Parking Place Name</th>
                <td><input name="ParkingPlace" id="inputPlace" class="form-control" placeholder="Enter Parking Place" value="{{$post->Parking_Place_Name}}" required="Please fill out this field"></td>
              </tr>

              <tr>
                <th scope="row" colspan="2">Address</th>
                <th><input name="Location" id="inputAName" class="form-control" placeholder="Enter Location Name" value="{{$post->Address}}" required="Please fill out this field"> </th>
              </tr>

              <tr class="tr">
                <div class="form-group" >
                  <th scope="row" colspan="2" >Area Code :</th>    
                  <th> <input name="AreaCode" id="inputCode" class="form-control" placeholder="Enter Area Code" value="{{$post->Area_Code}}" required="Please fill out this field"> </th> 
                </div>
              </tr>

              <tr>
                <th scope="row" colspan="2">Latitude</th>
                <th><input name="Lat" id="inputAName" class="form-control" placeholder="Enter Location Name" value="{{$post->Latitude}}" required="Please fill out this field"> </th>
              </tr>

              <tr>
                <th scope="row" colspan="2">Longitude</th>
                <th><input name="Long" id="inputAName" class="form-control" placeholder="Enter Location Name" value="{{$post->Longitude}}" required="Please fill out this field"> </th>
              </tr>

              <tr>
                <th colspan="3">
                  <center>
                    <font class="normal" style="color: gray;">Find address, letitie and longitude.
                        <a target="_blank" href="https://www.gps-coordinates.net" style="color: blue;">Click here</a>
                    </font>
                  </center>
                </th> 
              </tr>
                
              <tr>
                <th colspan="3"><center><input type="submit" class="btn btn-primary" id="submit" name="Update"></center></th>
              </tr>
                                
            </tbody>
          </table>
      </form>    
    </div>
  </div>
</center>
</body>
@endsection