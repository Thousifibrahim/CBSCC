<?php session_start(); ?>
<nav class="navbar navbar-expand-lg navbar-light bg-transparent justify-content-center">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mx-auto">
      <li class="nav-item active" id="home">
        <a class="nav-link" href="index.php" style="font-size: 18px;">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownCompany" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-size: 18px;">
          Company
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownCompany">
          <a class="dropdown-item" href="addcompanies.php" style="font-size: 16px;">Add Company</a>
          <a class="dropdown-item" href="viewcompanies.php" style="font-size: 16px;">View Company</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownStudent" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-size: 18px;">
          Student
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownStudent">
          <a class="dropdown-item" href="viewstudents.php" style="font-size: 16px;">View Students</a>
          <a class="dropdown-item" href="companiesapplied.php" style="font-size: 16px;">Applied Students</a>
          <a class="dropdown-item" href="managestudents.php" style="font-size: 16px;">Student Management</a>
        </div>
      </li>
     
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <li class="nav-item dropdown" style="list-style: none;">
        <button class="btn btn-light dropdown-toggle" href="#" id="navbarDropdownUser" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="outline: 0 none; font-size: 18px;">
          <i class="far fa-user-circle" style="font-size: 20px;"></i>&nbsp;<?php echo $_SESSION['username']; ?>
        </button>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownUser">
          <a class="dropdown-item" href="addadmin.php" style="font-size: 16px;"><i class="fas fa-user-plus" style="font-size: 15px;"></i>&nbsp;Add Admin</a>
          <a class="dropdown-item" href="changepass.php" style="font-size: 16px;"><i class="fas fa-pen" style="font-size: 15px;"></i>&nbsp;Change Password</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="../login.php" style="font-size: 16px;">Logout</a>
        </div>
      </li>
    </form>
  </div>
</nav>
