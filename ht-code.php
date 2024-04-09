<?php
session_start();
require 'dbcon.php';

if(isset($_POST['delete_ht']))
{
    $ht_id = mysqli_real_escape_string($con, $_POST['delete_ht']); // แก้ไขตรงนี้เป็น 'delete_ht'

    $query = "DELETE FROM ht WHERE id='$ht_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Deleted Successfully";
        header("Location: ht-index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Not Deleted: " . mysqli_error($con);
        header("Location: ht-index.php");
        exit(0);
    }


}

if (isset($_POST['update_ht'])) {
    $ht_id = mysqli_real_escape_string($con, $_POST['ht_id']);

    $ht_item = mysqli_real_escape_string($con, $_POST['ht_item']);
    $ht_po = mysqli_real_escape_string($con, $_POST['ht_po']);
    $ht_icode = mysqli_real_escape_string($con, $_POST['ht_icode']);
    $ht_md = mysqli_real_escape_string($con, $_POST['ht_md']);
    $ht_rd = mysqli_real_escape_string($con, $_POST['ht_rd']);
    $ht_lotrb = mysqli_real_escape_string($con, $_POST['ht_lotrb']);
    $ht_lotvendor = mysqli_real_escape_string($con, $_POST['ht_lotvendor']);
    $ht_qty_i = mysqli_real_escape_string($con, $_POST['ht_qty_i']);
    $ht_quantity_i = mysqli_real_escape_string($con, $_POST['ht_quantity_i']);
    $ht_unit_i = mysqli_real_escape_string($con, $_POST['ht_unit_i']);
    $ht_quantity_r = mysqli_real_escape_string($con, $_POST['ht_quantity_r']);
    $ht_uniti_r = mysqli_real_escape_string($con, $_POST['ht_uniti_r']);
    $ht_status = mysqli_real_escape_string($con, $_POST['ht_status']);
    $ht_ramark = mysqli_real_escape_string($con, $_POST['ht_ramark']);

    $query = "UPDATE ht SET ht_item='$ht_item', ht_po='$ht_po', ht_icode='$ht_icode', ht_md='$ht_md', ht_rd='$ht_rd', ht_lotrb='$ht_lotrb', ht_lotvendor='$ht_lotvendor', ht_qty_i='$ht_qty_i', ht_quantity_i='$ht_quantity_i', ht_unit_i='$ht_unit_i', ht_quantity_r='$ht_quantity_r', ht_uniti_r='$ht_uniti_r', ht_status='$ht_status', ht_ramark='$ht_ramark' WHERE id='$ht_id'";
    $query_run = mysqli_query($con, $query);

    if ($query_run) {
        $_SESSION['message'] = "Updated Successfully";
        header("Location: ht-index.php");
        exit(0);
    } else {
        $_SESSION['message'] = "Not Updated";
        header("Location: ht-index.php");
        exit(0);
    }
}

if(isset($_POST['save_ht'])) {
    
    $ht_item = mysqli_real_escape_string($con, $_POST['ht_item']);   
    $ht_po = mysqli_real_escape_string($con, $_POST['ht_po']);
    $ht_icode = mysqli_real_escape_string($con, $_POST['ht_icode']);
    $ht_md = mysqli_real_escape_string($con, $_POST['ht_md']);
    $ht_rd = mysqli_real_escape_string($con, $_POST['ht_rd']);
    $ht_lotrb = mysqli_real_escape_string($con, $_POST['ht_lotrb']);
    $ht_lotvendor = mysqli_real_escape_string($con, $_POST['ht_lotvendor']);
    $ht_qty_i = mysqli_real_escape_string($con, $_POST['ht_qty_i']);
    $ht_quantity_i = mysqli_real_escape_string($con, $_POST['ht_quantity_i']);
    $ht_unit_i = mysqli_real_escape_string($con, $_POST['ht_unit_i']);
    $ht_quantity_r = mysqli_real_escape_string($con, $_POST['ht_quantity_r']);
    $ht_uniti_r = mysqli_real_escape_string($con, $_POST['ht_uniti_r']);
    $ht_status = mysqli_real_escape_string($con, $_POST['ht_status']);
    $ht_ramark = mysqli_real_escape_string($con, $_POST['ht_ramark']);
    
    $query = "INSERT INTO ht (ht_item, ht_po, ht_icode, ht_md, ht_rd, ht_lotrb, ht_lotvendor, ht_qty_i, ht_quantity_i, ht_unit_i, ht_quantity_r, ht_uniti_r, ht_status, ht_ramark) 
    VALUES ('$ht_item','$ht_po','$ht_icode','$ht_md','$ht_rd','$ht_lotrb','$ht_lotvendor','$ht_qty_i','$ht_quantity_i','$ht_unit_i','$ht_quantity_r','$ht_uniti_r','$ht_status','$ht_ramark')";
    

    $query_run = mysqli_query($con, $query);

    if($query_run) {
        $_SESSION['message'] = " Created Successfully";
    } else {
        $_SESSION['message'] = " Not Created";
    }

    header("Location:ht-create.php");
    exit(0);
}
?>