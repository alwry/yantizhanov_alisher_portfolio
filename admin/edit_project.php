<?php
require_once('../includes/connect.php');
$query = "UPDATE projects SET 
    title = ?, 
    thumb = ?, 
    description_1 = ?, 
    description_2 = ?, 
    description_3 = ?, 
    description_4 = ?, 
    heading_1 = ?, 
    heading_2 = ?, 
    heading_3 = ?, 
    heading_4 = ?, 
    tags = ?, 
    date = ? 
    WHERE id = ?";

$stmt = $connect->prepare($query);

$stmt->bindParam(1, $_POST['title'], PDO::PARAM_STR);
$stmt->bindParam(2, $_POST['thumb'], PDO::PARAM_STR);
$stmt->bindParam(3, $_POST['description_1'], PDO::PARAM_STR);
$stmt->bindParam(4, $_POST['description_2'], PDO::PARAM_STR);
$stmt->bindParam(5, $_POST['description_3'], PDO::PARAM_STR);
$stmt->bindParam(6, $_POST['description_4'], PDO::PARAM_STR);
$stmt->bindParam(7, $_POST['heading_1'], PDO::PARAM_STR);
$stmt->bindParam(8, $_POST['heading_2'], PDO::PARAM_STR);
$stmt->bindParam(9, $_POST['heading_3'], PDO::PARAM_STR);
$stmt->bindParam(10, $_POST['heading_4'], PDO::PARAM_STR);
$stmt->bindParam(11, $_POST['tags'], PDO::PARAM_STR);
$stmt->bindParam(12, $_POST['date'], PDO::PARAM_STR);
$stmt->bindParam(13, $_POST['pk'], PDO::PARAM_INT);

$stmt->execute();
$stmt = null;
header('Location: project_list.php');
?>
