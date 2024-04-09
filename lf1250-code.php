<?php
session_start();
require 'dbcon.php';

if(isset($_POST['delete_lf1250']))
{
    $lf1250_id = mysqli_real_escape_string($con, $_POST['delete_lf1250']); // แก้ไขตรงนี้เป็น 'delete_lf1250'

    $query = "DELETE FROM lf1250 WHERE id='$lf1250_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Deleted Successfully";
        header("Location: lf1250-index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Not Deleted: " . mysqli_error($con);
        header("Location: lf1250-index.php");
        exit(0);
    }


}

if (isset($_POST['update_lf1250'])) {
    $lf1250_id = mysqli_real_escape_string($con, $_POST['lf1250_id']);

    $lf1250_item = mysqli_real_escape_string($con, $_POST['lf1250_item']);
    $lf1250_po = mysqli_real_escape_string($con, $_POST['lf1250_po']);
    $lf1250_icode = mysqli_real_escape_string($con, $_POST['lf1250_icode']);
    $lf1250_md = mysqli_real_escape_string($con, $_POST['lf1250_md']);
    $lf1250_rd = mysqli_real_escape_string($con, $_POST['lf1250_rd']);
    $lf1250_lotrb = mysqli_real_escape_string($con, $_POST['lf1250_lotrb']);
    $lf1250_lotvendor = mysqli_real_escape_string($con, $_POST['lf1250_lotvendor']);
    $lf1250_qty_i = mysqli_real_escape_string($con, $_POST['lf1250_qty_i']);
    $lf1250_quantity_i = mysqli_real_escape_string($con, $_POST['lf1250_quantity_i']);
    $lf1250_unit_i = mysqli_real_escape_string($con, $_POST['lf1250_unit_i']);
    $lf1250_quantity_r = mysqli_real_escape_string($con, $_POST['lf1250_quantity_r']);
    $lf1250_uniti_r = mysqli_real_escape_string($con, $_POST['lf1250_uniti_r']);
    $lf1250_status = mysqli_real_escape_string($con, $_POST['lf1250_status']);
    $lf1250_ramark = mysqli_real_escape_string($con, $_POST['lf1250_ramark']);

    $query = "UPDATE lf1250 SET lf1250_item='$lf1250_item', lf1250_po='$lf1250_po', lf1250_icode='$lf1250_icode', lf1250_md='$lf1250_md', lf1250_rd='$lf1250_rd', lf1250_lotrb='$lf1250_lotrb', lf1250_lotvendor='$lf1250_lotvendor', lf1250_qty_i='$lf1250_qty_i', lf1250_quantity_i='$lf1250_quantity_i', lf1250_unit_i='$lf1250_unit_i', lf1250_quantity_r='$lf1250_quantity_r', lf1250_uniti_r='$lf1250_uniti_r', lf1250_status='$lf1250_status', lf1250_ramark='$lf1250_ramark' WHERE id='$lf1250_id'";
    $query_run = mysqli_query($con, $query);

    if ($query_run) {
        $_SESSION['message'] = "Updated Successfully";
        header("Location: lf1250-index.php");
        exit(0);
    } else {
        $_SESSION['message'] = "Not Updated";
        header("Location: lf1250-index.php");
        exit(0);
    }
}

if(isset($_POST['save_lf1250'])) {
    
    $lf1250_item = mysqli_real_escape_string($con, $_POST['lf1250_item']);   
    $lf1250_po = mysqli_real_escape_string($con, $_POST['lf1250_po']);
    $lf1250_icode = mysqli_real_escape_string($con, $_POST['lf1250_icode']);
    $lf1250_md = mysqli_real_escape_string($con, $_POST['lf1250_md']);
    $lf1250_rd = mysqli_real_escape_string($con, $_POST['lf1250_rd']);
    $lf1250_lotrb = mysqli_real_escape_string($con, $_POST['lf1250_lotrb']);
    $lf1250_lotvendor = mysqli_real_escape_string($con, $_POST['lf1250_lotvendor']);
    $lf1250_qty_i = mysqli_real_escape_string($con, $_POST['lf1250_qty_i']);
    $lf1250_quantity_i = mysqli_real_escape_string($con, $_POST['lf1250_quantity_i']);
    $lf1250_unit_i = mysqli_real_escape_string($con, $_POST['lf1250_unit_i']);
    $lf1250_quantity_r = mysqli_real_escape_string($con, $_POST['lf1250_quantity_r']);
    $lf1250_uniti_r = mysqli_real_escape_string($con, $_POST['lf1250_uniti_r']);
    $lf1250_status = mysqli_real_escape_string($con, $_POST['lf1250_status']);
    $lf1250_ramark = mysqli_real_escape_string($con, $_POST['lf1250_ramark']);
    
    $query = "INSERT INTO lf1250 (lf1250_item, lf1250_po, lf1250_icode, lf1250_md, lf1250_rd, lf1250_lotrb, lf1250_lotvendor, lf1250_qty_i, lf1250_quantity_i, lf1250_unit_i, lf1250_quantity_r, lf1250_uniti_r, lf1250_status, lf1250_ramark) 
    VALUES ('$lf1250_item','$lf1250_po','$lf1250_icode','$lf1250_md','$lf1250_rd','$lf1250_lotrb','$lf1250_lotvendor','$lf1250_qty_i','$lf1250_quantity_i','$lf1250_unit_i','$lf1250_quantity_r','$lf1250_uniti_r','$lf1250_status','$lf1250_ramark')";
    

    $query_run = mysqli_query($con, $query);

    if($query_run) {
        $_SESSION['message'] = " Created Successfully";
    } else {
        $_SESSION['message'] = " Not Created";
    }

    header("Location:lf1250-create.php");
    exit(0);
}
?>