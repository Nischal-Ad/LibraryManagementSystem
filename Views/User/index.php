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
<link rel="stylesheet" href="Libraries/Css/style.css">

<body>

    <div class="bgimage">
        <div class="menu">

            <div class="leftmenu">
                <h4> <img src="images/logo1.PNG" alt="logo"> </h4>
            </div>
        </div>

        <div class="text bg-dark container opacity">
            <h1>LEARN ANYWHERE</h1>
            <h3> WE ARE HERE FOR YOU SO YOU CAN LEARN ANYWHERE & ANYTIME</h3>
            <button id="buttonone" type="button" data-toggle="modal" data-target="#myModal">
                Login
            </button>
        </div>
    </div>


    <!-- The Modal -->
    <div class="modal fade" id="myModal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Login</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" name="Semail" id="Semail"
                                placeholder="Enter Email">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" name="Spassword" id="Spassword"
                                placeholder="Enter Password">
                        </div>


                    </form>

                </div>
                <!-- Modal footer -->
                <div class="modal-footer">
                    <a href="#" class="pas"><u> Forget Password?</u></a>
                    <input type="submit" class="btn btn-primary" name="login" value="Login">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>


</body>

</html>
