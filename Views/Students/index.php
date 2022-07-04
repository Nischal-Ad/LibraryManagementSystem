<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students Details</title>

    <?php
require_once "Views/Shared/adminsidenav.php";
?>
    <link rel="stylesheet" href="Libraries/Css/heading.css">
</head>

<body>

    <div style="padding: 5px">
        <h1 align="center">Students Details</h1>
        <div class="d-flex flex-row justify-content-between">
            <a href="students/register" class="btn btn-success">Add Students</a>
            <form class="form-inline" action="/action_page.php">
                <input class="form-control" type="Search" placeholder="Search" required />
            </form>
            </a>
        </div>

        <div class="table-responsive" style="margin-top: 1vh; padding: 5px">
            <table class="table">
                <thead class="thead-light">
                    <tr>
                        <th>STU. ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>Contact No.</th>
                        <th>Gender</th>
                        <th>Image</th>
                        <th>Action</th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>15785</td>
                        <td>Nishcal Adhikari</td>
                        <td>nischaladhikari007@gmail.com</td>
                        <td>MNP-8</td>
                        <td>9817922656</td>
                        <td>Male</td>
                        <td><img src="images/6.jpg" class="simg" height="50"></td>
                        <td>
                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                data-target="#updatestudent">
                                Update
                            </button>
                            <a href="#" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>

                    <tr>
                        <td>15785</td>
                        <td>Nishcal Adhikari</td>
                        <td>nischaladhikari007@gmail.com</td>
                        <td>MNP-8</td>
                        <td>9817922656</td>
                        <td>Male</td>
                        <td><img src="images/6.jpg" class="simg" height="50"></td>
                        <td>
                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                data-target="#updatestudent">
                                Update
                            </button>
                            <a href="#" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="modal" id="updatestudent">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">

                        <!-- Modal header-->
                        <div class="modal-header">
                            <h4 class="modal-title">Update Student</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <!-- model body  -->
                        <div class="modal-body">
                            <form method="POST" action="#" class="form-group">
                                <div class="form-group">
                                    <input class="form-control" type="text" name="id" value="15785" required />
                                    <br>
                                    <input class="form-control" type="text" name="username" value="Nischal Adhikari"
                                        required />
                                    <br>
                                    <input class="form-control" type="email" name="email" placeholder="Email">
                                    <br>
                                    <input class="form-control" type="text" name="address" placeholder="Address">
                                    <br>
                                    <input class="form-control" type="number" name="cnum" placeholder="Contact No.">

                                </div>
                            </form>
                        </div>

                        <!-- model footer  -->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            <input type="submit" name="register" value="Update" class="btn btn-primary">
                        </div>
                    </div>
                </div>

                <?php 
		require_once 'views/shared/linksbottom.php';
	?>
</body>

</html>