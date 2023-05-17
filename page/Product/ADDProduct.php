<?php
if(!isset($_COOKIE['user_type']) ? (base64_decode($_COOKIE['user_type']) === 'administration') : false){
  header('location: http://localhost/shopping/index.php?page=SigNin');
  exit;
}
?>
