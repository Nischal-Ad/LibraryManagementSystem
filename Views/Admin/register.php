<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Registrstion</title>

    <?php
require_once "Views/Shared/headsidenav.php";
?>
    <style>
    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }

    .card {
        padding: 5px;
        border-radius: 10px;
        margin-bottom: 20px;
        box-shadow: 5px 10px #888888;
    }
    </style>
</head>

<body>

    <div class="bg-light" align="center">
        <div class="col-lg-6 col-md-6 col-sm-11 card bg-light">
            <div align=" center">
                <div>
                    <img src="images/iconpic.png" class="rounded-circle bg-danger"
                        style=" width: 130px; height: 130px; padding:4px">
                </div>
                <div style="color: black; font-size: 33px;"><b>E-Library</b> </div><br>
                <div style="font-size: 22px; text-decoration: underline;"><b>Admin Registration</b></div>
            </div>
            <form method="POST" action="Admin/RegisterCheck" class="form-group" enctype="multipart/form-data">
                <div class="form-group">
                    <input class="form-control" type="text" name="Lusername" placeholder="Username" required />
                    <br>
                    <input class="form-control" type="email" name="Lemail" placeholder="Email" required />
                    <br>
                    <input class="form-control" type="text" name="Laddress" placeholder="Address" required />
                    <br>
                    <input class="form-control" type="number" name="Lphone" placeholder="Contact No." required />
                    <br>
                    <input class="form-control" type="password" name="Lpassword" placeholder="Password" required />
                    <br>
                    <input class="form-control" type="password" name="Lcpassword" placeholder="Confirm Password"
                        required />
                    <br>
                    <label style="font-weight: bold; text-decoration: underline;">Gender:</label><br>
                    <input type="radio" name="Lgender" id="male" value="male" checked />
                    <label for="male">Male</label>
                    <input type="radio" style="margin-left: 10%" name="Lgender" id="female" value="female">
                    <label for="female">Female</label>
                    <input type="radio" style="margin-left: 10%" name="Lgender" id="female" value="other">
                    <label for="female">Other</label>
                    <br><br>
                    <div align="center" style="text-decoration: underline; color: red;">
                        This feild is also necessary
                        <p><input class="form-control" type="file" accept="image/*" name="Limage" id="file"
                                onchange="loadFile(event)" style="display: none;" required /></p>
                        <p><img class="card" style="padding: 4px" id="output" width="200" height="150" required /></p>
                        <p><label for="file" style="cursor: pointer;" class="btn btn-info">Upload Image</label></p>
                        <script>
                        var loadFile = function(event) {
                            var image = document.getElementById('output');
                            image.src = URL.createObjectURL(event.target.files[0]);
                        };
                        // if (x == null || x == "") {
                        //     outputError = "Please upload your image";
                        //     document.getElementById("output_error").innerHTML = nameError;
                        //     return false;
                        // }
                        // else{
                        //     return true;
                        // }
                        </script>
                    </div>
                    <center>
                        <input type="submit" name="register" value="Register" style="width: 70%"
                            class="btn btn-success btn-block">
                        <br>
                    </center>
                </div>
            </form>
        </div>
    </div>

    <?php 
		require_once 'views/shared/linksbottom.php';
	?>
</body>

</html>