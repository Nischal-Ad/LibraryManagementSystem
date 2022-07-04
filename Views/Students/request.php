<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Books Requested</title>

    <?php
require_once "Views/Shared/adminsidenav.php";
?>
    <link rel="stylesheet" href="Libraries/Css/heading.css">
</head>

<body>

    <div style="padding: 5px">
        <h1 align="center">Books Requested</h1>
        <div class="float-right">
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
                        <th>ISBN NO.</th>
                        <th>Book Name</th>
                        <th>Publication</th>
                        <th>Category</th>
                        <th>Author</th>
                        <th>Price</th>
                        <th>Action</th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>93-5316-571-7</td>
                        <td>Software Engineering</td>
                        <td>McGraw Hill</td>
                        <td>Management</td>

                        <td>
                            Roges S. Pressman <br>
                            Bruce R. Maxim
                        </td>
                        <td>5000</td>
                        <td>
                            <a href="#" class="btn btn-success">Accept</a>
                        </td>

                    </tr>
                    <tr>
                        <td>1</td>
                        <td>93-5316-571-7</td>
                        <td>Software Engineering</td>
                        <td>McGraw Hill</td>
                        <td>Management</td>

                        <td>
                            Roges S. Pressman <br>
                            Bruce R. Maxim
                        </td>
                        <td>5000</td>
                        <td>
                            <a href="#" class="btn btn-success">Accept</a>
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