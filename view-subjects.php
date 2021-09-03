<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="view-styles.css">
    <link rel="stylesheet" href="view-styles.css?v=<?php echo time(); ?>">
    <title>View Subjects</title>
</head>
<body class="justify-center" >
    <?php
    include 'db.php';
    $subjects = executeQuery('SELECT * FROM subject ORDER BY subjectId ASC LIMIT 5');
    ?>

    <div class="container display-container">
        <h4>Subjects</h4>
        <?php
        while($row = mysqli_fetch_assoc($subjects)){
            ?>
            <div class="display-item">
            <?=$row['subjectName']?>
            <br>
            <div class="light-text">
            Subject Name: <?=$row['subjectName']?>  Description: <?=$row['description']?>
            </div>
        </div>
            <?php
        }
        ?>
    </div>
</body>
</html>