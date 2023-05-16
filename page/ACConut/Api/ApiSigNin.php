<?php
include '../../../models/ConnectSQl.php';
if(isset($_POST['email'], $_POST['password'])) {

     $email = $_POST['email'];
     $password = md5($_POST['password']);
 
     $adminstration_sql = "SELECT useradministration, adminstration_id, type FROM `administration` WHERE `email`='$email' AND `password`='$password'";
     $adminstration_result = mysqli_query($conn, $adminstration_sql);       
     if(mysqli_num_rows($adminstration_result) > 0) {
         $adminstration_row = mysqli_fetch_assoc($adminstration_result);
         $type = base64_encode($adminstration_row['type']);
        $userid=base64_encode($adminstration_row['adminstration_id']);
        $username=base64_encode($adminstration_row['useradministration']);


        setcookie('user_name',$username,time()+(86400 *30),"/","",true,true);
         setcookie('user_type', $type, time() + (86400 * 30), "/","",true,true); 
         setcookie('user_id', $userid, time() + (86400 * 30), "/","",true,true); 

         echo json_encode(array("success" => true, "message" => "Login successful", "data" => $adminstration_row));
         exit();
     }
 
     $user_sql = "SELECT nameuser, user_id, type FROM `user` WHERE `email` = '$email' AND `password` = '$password'";
     $user_result = mysqli_query($conn, $user_sql);
     
     if (mysqli_num_rows($user_result) > 0) {
         $user_row = mysqli_fetch_assoc($user_result);
         $type = base64_encode($user_row['type']);
         $userid = base64_encode($user_row['user_id']);
         $username = base64_encode($user_row['nameuser']);
     

         setcookie('user_name', $username, time() + (86400 * 30), "/", "", true, true);
         setcookie('user_id', $userid, time() + (86400 * 30), "/", "", true, true);
         setcookie('user_type', $type, time() + (86400 * 30), "/", "", true, true);
     
         echo json_encode(array("success" => true, "message" => "Login successful", "data" => $user_row));
         exit();
     }
 

     $admin_sql = "SELECT name_admin, admin_id, type FROM `admin` WHERE `email`='$email' AND `password`='$password'";
     $admin_result = mysqli_query($conn, $admin_sql);       
     if(mysqli_num_rows($admin_result) > 0) {
         $admin_row = mysqli_fetch_assoc($admin_result);
         $type = base64_encode($admin_row['type']);
         $adminid = base64_encode($admin_row['admin_id']);
         $adminname=base64_encode($admin_row['name_admin']);

         setcookie('user_name',$adminname,time()+(86400*30),"/","",true,true);
         setcookie('admin_id', $adminid, time() + (86400 * 30), "/","",true,true); 
         setcookie('admin_type', $type, time() + (86400 * 30), "/","",true,true); 

         echo json_encode(array("success" => true, "message" => "Login successful", "data" => $admin_row));
         exit();
     }

 }
 
 mysqli_close($conn);
?>
