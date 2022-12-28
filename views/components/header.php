  <!-- ======= Header ======= -->
  <div id="header" class="header fixed-top d-flex align-items-center">
      <div class="d-flex align-items-center justify-content-between">
          <a href="index.html" class="logo d-flex align-items-center">
              <img class="rounded-circle" src="public/img/profile.jpg" alt="">
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

              <!-- INI PROFIL -->
              <!-- <li class="nav-item dropdown pe-3">

                  <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                      <img src="public/img/profile.jpg" alt="Profile" class="rounded-circle">
                      <span class="d-none d-md-block dropdown-toggle ps-2">K. Anderson</span>
                  </a>

                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile" style="">
                      <li class="dropdown-header">
                          <h6>Kevin Anderson</h6>
                          <span>Web Designer</span>
                      </li>
                      <li>
                          <hr class="dropdown-divider">
                      </li>

                      <li>
                          <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                              <i class="bi bi-person"></i>
                              <span>My Profile</span>
                          </a>
                      </li>
                      <li>
                          <hr class="dropdown-divider">
                      </li>

                      <li>
                          <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                              <i class="bi bi-gear"></i>
                              <span>Account Settings</span>
                          </a>
                      </li>
                      <li>
                          <hr class="dropdown-divider">
                      </li>

                      <li>
                          <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                              <i class="bi bi-question-circle"></i>
                              <span>Need Help?</span>
                          </a>
                      </li>
                      <li>
                          <hr class="dropdown-divider">
                      </li>

                      <li>
                          <a class="dropdown-item d-flex align-items-center" href="#">
                              <i class="bi bi-box-arrow-right"></i>
                              <span>Sign Out</span>
                          </a>
                      </li>

                    </li>
                </ul> -->
              <!-- End Profile Dropdown Items -->

              <?php
                if (is_null($_SESSION['user'])) {
                    include 'views/components/login_navbar.php';
                } else {
                    include 'views/components/profile_navbar.php';
                    include 'views/components/logout_navbar.php';
                }
                ?>

          </ul>
      </nav>

  </div><!-- End Header -->