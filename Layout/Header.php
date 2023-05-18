
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img src="themes/images/logo.png" class="site_logo" alt=""></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent ">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
        <li class="nav-item ">
          <a class="nav-link active" aria-current="page" href="index.php?page=Home">Home</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="index.php?page=ViewProduct">Product</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="index.php?page=Pageintroduce">Introduce</a>
        </li>

        <li class="nav-item"<?php if(isset($_COOKIE['user_email'])){echo 'style="display:none"';} ?>>
          <a class="nav-link" href="index.php?page=SigNin">SigNin</a>
        </li>


        <li class="nav-item"<?php if(isset($_COOKIE['user_email'])){echo 'style="display:none"';} ?>>
          <a class="nav-link" href="index.php?page=Register">Register</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="index.php?page=Hepl">Hepl</a>
        </li>
        <li class="nav-item dropdown" <?php if (!isset($_COOKIE['user_email'])) { echo 'style="display:none"'; } ?>>
    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        <?php echo $_COOKIE['user_email']; ?>
    </a>
    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
        <?php
        $type = isset($_COOKIE['user_type']) ? (base64_decode($_COOKIE['user_type']) === 'administration') : false;

        if ($type) {
            echo '<li><a class="dropdown-item" href="index.php?page=Profile">Profile</a></li>';
            echo '<li><a class="dropdown-item" href="index.php?page=Product">Product</a></li>';
            echo '<li><a class="dropdown-item" href="index.php?page=dashboard">dashboard</a></li>';

        }
        ?>
        <li><a class="dropdown-item" href="#">Admin Account</a></li>
        <li><hr class="dropdown-divider"></li>
        <li><a class="dropdown-item" href="./DeleteCookie.php">Log Out</a></li>
    </ul>
</li>


     
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
</body>