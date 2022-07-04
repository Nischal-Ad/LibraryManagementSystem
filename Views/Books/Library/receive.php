<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Books Received</title>

    <?php
require_once "Views/Shared/sidenav.php";
?>

</head>

<body>

    <div class="container-fluid" style="padding: 5px;">
        <div class="d-flex flex-row justify-content-between">
            <h1>Books Received</h1>



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
                        <th>Return Date</th>
                        <th>Fine Amt</th>
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
                        <td>25/7/2020</td>
                        <td>0</td>
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
                        <td>25/7/2020</td>
                        <td>0</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <p style="color: #990000">Note: User must return book till 1 month. otherwise, He/She must be charge Fine Amt of
        Rs5.00 per day.</p>

    <?php 
		require_once 'views/shared/linksbottom.php';
	?>
</body>

</html>