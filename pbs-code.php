<?php
session_start();
require 'dbcon.php';

if(isset($_POST['delete_pbs']))
{
    $pbs_id = mysqli_real_escape_string($con, $_POST['delete_pbs']); // แก้ไขตรงนี้เป็น 'delete_pbs'

    $query = "DELETE FROM pbs WHERE id='$pbs_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Deleted Successfully";
        header("Location: pbs-index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Not Deleted: " . mysqli_error($con);
        header("Location: pbs-index.php");
        exit(0);
    }


}

if (isset($_POST['update_pbs'])) {
    $pbs_id = mysqli_real_escape_string($con, $_POST['pbs_id']);

    $pbs_item = mysqli_real_escape_string($con, $_POST['pbs_item']);
    $pbs_po = mysqli_real_escape_string($con, $_POST['pbs_po']);
    $pbs_icode = mysqli_real_escape_string($con, $_POST['pbs_icode']);
    $pbs_md = mysqli_real_escape_string($con, $_POST['pbs_md']);
    $pbs_rd = mysqli_real_escape_string($con, $_POST['pbs_rd']);
    $pbs_lotrb = mysqli_real_escape_string($con, $_POST['pbs_lotrb']);
    $pbs_lotvendor = mysqli_real_escape_string($con, $_POST['pbs_lotvendor']);
    $pbs_qty_i = mysqli_real_escape_string($con, $_POST['pbs_qty_i']);
    $pbs_quantity_i = mysqli_real_escape_string($con, $_POST['pbs_quantity_i']);
    $pbs_unit_i = mysqli_real_escape_string($con, $_POST['pbs_unit_i']);
    $pbs_quantity_r = mysqli_real_escape_string($con, $_POST['pbs_quantity_r']);
    $pbs_uniti_r = mysqli_real_escape_string($con, $_POST['pbs_uniti_r']);
    $pbs_status = mysqli_real_escape_string($con, $_POST['pbs_status']);
    $pbs_ramark = mysqli_real_escape_string($con, $_POST['pbs_ramark']);

    $query = "UPDATE pbs SET pbs_item='$pbs_item', pbs_po='$pbs_po', pbs_icode='$pbs_icode', pbs_md='$pbs_md', pbs_rd='$pbs_rd', pbs_lotrb='$pbs_lotrb', pbs_lotvendor='$pbs_lotvendor', pbs_qty_i='$pbs_qty_i', pbs_quantity_i='$pbs_quantity_i', pbs_unit_i='$pbs_unit_i', pbs_quantity_r='$pbs_quantity_r', pbs_uniti_r='$pbs_uniti_r', pbs_status='$pbs_status', pbs_ramark='$pbs_ramark' WHERE id='$pbs_id'";
    $query_run = mysqli_query($con, $query);

    if ($query_run) {
        $_SESSION['message'] = "Updated Successfully";
        header("Location: pbs-index.php");
        exit(0);
    } else {
        $_SESSION['message'] = "Not Updated";
        header("Location: pbs-index.php");
        exit(0);
    }
}

if(isset($_POST['save_pbs'])) {
    
    $pbs_item = mysqli_real_escape_string($con, $_POST['pbs_item']);   
    $pbs_po = mysqli_real_escape_string($con, $_POST['pbs_po']);
    $pbs_icode = mysqli_real_escape_string($con, $_POST['pbs_icode']);
    $pbs_md = mysqli_real_escape_string($con, $_POST['pbs_md']);
    $pbs_rd = mysqli_real_escape_string($con, $_POST['pbs_rd']);
    $pbs_lotrb = mysqli_real_escape_string($con, $_POST['pbs_lotrb']);
    $pbs_lotvendor = mysqli_real_escape_string($con, $_POST['pbs_lotvendor']);
    $pbs_qty_i = mysqli_real_escape_string($con, $_POST['pbs_qty_i']);
    $pbs_quantity_i = mysqli_real_escape_string($con, $_POST['pbs_quantity_i']);
    $pbs_unit_i = mysqli_real_escape_string($con, $_POST['pbs_unit_i']);
    $pbs_quantity_r = mysqli_real_escape_string($con, $_POST['pbs_quantity_r']);
    $pbs_uniti_r = mysqli_real_escape_string($con, $_POST['pbs_uniti_r']);
    $pbs_status = mysqli_real_escape_string($con, $_POST['pbs_status']);
    $pbs_ramark = mysqli_real_escape_string($con, $_POST['pbs_ramark']);
    
    $query = "INSERT INTO pbs (pbs_item, pbs_po, pbs_icode, pbs_md, pbs_rd, pbs_lotrb, pbs_lotvendor, pbs_qty_i, pbs_quantity_i, pbs_unit_i, pbs_quantity_r, pbs_uniti_r, pbs_status, pbs_ramark) 
    VALUES ('$pbs_item','$pbs_po','$pbs_icode','$pbs_md','$pbs_rd','$pbs_lotrb','$pbs_lotvendor','$pbs_qty_i','$pbs_quantity_i','$pbs_unit_i','$pbs_quantity_r','$pbs_uniti_r','$pbs_status','$pbs_ramark')";
    

    $query_run = mysqli_query($con, $query);

    if($query_run) {
        $_SESSION['message'] = " Created Successfully";
    } else {
        $_SESSION['message'] = " Not Created";
    }

    header("Location:pbs-create.php");
    exit(0);
}
?>