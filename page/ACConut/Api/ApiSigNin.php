<?php
include '../../../models/ConnectSQl.php';
if(isset($_POST['email'], $_POST['password'])) {

     $email = $_POST['email'];
     $password = md5($_POST['password']);
 
     $adminstration_sql = "SELECT adminstration_id, type FROM `administration` WHERE `email`='$email' AND `password`='$password'";
     $adminstration_result = mysqli_query($conn, $adminstration_sql);       
     if(mysqli_num_rows($adminstration_result) > 0) {
         $adminstration_row = mysqli_fetch_assoc($adminstration_result);
         $type = $adminstration_row['type'];
        $userid=$adminstration_row['adminstration_id'];
         setcookie('user_type', $type, time() + (86400 * 30), "/","",true,true); 
         setcookie('user_id', $userid, time() + (86400 * 30), "/","",true,true); 

         echo json_encode(array("success" => true, "message" => "Login successful", "data" => $adminstration_row));
         exit();
     }
 
     $user_sql = "SELECT user_id, type FROM `user` WHERE `email`='$email' AND `password`='$password'";
     $user_result = mysqli_query($conn, $user_sql);       
     if(mysqli_num_rows($user_result) > 0) {
         $user_row = mysqli_fetch_assoc($user_result);
         $type = $user_row['type'];
         $userid = $user_row['user_id'];

         setcookie('user_id', $type, time() + (86400 * 30), "/","",true,true); 
         setcookie('user_type', $userid, time() + (86400 * 30), "/","",true,true); 

         echo json_encode(array("success" => true, "message" => "Login successful", "data" => $user_row));
         exit();
     }
 
     $admin_sql = "SELECT admin_id type FROM `admin` WHERE `email`='$email' AND `password`='$password'";
     $admin_result = mysqli_query($conn, $admin_sql);       
     if(mysqli_num_rows($admin_result) > 0) {
         $admin_row = mysqli_fetch_assoc($admin_result);
         $type = $admin_row['type'];    
         $userid = $user_row['admin_id'];

         setcookie('admin_id', $type, time() + (86400 * 30), "/","",true,true); 

         setcookie('user_type', $userid, time() + (86400 * 30), "/","",true,true); 
 
         echo json_encode(array("success" => true, "message" => "Login successful", "data" => $admin_row));
         exit();
     }
 
     echo json_encode(array("success" => false, "message" => "Incorrect email or password"));
     exit();
 }
 
 mysqli_close($conn);
?>
