<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Head Dashboard</title>

    <?php
require_once "Views/Shared/headsidenav.php";
?>
    <link rel="stylesheet" href="Libraries/Css/ahome.css">
</head>

<body>

    <div class="card-columns">
        <!-- <div class="card bg-primary">
            <a href="students/request">
                <img class="card-img-top" src="images/6.jpg">
                <div class="card-body">
                    <h4 class="card-title">Books Request</h4>
                    <p class="card-text">8</p>
                </div>
            </a>
        </div> -->

        <div class="card bg-success">
            <a href="books/pbooks">
                <img class="card-img-top" src="images/book.jpg">
                <div class="card-body">
                    <h4 class="card-title">P Books</h4>
                    <p class="card-text">8</p>
                </div>
            </a>
        </div>

        <div class="card bg-warning">
            <a href="books/ebooks">
                <img class="card-img-top" src="images/ebook.jpg">
                <div class="card-body">
                    <h4 class="card-title">E Books</h4>
                    <p class="card-text">8</p>
                </div>
            </a>
        </div>

        <div class="card bg-info">
            <a href="students/Students">
                <img class="card-img-top" src="images/students.jpg">
                <div class="card-body">
                    <h4 class="card-title">Total Admin</h4>
                    <p class="card-text">8</p>
                </div>
            </a>
        </div>

        <!-- <!-- <div class="card bg-success">
            <img class="card-img-top" src="images/book.jpg">
            <div class="card-body">
                <h4 class="card-title">Books Received</h4>
                <p class="card-text">8</p>
            </div>
        </div> -->

        <!-- <div class="card bg-danger">
            <a href="students/borrow">
                <img class="card-img-top" src="images/giving.jpg">
                <div class="card-body">
                    <h4 class="card-title">Books Borrowed</h4>
                    <p class="card-text">8</p>
                </div>
            </a>
        </div>
    </div> -->
    </div>


    <?php 
		require_once 'views/shared/linksbottom.php';
	?>
</body>

</html>