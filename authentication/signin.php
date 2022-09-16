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
                        <form action="">
                            <center><h1>Sign In</h1></center>
                            <input type="text" name="" id="" placeholder="Username" class="form-control my-4 py-2">
                            <input type="password" name="" id="" placeholder="Password" class="form-control my-4 py-2">
                        </form>
                        <div class="text-center mt-3">
                        <button class="btn" name="submit" style="background-color:#B7242A;color:white;" width="200px">Sign in</button>
                        <p>Don't have an account yet? <a href="signup.php">Sign Up</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><br><br><br><br>
    <?php include('../include/footer.php')?>
<script src="auth.js"></script>
</body>
</html>