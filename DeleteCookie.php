<?php
// Clear all cookies
foreach ($_COOKIE as $key => $value) {
    setcookie($key, '', time() - 3600, '/');
}

// Redirect to the home page or any desired page after logout
header('Location: http://localhost/shopping/index.php?page=Home');
exit();
?>
