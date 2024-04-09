<?php
session_start();
require 'dbcon.php';

if(isset($_POST['delete_lbb520']))
{
    $lbb520_id = mysqli_real_escape_string($con, $_POST['delete_lbb520']); // แก้ไขตรงนี้เป็น 'delete_lbb520'

    $query = "DELETE FROM lbb520 WHERE id='$lbb520_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Deleted Successfully";
        header("Location: lbb520-index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Not Deleted: " . mysqli_error($con);
        header("Location: lbb520-index.php");
        exit(0);
    }


}

if (isset($_POST['update_lbb520'])) {
    $lbb520_id = mysqli_real_escape_string($con, $_POST['lbb520_id']);

    $lbb520_item = mysqli_real_escape_string($con, $_POST['lbb520_item']);
    $lbb520_po = mysqli_real_escape_string($con, $_POST['lbb520_po']);
    $lbb520_icode = mysqli_real_escape_string($con, $_POST['lbb520_icode']);
    $lbb520_md = mysqli_real_escape_string($con, $_POST['lbb520_md']);
    $lbb520_rd = mysqli_real_escape_string($con, $_POST['lbb520_rd']);
    $lbb520_lotrb = mysqli_real_escape_string($con, $_POST['lbb520_lotrb']);
    $lbb520_lotvendor = mysqli_real_escape_string($con, $_POST['lbb520_lotvendor']);
    $lbb520_qty_i = mysqli_real_escape_string($con, $_POST['lbb520_qty_i']);
    $lbb520_quantity_i = mysqli_real_escape_string($con, $_POST['lbb520_quantity_i']);
    $lbb520_unit_i = mysqli_real_escape_string($con, $_POST['lbb520_unit_i']);
    $lbb520_quantity_r = mysqli_real_escape_string($con, $_POST['lbb520_quantity_r']);
    $lbb520_uniti_r = mysqli_real_escape_string($con, $_POST['lbb520_uniti_r']);
    $lbb520_status = mysqli_real_escape_string($con, $_POST['lbb520_status']);
    $lbb520_ramark = mysqli_real_escape_string($con, $_POST['lbb520_ramark']);

    $query = "UPDATE lbb520 SET lbb520_item='$lbb520_item', lbb520_po='$lbb520_po', lbb520_icode='$lbb520_icode', lbb520_md='$lbb520_md', lbb520_rd='$lbb520_rd', lbb520_lotrb='$lbb520_lotrb', lbb520_lotvendor='$lbb520_lotvendor', lbb520_qty_i='$lbb520_qty_i', lbb520_quantity_i='$lbb520_quantity_i', lbb520_unit_i='$lbb520_unit_i', lbb520_quantity_r='$lbb520_quantity_r', lbb520_uniti_r='$lbb520_uniti_r', lbb520_status='$lbb520_status', lbb520_ramark='$lbb520_ramark' WHERE id='$lbb520_id'";
    $query_run = mysqli_query($con, $query);

    if ($query_run) {
        $_SESSION['message'] = "Updated Successfully";
        header("Location: lbb520-index.php");
        exit(0);
    } else {
        $_SESSION['message'] = "Not Updated";
        header("Location: lbb520-index.php");
        exit(0);
    }
}

if(isset($_POST['save_lbb520'])) {
    
    $lbb520_item = mysqli_real_escape_string($con, $_POST['lbb520_item']);   
    $lbb520_po = mysqli_real_escape_string($con, $_POST['lbb520_po']);
    $lbb520_icode = mysqli_real_escape_string($con, $_POST['lbb520_icode']);
    $lbb520_md = mysqli_real_escape_string($con, $_POST['lbb520_md']);
    $lbb520_rd = mysqli_real_escape_string($con, $_POST['lbb520_rd']);
    $lbb520_lotrb = mysqli_real_escape_string($con, $_POST['lbb520_lotrb']);
    $lbb520_lotvendor = mysqli_real_escape_string($con, $_POST['lbb520_lotvendor']);
    $lbb520_qty_i = mysqli_real_escape_string($con, $_POST['lbb520_qty_i']);
    $lbb520_quantity_i = mysqli_real_escape_string($con, $_POST['lbb520_quantity_i']);
    $lbb520_unit_i = mysqli_real_escape_string($con, $_POST['lbb520_unit_i']);
    $lbb520_quantity_r = mysqli_real_escape_string($con, $_POST['lbb520_quantity_r']);
    $lbb520_uniti_r = mysqli_real_escape_string($con, $_POST['lbb520_uniti_r']);
    $lbb520_status = mysqli_real_escape_string($con, $_POST['lbb520_status']);
    $lbb520_ramark = mysqli_real_escape_string($con, $_POST['lbb520_ramark']);
    
    $query = "INSERT INTO lbb520 (lbb520_item, lbb520_po, lbb520_icode, lbb520_md, lbb520_rd, lbb520_lotrb, lbb520_lotvendor, lbb520_qty_i, lbb520_quantity_i, lbb520_unit_i, lbb520_quantity_r, lbb520_uniti_r, lbb520_status, lbb520_ramark) 
    VALUES ('$lbb520_item','$lbb520_po','$lbb520_icode','$lbb520_md','$lbb520_rd','$lbb520_lotrb','$lbb520_lotvendor','$lbb520_qty_i','$lbb520_quantity_i','$lbb520_unit_i','$lbb520_quantity_r','$lbb520_uniti_r','$lbb520_status','$lbb520_ramark')";
    

    $query_run = mysqli_query($con, $query);

    if($query_run) {
        $_SESSION['message'] = " Created Successfully";
    } else {
        $_SESSION['message'] = " Not Created";
    }

    header("Location:lbb520-create.php");
    exit(0);
}
?>