<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

    <!-- Topbar Navbar -->
    <?php
    if (isset($_SESSION['admin'])) {
        echo '<ul class="navbar-nav ml-auto">
       
        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">'.$_SESSION["admin"].'</span>
                <img class="img-profile rounded-circle" src="content/img/undraw_profile.svg">
            </a>
          
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                    Profile
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="?page=logout">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                    Logout
                </a>
            </div>
        </li>

    </ul>';
    } else {
        echo '<a class="dropdown-item" href="?page=login">
        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-800"></i>
        Login
    </a>';
    }
    ?>

</nav>