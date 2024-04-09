<?php
session_start();
require 'dbcon.php';

if(isset($_POST['delete_pfb']))
{
    $pfb_id = mysqli_real_escape_string($con, $_POST['delete_pfb']); // แก้ไขตรงนี้เป็น 'delete_pfb'

    $query = "DELETE FROM pfb WHERE id='$pfb_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Deleted Successfully";
        header("Location: pfb-index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Not Deleted: " . mysqli_error($con);
        header("Location: pfb-index.php");
        exit(0);
    }


}

if (isset($_POST['update_pfb'])) {
    $pfb_id = mysqli_real_escape_string($con, $_POST['pfb_id']);

    $pfb_item = mysqli_real_escape_string($con, $_POST['pfb_item']);
    $pfb_po = mysqli_real_escape_string($con, $_POST['pfb_po']);
    $pfb_icode = mysqli_real_escape_string($con, $_POST['pfb_icode']);
    $pfb_md = mysqli_real_escape_string($con, $_POST['pfb_md']);
    $pfb_rd = mysqli_real_escape_string($con, $_POST['pfb_rd']);
    $pfb_lotrb = mysqli_real_escape_string($con, $_POST['pfb_lotrb']);
    $pfb_lotvendor = mysqli_real_escape_string($con, $_POST['pfb_lotvendor']);
    $pfb_qty_i = mysqli_real_escape_string($con, $_POST['pfb_qty_i']);
    $pfb_quantity_i = mysqli_real_escape_string($con, $_POST['pfb_quantity_i']);
    $pfb_unit_i = mysqli_real_escape_string($con, $_POST['pfb_unit_i']);
    $pfb_quantity_r = mysqli_real_escape_string($con, $_POST['pfb_quantity_r']);
    $pfb_uniti_r = mysqli_real_escape_string($con, $_POST['pfb_uniti_r']);
    $pfb_status = mysqli_real_escape_string($con, $_POST['pfb_status']);
    $pfb_ramark = mysqli_real_escape_string($con, $_POST['pfb_ramark']);

    $query = "UPDATE pfb SET pfb_item='$pfb_item', pfb_po='$pfb_po', pfb_icode='$pfb_icode', pfb_md='$pfb_md', pfb_rd='$pfb_rd', pfb_lotrb='$pfb_lotrb', pfb_lotvendor='$pfb_lotvendor', pfb_qty_i='$pfb_qty_i', pfb_quantity_i='$pfb_quantity_i', pfb_unit_i='$pfb_unit_i', pfb_quantity_r='$pfb_quantity_r', pfb_uniti_r='$pfb_uniti_r', pfb_status='$pfb_status', pfb_ramark='$pfb_ramark' WHERE id='$pfb_id'";
    $query_run = mysqli_query($con, $query);

    if ($query_run) {
        $_SESSION['message'] = "Updated Successfully";
        header("Location: pfb-index.php");
        exit(0);
    } else {
        $_SESSION['message'] = "Not Updated";
        header("Location: pfb-index.php");
        exit(0);
    }
}

if(isset($_POST['save_pfb'])) {
    
    $pfb_item = mysqli_real_escape_string($con, $_POST['pfb_item']);   
    $pfb_po = mysqli_real_escape_string($con, $_POST['pfb_po']);
    $pfb_icode = mysqli_real_escape_string($con, $_POST['pfb_icode']);
    $pfb_md = mysqli_real_escape_string($con, $_POST['pfb_md']);
    $pfb_rd = mysqli_real_escape_string($con, $_POST['pfb_rd']);
    $pfb_lotrb = mysqli_real_escape_string($con, $_POST['pfb_lotrb']);
    $pfb_lotvendor = mysqli_real_escape_string($con, $_POST['pfb_lotvendor']);
    $pfb_qty_i = mysqli_real_escape_string($con, $_POST['pfb_qty_i']);
    $pfb_quantity_i = mysqli_real_escape_string($con, $_POST['pfb_quantity_i']);
    $pfb_unit_i = mysqli_real_escape_string($con, $_POST['pfb_unit_i']);
    $pfb_quantity_r = mysqli_real_escape_string($con, $_POST['pfb_quantity_r']);
    $pfb_uniti_r = mysqli_real_escape_string($con, $_POST['pfb_uniti_r']);
    $pfb_status = mysqli_real_escape_string($con, $_POST['pfb_status']);
    $pfb_ramark = mysqli_real_escape_string($con, $_POST['pfb_ramark']);
    
    $query = "INSERT INTO pfb (pfb_item, pfb_po, pfb_icode, pfb_md, pfb_rd, pfb_lotrb, pfb_lotvendor, pfb_qty_i, pfb_quantity_i, pfb_unit_i, pfb_quantity_r, pfb_uniti_r, pfb_status, pfb_ramark) 
    VALUES ('$pfb_item','$pfb_po','$pfb_icode','$pfb_md','$pfb_rd','$pfb_lotrb','$pfb_lotvendor','$pfb_qty_i','$pfb_quantity_i','$pfb_unit_i','$pfb_quantity_r','$pfb_uniti_r','$pfb_status','$pfb_ramark')";
    

    $query_run = mysqli_query($con, $query);

    if($query_run) {
        $_SESSION['message'] = " Created Successfully";
    } else {
        $_SESSION['message'] = " Not Created";
    }

    header("Location:pfb-create.php");
    exit(0);
}
?>