  <?php
  if(!isset($_COOKIE['user_type']) ? (base64_decode($_COOKIE['user_type']) === 'administration') : false){
    header('location: http://localhost/shopping/index.php?page=SigNin');
    exit;
  }
  ?>
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