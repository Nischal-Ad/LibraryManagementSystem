<link rel="stylesheet" href="Libraries/Css/sidenav.css">

<div class="wrapper">
    <!-- Sidebar Holder -->
    <nav id="sidebar" class="text-dark">
        <div class="sidebar-header">
           <h3> <a href="admin/home"><img src="images/logo1.PNG" alt="" srcset="" width="160"></a>
            </h3>
            <strong class="strong"><a href="admin/home"><img class="center" src="images/logo.PNG" alt=""
                        srcset=""></a></strong>
        </div>

        <ul class="list-unstyled components">
            <li>
                <a href="admin/home">
                    <i class="fas fa-home"></i>
                    Home
                </a>
            </li>

            <li>
                <a href="#books" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <i class="fas fa-book"></i>
                    Books</a>
                <ul class="collapse list-unstyled" id="books">
                    <li>
                        <a href="books/pbooks">P-Books</a>
                    </li>
                    <li>
                        <a href="books/ebooks">E-books</a>
                    </li>
                </ul>
            </li>

            <li>
                <a href="#students" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <i class="fas fa-book-open"></i>
                    Students</a>
                <ul class="collapse list-unstyled" id="students">
                    <li>
                        <a href="students/borrow">Books Borrowed</a>
                    </li>
                    <li>
                        <a href="students/request">Books Requested</a>
                    </li>
                    <li>
                        <a href="students/students">Details</a>
                    </li>
                    <li>
                        <a href="students/register">Register</a>
                    </li>
                </ul>
            </li>

        </ul>
    </nav>