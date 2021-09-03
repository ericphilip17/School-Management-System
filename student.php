<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
    <title>Page 2 | Student Details</title>
</head>
<body>

<?php

include 'db.php';

    if(isset($_POST['studentName'])) {
        // echo "connected successfully";
        $studentName = $_POST["studentName"];
        $class = $_POST["class"];
        $admissionNo = $_POST["admissionNo"];

        $sql = "INSERT INTO student(studentName,class,admissionNo) VALUES('$studentName','$class',$admissionNo)";
        $conn = getConnection();

        $result =  mysqli_query($conn,$sql);
        // echo $sql;
    }
    // else{
    //     echo "Failed to connect to database";
    // }

?>

    <div class="container">
        <form method="POST">
            <label for="">Student Name</label><input type="text" name="studentName" placeholder="John Doe">
            <label for="">Class</label><input type="text" name="class" placeholder="4B">
            <label for="">Admission Number</label><input type="number" name="admissionNo" placeholder="5127">
            <button type="submit">Submit</button>
        </form>
    </div>
    
</body>
</html>