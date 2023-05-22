  <?php
  if(!isset($_COOKIE['user_type']) ? (base64_decode($_COOKIE['user_type']) === 'administration') : false){
    header('location: http://localhost/shopping/index.php?page=SigNin');
    exit;
  }
  ?>
  <head>
     <link rel="stylesheet" href="./public/style/Acconut/ProfiileCSS.css"/>
  </head>
  <body>
  <?php
    include __DIR__ . '/../../models/ConnectSQl.php';
    $sql_administration = "SELECT * FROM administration";
    $result_administration = mysqli_query($conn, $sql_administration);
  $row_administration = mysqli_fetch_assoc($result_administration)
    ?>
    <div class="Container-Form-Profile">
      <div class="from-Profile">
      <div class="font-h1-Profile">
         <h1> INFO ADMINSTRATION</h1>
      </div>
            <div class="id-form-profile">
                    <lable>Number ID</lable>
                  <input value="<?php echo $row_administration['adminstration_id']; ?>"/>
            </div>
            <div class="MSADMIN-form-profile">
                    <lable>Number MSADMIN</lable>
                    <input value="<?php echo $row_administration['MSADMIN']; ?>"/>
            </div>
            <div class="useradministration-form-profile">
                      <lable>User Name</lable>
                      <input value="<?php echo $row_administration['useradministration']; ?>"/>
            </div>
            <div class="email-form-profile">
                      <lable>email </lable>
                      <input value="<?php echo $row_administration['email']; ?>"/>
            </div>
            <div class="password-form-profile">
                      <lable>password  </lable>
                      <input value="<?php echo $row_administration['password']; ?>"/>
            </div>
            <div class="phone-form-profile">
                      <lable>Number phone  </lable>
                      <input value="<?php echo $row_administration['phone']; ?>"/>
            </div>        
            <div class="gender-form-profile">
                    <lable>gender</lable>
                    <input value="<?php echo $row_administration['gender']; ?>"/>
            </div>
            <div class="address-form-profile">
                    <lable>address</lable>
                    <input value="<?php echo $row_administration['address']; ?>"/>
            </div>
            <div class="type-form-profile">
                    <lable>type</lable>
                    <input value="<?php echo $row_administration['type']; ?>"/>
            </div>
            <div class="tca-form-profile">
                    <lable>Time Create Account</lable>
                    <input value="<?php echo $row_administration['created_at']; ?>"/>
            </div>
            <div class="tua-form-profile">
            <lable>Time Updata Account</lable>
            <input value="<?php echo $row_administration['updated_at']; ?>"/>
            </div>
      </div>
    </div>
  </body>