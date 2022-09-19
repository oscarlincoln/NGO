<?php

include("conn.php");

if(isset($_POST['submit'])){

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmpassword = $_POST['confirmpassword'];

    $sql = "SELECT * FROM signup WHERE username = $username";

    $result = $con->query($sql);
    if($result->num_rows>0){
        echo "username already exists";
    }else{

        $sq = "INSERT INTO signup(username, email, password, confirmpassword) VALUES('$username','$email','$password','$confirmpassword')";
        if($con->query($sq)){
            echo "data inserted successfully";
        }else{
            echo "error inserting data: ". $con->error;
        }
        
    }
}
$con->close();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sign up</title>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->
    <link rel="stylesheet" href="auth.css">
    <link rel="stylesheet" href="../include/footer.css">
</head>
<body>
    <!-- log in start -->
    <div class="container mt-5 pt-5  mb-5">
        <div class="row">
            <div class="col-12 col-sm-8 col-md-6 m-auto">
                <div class="card border-0 shadow">
                    <div class="card-body">
                       <div class="text-center my-3"> <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16" >
                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                          </svg>
                        </div>
                        <center><h1 style="font-family: 'Philosopher', sans-serif;
}">Sign Up</h1></center>
                        <form action="" method="POST">
                            <input type="text" name="username" placeholder="Username" class="form-control my-4 py-2">
                            <input type="email" name="email" placeholder="Email Address" class="form-control my-4 py-2">
                            <input type="password" name="password" placeholder="Enter password" class="form-control my-4 py-2">
                            <input type="password" name="confirmpassword" placeholder="Confirm your password" class="form-control my-4 py-2">
                            <div class="text-center mt-3">
                                <button class="btn" name="submit" style="background-color:#B7242A;color:white;" width="200px">Sign Up</button>
                                <p>Already have an account? <a href="signin.php">Sign in</a></p>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
<br><br>
    <!-- log in stop -->


    <?php include('../include/footer.php')?>
<script src="auth.js"></script>
</body>
</html>