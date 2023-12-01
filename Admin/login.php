<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <form action="process_login.php" method="post">
        <input type="text" name="username" placeholder="Username"><br><br>
        <input type="password" name="password" placeholder="Password"><br><br>
        <input type="submit" value="Login">
    </form>
    <?php
    // Pesan kesalahan jika login gagal
    if(isset($_GET['error']) && $_GET['error'] == 'failed') {
        echo "<p>Login failed. Please check your username and password.</p>";
    }
    ?>
</body>
</html>
