@extends('Layout.app')
@section("main-content")
      <style>
        .Location{
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
<title>Upadate Plots & Slot</title>

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
                     <input type="PlaceNo" name="PlaceNo" id="inputplaceno" class="form-control" placeholder="Enter Place Number" value="PlaceNo" required="Please fill out this field">
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
                  <th><input type="SlotNo" name="SlotNo" id="inputEmail" class="form-control" placeholder="Enter Slots Number" value="SlotNo" required="Please fill out this field"> </th>
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
                  <th><input type="SlotofNo" name="NoOfSlot" id="inputEmail" class="form-control" placeholder="Enter Number of Slots" value="NoOfSlot" required="Please fill out this field"> </th>
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
 @endsection