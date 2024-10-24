<?php 
if(isset($_POST["email"]) || isset($_POST['password'])) {
    $email = $_POST['gmail'];
    $password = $_POST['password'];

    if($_POST["gmail"] == "admin@gmail.com" && $_POST["password"] == "123") {
        header("Location: ./../dashboard.php");
        exit;
    } else {
        echo '<p style="color: red;"><i>gmail / password salah!</i></p>';
    }
}

echo '<a href="./../login.php">kembali ke halaman login</a>';
?>
