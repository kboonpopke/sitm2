<?php
session_start();
require 'dbcon.php';

if(isset($_POST['delete_device']))
{
    $device_id = mysqli_real_escape_string($con, $_POST['delete_device']);

    $query = "DELETE FROM device WHERE id='$device_id' ";
    $query_run = mysqli_query($con, $query);

if($query_run)
{
    $_SESSION['massage'] = "Student Deleted Successfully";
    header("Location: index.php");
    exit(0);
}
else
{
    $_SESSION['massage'] = "Student Not Deleted: " . mysqli_error($con);
    header("Location: index.php");
    exit(0);
}
}

if(isset($_POST['update_device'])) 
{
    $device_id = mysqli_real_escape_string($con, $_POST['device_id']);

    $name = mysqli_real_escape_string($con, $_POST['name']);   
    $department = mysqli_real_escape_string($con, $_POST['department']);
    $location = mysqli_real_escape_string($con, $_POST['location']);
    $SN = mysqli_real_escape_string($con, $_POST['SN']);
    $brand = mysqli_real_escape_string($con, $_POST['brand']);
    $type = mysqli_real_escape_string($con, $_POST['type']);
    $status = mysqli_real_escape_string($con, $_POST['status']);
    $damage = mysqli_real_escape_string($con, $_POST['damage']);
    $note = mysqli_real_escape_string($con, $_POST['note']);
    $file_name = mysqli_real_escape_string($con, $_POST['file_name']);
    $card = mysqli_real_escape_string($con, $_POST['card']);
    $outside = mysqli_real_escape_string($con, $_POST['outside']);
    

    $query = "UPDATE device SET name='$name',card='$card',department='$department',location='$location', SN='$SN', brand='$brand', type='$type', status='$status', damage='$damage', note='$note',file_name='$file_name',outside='$outside' WHERE id='$device_id'";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['massage'] = "Student Updated Successfully";
        header("Location: index.php");
        exit(0);
    }
    else
    {
        $_SESSION['massage'] = "Student Not Updated";
        header("Location: index.php");
        exit(0);
    }
}

if(isset($_POST['save_device'])) {
    
    $name = mysqli_real_escape_string($con, $_POST['name']);   
    $department = mysqli_real_escape_string($con, $_POST['department']);
    $location = mysqli_real_escape_string($con, $_POST['location']);
    $SN = mysqli_real_escape_string($con, $_POST['SN']);
    $brand = mysqli_real_escape_string($con, $_POST['brand']);
    $type = mysqli_real_escape_string($con, $_POST['type']);
    $status = mysqli_real_escape_string($con, $_POST['status']);
    $damage = mysqli_real_escape_string($con, $_POST['damage']);
    $note = mysqli_real_escape_string($con, $_POST['note']);
    $file_name = mysqli_real_escape_string($con, $_POST['file_name']);
    $card = mysqli_real_escape_string($con, $_POST['card']);
    $outside = mysqli_real_escape_string($con, $_POST['outside']);
    

    $query = "INSERT INTO device (name,department,location,SN,brand,type,status,damage,note,file_name,card,outside) VALUES ('$name','$department','$location','$SN','$brand','$type','$status','$damage','$note','$file_name','$card','$outside')";

    $query_run = mysqli_query($con, $query);

    if($query_run) {
        $_SESSION['massage'] = "device Created Successfully";
    } else {
        $_SESSION['massage'] = "device Not Created";
    }

    header("Location:student-create.php");
    exit(0);
}
?>