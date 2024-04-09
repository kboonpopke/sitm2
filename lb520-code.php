<?php
session_start();
require 'dbcon.php';

if(isset($_POST['delete_lb520']))
{
    $lb520_id = mysqli_real_escape_string($con, $_POST['delete_lb520']); // แก้ไขตรงนี้เป็น 'delete_lb520'

    $query = "DELETE FROM lb520 WHERE id='$lb520_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Deleted Successfully";
        header("Location: lb520-index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Not Deleted: " . mysqli_error($con);
        header("Location: lb520-index.php");
        exit(0);
    }


}

if (isset($_POST['update_lb520'])) {
    $lb520_id = mysqli_real_escape_string($con, $_POST['lb520_id']);

    $lb520_item = mysqli_real_escape_string($con, $_POST['lb520_item']);
    $lb520_po = mysqli_real_escape_string($con, $_POST['lb520_po']);
    $lb520_icode = mysqli_real_escape_string($con, $_POST['lb520_icode']);
    $lb520_md = mysqli_real_escape_string($con, $_POST['lb520_md']);
    $lb520_rd = mysqli_real_escape_string($con, $_POST['lb520_rd']);
    $lb520_lotrb = mysqli_real_escape_string($con, $_POST['lb520_lotrb']);
    $lb520_lotvendor = mysqli_real_escape_string($con, $_POST['lb520_lotvendor']);
    $lb520_qty_i = mysqli_real_escape_string($con, $_POST['lb520_qty_i']);
    $lb520_quantity_i = mysqli_real_escape_string($con, $_POST['lb520_quantity_i']);
    $lb520_unit_i = mysqli_real_escape_string($con, $_POST['lb520_unit_i']);
    $lb520_quantity_r = mysqli_real_escape_string($con, $_POST['lb520_quantity_r']);
    $lb520_uniti_r = mysqli_real_escape_string($con, $_POST['lb520_uniti_r']);
    $lb520_status = mysqli_real_escape_string($con, $_POST['lb520_status']);
    $lb520_ramark = mysqli_real_escape_string($con, $_POST['lb520_ramark']);

    $query = "UPDATE lb520 SET lb520_item='$lb520_item', lb520_po='$lb520_po', lb520_icode='$lb520_icode', lb520_md='$lb520_md', lb520_rd='$lb520_rd', lb520_lotrb='$lb520_lotrb', lb520_lotvendor='$lb520_lotvendor', lb520_qty_i='$lb520_qty_i', lb520_quantity_i='$lb520_quantity_i', lb520_unit_i='$lb520_unit_i', lb520_quantity_r='$lb520_quantity_r', lb520_uniti_r='$lb520_uniti_r', lb520_status='$lb520_status', lb520_ramark='$lb520_ramark' WHERE id='$lb520_id'";
    $query_run = mysqli_query($con, $query);

    if ($query_run) {
        $_SESSION['message'] = "Updated Successfully";
        header("Location: lb520-index.php");
        exit(0);
    } else {
        $_SESSION['message'] = "Not Updated";
        header("Location: lb520-index.php");
        exit(0);
    }
}

if(isset($_POST['save_lb520'])) {
    
    $lb520_item = mysqli_real_escape_string($con, $_POST['lb520_item']);   
    $lb520_po = mysqli_real_escape_string($con, $_POST['lb520_po']);
    $lb520_icode = mysqli_real_escape_string($con, $_POST['lb520_icode']);
    $lb520_md = mysqli_real_escape_string($con, $_POST['lb520_md']);
    $lb520_rd = mysqli_real_escape_string($con, $_POST['lb520_rd']);
    $lb520_lotrb = mysqli_real_escape_string($con, $_POST['lb520_lotrb']);
    $lb520_lotvendor = mysqli_real_escape_string($con, $_POST['lb520_lotvendor']);
    $lb520_qty_i = mysqli_real_escape_string($con, $_POST['lb520_qty_i']);
    $lb520_quantity_i = mysqli_real_escape_string($con, $_POST['lb520_quantity_i']);
    $lb520_unit_i = mysqli_real_escape_string($con, $_POST['lb520_unit_i']);
    $lb520_quantity_r = mysqli_real_escape_string($con, $_POST['lb520_quantity_r']);
    $lb520_uniti_r = mysqli_real_escape_string($con, $_POST['lb520_uniti_r']);
    $lb520_status = mysqli_real_escape_string($con, $_POST['lb520_status']);
    $lb520_ramark = mysqli_real_escape_string($con, $_POST['lb520_ramark']);
    
    $query = "INSERT INTO lb520 (lb520_item, lb520_po, lb520_icode, lb520_md, lb520_rd, lb520_lotrb, lb520_lotvendor, lb520_qty_i, lb520_quantity_i, lb520_unit_i, lb520_quantity_r, lb520_uniti_r, lb520_status, lb520_ramark) 
    VALUES ('$lb520_item','$lb520_po','$lb520_icode','$lb520_md','$lb520_rd','$lb520_lotrb','$lb520_lotvendor','$lb520_qty_i','$lb520_quantity_i','$lb520_unit_i','$lb520_quantity_r','$lb520_uniti_r','$lb520_status','$lb520_ramark')";
    

    $query_run = mysqli_query($con, $query);

    if($query_run) {
        $_SESSION['message'] = " Created Successfully";
    } else {
        $_SESSION['message'] = " Not Created";
    }

    header("Location:lb520-create.php");
    exit(0);
}
?>