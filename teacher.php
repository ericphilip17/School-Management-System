<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
    <title>Lecturers</title>
</head>
<body>

<?php

include 'db.php';

    if(isset($_POST['teacherName'])) {
        // echo "connected successfully";
        $teacherName = $_POST["teacherName"];
        $phoneNumber = $_POST["phoneNumber"];
        $idNumber = $_POST["idNumber"];
        $assignedClass = $_POST["assignedClass"];

        $sql = "INSERT INTO teacher(teacherName,phoneNumber,idNumber,assignedClass) VALUES('$teacherName','$phoneNumber',$idNumber,'$assignedClass')";
        // die($sql);
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
            <label for="">Lecturer</label>
            <input type="text" name="teacherName" placeholder="Jane Doe">
            <label for="">Phone Number</label><input type="number" name="phoneNumber" placeholder="0789564XXX">
            <label for="">ID Number</label><input type="number" name="idNumber" placeholder="36577XXX">
            <label for="">Assigned Class</label><input type="text" name="assignedClass" placeholder="4B">
            <button type="submit">Submit</button>
        </form>
    </div>
    
</body>
</html>