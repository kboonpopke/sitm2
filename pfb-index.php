<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sirm";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>

<?php require 'dbcon.php'; ?>
<?php session_start();?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>PREFORM 18G - BGCP</title>
    <link href="dashboard.css" rel="stylesheet">
</head>

<body>
    <?php include('message.php');?>
    <?php require 'nav.php'; ?>

    <div class="dashboard">
        <div class="row g-3">
            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-4 col-md-6 mb-4">
                <div class="card border-left-primary2 shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col-9">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Remaining</div>
                                <?php
$query = "SELECT SUM(pfb_quantity_r) as total_quantity FROM pfb"; // Replace pfb_quantity_r with the actual column name
$query_run = mysqli_query($con, $query);
if ($query_run) {
    $row = mysqli_fetch_assoc($query_run);
    $total_quantity = $row['total_quantity'];    
} else {
    echo "Error executing query: " . mysqli_error($con);
}
?>

                                <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $total_quantity ?> pcs.
                                </div>

                            </div>
                            <div class="col-3">
                                <i class="fas fa-calendar fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-md-6 mb-4">
                <div class="card border-left-primary2 shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col-9">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Waiting for Destroy</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">0 pcs.</div>
                            </div>
                            <div class="col-3">
                                <i class="fas fa-calendar fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-md-6 mb-4">
                <div class="card border-left-primary2 shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col-9">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Quarantine</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">0 pcs.</div>
                            </div>
                            <div class="col-3">
                                <i class="fas fa-calendar fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>PREFORM 18G - BGCP
                            <a href="pfb-create.php" class="btn btn-primary float-end">Add</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Item Detail</th>
                                    <th>PO</th>
                                    <th>Item Code</th>
                                    <th>Manufacturing Date</th>
                                    <th>Receive Date</th>
                                    <th>Lot no.(RB)</th>
                                    <th>Lot no.(Vendor)</th>
                                    <th>Q'ty(Pallet)</th>
                                    <th>Quantity</th>
                                    <th>Unit</th>
                                    <th>Quantity</th>
                                    <th>Unit</th>
                                    <th>Status</th>
                                    <th>Ramark</th>
                                    <th>#</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $query = "SELECT * FROM pfb";
                                    $query_run = mysqli_query($con, $query);

                                    if(mysqli_num_rows($query_run) > 0)
                                    {
                                        foreach($query_run as $pfb)
                                        {
                                            ?>
                                <tr>
                                    <td><?= $pfb['id']; ?></td>
                                    <td><?= $pfb['pfb_item']; ?></td>
                                    <td><?= $pfb['pfb_po']; ?></td>
                                    <td><?= $pfb['pfb_icode']; ?></td>
                                    <td><?= $pfb['pfb_md']; ?></td>
                                    <td><?= $pfb['pfb_rd']; ?></td>
                                    <td><?= $pfb['pfb_lotrb']; ?></td>
                                    <td><?= $pfb['pfb_lotvendor']; ?></td>
                                    <td><?= $pfb['pfb_qty_i']; ?></td>
                                    <td><?= $pfb['pfb_quantity_i']; ?></td>
                                    <td><?= $pfb['pfb_unit_i']; ?></td>
                                    <td><?= $pfb['pfb_quantity_r']; ?></td>
                                    <td><?= $pfb['pfb_uniti_r']; ?></td>
                                    <td><?= $pfb['pfb_status']; ?></td>
                                    <td><?= $pfb['pfb_ramark']; ?></td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="pfb-view.php?id=<?= $pfb['id']; ?>"
                                                class="btn btn-info btn-sm me-2">View</a>
                                            <a href="pfb-edit.php?id=<?= $pfb['id']; ?>"
                                                class="btn btn-success btn-sm me-2">Edit</a>

                                            <form action="pfb-code.php" method="POST" class="d-inline">
                                                <input type="hidden" name="delete_pfb" value="<?= $pfb['id']; ?>">
                                                <button type="submit" class="btn btn-danger btn-sm"
                                                    onclick="return confirm('Are you sure you want to delete this item?')">Delete</button>
                                            </form>
                                        </div>
                                    </td>

                                </tr>
                                <?php
                                        }
                                    }
                                    else
                                    {
                                        echo "<h5> No Record Found </h5>";
                                    }
                                ?>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>