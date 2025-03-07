<!DOCTYPE html>
<html lang="en">
<?php
require_once('../includes/connect.php');
$query = 'SELECT * FROM projects WHERE projects.id = :projectId';
$stmt = $connect->prepare($query);
$projectId = $_GET['id'];
$stmt->bindParam(':projectId', $projectId, PDO::PARAM_INT);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Page</title>

</head>
<body>

 
<form action="edit_project.php" method="POST" enctype="multipart/form-data">
    <input name="pk" type="hidden" value="<?php echo $row['id']; ?>">
    
    <label for="title">project title: </label>
    <input name="title" type="text" value="<?php echo $row['title']; ?>" required><br><br>
    
    <label for="heading_1">Heading 1: </label>
    <input name="heading_1" type="text" value="<?php echo $row['heading_1']; ?>" required><br><br>
    
    <label for="heading_2">Heading 2: </label>
    <input name="heading_2" type="text" value="<?php echo $row['heading_2']; ?>" required><br><br>
    
    <label for="heading_3">Heading 3: </label>
    <input name="heading_3" type="text" value="<?php echo $row['heading_3']; ?>" required><br><br>
    
    <label for="heading_4">Heading 4: </label>
    <input name="heading_4" type="text" value="<?php echo $row['heading_4']; ?>" required><br><br>
    
    <label for="desc">project description: </label>
    <textarea name="desc" required><?php echo $row['description_1']; ?></textarea><br><br>
    
    <label for="description_2">Description 2: </label>
    <textarea name="description_2" required><?php echo $row['description_2']; ?></textarea><br><br>
    
    <label for="description_3">Description 3: </label>
    <textarea name="description_3" required><?php echo $row['description_3']; ?></textarea><br><br>
    
    <label for="description_4">Description 4: </label>
    <textarea name="description_4" required><?php echo $row['description_4']; ?></textarea><br><br>
    
    <label for="tags">Tags: </label>
    <input name="tags" type="text" value="<?php echo $row['tags']; ?>" required><br><br>
    
    <label for="date">Date: </label>
    <input name="date" type="text" value="<?php echo $row['date']; ?>" required><br><br>
    
    <label for="thumb">project thumbnail: </label>
    <input name="thumb" type="file"><br>
    <small>Current: <?php echo $row['thumb']; ?></small><br><br>
    
    <input name="submit" type="submit" value="Edit">
</form>
<?php
$stmt = null;
?>
</body>
</html>
