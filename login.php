<?php 
require_once 'dashboard.php';
session_start();

if($_SERVER['REQUEST METHOD'] === 'POST') {
    $email = $_POST['name'];
    $password = $_POST['password'];

    $sql = "SELECT id, name, password FROM users WHERE name = ? OR email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $name_email, $name_email);
    $stmt->execute();
    $result = $stmt->get_result();

    if($result->num_rows == 1) {
        $user = $result->fetch_assoc();
        if(password_verify($password, $user['password'])) {
          
            $_SESSION['useer_id'] = $user['id'];
            $_SESSION['name'] = $user['username'];
            header("Location: dashboard.php");
        }
        else{
            echo "Incorrect name/email or password";
        }
    }
    else{
        echo "Incorrect name/email or password";
    }
    $stmt->close();
    $conn->close();
}   
?>