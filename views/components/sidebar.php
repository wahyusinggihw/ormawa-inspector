 <!-- ======= Sidebar ======= -->
 <aside id="sidebar" class="sidebar">

   <ul class="sidebar-nav" id="sidebar-nav">

     <li class="nav-item">
       <a class="nav-link collapsed" href="<?php BASEURL ?> ?page=index">
         <i class="bi bi-grid"></i>
         <span>Dashboard</span>
       </a>
     </li><!-- End Dashboard Nav -->
     <li class="nav-item">
       <a class="nav-link collapsed" href="<?php BASEURL ?> ?page=penilaian">
         <i class="bi bi-star-half"></i>
         <span>Penilaian Kegiatan</span>
       </a>
     </li><!-- End Dashboard Nav -->
     <?php
      if (isset($_SESSION['role'])) {
        if ($_SESSION['role'] != "mahasiswa" && $_SESSION['role'] != "guest") {
          include 'views/components/side_admin.php';
        }
      }
      ?>
   </ul>

 </aside><!-- End Sidebar-->