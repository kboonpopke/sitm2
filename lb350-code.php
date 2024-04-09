<?php
session_start();
require 'dbcon.php';

if(isset($_POST['delete_lb350']))
{
    $lb350_id = mysqli_real_escape_string($con, $_POST['delete_lb350']); // แก้ไขตรงนี้เป็น 'delete_lb350'

    $query = "DELETE FROM lb350 WHERE id='$lb350_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Deleted Successfully";
        header("Location: lb350-index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Not Deleted: " . mysqli_error($con);
        header("Location: lb350-index.php");
        exit(0);
    }


}

if (isset($_POST['update_lb350'])) {
    $lb350_id = mysqli_real_escape_string($con, $_POST['lb350_id']);

    $lb350_item = mysqli_real_escape_string($con, $_POST['lb350_item']);
    $lb350_po = mysqli_real_escape_string($con, $_POST['lb350_po']);
    $lb350_icode = mysqli_real_escape_string($con, $_POST['lb350_icode']);
    $lb350_md = mysqli_real_escape_string($con, $_POST['lb350_md']);
    $lb350_rd = mysqli_real_escape_string($con, $_POST['lb350_rd']);
    $lb350_lotrb = mysqli_real_escape_string($con, $_POST['lb350_lotrb']);
    $lb350_lotvendor = mysqli_real_escape_string($con, $_POST['lb350_lotvendor']);
    $lb350_qty_i = mysqli_real_escape_string($con, $_POST['lb350_qty_i']);
    $lb350_quantity_i = mysqli_real_escape_string($con, $_POST['lb350_quantity_i']);
    $lb350_unit_i = mysqli_real_escape_string($con, $_POST['lb350_unit_i']);
    $lb350_quantity_r = mysqli_real_escape_string($con, $_POST['lb350_quantity_r']);
    $lb350_uniti_r = mysqli_real_escape_string($con, $_POST['lb350_uniti_r']);
    $lb350_status = mysqli_real_escape_string($con, $_POST['lb350_status']);
    $lb350_ramark = mysqli_real_escape_string($con, $_POST['lb350_ramark']);

    $query = "UPDATE lb350 SET lb350_item='$lb350_item', lb350_po='$lb350_po', lb350_icode='$lb350_icode', lb350_md='$lb350_md', lb350_rd='$lb350_rd', lb350_lotrb='$lb350_lotrb', lb350_lotvendor='$lb350_lotvendor', lb350_qty_i='$lb350_qty_i', lb350_quantity_i='$lb350_quantity_i', lb350_unit_i='$lb350_unit_i', lb350_quantity_r='$lb350_quantity_r', lb350_uniti_r='$lb350_uniti_r', lb350_status='$lb350_status', lb350_ramark='$lb350_ramark' WHERE id='$lb350_id'";
    $query_run = mysqli_query($con, $query);

    if ($query_run) {
        $_SESSION['message'] = "Updated Successfully";
        header("Location: lb350-index.php");
        exit(0);
    } else {
        $_SESSION['message'] = "Not Updated";
        header("Location: lb350-index.php");
        exit(0);
    }
}

if(isset($_POST['save_lb350'])) {
    
    $lb350_item = mysqli_real_escape_string($con, $_POST['lb350_item']);   
    $lb350_po = mysqli_real_escape_string($con, $_POST['lb350_po']);
    $lb350_icode = mysqli_real_escape_string($con, $_POST['lb350_icode']);
    $lb350_md = mysqli_real_escape_string($con, $_POST['lb350_md']);
    $lb350_rd = mysqli_real_escape_string($con, $_POST['lb350_rd']);
    $lb350_lotrb = mysqli_real_escape_string($con, $_POST['lb350_lotrb']);
    $lb350_lotvendor = mysqli_real_escape_string($con, $_POST['lb350_lotvendor']);
    $lb350_qty_i = mysqli_real_escape_string($con, $_POST['lb350_qty_i']);
    $lb350_quantity_i = mysqli_real_escape_string($con, $_POST['lb350_quantity_i']);
    $lb350_unit_i = mysqli_real_escape_string($con, $_POST['lb350_unit_i']);
    $lb350_quantity_r = mysqli_real_escape_string($con, $_POST['lb350_quantity_r']);
    $lb350_uniti_r = mysqli_real_escape_string($con, $_POST['lb350_uniti_r']);
    $lb350_status = mysqli_real_escape_string($con, $_POST['lb350_status']);
    $lb350_ramark = mysqli_real_escape_string($con, $_POST['lb350_ramark']);
    
    $query = "INSERT INTO lb350 (lb350_item, lb350_po, lb350_icode, lb350_md, lb350_rd, lb350_lotrb, lb350_lotvendor, lb350_qty_i, lb350_quantity_i, lb350_unit_i, lb350_quantity_r, lb350_uniti_r, lb350_status, lb350_ramark) 
    VALUES ('$lb350_item','$lb350_po','$lb350_icode','$lb350_md','$lb350_rd','$lb350_lotrb','$lb350_lotvendor','$lb350_qty_i','$lb350_quantity_i','$lb350_unit_i','$lb350_quantity_r','$lb350_uniti_r','$lb350_status','$lb350_ramark')";
    

    $query_run = mysqli_query($con, $query);

    if($query_run) {
        $_SESSION['message'] = " Created Successfully";
    } else {
        $_SESSION['message'] = " Not Created";
    }

    header("Location:lb350-create.php");
    exit(0);
}
?>