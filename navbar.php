<?php
// تحديد الصفحة الحالية
$current_page = basename($_SERVER['PHP_SELF']);
?>

<header class="header">
  <a class="navbar-brand logo" href="./index.php#home">
    <img src="assets/img/wave.png" alt="">
    Mouje <span>Studio</span>
  </a>

  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <button
        class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbarTogglerDemo03"
        aria-controls="navbarTogglerDemo03"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"><i class="bx bx-menu"></i></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            
            <a class="navlink <?php echo $current_page == 'index.php' ? 'active-nav' : ''; ?>" 
               href="./index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="navlink <?php echo $current_page == 'works.php' ? 'active-nav' : ''; ?>" 
               href="./works.php">Works</a>
          </li>
          <li class="nav-item">
            <a class="navlink <?php echo $current_page == 'about.php' ? 'active-nav' : ''; ?>" 
               href="./about.php">About</a>
          </li>
          <li class="nav-item">
            <a class="navlink <?php echo $current_page == 'contact.php' ? 'active-nav' : ''; ?>" 
               href="./contact.php">Contact</a>
          </li>
          <li class="nav-item dropdown">
            <a
              class="navlink dropdown-toggle "
              data-toggle="dropdown"
              href="#"
              role="button"
              aria-haspopup="true"
              aria-expanded="false"
            >
              What We Do
            </a>
            <div  class="dropdown-menu"  >
             
              <a class="dropdown-item" href="#">Film Scoring</a>
              <a class="dropdown-item" href="#">Recording</a>
              <a class="dropdown-item" href="#">Audio Post Production</a>
              <a class="dropdown-item" href="#">ADR and Dubbing</a>
              <a class="dropdown-item" href="#">Mixing and Mastering</a>
              <a class="dropdown-item" href="#">Foley Recording</a>
              <a class="dropdown-item" href="#">Sound Design</a>
              <a class="dropdown-item" href="#">Audio Branding</a>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</header>
