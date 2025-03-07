<?php 
    session_start();

    require_once('../includes/connect.php');
    $query = "SELECT * FROM users WHERE username = ? AND password = ?";
    $stmt = $connect->prepare($query);
    $stmt->bindParam(1, $_POST['username'], PDO::PARAM_STR);
    $stmt->bindParam(2, $_POST['password'], PDO::PARAM_STR);
    $stmt->execute();

    if($stmt->rowCount() == 1) {
        $_SESSION['username'] = $_POST['username'];
        header('Location: project_list.php');
    } else {
        header('Location: login.php?error=1');
    }
?>