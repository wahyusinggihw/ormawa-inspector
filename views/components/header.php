  <!-- ======= Header ======= -->
  <div id="header" class="header fixed-top d-flex align-items-center">
      <div class="d-flex align-items-center justify-content-between">
          <a href="?page=index" class="logo d-flex align-items-center">
              <img class="rounded-circle" src="public/img/favicon.png" alt="">
              <span class="d-none d-lg-block">Ormawa Inspector</span>
          </a>
          <i class="bi bi-list toggle-sidebar-btn"></i>
      </div>

      <!-- <div class="search-bar"> -->
      <!-- <form class="search-form d-flex align-items-center" method="POST" action="#">
          <input type="text" name="query" placeholder="Search" title="Enter search keyword">
              <button type="submit" title="Search"><i class="bi bi-search"></i></button>
          </form>  -->
      <!-- </div> End Search Bar -->

      <nav class="header-nav ms-auto">
          <ul class="d-flex align-items-center">

              <?php
                $role = $_SESSION['user_role'];
                // var_dump($_SESSION['role']);
                if (!is_null($role)) {
                    if ($role != "guest") {
                        include 'views/components/profile_navbar.php';
                        include 'views/components/logout_navbar.php';
                    } else {
                        include 'views/components/login_navbar.php';
                    }
                } else {
                    include 'views/components/login_navbar.php';
                }
                ?>

          </ul>
      </nav>

  </div><!-- End Header -->