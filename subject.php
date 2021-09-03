<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
    <title>Page 3 | Student Details</title>
</head>
<body>

<?php

include 'db.php';
$teachers = executeQuery("SELECT * FROM teacher ORDER BY  teacherId ASC LIMIT 5");
    if(isset($_POST['subjectName'])) {
        // echo "connected successfully";
        $subjectName = $_POST["subjectName"];
        $teacherID = $_POST["teacherId"];
        $description = $_POST["description"];

        $sql = "INSERT INTO subject(subjectName,teacherID,description) VALUES('$subjectName',$teacherID,'$description')";
        // die($sql);
        executeQuery($sql);
        // echo $sql;
    }
    // else{
    //     echo "Failed to connect to database";
    // }

?>

    <div class="container">
        <form method="POST">
            <label for="">Subject Name</label><input type="text" name="subjectName" placeholder="Biology">

            <label for="">Teacher</label>
            <select name="teacherId" id="">
            <option value="">Select Teacher</option>
            <?php
            while($row = mysqli_fetch_assoc($teachers)){

            ?>
            <option value=<?=$row['teacherId']?>><?=$row['teacherName']?></option>
            <?php
            }
            ?>
        </select>
            <!-- <input type="number" name="teacherID" placeholder="3214"> -->
            <label for="">Desciption</label><input type="text" name="description" placeholder="Form 4 complete syllabus">
            <button type="submit">Submit</button>
        </form>
    </div>
    
</body>
</html>