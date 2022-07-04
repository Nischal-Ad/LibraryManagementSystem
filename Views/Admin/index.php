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
<link rel="stylesheet" href="Libraries/Css/login.css">

<body>

    <section>
        <div align="center">
            <div class="card col-lg-6 col-md-8 col-sm-12 col-12">
                <div class="card-body">
                    <div align-"center">
                        <img src="Images/logo1.png">
                    </div>

                    <h3> <u> Admin Login</u></h3>
                    <br>
                    <div class="form-group">
                        <form action="Admin/Logincheck" method="POST">
                            <input class="form-control form-control-lg feild" type="email" name="Lemail"
                                placeholder="ID" required />
                            <br>
                            <input class="form-control form-control-lg feild" type="password" name="Lpassword"
                                placeholder="Password" required />
                            <br>
                            <input type="submit" class="btn btn-primary form-control form-control-lg" name="login"
                                value="Login">
                            <br><br>
                            Do you want some help?
                            <br><a href="#" class="pas"><u> Forget Password?</u></a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>

</html>