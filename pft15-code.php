<?php
session_start();
require 'dbcon.php';

if(isset($_POST['delete_pft15']))
{
    $pft15_id = mysqli_real_escape_string($con, $_POST['delete_pft15']); // แก้ไขตรงนี้เป็น 'delete_pft15'

    $query = "DELETE FROM pft15 WHERE id='$pft15_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Deleted Successfully";
        header("Location: pft15-index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Not Deleted: " . mysqli_error($con);
        header("Location: pft15-index.php");
        exit(0);
    }


}

if (isset($_POST['update_pft15'])) {
    $pft15_id = mysqli_real_escape_string($con, $_POST['pft15_id']);

    $pft15_item = mysqli_real_escape_string($con, $_POST['pft15_item']);
    $pft15_po = mysqli_real_escape_string($con, $_POST['pft15_po']);
    $pft15_icode = mysqli_real_escape_string($con, $_POST['pft15_icode']);
    $pft15_md = mysqli_real_escape_string($con, $_POST['pft15_md']);
    $pft15_rd = mysqli_real_escape_string($con, $_POST['pft15_rd']);
    $pft15_lotrb = mysqli_real_escape_string($con, $_POST['pft15_lotrb']);
    $pft15_lotvendor = mysqli_real_escape_string($con, $_POST['pft15_lotvendor']);
    $pft15_qty_i = mysqli_real_escape_string($con, $_POST['pft15_qty_i']);
    $pft15_quantity_i = mysqli_real_escape_string($con, $_POST['pft15_quantity_i']);
    $pft15_unit_i = mysqli_real_escape_string($con, $_POST['pft15_unit_i']);
    $pft15_quantity_r = mysqli_real_escape_string($con, $_POST['pft15_quantity_r']);
    $pft15_uniti_r = mysqli_real_escape_string($con, $_POST['pft15_uniti_r']);
    $pft15_status = mysqli_real_escape_string($con, $_POST['pft15_status']);
    $pft15_ramark = mysqli_real_escape_string($con, $_POST['pft15_ramark']);

    $query = "UPDATE pft15 SET pft15_item='$pft15_item', pft15_po='$pft15_po', pft15_icode='$pft15_icode', pft15_md='$pft15_md', pft15_rd='$pft15_rd', pft15_lotrb='$pft15_lotrb', pft15_lotvendor='$pft15_lotvendor', pft15_qty_i='$pft15_qty_i', pft15_quantity_i='$pft15_quantity_i', pft15_unit_i='$pft15_unit_i', pft15_quantity_r='$pft15_quantity_r', pft15_uniti_r='$pft15_uniti_r', pft15_status='$pft15_status', pft15_ramark='$pft15_ramark' WHERE id='$pft15_id'";
    $query_run = mysqli_query($con, $query);

    if ($query_run) {
        $_SESSION['message'] = "Updated Successfully";
        header("Location: pft15-index.php");
        exit(0);
    } else {
        $_SESSION['message'] = "Not Updated";
        header("Location: pft15-index.php");
        exit(0);
    }
}

if(isset($_POST['save_pft15'])) {
    
    $pft15_item = mysqli_real_escape_string($con, $_POST['pft15_item']);   
    $pft15_po = mysqli_real_escape_string($con, $_POST['pft15_po']);
    $pft15_icode = mysqli_real_escape_string($con, $_POST['pft15_icode']);
    $pft15_md = mysqli_real_escape_string($con, $_POST['pft15_md']);
    $pft15_rd = mysqli_real_escape_string($con, $_POST['pft15_rd']);
    $pft15_lotrb = mysqli_real_escape_string($con, $_POST['pft15_lotrb']);
    $pft15_lotvendor = mysqli_real_escape_string($con, $_POST['pft15_lotvendor']);
    $pft15_qty_i = mysqli_real_escape_string($con, $_POST['pft15_qty_i']);
    $pft15_quantity_i = mysqli_real_escape_string($con, $_POST['pft15_quantity_i']);
    $pft15_unit_i = mysqli_real_escape_string($con, $_POST['pft15_unit_i']);
    $pft15_quantity_r = mysqli_real_escape_string($con, $_POST['pft15_quantity_r']);
    $pft15_uniti_r = mysqli_real_escape_string($con, $_POST['pft15_uniti_r']);
    $pft15_status = mysqli_real_escape_string($con, $_POST['pft15_status']);
    $pft15_ramark = mysqli_real_escape_string($con, $_POST['pft15_ramark']);
    
    $query = "INSERT INTO pft15 (pft15_item, pft15_po, pft15_icode, pft15_md, pft15_rd, pft15_lotrb, pft15_lotvendor, pft15_qty_i, pft15_quantity_i, pft15_unit_i, pft15_quantity_r, pft15_uniti_r, pft15_status, pft15_ramark) 
    VALUES ('$pft15_item','$pft15_po','$pft15_icode','$pft15_md','$pft15_rd','$pft15_lotrb','$pft15_lotvendor','$pft15_qty_i','$pft15_quantity_i','$pft15_unit_i','$pft15_quantity_r','$pft15_uniti_r','$pft15_status','$pft15_ramark')";
    

    $query_run = mysqli_query($con, $query);

    if($query_run) {
        $_SESSION['message'] = " Created Successfully";
    } else {
        $_SESSION['message'] = " Not Created";
    }

    header("Location:pft15-create.php");
    exit(0);
}
?>