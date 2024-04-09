<?php
session_start();
require 'dbcon.php';

if(isset($_POST['delete_lf520']))
{
    $lf520_id = mysqli_real_escape_string($con, $_POST['delete_lf520']); // แก้ไขตรงนี้เป็น 'delete_lf520'

    $query = "DELETE FROM lf520 WHERE id='$lf520_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Deleted Successfully";
        header("Location: lf520-index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Not Deleted: " . mysqli_error($con);
        header("Location: lf520-index.php");
        exit(0);
    }


}

if (isset($_POST['update_lf520'])) {
    $lf520_id = mysqli_real_escape_string($con, $_POST['lf520_id']);

    $lf520_item = mysqli_real_escape_string($con, $_POST['lf520_item']);
    $lf520_po = mysqli_real_escape_string($con, $_POST['lf520_po']);
    $lf520_icode = mysqli_real_escape_string($con, $_POST['lf520_icode']);
    $lf520_md = mysqli_real_escape_string($con, $_POST['lf520_md']);
    $lf520_rd = mysqli_real_escape_string($con, $_POST['lf520_rd']);
    $lf520_lotrb = mysqli_real_escape_string($con, $_POST['lf520_lotrb']);
    $lf520_lotvendor = mysqli_real_escape_string($con, $_POST['lf520_lotvendor']);
    $lf520_qty_i = mysqli_real_escape_string($con, $_POST['lf520_qty_i']);
    $lf520_quantity_i = mysqli_real_escape_string($con, $_POST['lf520_quantity_i']);
    $lf520_unit_i = mysqli_real_escape_string($con, $_POST['lf520_unit_i']);
    $lf520_quantity_r = mysqli_real_escape_string($con, $_POST['lf520_quantity_r']);
    $lf520_uniti_r = mysqli_real_escape_string($con, $_POST['lf520_uniti_r']);
    $lf520_status = mysqli_real_escape_string($con, $_POST['lf520_status']);
    $lf520_ramark = mysqli_real_escape_string($con, $_POST['lf520_ramark']);

    $query = "UPDATE lf520 SET lf520_item='$lf520_item', lf520_po='$lf520_po', lf520_icode='$lf520_icode', lf520_md='$lf520_md', lf520_rd='$lf520_rd', lf520_lotrb='$lf520_lotrb', lf520_lotvendor='$lf520_lotvendor', lf520_qty_i='$lf520_qty_i', lf520_quantity_i='$lf520_quantity_i', lf520_unit_i='$lf520_unit_i', lf520_quantity_r='$lf520_quantity_r', lf520_uniti_r='$lf520_uniti_r', lf520_status='$lf520_status', lf520_ramark='$lf520_ramark' WHERE id='$lf520_id'";
    $query_run = mysqli_query($con, $query);

    if ($query_run) {
        $_SESSION['message'] = "Updated Successfully";
        header("Location: lf520-index.php");
        exit(0);
    } else {
        $_SESSION['message'] = "Not Updated";
        header("Location: lf520-index.php");
        exit(0);
    }
}

if(isset($_POST['save_lf520'])) {
    
    $lf520_item = mysqli_real_escape_string($con, $_POST['lf520_item']);   
    $lf520_po = mysqli_real_escape_string($con, $_POST['lf520_po']);
    $lf520_icode = mysqli_real_escape_string($con, $_POST['lf520_icode']);
    $lf520_md = mysqli_real_escape_string($con, $_POST['lf520_md']);
    $lf520_rd = mysqli_real_escape_string($con, $_POST['lf520_rd']);
    $lf520_lotrb = mysqli_real_escape_string($con, $_POST['lf520_lotrb']);
    $lf520_lotvendor = mysqli_real_escape_string($con, $_POST['lf520_lotvendor']);
    $lf520_qty_i = mysqli_real_escape_string($con, $_POST['lf520_qty_i']);
    $lf520_quantity_i = mysqli_real_escape_string($con, $_POST['lf520_quantity_i']);
    $lf520_unit_i = mysqli_real_escape_string($con, $_POST['lf520_unit_i']);
    $lf520_quantity_r = mysqli_real_escape_string($con, $_POST['lf520_quantity_r']);
    $lf520_uniti_r = mysqli_real_escape_string($con, $_POST['lf520_uniti_r']);
    $lf520_status = mysqli_real_escape_string($con, $_POST['lf520_status']);
    $lf520_ramark = mysqli_real_escape_string($con, $_POST['lf520_ramark']);
    
    $query = "INSERT INTO lf520 (lf520_item, lf520_po, lf520_icode, lf520_md, lf520_rd, lf520_lotrb, lf520_lotvendor, lf520_qty_i, lf520_quantity_i, lf520_unit_i, lf520_quantity_r, lf520_uniti_r, lf520_status, lf520_ramark) 
    VALUES ('$lf520_item','$lf520_po','$lf520_icode','$lf520_md','$lf520_rd','$lf520_lotrb','$lf520_lotvendor','$lf520_qty_i','$lf520_quantity_i','$lf520_unit_i','$lf520_quantity_r','$lf520_uniti_r','$lf520_status','$lf520_ramark')";
    

    $query_run = mysqli_query($con, $query);

    if($query_run) {
        $_SESSION['message'] = " Created Successfully";
    } else {
        $_SESSION['message'] = " Not Created";
    }

    header("Location:lf520-create.php");
    exit(0);
}
?>