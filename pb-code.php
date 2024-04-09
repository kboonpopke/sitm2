<?php
session_start();
require 'dbcon.php';

if(isset($_POST['delete_pb']))
{
    $pb_id = mysqli_real_escape_string($con, $_POST['delete_pb']); // แก้ไขตรงนี้เป็น 'delete_pb'

    $query = "DELETE FROM pb WHERE id='$pb_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Deleted Successfully";
        header("Location: pb-index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Not Deleted: " . mysqli_error($con);
        header("Location: pb-index.php");
        exit(0);
    }


}

if (isset($_POST['update_pb'])) {
    $pb_id = mysqli_real_escape_string($con, $_POST['pb_id']);

    $pb_item = mysqli_real_escape_string($con, $_POST['pb_item']);
    $pb_po = mysqli_real_escape_string($con, $_POST['pb_po']);
    $pb_icode = mysqli_real_escape_string($con, $_POST['pb_icode']);
    $pb_md = mysqli_real_escape_string($con, $_POST['pb_md']);
    $pb_rd = mysqli_real_escape_string($con, $_POST['pb_rd']);
    $pb_lotrb = mysqli_real_escape_string($con, $_POST['pb_lotrb']);
    $pb_lotvendor = mysqli_real_escape_string($con, $_POST['pb_lotvendor']);
    $pb_qty_i = mysqli_real_escape_string($con, $_POST['pb_qty_i']);
    $pb_quantity_i = mysqli_real_escape_string($con, $_POST['pb_quantity_i']);
    $pb_unit_i = mysqli_real_escape_string($con, $_POST['pb_unit_i']);
    $pb_quantity_r = mysqli_real_escape_string($con, $_POST['pb_quantity_r']);
    $pb_uniti_r = mysqli_real_escape_string($con, $_POST['pb_uniti_r']);
    $pb_status = mysqli_real_escape_string($con, $_POST['pb_status']);
    $pb_ramark = mysqli_real_escape_string($con, $_POST['pb_ramark']);

    $query = "UPDATE pb SET pb_item='$pb_item', pb_po='$pb_po', pb_icode='$pb_icode', pb_md='$pb_md', pb_rd='$pb_rd', pb_lotrb='$pb_lotrb', pb_lotvendor='$pb_lotvendor', pb_qty_i='$pb_qty_i', pb_quantity_i='$pb_quantity_i', pb_unit_i='$pb_unit_i', pb_quantity_r='$pb_quantity_r', pb_uniti_r='$pb_uniti_r', pb_status='$pb_status', pb_ramark='$pb_ramark' WHERE id='$pb_id'";
    $query_run = mysqli_query($con, $query);

    if ($query_run) {
        $_SESSION['message'] = "Updated Successfully";
        header("Location: pb-index.php");
        exit(0);
    } else {
        $_SESSION['message'] = "Not Updated";
        header("Location: pb-index.php");
        exit(0);
    }
}

if(isset($_POST['save_pb'])) {
    
    $pb_item = mysqli_real_escape_string($con, $_POST['pb_item']);   
    $pb_po = mysqli_real_escape_string($con, $_POST['pb_po']);
    $pb_icode = mysqli_real_escape_string($con, $_POST['pb_icode']);
    $pb_md = mysqli_real_escape_string($con, $_POST['pb_md']);
    $pb_rd = mysqli_real_escape_string($con, $_POST['pb_rd']);
    $pb_lotrb = mysqli_real_escape_string($con, $_POST['pb_lotrb']);
    $pb_lotvendor = mysqli_real_escape_string($con, $_POST['pb_lotvendor']);
    $pb_qty_i = mysqli_real_escape_string($con, $_POST['pb_qty_i']);
    $pb_quantity_i = mysqli_real_escape_string($con, $_POST['pb_quantity_i']);
    $pb_unit_i = mysqli_real_escape_string($con, $_POST['pb_unit_i']);
    $pb_quantity_r = mysqli_real_escape_string($con, $_POST['pb_quantity_r']);
    $pb_uniti_r = mysqli_real_escape_string($con, $_POST['pb_uniti_r']);
    $pb_status = mysqli_real_escape_string($con, $_POST['pb_status']);
    $pb_ramark = mysqli_real_escape_string($con, $_POST['pb_ramark']);
    
    $query = "INSERT INTO pb (pb_item, pb_po, pb_icode, pb_md, pb_rd, pb_lotrb, pb_lotvendor, pb_qty_i, pb_quantity_i, pb_unit_i, pb_quantity_r, pb_uniti_r, pb_status, pb_ramark) 
    VALUES ('$pb_item','$pb_po','$pb_icode','$pb_md','$pb_rd','$pb_lotrb','$pb_lotvendor','$pb_qty_i','$pb_quantity_i','$pb_unit_i','$pb_quantity_r','$pb_uniti_r','$pb_status','$pb_ramark')";
    

    $query_run = mysqli_query($con, $query);

    if($query_run) {
        $_SESSION['message'] = " Created Successfully";
    } else {
        $_SESSION['message'] = " Not Created";
    }

    header("Location:pb-create.php");
    exit(0);
}
?>