<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<?php
require_once "Views/Shared/link.php";
?>
<link rel="stylesheet" href="Libraries/Css/test.css">

<body>
    <!-- <div class="container">
        <div class="row content">
            <div class="col-md-6 col-sm-12 col-12">
                <center> <img src="Images/lms.png" class="img-fluid image">
                </center>
            </div>
            <div class="col-md-6">

                <form action="#">
                    <div class="form-group">
                        <input class="form-control form-control-lg feild" type="text" name="id" placeholder="STU ID"
                            required />
                        <br>
                        <input class="form-control form-control-lg feild" type="password" name="password"
                            placeholder="Password" required />
                        <br>
                        <input type="submit" class="btn btn-block btn-primary form-control form-control-lg" name="login"
                            value="Login">
                        <br>
                        <center> Do you want some help?
                            <br><a href="#">Forget Password?</a>
                        </center>
                    </div>
                </form>


            </div>
        </div>
    </div> -->
    <center>
        <div class="card card-columns bg-light">

            <div class="">
                <center> <img src="Images/lms.png" class="img-fluid image">
                </center>
            </div>
            <div>
                <form action="#">
                    <div class="form-group">
                        <input class="form-control form-control-lg feild" type="text" name="id" placeholder="STU ID"
                            required />
                        <br>
                        <input class="form-control form-control-lg feild" type="password" name="password"
                            placeholder="Password" required />
                        <br>
                        <input type="submit" class="btn btn-block btn-primary form-control form-control-lg" name="login"
                            value="Login">
                        <br>
                        <center> Do you want some help?
                            <br><a href="#">Forget Password?</a>
                        </center>
                    </div>
                </form>
            </div>

        </div>
    </center>
</body>

</html>