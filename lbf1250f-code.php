<?php
session_start();
require 'dbcon.php';

if(isset($_POST['delete_lbf1250f']))
{
    $lbf1250f_id = mysqli_real_escape_string($con, $_POST['delete_lbf1250f']); // แก้ไขตรงนี้เป็น 'delete_lbf1250f'

    $query = "DELETE FROM lbf1250f WHERE id='$lbf1250f_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Deleted Successfully";
        header("Location: lbf1250f-index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Not Deleted: " . mysqli_error($con);
        header("Location: lbf1250f-index.php");
        exit(0);
    }


}

if (isset($_POST['update_lbf1250f'])) {
    $lbf1250f_id = mysqli_real_escape_string($con, $_POST['lbf1250f_id']);

    $lbf1250f_item = mysqli_real_escape_string($con, $_POST['lbf1250f_item']);
    $lbf1250f_po = mysqli_real_escape_string($con, $_POST['lbf1250f_po']);
    $lbf1250f_icode = mysqli_real_escape_string($con, $_POST['lbf1250f_icode']);
    $lbf1250f_md = mysqli_real_escape_string($con, $_POST['lbf1250f_md']);
    $lbf1250f_rd = mysqli_real_escape_string($con, $_POST['lbf1250f_rd']);
    $lbf1250f_lotrb = mysqli_real_escape_string($con, $_POST['lbf1250f_lotrb']);
    $lbf1250f_lotvendor = mysqli_real_escape_string($con, $_POST['lbf1250f_lotvendor']);
    $lbf1250f_qty_i = mysqli_real_escape_string($con, $_POST['lbf1250f_qty_i']);
    $lbf1250f_quantity_i = mysqli_real_escape_string($con, $_POST['lbf1250f_quantity_i']);
    $lbf1250f_unit_i = mysqli_real_escape_string($con, $_POST['lbf1250f_unit_i']);
    $lbf1250f_quantity_r = mysqli_real_escape_string($con, $_POST['lbf1250f_quantity_r']);
    $lbf1250f_uniti_r = mysqli_real_escape_string($con, $_POST['lbf1250f_uniti_r']);
    $lbf1250f_status = mysqli_real_escape_string($con, $_POST['lbf1250f_status']);
    $lbf1250f_ramark = mysqli_real_escape_string($con, $_POST['lbf1250f_ramark']);

    $query = "UPDATE lbf1250f SET lbf1250f_item='$lbf1250f_item', lbf1250f_po='$lbf1250f_po', lbf1250f_icode='$lbf1250f_icode', lbf1250f_md='$lbf1250f_md', lbf1250f_rd='$lbf1250f_rd', lbf1250f_lotrb='$lbf1250f_lotrb', lbf1250f_lotvendor='$lbf1250f_lotvendor', lbf1250f_qty_i='$lbf1250f_qty_i', lbf1250f_quantity_i='$lbf1250f_quantity_i', lbf1250f_unit_i='$lbf1250f_unit_i', lbf1250f_quantity_r='$lbf1250f_quantity_r', lbf1250f_uniti_r='$lbf1250f_uniti_r', lbf1250f_status='$lbf1250f_status', lbf1250f_ramark='$lbf1250f_ramark' WHERE id='$lbf1250f_id'";
    $query_run = mysqli_query($con, $query);

    if ($query_run) {
        $_SESSION['message'] = "Updated Successfully";
        header("Location: lbf1250f-index.php");
        exit(0);
    } else {
        $_SESSION['message'] = "Not Updated";
        header("Location: lbf1250f-index.php");
        exit(0);
    }
}

if(isset($_POST['save_lbf1250f'])) {
    
    $lbf1250f_item = mysqli_real_escape_string($con, $_POST['lbf1250f_item']);   
    $lbf1250f_po = mysqli_real_escape_string($con, $_POST['lbf1250f_po']);
    $lbf1250f_icode = mysqli_real_escape_string($con, $_POST['lbf1250f_icode']);
    $lbf1250f_md = mysqli_real_escape_string($con, $_POST['lbf1250f_md']);
    $lbf1250f_rd = mysqli_real_escape_string($con, $_POST['lbf1250f_rd']);
    $lbf1250f_lotrb = mysqli_real_escape_string($con, $_POST['lbf1250f_lotrb']);
    $lbf1250f_lotvendor = mysqli_real_escape_string($con, $_POST['lbf1250f_lotvendor']);
    $lbf1250f_qty_i = mysqli_real_escape_string($con, $_POST['lbf1250f_qty_i']);
    $lbf1250f_quantity_i = mysqli_real_escape_string($con, $_POST['lbf1250f_quantity_i']);
    $lbf1250f_unit_i = mysqli_real_escape_string($con, $_POST['lbf1250f_unit_i']);
    $lbf1250f_quantity_r = mysqli_real_escape_string($con, $_POST['lbf1250f_quantity_r']);
    $lbf1250f_uniti_r = mysqli_real_escape_string($con, $_POST['lbf1250f_uniti_r']);
    $lbf1250f_status = mysqli_real_escape_string($con, $_POST['lbf1250f_status']);
    $lbf1250f_ramark = mysqli_real_escape_string($con, $_POST['lbf1250f_ramark']);
    
    $query = "INSERT INTO lbf1250f (lbf1250f_item, lbf1250f_po, lbf1250f_icode, lbf1250f_md, lbf1250f_rd, lbf1250f_lotrb, lbf1250f_lotvendor, lbf1250f_qty_i, lbf1250f_quantity_i, lbf1250f_unit_i, lbf1250f_quantity_r, lbf1250f_uniti_r, lbf1250f_status, lbf1250f_ramark) 
    VALUES ('$lbf1250f_item','$lbf1250f_po','$lbf1250f_icode','$lbf1250f_md','$lbf1250f_rd','$lbf1250f_lotrb','$lbf1250f_lotvendor','$lbf1250f_qty_i','$lbf1250f_quantity_i','$lbf1250f_unit_i','$lbf1250f_quantity_r','$lbf1250f_uniti_r','$lbf1250f_status','$lbf1250f_ramark')";
    

    $query_run = mysqli_query($con, $query);

    if($query_run) {
        $_SESSION['message'] = " Created Successfully";
    } else {
        $_SESSION['message'] = " Not Created";
    }

    header("Location:lbf1250f-create.php");
    exit(0);
}
?>