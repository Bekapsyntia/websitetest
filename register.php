<?php 
require_once 'dashboard.php';
if ($_SERVER['REQUEST_METHOD']=== 'POST'){
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $password = $_POST['password'];

    $password_hash = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO users(name, email, password) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $name, $email, $password_hash);

    if($stmt->execute()) {
        header("Location: login.html?success=1");
    }
    else{
        echo"Error during registration";
    }
    $stmt->close();
    $conn->close();
}

?>






















































































































