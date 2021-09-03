<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
    <title>Scores | Soma College</title>
</head>
<body>

<?php

include 'db.php';

$students = executeQuery("SELECT * FROM student ORDER BY  studentName ASC");
$subjects = executeQuery("SELECT * FROM subject ORDER BY  subjectName ASC");
$message = "";

if(isset($_POST['studentID'])) {
    // echo "connected successfully";
    $studentID = $_POST["studentID"];
    $subjectID = $_POST["subjectID"];
    $score = $_POST["score"];

    $sql = "INSERT INTO scores(studentID,subjectID,score) VALUES($studentID,$subjectID,$score)";
    $result = executeQuery($sql);
    
    if($result){
        $message = '<p class="success">Score recorded successfully</p>';
    }
    else{
        $message =  '<p class="failed">Failed to record score</p>';
    }
}


?>


    <div class="container">
        <form method="POST">
            <?=$message?>
        <label for="">Student</label>
        <select name="studentID" id="">
            <option value="">Select Student</option>
            <?php
            while($row = mysqli_fetch_assoc($students)){

            ?>
            <option value=<?=$row['id']?>><?=$row['studentName']?>(ADM: <?=$row['admissionNo']?>)</option>
            <?php
            }
            ?>
        </select>
        <label for="">Subject</label>
        
        <select name="subjectID" id="">
            <option value="">Select Subject</option>
            <?php
            while($row = mysqli_fetch_assoc($subjects)){

            ?>
            <option value=<?=$row['subjectId']?>><?=$row['subjectName']?></option>
            <?php
            }
            ?>
        </select>
        
        <label for="">Score</label><input type="number" name="score" placeholder="82">
        <button type="submit">Submit</button>
        </form>
    </div>
    



    
</body>
</html>