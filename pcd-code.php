<?php
session_start();
require 'dbcon.php';

if(isset($_POST['delete_pcd']))
{
    $pcd_id = mysqli_real_escape_string($con, $_POST['delete_pcd']); // แก้ไขตรงนี้เป็น 'delete_pcd'

    $query = "DELETE FROM pcd WHERE id='$pcd_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Deleted Successfully";
        header("Location: pcd-index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Not Deleted: " . mysqli_error($con);
        header("Location: pcd-index.php");
        exit(0);
    }


}

if (isset($_POST['update_pcd'])) {
    $pcd_id = mysqli_real_escape_string($con, $_POST['pcd_id']);

    $pcd_item = mysqli_real_escape_string($con, $_POST['pcd_item']);
    $pcd_po = mysqli_real_escape_string($con, $_POST['pcd_po']);
    $pcd_icode = mysqli_real_escape_string($con, $_POST['pcd_icode']);
    $pcd_md = mysqli_real_escape_string($con, $_POST['pcd_md']);
    $pcd_rd = mysqli_real_escape_string($con, $_POST['pcd_rd']);
    $pcd_lotrb = mysqli_real_escape_string($con, $_POST['pcd_lotrb']);
    $pcd_lotvendor = mysqli_real_escape_string($con, $_POST['pcd_lotvendor']);
    $pcd_qty_i = mysqli_real_escape_string($con, $_POST['pcd_qty_i']);
    $pcd_quantity_i = mysqli_real_escape_string($con, $_POST['pcd_quantity_i']);
    $pcd_unit_i = mysqli_real_escape_string($con, $_POST['pcd_unit_i']);
    $pcd_quantity_r = mysqli_real_escape_string($con, $_POST['pcd_quantity_r']);
    $pcd_uniti_r = mysqli_real_escape_string($con, $_POST['pcd_uniti_r']);
    $pcd_status = mysqli_real_escape_string($con, $_POST['pcd_status']);
    $pcd_ramark = mysqli_real_escape_string($con, $_POST['pcd_ramark']);

    $query = "UPDATE pcd SET pcd_item='$pcd_item', pcd_po='$pcd_po', pcd_icode='$pcd_icode', pcd_md='$pcd_md', pcd_rd='$pcd_rd', pcd_lotrb='$pcd_lotrb', pcd_lotvendor='$pcd_lotvendor', pcd_qty_i='$pcd_qty_i', pcd_quantity_i='$pcd_quantity_i', pcd_unit_i='$pcd_unit_i', pcd_quantity_r='$pcd_quantity_r', pcd_uniti_r='$pcd_uniti_r', pcd_status='$pcd_status', pcd_ramark='$pcd_ramark' WHERE id='$pcd_id'";
    $query_run = mysqli_query($con, $query);

    if ($query_run) {
        $_SESSION['message'] = "Updated Successfully";
        header("Location: pcd-index.php");
        exit(0);
    } else {
        $_SESSION['message'] = "Not Updated";
        header("Location: pcd-index.php");
        exit(0);
    }
}

if(isset($_POST['save_pcd'])) {
    
    $pcd_item = mysqli_real_escape_string($con, $_POST['pcd_item']);   
    $pcd_po = mysqli_real_escape_string($con, $_POST['pcd_po']);
    $pcd_icode = mysqli_real_escape_string($con, $_POST['pcd_icode']);
    $pcd_md = mysqli_real_escape_string($con, $_POST['pcd_md']);
    $pcd_rd = mysqli_real_escape_string($con, $_POST['pcd_rd']);
    $pcd_lotrb = mysqli_real_escape_string($con, $_POST['pcd_lotrb']);
    $pcd_lotvendor = mysqli_real_escape_string($con, $_POST['pcd_lotvendor']);
    $pcd_qty_i = mysqli_real_escape_string($con, $_POST['pcd_qty_i']);
    $pcd_quantity_i = mysqli_real_escape_string($con, $_POST['pcd_quantity_i']);
    $pcd_unit_i = mysqli_real_escape_string($con, $_POST['pcd_unit_i']);
    $pcd_quantity_r = mysqli_real_escape_string($con, $_POST['pcd_quantity_r']);
    $pcd_uniti_r = mysqli_real_escape_string($con, $_POST['pcd_uniti_r']);
    $pcd_status = mysqli_real_escape_string($con, $_POST['pcd_status']);
    $pcd_ramark = mysqli_real_escape_string($con, $_POST['pcd_ramark']);
    
    $query = "INSERT INTO pcd (pcd_item, pcd_po, pcd_icode, pcd_md, pcd_rd, pcd_lotrb, pcd_lotvendor, pcd_qty_i, pcd_quantity_i, pcd_unit_i, pcd_quantity_r, pcd_uniti_r, pcd_status, pcd_ramark) 
    VALUES ('$pcd_item','$pcd_po','$pcd_icode','$pcd_md','$pcd_rd','$pcd_lotrb','$pcd_lotvendor','$pcd_qty_i','$pcd_quantity_i','$pcd_unit_i','$pcd_quantity_r','$pcd_uniti_r','$pcd_status','$pcd_ramark')";
    

    $query_run = mysqli_query($con, $query);

    if($query_run) {
        $_SESSION['message'] = " Created Successfully";
    } else {
        $_SESSION['message'] = " Not Created";
    }

    header("Location:pcd-create.php");
    exit(0);
}
?>