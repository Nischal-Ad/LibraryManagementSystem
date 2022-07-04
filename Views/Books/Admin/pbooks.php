<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>P-Books</title>

    <?php
require_once "Views/Shared/adminsidenav.php";
?>
    <link rel="stylesheet" href="Libraries/Css/heading.css">
</head>

<body>

    <div style="padding: 5px">
        <h1 align="center">P-Books</h1>
        <div class="d-flex flex-row justify-content-between">
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#addpbook">
                Add Books
            </button>
            <form class="form-inline" action="/action_page.php">
                <input class="form-control" type="Search" placeholder="Search" required />
            </form>
            </a>
        </div>

        <!-- model  -->
        <div class="modal" id="addpbook">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">

                    <!-- Modal header-->
                    <div class="modal-header">
                        <h4 class="modal-title">Add P-Books</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <!-- model body  -->
                    <div class="modal-body">
                        <form method="POST" action="#" class="form-group">
                            <div class="form-group">
                                <input class="form-control" type="number" name="isbn" placeholder="ISBN No." required />
                                <br>
                                <input class="form-control" type="text" name="name" placeholder="Name" required />
                                <br>
                                <input class="form-control" type="text" name="publication" placeholder="Publication"
                                    required />
                                <br>
                                <input class="form-control" type="text" name="category" placeholder="Category"
                                    required />
                                <br>
                                <input class="form-control" type="text" name="auther" placeholder="Auther" required />
                                <br>
                                <input class="form-control" type="text" name="price" placeholder="Price" required />
                                <br>
                                <input class="form-control" type="text" name="stock" placeholder="Stock" required />
                            </div>
                        </form>
                    </div>

                    <!-- model footer  -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        <input type="submit" name="register" value="Add" class="btn btn-success">
                    </div>

                </div>
            </div>
        </div>

        <div class="table-responsive" style="margin-top: 1vh">
            <table class="table">
                <thead class="thead-light">
                    <tr>
                        <th>ISBN. No</th>
                        <th>Name</th>
                        <th>Publication</th>
                        <th>Category</th>
                        <th>Author</th>
                        <th>Price</th>
                        <th>stock</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>93-5316-571-7</td>
                        <td>Software Engineering</td>
                        <td>McGraw Hill</td>
                        <td>Management</td>

                        <td>
                            Roges S. Pressman <br>
                            Bruce R. Maxim
                        </td>
                        <td>18,000</td>
                        <td>250</td>
                        <td>
                          <button type="button" class="btn btn-primary" data-toggle="modal"
                                data-target="#updatestudent">
                                Update
                            </button>
                            <a href="#" class="btn btn-danger">Delete</a>

                        </td>
                    </tr>
                    <tr>
                        <td>978-81-8333-008-4</td>
                        <td>Web Development</td>
                        <td>BPD</td>
                        <td>Management</td>

                        <td>Ivan Bayross</td>
                        <td>399</td>
                        <td>357</td>
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
            <div class="modal" id="updatebook">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">

                        <!-- Modal header-->
                        <div class="modal-header">
                            <h4 class="modal-title">Update P-Books</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <!-- model body  -->
                        <div class="modal-body">
                            <form method="POST" action="#" class="form-group">
                                <div class="form-group">
                                    <input class="form-control" type="number" name="isbn" value="9788183330084"
                                        required />
                                    <br>
                                    <input class="form-control" type="text" name="name" value="Software Engineering"
                                        required />
                                    <br>
                                    <input class="form-control" type="text" name="publication" value="McGraw Hill"
                                        required />
                                    <br>
                                    <input class="form-control" type="text" name="category" value="Management"
                                        required />
                                    <br>
                                    <input class="form-control" type="text" name="auther" value="Roges S. Pressman"
                                        required />
                                    <br>
                                    <input class="form-control" type="text" name="price" placeholder="Price">
                                    <br>
                                    <input class="form-control" type="text" name="stock" placeholder="Stock">
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
            </div>
        </div>
    </div>
    <?php 
		require_once 'views/shared/linksbottom.php';
	?>
</body>

</html>