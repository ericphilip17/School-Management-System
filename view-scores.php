<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="view-styles.css">
    <link rel="stylesheet" href="view-styles.css?v=<?php echo time(); ?>">
    <title>View Scores</title>
</head>
<body class="justify-center" >
    <?php
    include 'db.php';
    
    $students = executeQuery('SELECT * FROM student ORDER BY id DESC LIMIT 5');
    $scores = executeQuery('SELECT score FROM scores');
    // $deleteScores = executeQuery('DELETE  FROM scores')
    // $studentName = executeQuery('SELECT * FROM student LEFT JOIN scores on scores.studentId = student.admissionNo');
    // die($studentName);
    ?>

    <div class="container display-container">
        <h4>Scores</h4>

        <?php
        while($row = mysqli_fetch_assoc($students)){
            ?>
            <div class="display-item">
            <?=$row['studentName']?>
            <br>
            <div class="light-text">
            CLASS: <?=$row['class']?>  |  ADM: <?=$row['admissionNo']?>
            </div>
        </div>
            <?php
        }
        ?>
    </div>

</body>
</html>