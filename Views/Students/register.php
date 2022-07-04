<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration</title>

    <?php
require_once "Views/Shared/adminsidenav.php";
?>
</head>
<style>
    .rounded-circle{
          border: 2px solid #b6cad3;
  border-radius: 5px;
    }
</style>
<body>

    <div class="bg-light" align="center"">
        <div class=" col-lg-6 col-md-6 col-sm-11 card bg-light">
        <div align=" center">
            <div>
                <img src="images/logo.png" class="rounded-circle"
                    style=" width: 130px; height: 130px; padding:4px">
            </div>
            <div style="color: black; font-size: 33px;"><b>E-Library</b> </div><br>
            <div style="font-size: 22px; text-decoration: underline;"><b>Student Registration</b></div>
            <br>
        </div>
        <form method="POST" action="Students/RegisterCheck" class="form-group" enctype="multipart/form-data">
            <div class="form-group">
                <input class="form-control" type="text" name="Susername" placeholder="Username" required />
                <br>
                <input class="form-control" type="email" name="Semail" placeholder="Email" required />
                <br>
                <input class="form-control" type="text" name="Saddress" placeholder="Address" required />
                <br>
                <input class="form-control" type="number" name="Sphone" placeholder="Contact No." required />
                <br>
                <input class="form-control" type="password" name="Spassword" placeholder="Password" required />
                <br>
                <input class="form-control" type="password" name="Scpassword" placeholder="Confirm Password" required />
                <br>
                <label style="font-weight: bold; text-decoration: underline;">Gender:</label><br>
                <input type="radio" name="Sgender" id="male" value="male" checked />
                <label for="male">Male</label>
                <input type="radio" style="margin-left: 10%" name="Sgender" id="female" value="female">
                <label for="female">Female</label>
                <input type="radio" style="margin-left: 10%" name="Sgender" id="female" value="other">
                <label for="female">Other</label>
                <br><br>
                <div align="center" style="text-decoration: underline; color: red;">
                    This feild is also necessary
                    <p><input class="form-control" type="file" accept="image/*" name="Simage" id="file"
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