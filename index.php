<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NGO</title>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;1,100;1,300;1,400;1,500&display=swap" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="include/footer.css">
</head>
<body>
<div class="main-wrapper">
    <div class="black-overlay"></div>
    <div class="container-fluid">
        <?php include('include/header.php')?>

        <!-- mmain body  -->
        <section class="home">
     <div class="slider">
        <div class="slide active" style="background-image: url('images/4.jpg')">
            <div class="container">
                <div class="caption">
                    <h1>1. Collaboration</h1>
                    <p>Professions come togethers to share ideas of greater value</p>
                    <a href="">Donate</a>
                </div>
            </div>
        </div>
        <div class="slide" style="background-image: url('images/5.jpg')">
            <div class="container">
                <div class="caption">
                    <h1>2. Trainings</h1>
                    <p>Get equipt with radiology and medicine</p>
                    <a href="">Donate</a>
                </div>
            </div>
        </div>
        <div class="slide" style="background-image: url('images/6.jpg')">
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
  <div class="container">
   <div class="section1">
    <div class="item">
    <img src="images/6.jpg" width="300px" alt="">
    <p>xdcfvbnm,</p>
    </div>
    <div class="item">
    <img src="images/6.jpg" width="300px" alt="">
    <p>dfghjk</p>
    </div>
    <div class="item">
    <img src="images/6.jpg" width="300px" alt="">
    <p>sdfghjk</p> 
    </div>
   </div>
  </div>
    </div>
    <!-- end of main body  -->
    <?php include("include/footer.php")?>
    <script src="./js/index.js"></script>
    <script src="./js/header.js"></script>
</body>
</html>