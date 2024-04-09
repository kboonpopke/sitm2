<?php
session_start();
require 'dbcon.php';

if(isset($_POST['delete_lb1250']))
{
    $lb1250_id = mysqli_real_escape_string($con, $_POST['delete_lb1250']); // แก้ไขตรงนี้เป็น 'delete_lb1250'

    $query = "DELETE FROM lb1250 WHERE id='$lb1250_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Deleted Successfully";
        header("Location: lb1250-index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Not Deleted: " . mysqli_error($con);
        header("Location: lb1250-index.php");
        exit(0);
    }


}

if (isset($_POST['update_lb1250'])) {
    $lb1250_id = mysqli_real_escape_string($con, $_POST['lb1250_id']);

    $lb1250_item = mysqli_real_escape_string($con, $_POST['lb1250_item']);
    $lb1250_po = mysqli_real_escape_string($con, $_POST['lb1250_po']);
    $lb1250_icode = mysqli_real_escape_string($con, $_POST['lb1250_icode']);
    $lb1250_md = mysqli_real_escape_string($con, $_POST['lb1250_md']);
    $lb1250_rd = mysqli_real_escape_string($con, $_POST['lb1250_rd']);
    $lb1250_lotrb = mysqli_real_escape_string($con, $_POST['lb1250_lotrb']);
    $lb1250_lotvendor = mysqli_real_escape_string($con, $_POST['lb1250_lotvendor']);
    $lb1250_qty_i = mysqli_real_escape_string($con, $_POST['lb1250_qty_i']);
    $lb1250_quantity_i = mysqli_real_escape_string($con, $_POST['lb1250_quantity_i']);
    $lb1250_unit_i = mysqli_real_escape_string($con, $_POST['lb1250_unit_i']);
    $lb1250_quantity_r = mysqli_real_escape_string($con, $_POST['lb1250_quantity_r']);
    $lb1250_uniti_r = mysqli_real_escape_string($con, $_POST['lb1250_uniti_r']);
    $lb1250_status = mysqli_real_escape_string($con, $_POST['lb1250_status']);
    $lb1250_ramark = mysqli_real_escape_string($con, $_POST['lb1250_ramark']);

    $query = "UPDATE lb1250 SET lb1250_item='$lb1250_item', lb1250_po='$lb1250_po', lb1250_icode='$lb1250_icode', lb1250_md='$lb1250_md', lb1250_rd='$lb1250_rd', lb1250_lotrb='$lb1250_lotrb', lb1250_lotvendor='$lb1250_lotvendor', lb1250_qty_i='$lb1250_qty_i', lb1250_quantity_i='$lb1250_quantity_i', lb1250_unit_i='$lb1250_unit_i', lb1250_quantity_r='$lb1250_quantity_r', lb1250_uniti_r='$lb1250_uniti_r', lb1250_status='$lb1250_status', lb1250_ramark='$lb1250_ramark' WHERE id='$lb1250_id'";
    $query_run = mysqli_query($con, $query);

    if ($query_run) {
        $_SESSION['message'] = "Updated Successfully";
        header("Location: lb1250-index.php");
        exit(0);
    } else {
        $_SESSION['message'] = "Not Updated";
        header("Location: lb1250-index.php");
        exit(0);
    }
}

if(isset($_POST['save_lb1250'])) {
    
    $lb1250_item = mysqli_real_escape_string($con, $_POST['lb1250_item']);   
    $lb1250_po = mysqli_real_escape_string($con, $_POST['lb1250_po']);
    $lb1250_icode = mysqli_real_escape_string($con, $_POST['lb1250_icode']);
    $lb1250_md = mysqli_real_escape_string($con, $_POST['lb1250_md']);
    $lb1250_rd = mysqli_real_escape_string($con, $_POST['lb1250_rd']);
    $lb1250_lotrb = mysqli_real_escape_string($con, $_POST['lb1250_lotrb']);
    $lb1250_lotvendor = mysqli_real_escape_string($con, $_POST['lb1250_lotvendor']);
    $lb1250_qty_i = mysqli_real_escape_string($con, $_POST['lb1250_qty_i']);
    $lb1250_quantity_i = mysqli_real_escape_string($con, $_POST['lb1250_quantity_i']);
    $lb1250_unit_i = mysqli_real_escape_string($con, $_POST['lb1250_unit_i']);
    $lb1250_quantity_r = mysqli_real_escape_string($con, $_POST['lb1250_quantity_r']);
    $lb1250_uniti_r = mysqli_real_escape_string($con, $_POST['lb1250_uniti_r']);
    $lb1250_status = mysqli_real_escape_string($con, $_POST['lb1250_status']);
    $lb1250_ramark = mysqli_real_escape_string($con, $_POST['lb1250_ramark']);
    
    $query = "INSERT INTO lb1250 (lb1250_item, lb1250_po, lb1250_icode, lb1250_md, lb1250_rd, lb1250_lotrb, lb1250_lotvendor, lb1250_qty_i, lb1250_quantity_i, lb1250_unit_i, lb1250_quantity_r, lb1250_uniti_r, lb1250_status, lb1250_ramark) 
    VALUES ('$lb1250_item','$lb1250_po','$lb1250_icode','$lb1250_md','$lb1250_rd','$lb1250_lotrb','$lb1250_lotvendor','$lb1250_qty_i','$lb1250_quantity_i','$lb1250_unit_i','$lb1250_quantity_r','$lb1250_uniti_r','$lb1250_status','$lb1250_ramark')";
    

    $query_run = mysqli_query($con, $query);

    if($query_run) {
        $_SESSION['message'] = " Created Successfully";
    } else {
        $_SESSION['message'] = " Not Created";
    }

    header("Location:lb1250-create.php");
    exit(0);
}
?>