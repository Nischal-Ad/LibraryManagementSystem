<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>P-Books</title>

    <?php
require_once "Views/Shared/sidenav.php";
?>

</head>

<body>


    <div class="container-fluid" style="padding: 5px;">
        <div class="d-flex flex-row justify-content-between">
            <h1>P-Books</h1>



            <form class="form-inline" action="/action_page.php">
                <input class="form-control" type="Search" placeholder="Search..." required />

            </form>

            </a>
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
                            <a href="#" class="btn btn-success">Request</a>

                        </td>
                    </tr>
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
                            <a href="#" class="btn btn-success">Request</a>

                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>




    <?php 
		require_once 'views/shared/linksbottom.php';
	?>
</body>

</html>