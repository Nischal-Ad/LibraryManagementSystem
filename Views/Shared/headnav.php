<!-- Page Content Holder -->
<link rel="stylesheet" href="libraries/css/sidenav.css">
<div id="content">

    <nav class="navbar navbar-expand-sm navbar-dark bg-dark sticky-top">
        <div class="container-fluid">


            <button type="button" id="sidebarCollapse" class="navbar-btn btn btn-light">
                <i class="fas fa-bars"></i>
            </button>


            <ul class="nav navbar-nav d-flex flex-row" style="max-width: 100%; overflow:hidden;">

                <!-- <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="images/user.jpg" width="40" height="25" alt="logo">
                        Nischal Adhikari
                    </a>
                    <ul class="dropdown-menu">
                        <li class="user-footer">
                            <div class="pull-left bg-info">
                                <center>
                                    <img src="/library/images/p.jpg" class="rounded-circle img" height="70" width="90">
                                    <h4 class="profile">Nischal Adhikari</h4>
                                    <p class="pdef">
                                        9817922656
                                        <br>
                                        Mechinagar-8 Durgamandir
                                    </p>
                                </center>
                        </li>
                        <li class="user-footer">
                            <div class="pull-left">
                                <a href="#" class="btn btn-default btn-flat">Profile</a>
                            </div>
                            <div class="pull-right">
                                <a href="#" class="btn btn-default btn-flat">Sign out</a>
                            </div>
                        </li>
                    </ul>
                </li>

                </li> -->

                <!-- <li class="nav-item active">
                    <a class="nav-link icon" href="#">
                        <i class="fas fa-bell"></i>
                    </a>
                </li> -->


                <li class="nav-item dropdown active">
                    <div class="user">
                        <a class="nav-link dropdown-toggle" href="#profiledrop" aria-haspopup="true"
                            aria-expanded="false" data-toggle="collapse">
                            <img src="images/user.jpg" width="40" height="25" alt="logo">
                            <p class="d-inline text-white" id="profilename">Admin</p>
                        </a>
                    </div>
                </li>

            </ul>
        </div>
    </nav>
    <div class="dropdown-menu-right bg-info collapse list-unstyled profiledrop" id="profiledrop">

        <center>
            <img src="images/user.jpg" class="rounded-circle img" height="70" width="90">
            <h4 class="profile">Admin</h4>
        </center>
        <button type="button" class="btn btn-warning mr-auto">
            <i class="fas fa-lock"></i>
            Change Password
        </button>

        <button type="button" class="btn btn-danger float-right">
            <i class="fas fa-sign-out-alt"></i>
            Logout
        </button>
    </div>