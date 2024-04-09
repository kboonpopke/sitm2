<?php
session_start();
require 'dbcon.php';

if(isset($_POST['delete_lbf520f']))
{
    $lbf520f_id = mysqli_real_escape_string($con, $_POST['delete_lbf520f']); // แก้ไขตรงนี้เป็น 'delete_lbf520f'

    $query = "DELETE FROM lbf520f WHERE id='$lbf520f_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Deleted Successfully";
        header("Location: lbf520f-index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Not Deleted: " . mysqli_error($con);
        header("Location: lbf520f-index.php");
        exit(0);
    }


}

if (isset($_POST['update_lbf520f'])) {
    $lbf520f_id = mysqli_real_escape_string($con, $_POST['lbf520f_id']);

    $lbf520f_item = mysqli_real_escape_string($con, $_POST['lbf520f_item']);
    $lbf520f_po = mysqli_real_escape_string($con, $_POST['lbf520f_po']);
    $lbf520f_icode = mysqli_real_escape_string($con, $_POST['lbf520f_icode']);
    $lbf520f_md = mysqli_real_escape_string($con, $_POST['lbf520f_md']);
    $lbf520f_rd = mysqli_real_escape_string($con, $_POST['lbf520f_rd']);
    $lbf520f_lotrb = mysqli_real_escape_string($con, $_POST['lbf520f_lotrb']);
    $lbf520f_lotvendor = mysqli_real_escape_string($con, $_POST['lbf520f_lotvendor']);
    $lbf520f_qty_i = mysqli_real_escape_string($con, $_POST['lbf520f_qty_i']);
    $lbf520f_quantity_i = mysqli_real_escape_string($con, $_POST['lbf520f_quantity_i']);
    $lbf520f_unit_i = mysqli_real_escape_string($con, $_POST['lbf520f_unit_i']);
    $lbf520f_quantity_r = mysqli_real_escape_string($con, $_POST['lbf520f_quantity_r']);
    $lbf520f_uniti_r = mysqli_real_escape_string($con, $_POST['lbf520f_uniti_r']);
    $lbf520f_status = mysqli_real_escape_string($con, $_POST['lbf520f_status']);
    $lbf520f_ramark = mysqli_real_escape_string($con, $_POST['lbf520f_ramark']);

    $query = "UPDATE lbf520f SET lbf520f_item='$lbf520f_item', lbf520f_po='$lbf520f_po', lbf520f_icode='$lbf520f_icode', lbf520f_md='$lbf520f_md', lbf520f_rd='$lbf520f_rd', lbf520f_lotrb='$lbf520f_lotrb', lbf520f_lotvendor='$lbf520f_lotvendor', lbf520f_qty_i='$lbf520f_qty_i', lbf520f_quantity_i='$lbf520f_quantity_i', lbf520f_unit_i='$lbf520f_unit_i', lbf520f_quantity_r='$lbf520f_quantity_r', lbf520f_uniti_r='$lbf520f_uniti_r', lbf520f_status='$lbf520f_status', lbf520f_ramark='$lbf520f_ramark' WHERE id='$lbf520f_id'";
    $query_run = mysqli_query($con, $query);

    if ($query_run) {
        $_SESSION['message'] = "Updated Successfully";
        header("Location: lbf520f-index.php");
        exit(0);
    } else {
        $_SESSION['message'] = "Not Updated";
        header("Location: lbf520f-index.php");
        exit(0);
    }
}

if(isset($_POST['save_lbf520f'])) {
    
    $lbf520f_item = mysqli_real_escape_string($con, $_POST['lbf520f_item']);   
    $lbf520f_po = mysqli_real_escape_string($con, $_POST['lbf520f_po']);
    $lbf520f_icode = mysqli_real_escape_string($con, $_POST['lbf520f_icode']);
    $lbf520f_md = mysqli_real_escape_string($con, $_POST['lbf520f_md']);
    $lbf520f_rd = mysqli_real_escape_string($con, $_POST['lbf520f_rd']);
    $lbf520f_lotrb = mysqli_real_escape_string($con, $_POST['lbf520f_lotrb']);
    $lbf520f_lotvendor = mysqli_real_escape_string($con, $_POST['lbf520f_lotvendor']);
    $lbf520f_qty_i = mysqli_real_escape_string($con, $_POST['lbf520f_qty_i']);
    $lbf520f_quantity_i = mysqli_real_escape_string($con, $_POST['lbf520f_quantity_i']);
    $lbf520f_unit_i = mysqli_real_escape_string($con, $_POST['lbf520f_unit_i']);
    $lbf520f_quantity_r = mysqli_real_escape_string($con, $_POST['lbf520f_quantity_r']);
    $lbf520f_uniti_r = mysqli_real_escape_string($con, $_POST['lbf520f_uniti_r']);
    $lbf520f_status = mysqli_real_escape_string($con, $_POST['lbf520f_status']);
    $lbf520f_ramark = mysqli_real_escape_string($con, $_POST['lbf520f_ramark']);
    
    $query = "INSERT INTO lbf520f (lbf520f_item, lbf520f_po, lbf520f_icode, lbf520f_md, lbf520f_rd, lbf520f_lotrb, lbf520f_lotvendor, lbf520f_qty_i, lbf520f_quantity_i, lbf520f_unit_i, lbf520f_quantity_r, lbf520f_uniti_r, lbf520f_status, lbf520f_ramark) 
    VALUES ('$lbf520f_item','$lbf520f_po','$lbf520f_icode','$lbf520f_md','$lbf520f_rd','$lbf520f_lotrb','$lbf520f_lotvendor','$lbf520f_qty_i','$lbf520f_quantity_i','$lbf520f_unit_i','$lbf520f_quantity_r','$lbf520f_uniti_r','$lbf520f_status','$lbf520f_ramark')";
    

    $query_run = mysqli_query($con, $query);

    if($query_run) {
        $_SESSION['message'] = " Created Successfully";
    } else {
        $_SESSION['message'] = " Not Created";
    }

    header("Location:lbf520f-create.php");
    exit(0);
}
?>