@extends('Layout.app')
@section("main-content")

<style>
  hr.line {
  border-top: 1px solid black;
}
body{
  margin-bottom: 50px;
}
</style>

<title>Home</title>

<body>

    <div id="app">
    	<center>
      <div class="scan">
        <div class="card card-noti mx-auto mt-5" >
          
            <table class="table table-hover">
              <div class="card-header"><b>QR Code Scanner</b></div>
              <tbody>
                <tr>
                 
                    <th> <div class="abc">Enter Booking No :</div></th>
                    <td><input type="PName" id="inputEmail" class="form-control" placeholder="Enter QR Code"></td>
                  	 
                </tr>
                <tr>
                  <td colspan="2"><center><b>OR</b></center></td>
                </tr>
                <tr>
                  <th colspan="2">
                    <center>
                      <video id="preview" autoplay="autoplay" class="active" width="200" height="150"></video>
                    </center>
                  </th>
                </tr>

                <tr>
                  <td colspan="2">
                    <center>
                      <div id="app">               
                        <div class="barcode1"><p v-if="scans.length === 0" class="empty">#Barcode</p></div>       
                        <div class="abc"><p v-for="scan in scans" :key="scan.date" :title="scan.content">
                          @{{scan.content}}
                        </p></div>        
                      </div>
                    </center>
                  </td>
                </tr>             
                               
                <tr>
                  <th colspan="2">
                    <center><a class="btn btn-primary" href="#" >Submit</a></center>
                  </th>
                </tr>
                </tbody>                                                
              </tbody>
              </div>
            </table>
        </div>
      </div>    
    </center>

    <center>
      <div class="New_booking_details" >
        <div class="Location">
          <div class="card card-plot_slot mx-auto mt-5" >
          
            <table class="table table-hover">
              <div class="card-header"><b>NEW BOOKING</b></div>
                <thead>
                  <tr bgcolor="#006666">
                    <th scope="col"><font color="white">No</font></th>
                    <th scope="col"><font color="white">Name</font></th>
                    <th scope="col"><font color="white">Check In</font></th>
                    <th scope="col"><font color="white">Check Out</font></th>
                    <th scope="col"><font color="white">Vehicle Type</font></th>
                    <th scope="col"><font color="white">Place Name</font></th>
                    </tr>
                </thead>

                <tbody>
                <tr>
                  <th scope="row">1</th>
                    <td>Jay Soni</td>
                    <td>12:00 PM</td>
                    <td>02:00 PM</td>
                    <td>2 Wheeler</td>
                    <td>Alpha One Mall</td>
                  </tr>

                  <tr>
                    <th scope="row">2</th>
                    <td>Dhruvi Patel</td>
                    <td>01:30 PM</td>
                    <td>04:30 PM</td>
                    <td>4 Wheeler</td>
                    <td>Balaji Agora Mall</td>
                  </tr>

                  <tr>
                    <th scope="row">3</th>
                      <td>Krishan Shah</td>
                      <td>10:00 AM</td>
                      <td>01:00 PM</td>
                      <td>2 Wheeler</td>
                      <td>Himalaya Mall</td>
                  </tr>

                  <tr>
                    <th scope="row">4</th>
                    <td>Jay Bhalodiya</td>
                    <td>11:00 AM</td>
                    <td>01:00 PM</td>
                    <td>3 Wheeler</td>
                    <td>D-Mart (Bapunagar)</td>
                  </tr>
                </tbody>
              </div>
            </table>
          </div >
        </div>
      </div>  
    </center>
    </div>
    
  </body>

    
    <script >
    	var app = new Vue({
		  el: '#app',
		  data: {
		    scanner: null,
		    activeCameraId: null,
		    cameras: [],
		    scans: []
		  },
		  mounted: function () {
		    var self = this;
		    self.scanner = new Instascan.Scanner({ video: document.getElementById('preview'), scanPeriod: 5 });
		    self.scanner.addListener('scan', function (content, image) {
		      self.scans.unshift({ date: +(Date.now()), content: content });
		    });
		    Instascan.Camera.getCameras().then(function (cameras) {
		      self.cameras = cameras;
		      if (cameras.length > 0) {
		        self.scanner.start(cameras[0]);
		      } else {
		        console.error('No cameras found.');
		      }
		    }).catch(function (e) {
		      console.error(e);
		    });
		  }
		 
		});

    </script>



  @endsection()