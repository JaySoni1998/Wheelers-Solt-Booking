<!DOCTYPE html>
<html>
  <head>
    <title>Update Plot Slot</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

      <style>
        .Location{
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
      <div class="Location">
        <div class="card card-plot_slot mx-auto mt-5" >
          <form class="" action="{{route('P_S_SaveUpdate')}}" method="post">
            <!-- add csrf token field in every form  -->
            {{csrf_field()}}
            <table class="table table-hover">
              <div class="card-header"><b>Update Plots and Slots</b></div>
              <tbody>
                <tr class="tr">
                  <div class="form-group" >
                    <th scope="row" colspan="2" >Place No </th>    
                    <th>
                     <input type="PlaceNo" name="PlaceNo" id="inputplaceno" class="form-control" placeholder="Enter Place Number" value="PlaceNo" >
                      <!-- <select name="PlaceNo">
                        <option value="volvo">101</option>
                        <option value="saab">102</option>
                        <option value="fiat">103</option>
                        <option value="audi">104</option>
                      </select> -->

                    </th>  
                  </div>
                </tr>
                <tr>
                  <th scope="row" colspan="2">Location Name</th>
                  <th> <label>-</label> </th>
                </tr>
                <tr>
                  <th scope="row" colspan="2">Place Name</th>
                  <th> <label>-</label> </th>
                </tr>
                <tr>
                  <th scope="row" colspan="2">Slot Number</th>
                  <th><input type="SlotNo" name="SlotNo" id="inputEmail" class="form-control" placeholder="Enter Slots Number" value="SlotNo"> </th>
                </tr>
                <tr>
                  <th scope="row" colspan="2">Vehicle Type</th>
                  <td>
                    <div >
                        <input type="radio" name="VType" value="2 Wheeler" value="VType"> 2 Wheeler&nbsp;&nbsp;&nbsp;
                        <input type="radio" name="VType" value="3 Wheeler" value="VType"> 3 Wheeler&nbsp;&nbsp;&nbsp;
                        <input type="radio" name="VType" value="4 Wheeler" value="VType"> 4 Wheeler                     
                    </div>
                  </td>
                </tr>
                <tr>
                  <th scope="row" colspan="2">Number of Slot</th>
                  <th><input type="SlotofNo" name="NoOfSlot" id="inputEmail" class="form-control" placeholder="Enter Number of Slots" value="NoOfSlot"> </th>
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