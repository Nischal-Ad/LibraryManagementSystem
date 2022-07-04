<link rel="stylesheet" href="Libraries/Css/sidenav.css">

<div class="wrapper">
    <!-- Sidebar Holder -->
    <nav id="sidebar" class="navbar-dark bg-dark">
        <div class="sidebar-header">
            <h3>E-Library</h3>
            <strong>LMS</strong>
        </div>

        <ul class="list-unstyled components">
            <li>
                <a href="head/home">
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
                        <a href="head/pbooks">P-Books</a>
                    </li>
                    <li>
                        <a href="head/ebooks">E-books</a>
                    </li>
                </ul>
            </li>

            <li>
                <a href="#admin" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <i class="fas fa-book-open"></i>
                    Admin</a>
                <ul class="collapse list-unstyled" id="admin">
                    <li>
                        <a href="admin/details">Details</a>
                    </li>
                    <li>
                        <a href="admin/register">Register</a>
                    </li>
            </li>

        </ul>
    </nav>