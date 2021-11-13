<?php 
    $name = $_POST['name'];
    $sub1 = $_POST['sub1'];
    $sub2 = $_POST['sub2'];
    $sub3 = $_POST['sub3'];
    // echo $name ,$sub1 ,$sub2 ,$sub3;
    include ("db.php");
    //Inserting Data in Table 1
    $sql1 = "INSERT INTO `stu_marks`(`name`, `sub1`, `sub2`, `sub3`) VALUES ('$name', '$sub1', '$sub2', '$sub3')";
    mysqli_query($con,$sql1);

    //Calculating Avg and Inserting in Table 2
    $avg = ($sub1 + $sub2 + $sub3)/3;
    echo "Successfully Added";
    ?>
    <a href="http://localhost:8081/api/indexx.html">Add More</a>
    <?php
    if($avg>89){
        $grade = "A++";
        $start_avg=90;
        $end_avg=100;
        $sql2 = "INSERT INTO `grades`(`name`, `start_avg`, `end_avg`, `avg`, `grade`) VALUES ('$name','$start_avg','$end_avg','$avg','$grade')";
        mysqli_query($con,$sql2);
    }
    elseif($avg>79){
        $grade = "A";
        $start_avg=80;
        $end_avg=89;
        $sql2 = "INSERT INTO `grades`(`name`, `start_avg`, `end_avg`, `avg`, `grade`) VALUES ('$name','$start_avg','$end_avg','$avg','$grade')";
        mysqli_query($con,$sql2);
    }
    elseif($avg>69){
        $grade = "B++";
        $start_avg=70;
        $end_avg=79;
        $sql2 = "INSERT INTO `grades`(`name`, `start_avg`, `end_avg`, `avg`, `grade`) VALUES ('$name','$start_avg','$end_avg','$avg','$grade')";
        mysqli_query($con,$sql2);
    }
    elseif($avg>59){
        $grade = "B";
        $start_avg=60;
        $end_avg=69;
        $sql2 = "INSERT INTO `grades`(`name`, `start_avg`, `end_avg`, `avg`, `grade`) VALUES ('$name','$start_avg','$end_avg','$avg','$grade')"; 
        mysqli_query($con,$sql2);       
    }
    elseif($avg>49){
        $grade = "B++";
        $start_avg=50;
        $end_avg=59;
        $sql2 = "INSERT INTO `grades`(`name`, `start_avg`, `end_avg`, `avg`, `grade`) VALUES ('$name','$start_avg','$end_avg','$avg','$grade')"; 
        mysqli_query($con,$sql2);       
    }
    else{
        $grade = "C";
        $start_avg=40;
        $end_avg=49;
        $sql2 = "INSERT INTO `grades`(`name`, `start_avg`, `end_avg`, `avg`, `grade`) VALUES ('$name','$start_avg','$end_avg','$avg','$grade')";
        mysqli_query($con,$sql2); 
    }

    //For Checking and Storing Personality
    if($grade=='A' || $grade=='A++'){
        $start_g='A';
        $end_g='A++';
        $per='Excellent';
        $sql3 = "INSERT INTO `personality`(`name`, `start_g`, `end_g`, `grade`, `per`) VALUES ('$name','$start_g','$end_g','$grade','$per')";
        mysqli_query($con,$sql3);
    }
    elseif($grade=='B' || $grade=='B++'){
        $start_g='B';
        $end_g='B++';
        $per='Good';
        $sql3 = "INSERT INTO `personality`(`name`, `start_g`, `end_g`, `grade`, `per`) VALUES ('$name','$start_g','$end_g','$grade','$per')";
        mysqli_query($con,$sql3);
    }
    else{
        $start_g='C';
        $end_g='C++';
        $per='Fair';
        $sql3 = "INSERT INTO `personality`(`name`, `start_g`, `end_g`, `grade`, `per`) VALUES ('$name','$start_g','$end_g','$grade','$per')";
        mysqli_query($con,$sql3);
    }
    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Add</title>
</head>
<body>
    
</body>
</html>