<?php

$usererr = $emailerr = $passworderr = $confirmerr = "";
$username = $email = $password = $confirmpassword = "";
$boolean = false;
include ("conn.php");   
    if(isset($_POST['submit'])){
    
       
                function validate_input($data){
                    $data = trim($data);
                    $data = stripslashes($data);
                    $data = htmlspecialchars($data);
                    return $data;
                }
            
            
            
                if(empty($_POST['username'])){
                    $usererr = "Username is required";
                    $boolean = false;
                }else{
                    $username = validate_input($_POST['username']);
                    $boolean = true;
                }
            
                if(empty($_POST['email'])){
                    $emailerr = "Email is required";
                    $boolean = false;
                }elseif(!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){
                    $emailerr = "Invalid email";
                    $boolean = false;
                }else{
                    $email = validate_input($_POST['email']);
                    $boolean = true;
                }
                function strlength($str){
                    $ln = strlen($str);
                    if($ln > 15){
                        return "password should be less than 15 characters";
                    }elseif($ln < 8 && $ln>= 1){
                        return "password be 8 and above characters";
                    }
                    return;
                }
            
                $length = strlength($_POST['password']);
            
            
                if(empty($_POST['password'])){
                    $passworderr = "Password is required";
                    $boolean = false;
                }elseif($length){
                    $passworderr = $length;
                    $boolean = true;
                }else{
                    $password = validate_input($_POST['password']);
                    $boolean = true;
                }
                if(empty($_POST['confirmpassword'])){
                    $confirmerr = "please confirm password";
                    $boolean = false;
                }elseif($_POST['confirmpassword']!= $password){
                    $confirmerr = "password not matching";
                    $boolean = false;
                }else{
                    $confirm = validate_input($_POST['confirmpassword']);
                    $boolean = true;
                }
                if($boolean){
                    $sql = "select * from signup where username = '$username'";
                    $result = mysqli_query($con,$sql);
                    if($result){
                        $num = mysqli_num_rows($result);
                        if($num>0){
                            echo "<script>alert('User already exists...')</script>";
                        }else{
                $sql = "insert into signup(username,email,password,confirmpassword) values('$username','$email','$password','$confirmpassword')";
                $result = mysqli_query($con,$sql);
                if($result){
                    echo "Data saved successfully";
                    header("location:signin.php");
                }
            }
        }
        }
    
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sign up</title>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!------ Include the above in your HEAD tag ---------->
    <link rel="stylesheet" href="../include/footer.css">
    <style>
        #span{
            margin-left:3vw;
            color:red;
            font-size:1em;

        }
    </style>
    </head>
<body>
    <!-- log in start -->
    <center><br><br><br>
    <div class="col-5" style="border:0px solid black;border-radius:5%;box-shadow:rgba(50, 50, 93, 0.25) 0px 30px 60px -12px inset, rgba(0, 0, 0, 0.3) 0px 18px 36px -18px inset;">
             <div class="container mt-3 pt-3  mb-3">
        <form action="signup.php" encrypt="multipart/form-data" method="POST">
        <i class='bx bxs-user' style="font-size:100px;"></i>
            <h1 style="font-family: 'Philosopher', sans-serif;">Sign Up</h1>
            <center><span id="span"><?php echo $usererr;?></span></center>
            <input type="text" class="form-control" name="username" placeholder="enter username"><br>
            <center><span id="span"><?php echo $emailerr;?></span></center>
            <input type="email" name="email" class="form-control" placeholder="enter email"><br>
            <center><span id="span"><?php echo $passworderr;?></span></center>
            <input type="password" name="password" class="form-control" placeholder="enter password"><br>
            <center><span id="span"><?php echo $confirmerr;?></span></center>
            <input type="password" name="confirmpassword" class="form-control" placeholder="confirm password"><br>
            
            <p style="font-family: 'Philosopher', sans-serif;">Already have an account? <a href="signin.php">Sign in</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button type="submit" class="btn btn-danger" name="submit" style="font-family: 'Philosopher', sans-serif;">Sign Up</button></p><br>
        </form>
    </div>
</div>
</center>
<br><br><br><br>
    <!-- log in stop -->


    <?php include('../include/footer.php')?>
<script src="auth.js"></script>
</body>
</html>