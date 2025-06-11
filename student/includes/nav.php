<nav class="navbar navbar-expand-lg navbar-light bg-transparent justify-content-center">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mx-auto">
      <li class="nav-item active" id="home">
        <a class="nav-link" href="index.php" style="font-size: 18px;">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item" id="apply">
        <a class="nav-link" href="viewapply.php" style="font-size: 18px;">Apply</a>
      </li>
      <li class="nav-item" id="view">
        <a class="nav-link" href="companiesapplied.php" style="font-size: 18px;">View Applications</a>
      </li>
      <li class="nav-item" id="select">
        <a class="nav-link" href="selected.php" style="font-size: 18px;">Selected Companies</a>
      </li>
    </ul>
    <?php session_start(); ?>
     <form class="form-inline my-2 my-lg-0">
          <li class="nav-item dropdown" style="list-style: none;">
          <button class="btn btn-light dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="outline: 0 none;">
            <i class="far fa-user-circle" style="font-size: 20px;"></i>&nbsp;<?php echo $_SESSION['username']; ?>
          </button>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="changepass.php" style="font-size: 16px;"><i class="fas fa-pen" style="font-size: 15px;"></i>&nbsp;Change Password</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="../login.php" style="font-size: 16px;">Logout</a>
          </div>
        </li>
      </form>
  </div>
</nav>
