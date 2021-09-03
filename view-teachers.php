<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="view-styles.css">
    <link rel="stylesheet" href="view-styles.css?v=<?php echo time(); ?>">
    <title>View Teachers</title>
</head>
<body class="justify-center" >
    <?php
    include 'db.php';
    $teachers = executeQuery('SELECT * FROM teacher ORDER BY teacherId LIMIT 5');
    ?>

    <div class="container display-container">
        <h4>Teachers</h4>
        <?php
        while($row = mysqli_fetch_assoc($teachers)){
            ?>
            <div class="display-item">
            <?=$row['teacherName']?>
            <br>
            <div class="light-text">
            Phone Number: <?=$row['phoneNumber']?>  | Class Assigned: <?=$row['assignedClass']?>
            </div>
        </div>
            <?php
        }
        ?>
    </div>
</body>
</html>