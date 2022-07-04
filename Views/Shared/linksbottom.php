<?php
require_once "views/shared/link.php";
?>
<link rel="stylesheet" href="libraries/css/sidenav.css">
<!-- Main Footer -->
<!-- <footer class="-bottom"> -->
<!-- To the right -->

<!-- Default to the left -->
<!-- <strong>Copyright &copy; <a href="#">NISCHAL & ROMAN</a>.</strong>
</footer> -->


<!-- <footer class="main-footer"> -->
<!-- To the right -->
<!-- <div class="pull-right hidden-xs">
        Anything you want
    </div> -->
<!-- Default to the left -->
<!-- <strong>Copyright &copy; 2016 <a href="#">Company</a>.</strong> All rights reserved.
</footer> -->

<footer class="footer text-center navbar-fixed-bottom">
    <strong>Copyright &copy; <a href="#">NISCHAL & ROMAN</a>.</strong>
</footer>


<!-- <footer class="footer navbar-fixed-bottom"> -->
<!-- Your page footer here...
<strong>Copyright &copy; <a href="#">NISCHAL & ROMAN</a>.</strong>
</footer> -->

<script type="text/javascript">
$(document).ready(function() {
    $('#sidebarCollapse').on('click', function() {
        $('#sidebar').toggleClass('active');
    });
});
</script>
