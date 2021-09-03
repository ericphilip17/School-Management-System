<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Dashbord</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
</head>
<body>

   
<div class="container">
        <a href="student.php" class="menu-item">
        &#43; Add Student
        </a>
        <a href="teacher.php" class="menu-item">
           &#43; Add Teacher
        </a>
        <a href="subject.php" class="menu-item">
           &#43; Add Subject
        </a>
        <a href="scores.php" class="menu-item">
           &#43; Add Score
        </a>
       
    </div>

    <div class="container">

        <a href="view-students.php" class="menu-item">
        &#x2629; Students
        </a>
        <a href="view-teachers.php" class="menu-item">
           &#x2629; Lecturer
        </a>
        <a href="view-subjects.php" class="menu-item">
           &#x2629; Subjects
        </a>
        <a href="view-scores.php" class="menu-item">
           &#x2629; Scores
        </a>
       
    </div>
</body>
</html>