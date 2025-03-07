<!DOCTYPE html>
<html lang="en">

<?php

require_once('../includes/connect.php');
$stmt = $connect->prepare('SELECT id,title FROM projects ORDER BY title ASC');
$stmt->execute();
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CMS Main Page</title>

</head>
<body>

<?php

while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {

  echo  '<p class="project-list">'.
  $row['title'].
  '<a href="edit_project_form.php?id='.$row['id'].'">edit</a>'.

  '<a href="delete_project.php?id='.$row['id'].'">delete</a></p>';
}

$stmt = null;

?>
<br><br><br>
<h3>Add a New Project</h3>
<form action="add_project.php" method="post" enctype="multipart/form-data">
    <label for="title">Project Title: </label>
    <input name="title" type="text" id="title" required><br><br>

    <label for="heading_1">Heading 1: </label>
    <input name="heading_1" type="text" id="heading_1" required><br><br>

    <label for="heading_2">Heading 2: </label>
    <input name="heading_2" type="text" id="heading_2" required><br><br>

    <label for="heading_3">Heading 3: </label>
    <input name="heading_3" type="text" id="heading_3" required><br><br>

    <label for="heading_4">Heading 4: </label>
    <input name="heading_4" type="text" id="heading_4" required><br><br>

    <label for="description_1">Description 1: </label>
    <textarea name="description_1" id="description_1" required></textarea><br><br>

    <label for="description_2">Description 2: </label>
    <textarea name="description_2" id="description_2" required></textarea><br><br>

    <label for="description_3">Description 3: </label>
    <textarea name="description_3" id="description_3" required></textarea><br><br>

    <label for="description_4">Description 4: </label>
    <textarea name="description_4" id="description_4" required></textarea><br><br>

    <label for="tags">Tags: </label>
    <input name="tags" type="text" id="tags" required><br><br>

    <label for="date">Date: </label>
    <input name="date" type="text" id="date" required><br><br>

    <label for="thumb">Project Thumbnail: </label>
    <input name="thumb" type="file" id="thumb" required><br><br>

    <input name="submit" type="submit" value="Add">
</form>
<br><br><br>
<a href="logout.php">log out</a>
</body>
</html>
