<?php
session_start();
if(!isset($_SESSION['username'])){
    header('location:../authentication/signin.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NGO</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;1,100;1,300;1,400;1,500&display=swap" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="include/footer.css">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <style>
        table{
            border: 0px solid black;
            margin-right:30px;
            width: 80%;
        }
        td{
            border:0px solid black;
        }
        td h1,p{
            text-align:left;
            justify-content:space-between;
            font-family: 'Philosopher', sans-serif;
        }
        td img{
            justify-content:right;
            align-items:right;
            padding-left:80px;
        }
        .section1{
	display: flex;
	justify-content: space-between;
	margin:50px 0px;
}
    </style>
</head>
<body>
<div class="main-wrapper" id="home">
    <div class="black-overlay"></div>
    <div class="container-fluid">
       <!-- header  -->
       <div class="main wrapper">
        <div class="balck-overlay"></div>
            <div class="container-fluid">
            <div class="row">
    		<h2 class="sub-head">ULTRASOUND EDUCATION &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small style="font-size:10px;"><?php echo $_SESSION['username'];?> &nbsp;&nbsp;&nbsp;&nbsp;<a href="./authentication/logout.php" class="logout" style="color:white;font-size:7px;">Logout</a></small></h2>
    		<div class="sidebar-panel">
    		    <div class="row">
        		    <div class="col-sm-6">
        		        <button class="opennav">
            		       <i class="fa fa-bars menu-icon fa-2x" aria-hidden="true"></i>
        		        </button>
        		   </div>
        		     <div class="col-sm-6">
        		        <button class="closeing">
            		         <i class="fa fa-times menu-icon fa-2x" aria-hidden="true"></i>
               		        </button>
        		   </div>
    		    </div>
    		    <div class="col-sm-12">
    		        <div class="sidelistwrp">
    		            <ul>
    		                <li  style="font-family:'Philosopher', sans-serif ;text-align:center;"><a href="index.php" >Home</a></li>
    		                <li  style="font-family:'Philosopher', sans-serif ;text-align:center;"><a href="./others/service.php">Services</a></li>
    		                <li  style="font-family:'Philosopher', sans-serif ;text-align:center;"><a href="./others/aboutus.php" >About Us</a></li>
    		                <li  style="font-family:'Philosopher', sans-serif ;text-align:center;"><a href="./others/contact.php"> Contact Us</a></li>
    		                <li  style="font-family:'Philosopher', sans-serif ;text-align:center;"><a href="./others/faq.php" >FAQs</a></li>
    		            </ul>
    		        </div>
    		    </div>
    		 </div>
             
    	</div>
            </div>
        </div>
		<script src="../js/header.js"></script>
</body>
</html>
       <!-- end of header  -->
        <!-- mmain body  -->
        <section class="home">
     <div class="slider">
        <div class="slide active" style="background-image:linear-gradient(to bottom, rgba(46, 46, 46,0.1),rgba(0,0,0,0.7)), url('images/4.jpg')">
            <div class="container">
                <div class="caption">
                    <h1>1. Collaboration</h1>
                    <p>Professions come togethers to share ideas of greater value</p>
                    <a href="">Donate</a>
                </div>
            </div>
        </div>
        <div class="slide" style="background-image:linear-gradient(to bottom, rgba(46, 46, 46,0.1),rgba(0,0,0,0.7)), url('images/5.jpg')">
            <div class="container">
                <div class="caption">
                    <h1>2. Trainings</h1>
                    <p>Get equipt with radiology and medicine</p>
                    <a href="">Donate</a>
                </div>
            </div>
        </div>
        <div class="slide" style="background-image:linear-gradient(to bottom, rgba(46, 46, 46,0.1),rgba(0,0,0,0.7)), url('images/6.jpg')">
            <div class="container">
                <div class="caption">
                    <h1>3. Certification</h1>
                    <p>Access your certificate in just a single click</p>
                    <a href="">Donate</a>
                </div>
            </div>
        </div>
     </div>
   
    <!-- controls  -->
    <div class="controls">
        <div class="prev"><</div>
        <div class="next">></div>
    </div>
     <!-- indicators -->
     <div class="indicator">
    </div>
  </section>

  <!-- content1  -->
  <div class="container">
    <br><br>
    <div class="content1">
        <p class="para1" style="font-size:20px;"><span style="font-size:30px;font-weight:bolder;">Welcome to UCE </span><br><br>where members of professional bodies and teaching institutions get involveg in the field of radiology and imaging</p>
    </div>
    <hr width="200" color=" #FF5722">
  </div>
  <!-- end of first content1 -->
  <div class="container">
   <div class="section1">
    <div class="item">
    <img src="images/machine.jpg" width="300px" height="200px"alt=""><br>
    <p><center>We have machines that are <br>used to train professionals</center></p>
    </div>
    <div class="item">
    <img src="images/preg.jpg" width="300px" height="200px"alt=""><br>
    <p><center>The machines are also capable <br>of scanning pregnancies</center></p>
    </div>
    <div class="item">
    <img src="images/scan.jpg" width="300px" height="200px"alt="">
    <p><center></center></p> 
    </div>
   </div>
  </div>
  <br>
  <div class="container" >
    <div class="last" style="background-color:white;">
        <h4 style="font-family:'Philosopher', sans-serif ;">We strive to deliver profes`sional and high quality ultrasound education for a better perception of the future career and dreams</h4>
    </div>
  </div>
  
    </div>
    <!-- end of main body  -->
    <!-- table  -->
    <table class="table" style="margin-top:80px;">
        <tr>
            <td><img src="./images/6.jpg" width="500px" alt="" style="border-top-left-radius: 0px;border-top-right-radius: 0px;"></td>
            <td>
                <h1>sdfghjkl;fghjkfghjkfghjkfghjk</h1><br>
                <p>cvbnrtyurtyuiofghjklghjkfghjkfghjkfghjfghjfghjfghjkfghjkfghjcvbndfghjfghj<br>ktyuertyuiodfghjkcvbnmertyuidfghjfghjkfghjkfgyuiuioyuioyuiofghjfghdfg<br>rtyuidfghjkcvbndfghjkghjkityuidfghjdfghjkcvbnfghjkftyuityuityuityuifghjb</p>
            </td>
        </tr>
    </table><br><br>
    <div class="last1" style="background-color:#FF5722;height:400px;width:100%">
        <h1 style="text-align:center;color:white;font-family: 'Philosopher', sans-serif;padding:100px 30px 0px 0px;">What we do</h1>
        <p style="text-align:center;color:white;font-family: 'Philosopher',sans-serif">sdfghjksdfghjksdfghjkdfghjkdfghjkdfghjkdfghjkdfghjdfghjfghjk<br>fghjdfghjfghjkdfghjdcfghjcfghjdfghjfghjfghjfghjfghjfghjfghjfghjfghjcfvghjfghjfghjcfghjfghjcffvghjfghjfghjfghjfghj</p>
    </div><br><br><br>
    <!-- end of table  -->
    <?php include("include/footer.php")?>
    <script src="./js/index.js"></script>
    <script src="./js/header.js"></script>
</body>
</html>