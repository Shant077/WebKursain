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
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8" />
	
    <title>Ավտոմեքենաների վաճառք</title>
    <link rel="stylesheet" href="webcss.css" type="text/css" />
    <script type="text/javascript" src="webjs.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/3ec854fc03.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script>
        function animation() {

            $(document).ready(year());
            $(document).ready(function () {
                $('#WelcomeText').animate({
                    opacity: 0.75,
                    fontSize: "+=5px",
                    left: "+=700",
                    height: "toggle",
                    width: "+=16px"
                }, 5000, function () {
                    var d = document.getElementById("WelcomeText").style.display = "none";
                })
            });
			
			
			$(document).ready(function () {
                $('#login').animate({
                    opacity:+1,                 
                   left:"+=550",
				   top:"+=50"
					
			},5000,function(){
				var l=document.getElementById("login").style.left="45px";
			})});
                
            
			
			
            $(document).ready(button());
			
        }
        function button() {
            var mybutton = document.getElementById("myBtn");
            window.onscroll = function () { scrollFunction() };

            function scrollFunction() {
                if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                    mybutton.style.display = "block";
                } else {
                    mybutton.style.display = "none";
                }
            }
        }

        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    
    </script>
	<style>
	a:hover
	{
		background-color:white;
		color:black;
	
	}
	#login
	{
		border:1px solid black;
		height:140px;
        width:300px;
     opacity:0;
        background-color:lightgreen;
		border-radius:18px;
		position:relative;
	}

	</style>
</head>
<body onload="animation()">

    <div class="flex" id="myflex">
        <a href="Dealer.php"><div class="flexitem1" style="background-color:white;"><img src="diller.gif" style="width:25px;height:20px;margin-top:5px;" />Dillers</div></a>
        <a href="sell.php"> <div class="flexitem2" style="background-color:white"><img src="cars.gif" style="width:25px;height:20px;margin-top:5px;" />Sell Car</div></a>
        <a href="MyPage.html"><div class="flexitem3" style="background-color:white"><img src="user.gif" style="width:25px;height:20px;margin-top:5px;" />Page</div></a>
        <a href="sign.php"><div class="flexitem5" style="background-color:white"><img src="sign.gif"  style="width:25px;height:17px;margin-top:5px;"/>Login</div></a>
        <a href="web.html"><div class="flexitem6" style="background-color:red"><img src="home.gif"  style="width:25px;height:17px;margin-top:5px;"/>Home</div></a>
        <a href="Web_Arm.html"><div class="flexitem7"><img src="Armenia.png" style="width:25px;height:17px;margin-top:5px;" />Arm</div></a>
        
        
        
        
        <a href="javascript:void(0);"
           class="icon" onclick="myFunction()">
            <div style="max-width:37px;">
            <i class="fa fa-bars">
            </i>
            </div>
        </a>


    </div>


    <button onclick="topFunction()" id="myBtn"title="Go to top">
    <img onclick="topFunction()" src="top_page.png" style="height:87px; margin:-14px -16px; width:70px; bottom: 20px; right: 5px;z-index: 99;"/>
    </button>
    <br /><br />
    <div id="WelcomeText" style="width:200px;height:100px;margin:20px; position:relative; color:black;left:-20px;">
        <p>Welcome to my page</p>
    </div>
	<?php if (isset($_SESSION['success'])) : ?>
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
    <?php endif ?>
	
    <div class="grid">
        <div id="grid1">
            <h2>Search car</h2>
            <div id="select" style="height:360px; background-color:#2c3e50; margin-left:100px;margin-right:100px;margin-top:0px;">
                <form>
                    <div class="select" style="height:50px;">

                        <select class="slct">
                            <option value="1">Mercedes Benz</option>
                            <option value="2">Bmw</option>
                            <option value="3">Toyota</option>
                            <option value="4">Nissan</option>
                            <option value="5">Dodge</option>
                            <option value="6">Chevrolet</option>
                            <option value="7">Lada</option>
                            <option value="8">Daewoo</option>
                            <option value="9">Citroen</option>
                            <option value="10">Volvo</option>
                            <option value="11">Volkswagen</option>
                            <option value="12">Audi</option>
                            <option value="13">Renault</option>
                        </select>
                    </div>
                    <div class="select" style="height:50px;">
                        <select class="slct" id="yearstart"></select>
                        <select class="slct" id="yearend"></select>
                    </div>
                    <div class="select" style="height:50px;">
                        <select class="slct" id="Pricestart">
                            <option>1000$</option>
                            <option>2000$</option>
                            <option>3000$</option>
                            <option>4000$</option>
                            <option>5000$</option>
                            <option>10000$</option>
                            <option>15000$</option>
                            <option>20000$</option>
                            <option>25000$</option>
                            <option>50000$</option>
                        </select>
                        <select class="slct" id="Priceend">
                            <option>1000$</option>
                            <option>2000$</option>
                            <option>3000$</option>
                            <option>4000$</option>
                            <option>5000$</option>
                            <option>10000$</option>
                            <option>15000$</option>
                            <option>20000$</option>
                            <option>25000$</option>
                            <option>50000$</option>
                        </select>
                        <br /><br />
                    </div>
                    <br /><br />
                    <div><input name="search" value="Search" type="submit" id="search" /></div>
                </form>
            </div>
        </div>
        <div id="grid2">
            <h2>
                About us
            </h2>
            <p style="margin:25px;">
                Welcome to our website.<br />
                Car.am is an online car shop,<br />
                where you can buy and sell cars as much as you want!
            </p>
            <img id="logo" src="icon.png" style="width:420px; height:250px;" />
        </div>
        <div id="grid3">
            <img class="mySlides" src="bmw.jpg">
            <img class="mySlides" src="lexus2.jpg">
            <img class="mySlides" src="lexus3.jpg">
            <img class="mySlides" src="lexus4.jpg">
            <img class="mySlides" src="lexus5.jpg">
            <img class="mySlides" src="lexus6.jpg">
            <img class="mySlides" src="lexus7.jpg" />
            <img class="mySlides" src="lexus.jpg">


        </div>
        <div id="grid4">
            <h2>Best Dealers</h2>
            <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names..">
            <ul id="myUL">
                <li><a href="Dillers.html">Aram Amirjanyan</a></li>
                <li><a href="Dillers.html">Shant Abgaryan</a></li>
              
            </ul>
        </div>
       <div id="grid5">
          <h2>Contacts</h2> 
           <ul>
               <li>Phone:+37494199777</li>
               <li>Email:aramamirjanyan@gmail.com</li>
               <li>Website:www.cars.am</li>
              <img src="fb.png" style="width:40px;height:20px;margin-top:5px; margin-right:250px;"/> <li>Facebook:</li>
             <img src="linkedin.png" style="width:40px;height:20px;margin-top:5px; margin-right:250px;"/>    <li>Linkedin:</li>
              <img src="insta.png" style="width:40px;height:20px;margin-top:5px; margin-right:250px;"/>  <li>Instagram:</li>
             <img src="github.png" style="width:40px;height:20px;margin-top:5px; margin-right:250px;"/>   <li>GitHub:</li>
           </ul>
       </div>
    </div>

    <script>
        function myFunction() {
            
            var x = document.getElementById("myflex");
         
            if (x.className === "flex") {
                x.className += " responsive";
                x.style.zIndex = "10";
                document.body.style.Color="white";
                x.style.opacity = "1.0";
              
            } else {
                x.className = "flex";
            }
        }
        var myIndex = 0;
        carousel();
        function year() {
            var start = 1900;
            var end = new Date().getFullYear();
            var options = "";
            for (var year = start; year <= end; year++) {
                options += "<option>" + year + "</option>";
            }
            document.getElementById("yearstart").innerHTML = options;
            document.getElementById("yearend").innerHTML = options;

        }
        function carousel() {
            var i;
            var x = document.getElementsByClassName("mySlides");
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            myIndex++;
            if (myIndex > x.length) { myIndex = 1 }
            x[myIndex - 1].style.display = "block";
            setTimeout(carousel, 2000);
        }
        

    </script>
</body>
</html >