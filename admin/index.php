<!DOCTYPE html>
<html lang="en">
    
<?php include('partials/head.php') ?>

<body>
  <div class="admin-shell">
    <!-- sidebar start -->
     <?php include('components/sidebar.php') ?>
    <!-- sidebar end -->

    <div class="admin-main">
      <!-- header start-->
       <?php include('components/header.php') ?>
      <!-- header end -->
        <div class="container-fluid px-3 px-lg-4">
          <button class="sidebar-toggle" type="button" data-sidebar-toggle aria-controls="adminSidebar" aria-expanded="true" aria-label="Toggle sidebar">
            <span></span>
            <span></span>
            <span></span>
          </button>

          <form class="d-none d-md-flex ms-3 flex-grow-1" role="search">
            <input class="form-control search-input" type="search" placeholder="Search users, orders, reports" aria-label="Search">
          </form>

          <div class="navbar-actions ms-auto">
            <button class="icon-button theme-toggle" type="button" data-theme-toggle aria-label="Switch color theme" title="Switch color theme">
              <i class="bi bi-moon-stars" data-theme-icon aria-hidden="true"></i>
            </button>
            <div class="dropdown">
              <button class="icon-button" type="button" data-bs-toggle="dropdown" aria-expanded="false" aria-label="Notifications">
                <span class="notification-dot"></span>
                <i class="bi bi-bell" aria-hidden="true"></i>
              </button>
              <div class="dropdown-menu dropdown-menu-end notification-menu">
                <div class="dropdown-header fw-bold text-body">Notifications</div>
                <a class="dropdown-item" href="users.html">
                  <span class="notification-title">New user registered</span>
                  <span class="notification-time">4 minutes ago</span>
                </a>
                <a class="dropdown-item" href="charts.html">
                  <span class="notification-title">Revenue target reached</span>
                  <span class="notification-time">32 minutes ago</span>
                </a>
                <a class="dropdown-item" href="settings.html">
                  <span class="notification-title">Security review completed</span>
                  <span class="notification-time">1 hour ago</span>
                </a>
              </div>
            </div>

            <div class="dropdown">
              <button class="profile-button dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                <img class="avatar-img avatar-sm" src="../assets/images/avatar/avatar.jpg" alt="Admin Hasan">
                <span class="profile-name d-none d-sm-inline">Admin Hasan</span>
              </button>
              <ul class="dropdown-menu dropdown-menu-end">
                <li><a class="dropdown-item" href="profile.html">Profile</a></li>
                <li><a class="dropdown-item" href="settings.html">Account settings</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="login.html">Sign out</a></li>
              </ul>
            </div>
          </div>
        </div>
      </nav>
      <main class="dashboard-content">
        <?php 
        $page = isset($_GET['page']) ? $_GET['page'] :"dashboard";
        // fungsinya untuk mengubah halaman inti admin
        switch($page){
            // 
            // 
            case 'dashboard':
                // 
                include 'pages/dashboard.php';
                // 
                break;
                // About page
                case 'about':
                    include 'pages/about/about.php';
                    break;

                case 'about-tambah':
                    include 'pages/about/tambah.php';
                    break;

                 // Hero page
                case 'hero':
                    include 'pages/hero/hero.php';
                    break;
                     // portfolio page
                case 'portfolio':
                    include 'pages/portfolio/portfolio.php';
                    break;
                     // contact page
                case 'contact':
                    include 'pages/contact/contact.php';
                    break;
        }
        ?>
      </main>

     <!-- footer start -->
      <?php include('components/footer.php') ?>
     <!-- footer end -->
    </div>
  </div>
<!-- script start -->
  <?php include('partials/script.php') ?>
 <!-- script end -->
</body>
</html>
