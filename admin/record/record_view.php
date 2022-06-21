<?php include '../includes/session.php'; ?>
<?php include '../includes/header.php'; ?>
<?php if ($admin['record_view']) { ?>

    <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">

            <?php include '../includes/navbar.php'; ?>
            <?php include '../includes/menubar.php'; ?>

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Record
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">Record</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="panel panel-default" style="overflow-x:auto;">

                        <div class="row">
                            <div class="col-md-10">
                                <div class="panel panel-default">
                                    <div class="panel-heading"></div>
                                    <div class="panel-body">
                                        <?php
                                        if (isset($_POST['submit'])) {
                                            if (!empty($_POST['user_id'])) {
                                                $user_id = $_POST['user_id'];
                                                ?>
                                                 <h4>
                                                        <?php
                                                        $stmt = $conn->prepare("SELECT * FROM users WHERE user_id='$user_id'");
                                                        $stmt->execute();
                                                        foreach ($stmt as $row) {
                                                            echo '<b>Id:</b> ' . $row['user_id'] . '<br>';
                                                            echo '<b>Name:</b> ' . $row['first_name'] . '<br>';
                                                            echo '<b>Phone NO:</b> ' . $row['user_phone'] . '<br>';
                                                            echo '<b>Present Amount:</b> ' . $row['user_amount'] . '<br>';
                                                        }
                                                        ?>
                                                    </h4>
                                                    <?php
                                                if ($_POST['TYPE_ACTION'] == 0) {
                                        ?>

                                                    <div class="panel panel-default" style="overflow-x:auto;">
                                                        <div class="modal-body">
                                                            <div class="modal-body">
                                                            <div class="features-small-item">
                    <?php    $id = $_SESSION['never_id'];
                        $conn = $pdo->open();
                        $stmt = $conn->prepare("SELECT * FROM transaction WHERE transaction_user_id = $id ORDER BY transaction_id DESC LIMIT 20");
                        $stmt->execute();
                        foreach ($stmt as $row) { ?>
                            <?php if ($row['transaction_amount'] < 0)
                                $color = "red";
                            else
                                $color = "green"; ?>
                            <div style="padding: 5px; margin: 0;  background-color:<?php echo $color; ?>;  border-radius: 9px;">
                                <table style="width:100%;">
                                    <tr>
                                        <td style="float:left;">
                                            <h3><?php echo $row['transaction_send_to']; ?></h3>
                                        </td>
                                        <td rowspan="2"> <?php echo $row['transaction_amount']; ?>&#9921;</td>
                                    <tr>
                                        <td style=""><?php echo date("d-M-Y h:i:s A", strtotime($row['transaction_date'])); ?></td>
                                    </tr>
                                    </tr>
                                </table>
                            </div>
                            <hr>
                    <?php 
                    }?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php  } else {
                                                ?>
                                                   
                                                    <table id="example1" class="table table-bordered">

                                                        <thead>
                                                            <th>#</th>
                                                            <th>AMOUNT</th>
                                                            <th>HOW</th>
                                                            <th>AFTER AMOUNT</th>
                                                            <th>BY</th>
                                                            <th>REASON</th>
                                                            <th>Date</th>
                                                        </thead>
                                                        <tbody>
                                                            <?php
                                                            date_default_timezone_set('Asia/Kolkata');
                                                            $conn = $pdo->open();
                                                            try {
                                                                $slno = 1;
                                                                $stmt = $conn->prepare("SELECT * FROM transaction WHERE transaction_user_id='$user_id' ORDER BY transaction_id DESC");
                                                                $stmt->execute();
                                                                foreach ($stmt as $row) {
                                                                    echo "<tr>";
                                                                    echo "<td>" . $slno++ . "</td>";
                                                                    echo "<td>" . $row['transaction_amount'] . "</td>";
                                                                    echo "<td>" . $row['transaction_send_to'] . "</td>";
                                                                    echo "<td>" . $row['present_amount'] . "</td>";
                                                                    echo "<td>" . $row['transaction_added_by'] . "</td>";
                                                                    echo "<td>" . $row['transaction_method'] . "</td>";
                                                                    echo "<td>" . $row['transaction_date'] . "</td>";
                                                                    echo "</tr>";
                                                                }
                                                            } catch (PDOException $e) {
                                                                echo $e->getMessage();
                                                            }

                                                            $pdo->close();
                                                            ?>
                                                        </tbody>
                                                    </table>

                                        <?php    }
                                            }
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

            </div>

        </div>
        <?php include '../includes/scripts.php'; ?>
        <!-- ./wrapper -->
    </body>
<?php } ?>

</html>