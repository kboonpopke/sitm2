<?php
session_start();
?>
<?php require 'dbcon.php'; ?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Edit</title>
</head>

<body>
    <?php include('message.php'); ?>
    <?php require 'nav.php'; ?>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Edit
                            <a href="lb520-index.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <?php
                        if(isset($_GET['id']))
                        {
                            $lb520_id = mysqli_real_escape_string($con, $_GET['id']);
                            $query = "SELECT * FROM lb520 WHERE id='$lb520_id'";
                            $query_run = mysqli_query($con, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $lb520 = mysqli_fetch_array($query_run);
                                ?>
                        <form action="lb520-code.php" method="POST">
                            <input type="hidden" name="lb520_id" value="<?= $lb520['id']; ?>">
                            
                            <div class="mb-3">
                                <label>Item Detail</label>
                                <input type="text" name="lb520_item" value="<?=$lb520['lb520_item'];?>" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>PO</label>
                                <input type="text" name="lb520_po" value="<?=$lb520['lb520_po'];?>" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Item Code</label>
                                <input type="text" name="lb520_icode" value="<?=$lb520['lb520_icode'];?>" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Manufacturing Date</label>
                                <input type="date" name="lb520_md" value="<?=$lb520['lb520_md'];?>" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label>Receive Date</label>
                                <input type="date" name="lb520_rd" value="<?=$lb520['lb520_rd'];?>" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Lot no.(RB)</label>
                                <input type="text" name="lb520_lotrb" value="<?=$lb520['lb520_lotrb'];?>" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Lot no.(Vendor)</label>
                                <input type="text" name="lb520_lotvendor" value="<?=$lb520['lb520_lotvendor'];?>" class="form-control">
                            </div>

                            <div class="row g-1">
                                <h4 class="col-12 text-center">Incoming</h4>
                                <div class="col">
                                    <label>Q'ty (Pallet)</label>
                                    <input type="number" name="lb520_qty_i" value="<?=$lb520['lb520_qty_i'];?>" class="form-control">
                                </div>
                                <div class="col">
                                    <label>Quantity</label>
                                    <input type="number" name="lb520_quantity_i" value="<?=$lb520['lb520_quantity_i'];?>" class="form-control">
                                </div>
                                <div class="col">
                                    <label>Unit</label>
                                    <input type="text" name="lb520_unit_i" value="<?=$lb520['lb520_unit_i'];?>" class="form-control">
                                </div>
                            </div>

                            <div class="row g-1 mb-3">
                                <h4 class="col-12 text-center">Remaining</h4>
                                <div class="col">
                                    <label>Quantity</label>
                                    <input type="number" name="lb520_quantity_r" value="<?=$lb520['lb520_quantity_r'];?>" class="form-control">
                                </div>
                                <div class="col">
                                    <label>Unit</label>
                                    <input type="text" name="lb520_uniti_r" value="<?=$lb520['lb520_uniti_r'];?>" class="form-control">
                                </div>
                            </div>

                            <div class="mb-3">
                                <label>Status</label>
                                <input type="text" name="lb520_status" value="<?=$lb520['lb520_status'];?>" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Ramark</label>
                                <input type="text" name="lb520_ramark" value="<?=$lb520['lb520_ramark'];?>" class="form-control">
                            </div>
                            <div class="mb-3">
                                <button type="submit" name="update_lb520" class="btn btn-primary">Save</button>
                            </div>

                        </form>
                        <?php
                            }
                            else
                            {
                                echo "<h4>No Such Id Found</h4>";
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>