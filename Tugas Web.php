<!-- file: login.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Login Form</title>
</head>
<body>
    <h2>Login Page</h2>
    <form method="POST" action="">
        <label>Username:</label><br>
        <input type="text" name="username"><br><br>
        <label>Password:</label><br>
        <input type="password" name="password"><br><br>
        <input type="submit" name="login" value="Login">
    </form>
</body>
</html>

<?php
// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "db_latihan");

if (isset($_POST['login'])) {
    $user = $_POST['username'];
    $pass = $_POST['password'];

    // KODE YANG RENTAN SQL INJECTION (TIDAK AMAN)
    $query = "SELECT * FROM users WHERE username = '$user' AND password = '$pass'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        echo "Login berhasil!";
    } else {
        echo "Login gagal!";
    }
}
?>
