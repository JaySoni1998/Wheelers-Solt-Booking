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
  <title>Add New Plots & Slots</title> 


  <body >
    
    <center>
      <div class="Location">
        <div class="card card-plot_slot mx-auto mt-5" >
          <form class="" action="{{route('P_S_SaveData')}}" method="post">
          {{csrf_field()}}
            <table class="table table-hover">
              <div class="card-header"><b>Add Plots and Slots</b></div>
              <tbody>
                <tr class="tr">
                  <div class="form-group" >
                    <th scope="row" colspan="2" >Place No </th>    
                    <th>
                     <select name="Place_No" class="form-control" id="place">
                      <option value="" disabled="" selected=""> Select Place</option>
                      @foreach($Place as $p)
                      <option value="{{$p->id}}">{{$p->Place_No}}
                      </option>
                      @endforeach
                      </select>
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
                  <th><input type="SlotNo" name="SlotNo" id="inputEmail" class="form-control" placeholder="Enter Slots Number" > </th>
                </tr>
                <tr>
                  <th scope="row" colspan="2">Vehicle Type</th>
                  <td>
                    <div >
                        <input type="radio" name="VType" value="2 Wheeler"> 2 Wheeler&nbsp;&nbsp;&nbsp;
                        <input type="radio" name="VType" value="3 Wheeler"> 3 Wheeler&nbsp;&nbsp;&nbsp;
                        <input type="radio" name="VType" value="4 Wheeler"> 4 Wheeler                     
                    </div>
                  </td>
                </tr>
                <tr>
                  <th scope="row" colspan="2">Number of Slot</th>
                  <th><input type="SlotofNo" name="NoOfSlot" id="inputEmail" class="form-control" placeholder="Enter Number of Slots" > </th>
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

  <script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>

  <script type="text/javascript">
    $('#location').change(function(e){
      console.log("change",e.target.value);
      $.get('/getlocation?location_id='+e.target.value,function(res){
        console.log(res);
        $("#location").html("");
        for(var i=0;i<res.data.length;i++){
          let element = res.data[i];
          $("#location").append("<option value='"+element.id+"'>"+element.Name+"</option>");
        }

      })

    })

  </script>

 @endsection