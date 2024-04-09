<?php
session_start();
require 'dbcon.php';

if(isset($_POST['delete_cfp']))
{
    $cfp_id = mysqli_real_escape_string($con, $_POST['delete_cfp']); // แก้ไขตรงนี้เป็น 'delete_cfp'

    $query = "DELETE FROM cfp WHERE id='$cfp_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Deleted Successfully";
        header("Location: cfp-index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Not Deleted: " . mysqli_error($con);
        header("Location: cfp-index.php");
        exit(0);
    }


}

if (isset($_POST['update_cfp'])) {
    $cfp_id = mysqli_real_escape_string($con, $_POST['cfp_id']);

    $cfp_item = mysqli_real_escape_string($con, $_POST['cfp_item']);
    $cfp_po = mysqli_real_escape_string($con, $_POST['cfp_po']);
    $cfp_icode = mysqli_real_escape_string($con, $_POST['cfp_icode']);
    $cfp_md = mysqli_real_escape_string($con, $_POST['cfp_md']);
    $cfp_rd = mysqli_real_escape_string($con, $_POST['cfp_rd']);
    $cfp_lotrb = mysqli_real_escape_string($con, $_POST['cfp_lotrb']);
    $cfp_lotvendor = mysqli_real_escape_string($con, $_POST['cfp_lotvendor']);
    $cfp_qty_i = mysqli_real_escape_string($con, $_POST['cfp_qty_i']);
    $cfp_quantity_i = mysqli_real_escape_string($con, $_POST['cfp_quantity_i']);
    $cfp_unit_i = mysqli_real_escape_string($con, $_POST['cfp_unit_i']);
    $cfp_quantity_r = mysqli_real_escape_string($con, $_POST['cfp_quantity_r']);
    $cfp_uniti_r = mysqli_real_escape_string($con, $_POST['cfp_uniti_r']);
    $cfp_status = mysqli_real_escape_string($con, $_POST['cfp_status']);
    $cfp_ramark = mysqli_real_escape_string($con, $_POST['cfp_ramark']);

    $query = "UPDATE cfp SET cfp_item='$cfp_item', cfp_po='$cfp_po', cfp_icode='$cfp_icode', cfp_md='$cfp_md', cfp_rd='$cfp_rd', cfp_lotrb='$cfp_lotrb', cfp_lotvendor='$cfp_lotvendor', cfp_qty_i='$cfp_qty_i', cfp_quantity_i='$cfp_quantity_i', cfp_unit_i='$cfp_unit_i', cfp_quantity_r='$cfp_quantity_r', cfp_uniti_r='$cfp_uniti_r', cfp_status='$cfp_status', cfp_ramark='$cfp_ramark' WHERE id='$cfp_id'";
    $query_run = mysqli_query($con, $query);

    if ($query_run) {
        $_SESSION['message'] = "Updated Successfully";
        header("Location: cfp-index.php");
        exit(0);
    } else {
        $_SESSION['message'] = "Not Updated";
        header("Location: cfp-index.php");
        exit(0);
    }
}

if(isset($_POST['save_cfp'])) {
    
    $cfp_item = mysqli_real_escape_string($con, $_POST['cfp_item']);   
    $cfp_po = mysqli_real_escape_string($con, $_POST['cfp_po']);
    $cfp_icode = mysqli_real_escape_string($con, $_POST['cfp_icode']);
    $cfp_md = mysqli_real_escape_string($con, $_POST['cfp_md']);
    $cfp_rd = mysqli_real_escape_string($con, $_POST['cfp_rd']);
    $cfp_lotrb = mysqli_real_escape_string($con, $_POST['cfp_lotrb']);
    $cfp_lotvendor = mysqli_real_escape_string($con, $_POST['cfp_lotvendor']);
    $cfp_qty_i = mysqli_real_escape_string($con, $_POST['cfp_qty_i']);
    $cfp_quantity_i = mysqli_real_escape_string($con, $_POST['cfp_quantity_i']);
    $cfp_unit_i = mysqli_real_escape_string($con, $_POST['cfp_unit_i']);
    $cfp_quantity_r = mysqli_real_escape_string($con, $_POST['cfp_quantity_r']);
    $cfp_uniti_r = mysqli_real_escape_string($con, $_POST['cfp_uniti_r']);
    $cfp_status = mysqli_real_escape_string($con, $_POST['cfp_status']);
    $cfp_ramark = mysqli_real_escape_string($con, $_POST['cfp_ramark']);
    
    $query = "INSERT INTO cfp (cfp_item, cfp_po, cfp_icode, cfp_md, cfp_rd, cfp_lotrb, cfp_lotvendor, cfp_qty_i, cfp_quantity_i, cfp_unit_i, cfp_quantity_r, cfp_uniti_r, cfp_status, cfp_ramark) 
    VALUES ('$cfp_item','$cfp_po','$cfp_icode','$cfp_md','$cfp_rd','$cfp_lotrb','$cfp_lotvendor','$cfp_qty_i','$cfp_quantity_i','$cfp_unit_i','$cfp_quantity_r','$cfp_uniti_r','$cfp_status','$cfp_ramark')";
    

    $query_run = mysqli_query($con, $query);

    if($query_run) {
        $_SESSION['message'] = " Created Successfully";
    } else {
        $_SESSION['message'] = " Not Created";
    }

    header("Location:cfp-create.php");
    exit(0);
}
?>