
<?php
if (isset($_GET['logout'])) {
    // Check if the logout parameter is set
    $confirmLogout = isset($_GET['confirm']) ? $_GET['confirm'] : false;

    if ($confirmLogout) {
        // Clear all cookies
        foreach ($_COOKIE as $key => $value) {
            setcookie($key, '', time() - 3600, '/');
        }

        // Display the confirmation message
        echo "<script>alert('Bạn đã đăng xuất thành công');</script>";
    }
}

// Redirect to the home page or any desired page after logout
header('Location: http://localhost/shopping/index.php?page=Home');
exit();
?>
