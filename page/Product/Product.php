
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
  $sql_info_laptop="select * from info_laptop";
  $result_info_laptop=mysqli_query($conn,$sql_info_laptop);
  $row_info_laptop=mysqli_fetch_assoc($result_info_laptop);
?>

<div>
  <div>
    <h1>Info Product</h1>
  </div>
   <input value="<?php echo $row_info_laptop["MSP_laptop"];?>"/>
   <input value="<?php echo $row_info_laptop["TSP_laptop"];?>"/>
   <input value="<?php echo $row_info_laptop["DC_laptop"];?>"/>
   <input value="<?php echo $row_info_laptop["phone_laptop"];?>"/>
   <input value="<?php echo $row_info_laptop["email_laptop"];?>"/>

</div>


</body>