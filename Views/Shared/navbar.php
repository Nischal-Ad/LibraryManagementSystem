<!-- Page Content Holder -->
<link rel="stylesheet" href="Libraries/Css/sidenav.css">
<div id="content">

    <nav class="navbar navbar-expand-sm navbar-lightsticky-top">
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

                <li class="nav-item active d-inline-flex">
                    <a style="padding: 10px;" class="nav-link icon" href="#">
                        <i class="fas fa-bell"></i>
                    </a>
                </li>


                <li class="nav-item dropdown active d-inline-flex">
                    <div class="user">
                        <a class="nav-link dropdown-toggle" href="#profiledrop" aria-haspopup="true"
                            aria-expanded="false" data-toggle="collapse">
                            <img class="d-inline user" src="images/user.jpg" width="35" height="25" alt="logo">


                            <p class="d-inline text-dark" id="profilename">Nischal Adhikari</p>


                        </a>
                    </div>
                </li>

            </ul>
        </div>
    </nav>
    <div class="dropdown-menu-right bg-light text-dark collapse list-unstyled profiledrop" id="profiledrop">

        <center>
            <img src="images/p.jpg" class="rounded-circle img" height="70" width="90">
            <h4 class="profile">Nischal Adhikari</h4>
            <p class="pdef">
                9817922656
                <br>
                Mechinagar-8 Durgamandir
            </p>
        </center>

        <button type="button" class="btn btn-warning mr-auto" data-toggle="modal" data-target="#changepassword">
            <i class="fas fa-lock"></i>
            Change Password
        </button>

        <!-- <div class="modal" id="changepassword">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content"> -->

        <!-- Modal header-->
        <!-- <div class="modal-header">
                    <h4 class="modal-title">Change Passwordt</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div> -->
        <!-- model body  -->
        <!-- <div class="modal-body">
                    <form method="POST" action="#" class="form-group">
                        <div class="form-group">
                            <input class="form-control" type="password" name="password" placeholder="Old Password"
                                required />
                            <br>
                            <input class="form-control" type="password" name="password" placeholder="New Password"
                                required />
                            <br>
                            <input class="form-control" type="password" name="cpassword" placeholder="Confirm Password"
                                required />
                            <br>
                        </div>
                    </form>
                </div> -->

        <!-- model footer  -->
        <!-- <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    <input type="submit" name="register" value="Update" class="btn btn-primary">
                </div> -->

        <button type="button" class="btn btn-danger float-right">
            <i class="fas fa-sign-out-alt"></i>
            Logout
        </button>
    </div>
