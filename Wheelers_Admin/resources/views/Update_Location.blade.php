<!DOCTYPE html>
<html>
  <head>
    <title>Update Location</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

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
          <form class="" action="{{route('Location_SaveUpdate')}}" method="post">
            <!-- add csrf token field in every form  -->
            {{csrf_field()}}
          
            <table class="table table-hover">
              <div class="card-header"><b>ADD NEW LOCATION</b></div>
              <tbody>
                <tr class="tr">
                  <div class="form-group" >
                    <th scope="row" colspan="2" >Place No :</th>    
                    <th> <input name="PlaceNo" id="inputNo" class="form-control" placeholder="Enter Place No" value="{{$post->Place_No}}"> </th> 
                  </div>
                </tr>
                <tr class="tr">
                  <div class="form-group" >
                    <th scope="row" colspan="2" >Area Code :</th>    
                    <th> <input name="AreaCode" id="inputCode" class="form-control" placeholder="Enter Area Code" value="{{$post->Area_Code}}" > </th> 
                  </div>
                </tr>
                <tr>
                  <th scope="row" colspan="2">Location Name</th>
                  <th><input name="Location" id="inputAName" class="form-control" placeholder="Enter Location Name" value="{{$post->Location_Name}}"> </th>
                </tr>
                <tr>
                  <th scope="row" colspan="2">Parking Place</th>
                  <td><input name="ParkingPlace" id="inputPlace" class="form-control" placeholder="Enter Parking Place" value="{{$post->parking_Place}}"> </td>
                </tr>
                <tr>
                  <th colspan="3"><center><input type="submit" class="btn btn-primary" id="submit" name="Update"></center></th>
                </tr>
                                
              </tbody>
            </table>
          </form>
            
        </div>
      
    </center>
  </div>

  </body>
</html>