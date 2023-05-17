  <?php
  if(!isset($_COOKIE['user_type']) ? (base64_decode($_COOKIE['user_type']) === 'administration') : false){
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


  <body>
  <?php
    include __DIR__ . '/../../models/ConnectSQl.php';
    $sql_administration = "SELECT * FROM administration";
    $result_administration = mysqli_query($conn, $sql_administration);
  $row_administration = mysqli_fetch_assoc($result_administration)

    ?>
    <div>
       <div> <h1> INFO ADMINSTRATION</h1></div>
       <input value="<?php echo $row_administration['adminstration_id']; ?>"/>
       <input value="<?php echo $row_administration['MSADMIN']; ?>"/>
       <input value="<?php echo $row_administration['useradministration']; ?>"/>
       <input value="<?php echo $row_administration['email']; ?>"/>
       <input value="<?php echo $row_administration['password']; ?>"/>
       <input value="<?php echo $row_administration['phone']; ?>"/>
       <input value="<?php echo $row_administration['gender']; ?>"/>
       <input value="<?php echo $row_administration['address']; ?>"/>
       <input value="<?php echo $row_administration['type']; ?>"/>
       <input value="<?php echo $row_administration['created_at']; ?>"/>
       <input value="<?php echo $row_administration['updated_at']; ?>"/>

    </div>

  </body>