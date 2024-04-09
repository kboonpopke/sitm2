<?php
session_start();
require 'dbcon.php';

if(isset($_POST['delete_pfs']))
{
    $pfs_id = mysqli_real_escape_string($con, $_POST['delete_pfs']); // แก้ไขตรงนี้เป็น 'delete_pfs'

    $query = "DELETE FROM pfs WHERE id='$pfs_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Deleted Successfully";
        header("Location: pfs-index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Not Deleted: " . mysqli_error($con);
        header("Location: pfs-index.php");
        exit(0);
    }


}

if (isset($_POST['update_pfs'])) {
    $pfs_id = mysqli_real_escape_string($con, $_POST['pfs_id']);

    $pfs_item = mysqli_real_escape_string($con, $_POST['pfs_item']);
    $pfs_po = mysqli_real_escape_string($con, $_POST['pfs_po']);
    $pfs_icode = mysqli_real_escape_string($con, $_POST['pfs_icode']);
    $pfs_md = mysqli_real_escape_string($con, $_POST['pfs_md']);
    $pfs_rd = mysqli_real_escape_string($con, $_POST['pfs_rd']);
    $pfs_lotrb = mysqli_real_escape_string($con, $_POST['pfs_lotrb']);
    $pfs_lotvendor = mysqli_real_escape_string($con, $_POST['pfs_lotvendor']);
    $pfs_qty_i = mysqli_real_escape_string($con, $_POST['pfs_qty_i']);
    $pfs_quantity_i = mysqli_real_escape_string($con, $_POST['pfs_quantity_i']);
    $pfs_unit_i = mysqli_real_escape_string($con, $_POST['pfs_unit_i']);
    $pfs_quantity_r = mysqli_real_escape_string($con, $_POST['pfs_quantity_r']);
    $pfs_uniti_r = mysqli_real_escape_string($con, $_POST['pfs_uniti_r']);
    $pfs_status = mysqli_real_escape_string($con, $_POST['pfs_status']);
    $pfs_ramark = mysqli_real_escape_string($con, $_POST['pfs_ramark']);

    $query = "UPDATE pfs SET pfs_item='$pfs_item', pfs_po='$pfs_po', pfs_icode='$pfs_icode', pfs_md='$pfs_md', pfs_rd='$pfs_rd', pfs_lotrb='$pfs_lotrb', pfs_lotvendor='$pfs_lotvendor', pfs_qty_i='$pfs_qty_i', pfs_quantity_i='$pfs_quantity_i', pfs_unit_i='$pfs_unit_i', pfs_quantity_r='$pfs_quantity_r', pfs_uniti_r='$pfs_uniti_r', pfs_status='$pfs_status', pfs_ramark='$pfs_ramark' WHERE id='$pfs_id'";
    $query_run = mysqli_query($con, $query);

    if ($query_run) {
        $_SESSION['message'] = "Updated Successfully";
        header("Location: pfs-index.php");
        exit(0);
    } else {
        $_SESSION['message'] = "Not Updated";
        header("Location: pfs-index.php");
        exit(0);
    }
}

if(isset($_POST['save_pfs'])) {
    
    $pfs_item = mysqli_real_escape_string($con, $_POST['pfs_item']);   
    $pfs_po = mysqli_real_escape_string($con, $_POST['pfs_po']);
    $pfs_icode = mysqli_real_escape_string($con, $_POST['pfs_icode']);
    $pfs_md = mysqli_real_escape_string($con, $_POST['pfs_md']);
    $pfs_rd = mysqli_real_escape_string($con, $_POST['pfs_rd']);
    $pfs_lotrb = mysqli_real_escape_string($con, $_POST['pfs_lotrb']);
    $pfs_lotvendor = mysqli_real_escape_string($con, $_POST['pfs_lotvendor']);
    $pfs_qty_i = mysqli_real_escape_string($con, $_POST['pfs_qty_i']);
    $pfs_quantity_i = mysqli_real_escape_string($con, $_POST['pfs_quantity_i']);
    $pfs_unit_i = mysqli_real_escape_string($con, $_POST['pfs_unit_i']);
    $pfs_quantity_r = mysqli_real_escape_string($con, $_POST['pfs_quantity_r']);
    $pfs_uniti_r = mysqli_real_escape_string($con, $_POST['pfs_uniti_r']);
    $pfs_status = mysqli_real_escape_string($con, $_POST['pfs_status']);
    $pfs_ramark = mysqli_real_escape_string($con, $_POST['pfs_ramark']);
    
    $query = "INSERT INTO pfs (pfs_item, pfs_po, pfs_icode, pfs_md, pfs_rd, pfs_lotrb, pfs_lotvendor, pfs_qty_i, pfs_quantity_i, pfs_unit_i, pfs_quantity_r, pfs_uniti_r, pfs_status, pfs_ramark) 
    VALUES ('$pfs_item','$pfs_po','$pfs_icode','$pfs_md','$pfs_rd','$pfs_lotrb','$pfs_lotvendor','$pfs_qty_i','$pfs_quantity_i','$pfs_unit_i','$pfs_quantity_r','$pfs_uniti_r','$pfs_status','$pfs_ramark')";
    

    $query_run = mysqli_query($con, $query);

    if($query_run) {
        $_SESSION['message'] = " Created Successfully";
    } else {
        $_SESSION['message'] = " Not Created";
    }

    header("Location:pfs-create.php");
    exit(0);
}
?>