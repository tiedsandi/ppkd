<?php
  $current_page = basename($_SERVER['PHP_SELF']); 
?>

<nav class="navbar navbar-expand-lg bg-body-secondary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><?php echo $_SESSION['USERNAME'] ?></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link <?php echo ($current_page == 'dashboard.php') ? 'active' : ''; ?>" aria-current="page" href="dashboard.php">Dashboard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo ($current_page == 'profiles.php') ? 'active' : ''; ?>" href="profiles.php">Profiles</a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Profile
          </a>
          <ul class="dropdown-menu">
            <li class="nav-item">
              <a class="dropdown-item" href="index.php">CV</a>
            </li>
            <li class="nav-item">
              <a class="dropdown-item " href="logout.php">Logout</a>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>