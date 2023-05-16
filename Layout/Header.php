<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
     <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
     <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

     <title><?php echo isset($title) ?$_GET['title']:'Trang Chủ';?></title>
     <link rel="stylesheet" href="./public/style/IndexCss.css"/>

</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Shopping</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent ">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
        <li class="nav-item ">
          <a class="nav-link active" aria-current="page" href="index.php?page=Home">Home</a>
        </li>
        <li class="nav-item"<?php if(isset($_COOKIE['user_type'])){echo 'style="display:none"';} ?>>
          <a class="nav-link" href="index.php?page=SigNin">SigNin</a>
        </li>


        <li class="nav-item"<?php if(isset($_COOKIE['user_type'])){echo 'style="display:none"';} ?>>
          <a class="nav-link" href="index.php?page=Register">Register</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#">Hepl</a>
        </li>
        <li class="nav-item dropdown" <?php  if(!isset($_COOKIE['user_type'])){echo'style="display:none"';}?>>
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <?php echo $_COOKIE['user_email'];?>
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="index.php?page=Profile">Profile</a></li>
            <li><a class="dropdown-item" href="index.php?page=Product">Product</a></li>
            <li><a class="dropdown-item" href="#">ADmin Acconut</a></li>

            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">LogOut</a></li>
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