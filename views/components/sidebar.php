 <!-- ======= Sidebar ======= -->
 <aside id="sidebar" class="sidebar">

   <ul class="sidebar-nav" id="sidebar-nav">

     <li class="nav-item">
       <a class="nav-link " href="index.html">
         <i class="bi bi-grid"></i>
         <span>Dashboard</span>
       </a>
     </li><!-- End Dashboard Nav -->
     <li class="nav-item">
       <a class="nav-link collapsed" href="#">
         <i class="bi bi-grid"></i>
         <span>Home</span>
       </a>
     </li><!-- End Dashboard Nav -->

     <li class="nav-item">
       <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
         <i class="bi bi-menu-button-wide"></i><span>Components</span><i class="bi bi-chevron-down ms-auto"></i>
       </a>
       <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
         <li>
           <a href="components-alerts.html">
             <i class="bi bi-circle"></i><span>Alerts</span>
           </a>
         </li>
         <li>
           <a href="components-accordion.html">
             <i class="bi bi-circle"></i><span>Accordion</span>
           </a>
         </li>
       </ul>
     </li><!-- End Components Nav -->

     <li class="nav-heading">Pages</li>

     <li class="nav-item">
       <a class="nav-link collapsed" href="users-profile.html">
         <i class="bi bi-person"></i>
         <span>Profile</span>
       </a>
     </li><!-- End Profile Page Nav -->

     <li class="nav-item">
       <a class="nav-link collapsed" href="pages-contact.html">
         <i class="bi bi-envelope"></i>
         <span>Contact</span>
       </a>
     </li><!-- End Contact Page Nav -->

     <li class="nav-item">
       <a class="nav-link collapsed" href="pages-register.html">
         <i class="bi bi-card-list"></i>
         <span>Register</span>
       </a>
     </li><!-- End Register Page Nav -->

     <li class="nav-item">
       <a class="nav-link collapsed" href="pages-login.html">
         <i class="bi bi-box-arrow-in-right"></i>
         <span>Login</span>
       </a>
     </li><!-- End Login Page Nav -->

   </ul>

 </aside><!-- End Sidebar-->

 <main id="main" class="main">

   <div class="pagetitle">
     <h1>Dashboard</h1>
     <nav>
       <ol class="breadcrumb">
         <li class="breadcrumb-item"><a href="index.html">Home</a></li>
         <li class="breadcrumb-item active">Dashboard</li>
       </ol>
     </nav>
   </div><!-- End Page Title -->

   <!-- KONTEN DARI SIDEBAR -->
   <section class="section dashboard">
     <div class="row">

       <?php
        include($childView);
        ?>

     </div>
   </section>

 </main><!-- End #main -->