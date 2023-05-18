

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