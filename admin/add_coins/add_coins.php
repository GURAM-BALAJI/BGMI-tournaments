<?php include '../includes/session.php'; ?>
<?php include '../includes/header.php'; ?>
<?php if ($admin['add_coins_view']) { ?>

    <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">

            <?php include '../includes/navbar.php'; ?>
            <?php include '../includes/menubar.php'; ?>

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Add Coins
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">Add Coins</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    <?php
                    if (isset($_SESSION['error'])) {
                        echo "
            <div class='alert alert-danger alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4><i class='icon fa fa-warning'></i> Error!</h4>
              " . $_SESSION['error'] . "
            </div>
          ";
                        unset($_SESSION['error']);
                    }
                    if (isset($_SESSION['success'])) {
                        echo "
            <div class='alert alert-success alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4><i class='icon fa fa-check'></i> Success!</h4>
              " . $_SESSION['success'] . "
            </div>
          ";
                        unset($_SESSION['success']);
                    }
                    ?>
                    <div class="panel panel-default" style="overflow-x:auto;">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="box">
                                    <div class="box-body">
                                        <table id="example1" class="table table-bordered">
                                            <thead>
                                                <th>USER ID</th>
                                                <th>TYPE</th>
                                                <th>UTR</th>
                                                <th>AMOUNT</th>
                                                <th>DATE</th>
                                                <?php if ($admin['add_coins_special']) { ?>
                                                    <th>ADD</th>
                                                    <th>DELETE</th>
                                                <?php } ?>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $conn = $pdo->open();
                                                try {
                                                    $stmt = $conn->prepare("SELECT * FROM add_coins WHERE add_coins_task='0'");
                                                    $stmt->execute();
                                                    foreach ($stmt as $row) {
                                                        echo "<tr>";
                                                        echo "<td>" . $row['add_coins_user_id'] . "</td>";
                                                        echo "<td>" . $row['add_coins_type'] . "</td>";
                                                        echo "<td>" . $row['add_coins_utr'] . "</td>";
                                                        echo "<td>" . $row['add_coins_amount'] . "</td>";
                                                        echo "<td>" . $row['add_coins_request_date'] . "</td>";
                                                        if ($admin['add_coins_special']) {
                                                            echo "<td><button class='btn btn-success btn-sm add btn-flat' data-id='" . $row['add_coins_id'] . "'><i class='fa fa-plus'></i> ADD</button> </td>";
                                                            echo "<td><button class='btn btn-danger btn-sm delete btn-flat' data-id='" . $row['add_coins_id'] . "'><i class='fa fa-trash'></i> Delete</button></td>";
                                                        }
                                                        echo "</tr>";
                                                    }
                                                } catch (PDOException $e) {
                                                    echo $e->getMessage();
                                                }

                                                $pdo->close();
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

            </div>
            <?php include 'add_coins_modal.php'; ?>

        </div>
        <!-- ./wrapper -->

        <?php include '../includes/scripts.php'; ?>
        <script>
            $(function() {
                $(document).on('click', '.add', function(e) {
                    e.preventDefault();
                    $('#add').modal('show');
                    var id = $(this).data('id');
                    getRow(id);
                });

                $(document).on('click', '.delete', function(e) {
                    e.preventDefault();
                    $('#delete').modal('show');
                    var id = $(this).data('id');
                    getRow(id);
                });

            });

            function getRow(id) {
                $.ajax({
                    type: 'POST',
                    url: 'add_coins_row.php',
                    data: {
                        id: id
                    },
                    dataType: 'json',
                    success: function(response) {
                        $('.add_coins_id').val(response.add_coins_id);
                        $('.add_coins_amount').html(response.add_coins_amount);
                        $('.add_coins_utr').html(response.add_coins_utr);
                        $('.del_add_coins_id').val(response.add_coins_id);
                        $('.del_add_coins_amount').html(response.add_coins_amount);
                        $('.del_add_coins_utr').html(response.add_coins_utr);
                    }
                });
            }
        </script>
    </body>
<?php } ?>
<?php include '../includes/req_end.php'; ?>
</html>