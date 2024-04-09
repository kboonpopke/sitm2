<?php
session_start();
require 'dbcon.php';

if(isset($_POST['delete_lf350']))
{
    $lf350_id = mysqli_real_escape_string($con, $_POST['delete_lf350']); // แก้ไขตรงนี้เป็น 'delete_lf350'

    $query = "DELETE FROM lf350 WHERE id='$lf350_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Deleted Successfully";
        header("Location: lf350-index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Not Deleted: " . mysqli_error($con);
        header("Location: lf350-index.php");
        exit(0);
    }


}

if (isset($_POST['update_lf350'])) {
    $lf350_id = mysqli_real_escape_string($con, $_POST['lf350_id']);

    $lf350_item = mysqli_real_escape_string($con, $_POST['lf350_item']);
    $lf350_po = mysqli_real_escape_string($con, $_POST['lf350_po']);
    $lf350_icode = mysqli_real_escape_string($con, $_POST['lf350_icode']);
    $lf350_md = mysqli_real_escape_string($con, $_POST['lf350_md']);
    $lf350_rd = mysqli_real_escape_string($con, $_POST['lf350_rd']);
    $lf350_lotrb = mysqli_real_escape_string($con, $_POST['lf350_lotrb']);
    $lf350_lotvendor = mysqli_real_escape_string($con, $_POST['lf350_lotvendor']);
    $lf350_qty_i = mysqli_real_escape_string($con, $_POST['lf350_qty_i']);
    $lf350_quantity_i = mysqli_real_escape_string($con, $_POST['lf350_quantity_i']);
    $lf350_unit_i = mysqli_real_escape_string($con, $_POST['lf350_unit_i']);
    $lf350_quantity_r = mysqli_real_escape_string($con, $_POST['lf350_quantity_r']);
    $lf350_uniti_r = mysqli_real_escape_string($con, $_POST['lf350_uniti_r']);
    $lf350_status = mysqli_real_escape_string($con, $_POST['lf350_status']);
    $lf350_ramark = mysqli_real_escape_string($con, $_POST['lf350_ramark']);

    $query = "UPDATE lf350 SET lf350_item='$lf350_item', lf350_po='$lf350_po', lf350_icode='$lf350_icode', lf350_md='$lf350_md', lf350_rd='$lf350_rd', lf350_lotrb='$lf350_lotrb', lf350_lotvendor='$lf350_lotvendor', lf350_qty_i='$lf350_qty_i', lf350_quantity_i='$lf350_quantity_i', lf350_unit_i='$lf350_unit_i', lf350_quantity_r='$lf350_quantity_r', lf350_uniti_r='$lf350_uniti_r', lf350_status='$lf350_status', lf350_ramark='$lf350_ramark' WHERE id='$lf350_id'";
    $query_run = mysqli_query($con, $query);

    if ($query_run) {
        $_SESSION['message'] = "Updated Successfully";
        header("Location: lf350-index.php");
        exit(0);
    } else {
        $_SESSION['message'] = "Not Updated";
        header("Location: lf350-index.php");
        exit(0);
    }
}

if(isset($_POST['save_lf350'])) {
    
    $lf350_item = mysqli_real_escape_string($con, $_POST['lf350_item']);   
    $lf350_po = mysqli_real_escape_string($con, $_POST['lf350_po']);
    $lf350_icode = mysqli_real_escape_string($con, $_POST['lf350_icode']);
    $lf350_md = mysqli_real_escape_string($con, $_POST['lf350_md']);
    $lf350_rd = mysqli_real_escape_string($con, $_POST['lf350_rd']);
    $lf350_lotrb = mysqli_real_escape_string($con, $_POST['lf350_lotrb']);
    $lf350_lotvendor = mysqli_real_escape_string($con, $_POST['lf350_lotvendor']);
    $lf350_qty_i = mysqli_real_escape_string($con, $_POST['lf350_qty_i']);
    $lf350_quantity_i = mysqli_real_escape_string($con, $_POST['lf350_quantity_i']);
    $lf350_unit_i = mysqli_real_escape_string($con, $_POST['lf350_unit_i']);
    $lf350_quantity_r = mysqli_real_escape_string($con, $_POST['lf350_quantity_r']);
    $lf350_uniti_r = mysqli_real_escape_string($con, $_POST['lf350_uniti_r']);
    $lf350_status = mysqli_real_escape_string($con, $_POST['lf350_status']);
    $lf350_ramark = mysqli_real_escape_string($con, $_POST['lf350_ramark']);
    
    $query = "INSERT INTO lf350 (lf350_item, lf350_po, lf350_icode, lf350_md, lf350_rd, lf350_lotrb, lf350_lotvendor, lf350_qty_i, lf350_quantity_i, lf350_unit_i, lf350_quantity_r, lf350_uniti_r, lf350_status, lf350_ramark) 
    VALUES ('$lf350_item','$lf350_po','$lf350_icode','$lf350_md','$lf350_rd','$lf350_lotrb','$lf350_lotvendor','$lf350_qty_i','$lf350_quantity_i','$lf350_unit_i','$lf350_quantity_r','$lf350_uniti_r','$lf350_status','$lf350_ramark')";
    

    $query_run = mysqli_query($con, $query);

    if($query_run) {
        $_SESSION['message'] = " Created Successfully";
    } else {
        $_SESSION['message'] = " Not Created";
    }

    header("Location:lf350-create.php");
    exit(0);
}
?>