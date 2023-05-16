<?php
if(isset($_COOKIE['user_type']) && $_COOKIE['user_type'] == 'adminstration'){
  header('location: http://localhost/shopping/index.php?page=SigNin');
  exit;
}
?>

<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
     <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

     <title><?php echo isset($title) ?$_GET['title']:'Trang Chủ';?></title>
     <link rel="stylesheet" href="./public/style/IndexCss.css"/>

</head>

