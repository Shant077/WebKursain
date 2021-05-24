      <?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>

<html>
<head>
	<title>Hivandanoc</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous"></head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
<div class="glxavor">
     	<div class="header_container">
     		<div><a  href="index.html"><img src="imagesweb/nkar1.png" alt="image"></a></div>
     		<div>  
     			<span class="icontop"><img src="imagesweb/nkar2.png" alt="#"></span>
     			<span class="iconcont"><a href="tel:800 123 456">800 123 456</a></span>	
     		</div>
     		<div>
     			<span class="icontop">
     				<!-- <i class="fa fa-envelope" aria-hidden="true"> -->
     				<img src="imagesweb/nkar3.png" alt="#">
     			<!-- </i> -->
     		</span>
     			<span class="iconcont"><a data-scroll href="mailto:info@yoursite.com">info@Lifecare.com</a></span>	
     		</div>
     		<div>
     			<span class="icontop"><i class="fa fa-clock-o" aria-hidden="true"></i><img src="imagesweb/nkar.png" alt="#"></span>
     			<span class="iconcont"><a data-scroll href="#">Daily: 7:00am - 8:00pm</a></span>	
     		</div>
     	</div>
     </div>
     <div class="mas1">
     	<ul>
            <li> <?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->

    <?php  if (isset($_SESSION['username'])) : ?>
    	</br>
		<div id="login"><p style="text-align:center;">Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
    	<p> <a href="web.php?logout='1'"style="position:relative;
		color: red;width:150px;height:160px;text-decoration:none;
		 margin-left:90px;">Logout</a> </p>
		</div>
    <?php endif ?></li>
     		<li ><a href="" class="a1">Home</a></li>
     		<li ><a href="" class="a1">About us</a></li>
     		<li ><a href="" class="a1">Services</a></li>
     		<li ><a href="" class="a1">Doctors</a></li>
     		<li ><a href="" class="a1">Price</a></li>
     		<li ><a href="" class="a1">Testimonials</a></li>
     		<li ><a href="" class="a1">Contact</a></li>
     		<li>
     			<input type="" class="a2" name="">
     			<i class="fa fa-search" aria-hidden="true" style="color: #fff"></i>
     		</li>
     		<ul>
     		</div>
            
            
           
	
     		<div class="mas2">  
     			<img src="imagesweb/nkarr6.png" alt="#">
     		</div> 
     		<div>
     			<!-- <marquee class="marquee">Welcome to Life Care</marquee> -->
     		</div>

     		<div class="mas3">
     			<div class="patuhan1">
              <img src="imagesweb/nkar8.png">
     				<!-- <i class="fa fa-ambulance" aria-hidden="true" style="color: white;font-size: 50px;" width="50px"></i> -->
            <p style="font-size: 15px ;color: white">Emergency Case</p>
     				<p style="font-size: 15px;color: white">Dignissimos ducimus qui blanditii sentium volta tum deleniti atque cori as quos dolores et quas mole.</p>
     			</div>
        <div class="patuhan2">
          <img src="imagesweb/nkar9.png">
          <p style="font-size: 15px;">Working Hours</p>
          <div class="time-table-section">
                        <ul>
                           <li><span class="left">Monday - Friday</span><span class="right">8.00 – 18.00</span></li>
                           <li><span class="left">Saturday</span><span class="right">8.00 – 16.00</span></li>
                           <li><span class="left">Sunday</span><span class="right">8.00 – 13.00</span></li>
                        </ul>
          </div>
       </div>
     			<div class="patuhan3">
          <img src="imagesweb/nkar10.png">
          <p style="color: white; font-size: 15px;">Clinic Timetable</p>
             <p style="color: white;font-size: 15px;">Dignissimos ducimus qui blanditii sentium volta tum deleniti atque cori as quos dolores et quas mole.</p>
          </div>
          	<!-- <div class="patuhan2">
          	</div> -->
          	<!-- <div class="patuhan3">
          	</div> -->
          </div>


          <div class="mas4">
             <img src="imagesweb/nkar12.png"><br>
             <!-- <h1>The Specialist Clinic</h1> -->
          </div>

          <div class="mas41">
             <h1>The Specialist Clinic</h1>
          </div>



        <div class="mas5">
          	<div class="mas5mas1" style="background: white; height: 370px">
             <h4>What We Do</h4> 
             <h2>Clinic Service</h2>
              <p class="lead">Quisque eget nisl id nulla sagittis auctor quis id. Aliquam quis vehicula enim, non aliquam risus. Sed a tellus quis mi rhoncus dignissim.</p>
               <p> Integer rutrum ligula eu dignissim laoreet. Pellentesque venenatis nibh sed tellus faucibus bibendum. Sed fermentum est vitae rhoncus molestie. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                <a href="#services" data-scroll class="btn btn-light btn-radius btn-brd grd1 effect-1">Learn More</a>
            </div>
          	<div style="background: lightblue; " class="divss">
               <img src="imagesweb/nkar13.png">
                <a href="http://www.youtube.com/watch?v=nrJtHemSPW4">sss</a> 
               <!-- <a href="http://www.youtube.com/watch?v=nrJtHemSPW4" data-rel="prettyPhoto[gal]" class="playbutton"><i class="flaticon-play-button"></i></a> -->
            </div>
        </div>

          <div class="mas6">
          	<div class="mas6mas1" style="background:#0071d1; height: 175px">
              <img src="imagesweb/nkar14.jpg" style="height:140px; width: 262px;">
              <h4 style="color:white;font-size:20px;">Digital Control Center</h4>
          </div>
          	<div class="mas6mas2" style="background: #0071d1; height: 175px">
                  <img src="imagesweb/nkar15.jpg" style="height:140px; width: 262px;">
                   <h4 style="color:white;font-size:20px;">Hygienic Operating Room</h4>
            </div>
          	<div class="mas6mas3" style="background: #0071d1; height: 175px">
             <img src="imagesweb/nkar16.jpg" style="height:140px; width: 262px;">
                   <h4 style="color:white;font-size:20px;text-align: center;">Specialist Physicians</h4>
            </div>
          	<div style="background: #0071d1; height: 175px">
               <img src="imagesweb/nkar13.png" style="height:140px; width: 262px;">
                   <h4 style="color:white;font-size:20px;text-align: center;font-family: italic">Analizing Control Room</h4>
            </div>
          </div>
          <!-- <div class="mas7" style="background: blue;height: 500px;width: 100%;"></div> -->
       <!--    <div class="mas7" style="height: 500px;width: 100%;">
             <img src="imagesweb/nkar17.png" style="height:500px; width: 100%;">
            <div class="mas7mas1" style="background: #0071d1; height: 175px;width: 150px;padding:10px"></div>
          <div> 
          </div>
          </div> -->

          <div class="mas7">
             <div class="mas6mas1" style="background:#0071d1; height: 175px">
                <img src="imagesweb/nkar21.png" style="height:100px; width: 150px;">
                <h4 style="color:white;font-size:20px;">PREMIUM FACILITIES</h4>
                <p style="color: white">Lorem Ipsum is simply dummy text of the printing.</p>
            </div>
            <div class="mas6mas2" style="background: #0071d1; height: 175px">
              <img src="imagesweb/nkar22.png" style="height:100px; width: 150px;">
                <h4 style="color:white;font-size:20px;">LARGE LABORATORY</h4>
                <p style="color: white">Lorem Ipsum is simply dummy text of the printing.</p>
            </div>
             <div class="mas6mas1" style="background:#0071d1; height: 175px">
              <img src="imagesweb/nkar23.png" style="height:100px; width: 150px;">
              <h4 style="color:white;font-size:20px;">FINE INFRASTRUCTURE</h4>
              <p style="color: white">Lorem Ipsum is simply dummy text of the printing.</p>
             </div>
           <!--  <div class="mas6mas2" style="background: #0071d1; height: 355px; width: 50%">
                  <img src="imagesweb/nkar24.png" style="height:100px; width:150px;">
                   <h4 style="color:white;font-size:20px;">CHILDREN CARE CENTER</h4>
                   <p style="color: white">Lorem Ipsum is simply dummy text of the printing.</p>
            </div> -->
             <!-- <div class="mas6mas2" style="background: #0071d1; height: 175px">
                  <img src="imagesweb/nkar15.jpg" style="height:140px; width: 262px;">
                   <h4 style="color:white;font-size:20px;">Hygienic Operating Room</h4>
            </div> -->
             <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                  <div class="appointment-form">
                     <h3><span>+</span> Book Appointment</h3>
                     <div class="form-group">
                     <input type="" name="" placeholder="Your Name">
                    </div>
                    <div class="form-groupp">
                     <input type="" name="" placeholder="Surname">
                    </div>
                    <div class="form-groupp">
                     <input type="" name="" placeholder="Email Address">
                    </div>
                      <div class="form-groupp">
                     <input type="" name="" placeholder="Phone">
                    </div>
                     <div class="form-groupp">
                     <input type="" name="" placeholder="Addres">
                    </div>
              
                      <!-- <div class="center"><button type="submit">Submit</button></div> -->
                      <div class="form-group">
                                       <div class="center"><button type="submit">Submit</button></div>
                                    </div>
                  </div>
              </div>
               </div>
          </div>
          <div class="mas4">
             <img src="imagesweb/nkar12.png"><br>
             <!-- <h1>The Specialist Clinic</h1> -->
          </div>

          <div class="mas41">
             <h1>The Specialist Clinic</h1>
          </div>


<div class="mas3">
          <div class="patuhan1">
              <img src="imagesweb/nkar25.jpg" style="height:250;width: 380">
                  <div class="widget clearfix">
                        
                    <div class="widget-title">
                            <h3>Bryan Saftler</h3>
                            <small>Internal Diseases</small>
                        </div>
                        <p>Hello guys, I am Soren from Sirbistana. I am senior art director and founder of Violetta.</p>          </div>
          </div>
        <div class="patuhan2">
          <img src="imagesweb/nkar26.jpg" style="height:275;width: 380">
          <div class="widget clearfix">
                        <div class="widget-title">
                            <h3>Bryan Saftler</h3>
                            <small>Internal Diseases</small>
                        </div>
                        <p>Hello guys, I am Soren from Sirbistana. I am senior art director and founder of Violetta.</p>
</div>
       </div>
          <div class="patuhan3">
          <img src="imagesweb/nkar27.jpg"style="height:250;width: 380">
  
                    <div class="widget clearfix">
                        <div class="widget-title">
                            <h3>Matthew Bayliss</h3>
                            <small>Orthopedics Expert</small>
                        </div>
                        <p>Hello guys, I am Soren from Sirbistana. I am senior art director and founder of Violetta.</p>
                    </div>
                </div>

           <div class="container">
            <div class="row">
               <div class="col-md-4">
                  <div class="logo padding">
                     <a href=""><img src="images/logo.png" alt=""></a>
                     <p>Locavore pork belly scen ester pine est chill wave microdosing pop uple itarian cliche artisan.</p>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="footer-info padding">
                     <h3>CONTACT US</h3>
                     <p><i class="fa fa-map-marker" aria-hidden="true"></i> PO Box 16122 Collins Street West Victoria 8007 Australia</p>
                     <p><i class="fa fa-paper-plane" aria-hidden="true"></i> info@gmail.com</p>
                     <p><i class="fa fa-phone" aria-hidden="true"></i> (+1) 800 123 456</p>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="subcriber-info">
                     <h3>SUBSCRIBE</h3>
                     <p>Get healthy news, tip and solutions to your problems from our experts.</p>
                     <div class="subcriber-box">
                        <form id="mc-form" class="mc-form">
                           <div class="newsletter-form">
                              <input type="email" autocomplete="off" id="mc-email" placeholder="Email address" class="form-control" name="EMAIL">
                            <button class="mc-submit" type="submit" style="width: 50px"><i class="fa fa-paper-plane"></i></button>
                          </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
          </div>
      </body>
      </html>