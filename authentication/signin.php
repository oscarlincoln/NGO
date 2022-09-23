<?php

$login = 0;
$invalid = 0;

if($_SERVER["REQUEST_METHOD"]=="POST"){
    include("conn.php");
    $username = $_POST['username'];
    $password =$_POST['password'];

    $sql = "select * from signup where username = '$username' and password = '$password'";
    $result = mysqli_query($con, $sql);
    if($result){
    $num = mysqli_num_rows($result);
    if($num>0){
        $login=1;
        session_start();
        $_SESSION['username']=$username;
        header("location:../index.php");
    }else{
        echo "<script>alert('User does not exist..')</script>";
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
    <title>sign in</title>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!------ Include the above in your HEAD tag ---------->
    <link rel="stylesheet" href="../include/footer.css">
    </head>
<body >
    <!-- log in start -->
    <center><br><br><br>
    <div class="col-5" style="border:0px solid black;border-radius:5%;box-shadow:rgba(50, 50, 93, 0.25) 0px 30px 60px -12px inset, rgba(0, 0, 0, 0.3) 0px 18px 36px -18px inset;">
             <div class="container mt-3 pt-3  mb-3">
        <form action="signin.php" method="POST">
        <i class='bx bxs-user' style="font-size:100px;"></i>
            <h1 style="font-family: 'Philosopher', sans-serif;">Sign In</h1>
            <input type="text" class="form-control" name="username" placeholder="enter username"><br>
           
            <input type="password" name="password" class="form-control" placeholder="enter password"><br>
            
           
            <p style="font-family: 'Philosopher', sans-serif;">Don't have an account? <a href="signup.php">Sign up</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button type="submit" class="btn btn-danger" name="submit" style="font-family: 'Philosopher', sans-serif;">Sign Up</button></p><br>
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