<!DOCTYPE html>
<html>
	<head>
		
    
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

     <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/webrtc-adapter/3.3.3/adapter.min.js"></script>
     <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.1.10/vue.min.js"></script>
     <script type="text/javascript" src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>

     <meta name="viewport" content="width=device-width, initial-scale=1">

		<style>
      

			p.appName { 
  				padding-top: 18px;
  				padding-left: 10px;
			}

			div.nav_drowar{
				padding-left: 10px;
				margin-top: 10px;
			}
      div.booking_details{
        margin-right: 500px;
        margin-left: 500px;
      }
      div.card-header2{
        margin-right: 30px;
      }
      div.dropdown1{
        position: relative;
      }
      div.dropdown2{
        margin-left: 10px;
        position: relative;
      }
      div.QRcode{
        margin-top: 10px;
        margin-bottom: 10px;
      }
      .toper{
        margin-left: 30px;
        margin-right: 30px;
      }

      .App_name{
        color: #ffffff;
        padding-left: 10px;
      }

      .scan{
          margin-top: 10px;
          margin-left: 510px;
          margin-right: 510px;
        } 

        a.nav-link{
          color: white;
        }

        .New_booking_details{
          margin-left: 50px;
          margin-right: 50px;
        }

        div.abc{
          margin-top: 9px;
        }  

        div.barcode1{
          margin-top: 20px;
        }  

        .footer {
          position: fixed;
           left: 0;
           bottom: 0;
           width: 100%;
           height: 60px;
           color: white;
           text-align: center;
           } 


		</style>
	</head>

	<body>
    <div class="top">
   
		<nav class="navbar navbar-expand-lg  navbar-light bg-dark">
  		
  			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    		  <span class="navbar-toggler-icon"></span>
  			</button>
  		
  			<div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    			<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
			    	<li class="nav-item active">

      					<div class="appName">
                  <img class="logo" height="50" width="50" src="Images\logo.png">
                  <label class="App_name"><b>Wheelers Slot Booking</b></label> 
                </div>
            </li>
      		</ul>
    			
            <ul class="nav justify-content-center">
              <li class="nav-home">
                <a class="nav-link active" href="home">Home</a>
                
                
              </li>

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Location</a>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="Add_Location">Add Location</a>
                  <a class="dropdown-item" href="View_Location">View Location</a>
                </div>
              </li>

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Plots and Slots</a>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="Add_Plots_&_Slots">Add Plots & Slots</a>
                  <a class="dropdown-item" href="View_Plots_&_Slots">View Plots And Slots</a>
                </div>
              </li>

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Package</a>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="Add_Package">Add Package</a>
                  <a class="dropdown-item" href="View_Package">View Package</a>
                </div>
              </li>

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Staff Details</a>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="Add_Staff_Details">Add Staff</a>
                    <a class="dropdown-item" href="View_Staff">View Staff</a>
                </div>
              </li>

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Report</a>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="Report_Feedback">Feedback</a>
                    <a class="dropdown-item" href="Report_Location">Location</a>
                    <a class="dropdown-item" href="Report_Package">Packages</a>
                    <a class="dropdown-item" href="Report_Staff">Staff</a>
                </div>
              </li>

              <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><img src="Images/Admin.jpg" style="height: 40px; width: 40px; border-radius: 50%; border:2px solid"></img></a>
                <div class="dropdown-menu">
                  <div class="profile">
                  <a class="dropdown-item" href="Admin_View_Profile">Profile</a>
                  <a class="dropdown-item" href="View_Feedback">Feedback</a>
                  <a class="dropdown-item" href="Login">Logout</a>
                </div>
                </div>
              </li>
              <a class="nav-link" href="notification"> <img src="Images/notification.png" style="height: 40px; width: 40px; border-radius: 50%"></img></a>

            </ul>
          
        
  			</div>
		</nav>
 
  </div>

  @yield("main-content")

  <!-- <footer class="footer bg-dark"> 

    <div >
      <label>Wheelers Slot Booking</label> 
    </div>
  </footer>
 -->
  

</body>
</html>