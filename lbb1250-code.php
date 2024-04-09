<?php
session_start();
require 'dbcon.php';

if(isset($_POST['delete_lbb1250']))
{
    $lbb1250_id = mysqli_real_escape_string($con, $_POST['delete_lbb1250']); // แก้ไขตรงนี้เป็น 'delete_lbb1250'

    $query = "DELETE FROM lbb1250 WHERE id='$lbb1250_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Deleted Successfully";
        header("Location: lbb1250-index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Not Deleted: " . mysqli_error($con);
        header("Location: lbb1250-index.php");
        exit(0);
    }


}

if (isset($_POST['update_lbb1250'])) {
    $lbb1250_id = mysqli_real_escape_string($con, $_POST['lbb1250_id']);

    $lbb1250_item = mysqli_real_escape_string($con, $_POST['lbb1250_item']);
    $lbb1250_po = mysqli_real_escape_string($con, $_POST['lbb1250_po']);
    $lbb1250_icode = mysqli_real_escape_string($con, $_POST['lbb1250_icode']);
    $lbb1250_md = mysqli_real_escape_string($con, $_POST['lbb1250_md']);
    $lbb1250_rd = mysqli_real_escape_string($con, $_POST['lbb1250_rd']);
    $lbb1250_lotrb = mysqli_real_escape_string($con, $_POST['lbb1250_lotrb']);
    $lbb1250_lotvendor = mysqli_real_escape_string($con, $_POST['lbb1250_lotvendor']);
    $lbb1250_qty_i = mysqli_real_escape_string($con, $_POST['lbb1250_qty_i']);
    $lbb1250_quantity_i = mysqli_real_escape_string($con, $_POST['lbb1250_quantity_i']);
    $lbb1250_unit_i = mysqli_real_escape_string($con, $_POST['lbb1250_unit_i']);
    $lbb1250_quantity_r = mysqli_real_escape_string($con, $_POST['lbb1250_quantity_r']);
    $lbb1250_uniti_r = mysqli_real_escape_string($con, $_POST['lbb1250_uniti_r']);
    $lbb1250_status = mysqli_real_escape_string($con, $_POST['lbb1250_status']);
    $lbb1250_ramark = mysqli_real_escape_string($con, $_POST['lbb1250_ramark']);

    $query = "UPDATE lbb1250 SET lbb1250_item='$lbb1250_item', lbb1250_po='$lbb1250_po', lbb1250_icode='$lbb1250_icode', lbb1250_md='$lbb1250_md', lbb1250_rd='$lbb1250_rd', lbb1250_lotrb='$lbb1250_lotrb', lbb1250_lotvendor='$lbb1250_lotvendor', lbb1250_qty_i='$lbb1250_qty_i', lbb1250_quantity_i='$lbb1250_quantity_i', lbb1250_unit_i='$lbb1250_unit_i', lbb1250_quantity_r='$lbb1250_quantity_r', lbb1250_uniti_r='$lbb1250_uniti_r', lbb1250_status='$lbb1250_status', lbb1250_ramark='$lbb1250_ramark' WHERE id='$lbb1250_id'";
    $query_run = mysqli_query($con, $query);

    if ($query_run) {
        $_SESSION['message'] = "Updated Successfully";
        header("Location: lbb1250-index.php");
        exit(0);
    } else {
        $_SESSION['message'] = "Not Updated";
        header("Location: lbb1250-index.php");
        exit(0);
    }
}

if(isset($_POST['save_lbb1250'])) {
    
    $lbb1250_item = mysqli_real_escape_string($con, $_POST['lbb1250_item']);   
    $lbb1250_po = mysqli_real_escape_string($con, $_POST['lbb1250_po']);
    $lbb1250_icode = mysqli_real_escape_string($con, $_POST['lbb1250_icode']);
    $lbb1250_md = mysqli_real_escape_string($con, $_POST['lbb1250_md']);
    $lbb1250_rd = mysqli_real_escape_string($con, $_POST['lbb1250_rd']);
    $lbb1250_lotrb = mysqli_real_escape_string($con, $_POST['lbb1250_lotrb']);
    $lbb1250_lotvendor = mysqli_real_escape_string($con, $_POST['lbb1250_lotvendor']);
    $lbb1250_qty_i = mysqli_real_escape_string($con, $_POST['lbb1250_qty_i']);
    $lbb1250_quantity_i = mysqli_real_escape_string($con, $_POST['lbb1250_quantity_i']);
    $lbb1250_unit_i = mysqli_real_escape_string($con, $_POST['lbb1250_unit_i']);
    $lbb1250_quantity_r = mysqli_real_escape_string($con, $_POST['lbb1250_quantity_r']);
    $lbb1250_uniti_r = mysqli_real_escape_string($con, $_POST['lbb1250_uniti_r']);
    $lbb1250_status = mysqli_real_escape_string($con, $_POST['lbb1250_status']);
    $lbb1250_ramark = mysqli_real_escape_string($con, $_POST['lbb1250_ramark']);
    
    $query = "INSERT INTO lbb1250 (lbb1250_item, lbb1250_po, lbb1250_icode, lbb1250_md, lbb1250_rd, lbb1250_lotrb, lbb1250_lotvendor, lbb1250_qty_i, lbb1250_quantity_i, lbb1250_unit_i, lbb1250_quantity_r, lbb1250_uniti_r, lbb1250_status, lbb1250_ramark) 
    VALUES ('$lbb1250_item','$lbb1250_po','$lbb1250_icode','$lbb1250_md','$lbb1250_rd','$lbb1250_lotrb','$lbb1250_lotvendor','$lbb1250_qty_i','$lbb1250_quantity_i','$lbb1250_unit_i','$lbb1250_quantity_r','$lbb1250_uniti_r','$lbb1250_status','$lbb1250_ramark')";
    

    $query_run = mysqli_query($con, $query);

    if($query_run) {
        $_SESSION['message'] = " Created Successfully";
    } else {
        $_SESSION['message'] = " Not Created";
    }

    header("Location:lbb1250-create.php");
    exit(0);
}
?>