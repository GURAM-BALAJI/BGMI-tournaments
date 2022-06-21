<?php include '../includes/session.php'; ?>
<html>

<head>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        h2 {
            color: #1c94c4;
            text-align: center;
        }

        th,
        td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        tr:hover {
            background-color: #f5f5f5;
        }
    </style>
</head>

<body>

    <h2>PERMISSION</h2>
    <form class="form-horizontal" method="POST" action="admin_permission_edit.php">
        <?php
        $id = $_GET['id'];
        $conn = $pdo->open();
        $stmt = $conn->prepare("SELECT * FROM admin WHERE admin_id=:id");
        $stmt->execute(['id' => $id]);
        foreach ($stmt as $row) {
        ?>
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <table>
                <tr>
                    <th> </th>
                    <th style="color: #3a8104;"> Name </th>
                    <th style="color: #3a8104;"> View </th>
                    <th style="color: #3a8104;"> Create </th>
                    <th style="color: #3a8104;"> Edit </th>
                    <th style="color: #3a8104;"> Delete </th>
                    <th style="color: #3a8104;"> Special </th>
                    <th> </th>
                </tr>
                <tr>
                    <td> </td>
                    <td> USER </td>
                    <td style="text-align: center;"> <input type="checkbox" name="users_view" <?php if ($row['users_view']) echo "checked"; ?>> </td>
                    <td style="text-align: center;"> <input type="checkbox" name="users_create" <?php if ($row['users_create']) echo "checked"; ?>> </td>
                    <td style="text-align: center;"> <input type="checkbox" name="users_edit" <?php if ($row['users_edit']) echo "checked"; ?>> </td>
                    <td style="text-align: center;"> <input type="checkbox" name="users_del" <?php if ($row['users_del']) echo "checked"; ?>> </td>
                    <td style="text-align: center;"> <input type="checkbox" name="users_special" <?php if ($row['users_special']) echo "checked"; ?>> </td>
                    <td> </td>
                </tr>
                <tr>
                    <td> </td>
                    <td> ADMIN </td>
                    <td style="text-align: center;"> <input type="checkbox" name="admin_view" <?php if ($row['admin_view']) echo "checked"; ?>> </td>
                    <td style="text-align: center;"> <input type="checkbox" name="admin_create" <?php if ($row['admin_create']) echo "checked"; ?>> </td>
                    <td style="text-align: center;"> <input type="checkbox" name="admin_edit" <?php if ($row['admin_edit']) echo "checked"; ?>> </td>
                    <td style="text-align: center;"> <input type="checkbox" name="admin_del" <?php if ($row['admin_del']) echo "checked"; ?>> </td>
                    <td style="text-align: center;"> <input type="checkbox" name="admin_special" <?php if ($row['admin_special']) echo "checked"; ?>> </td>
                    <td> </td>
                </tr>
                <tr>
                    <td> </td>
                    <td> Withdraw </td>
                    <td style="text-align: center;"> <input type="checkbox" name="withdraw_view" <?php if ($row['withdraw_view']) echo "checked"; ?>> </td>
                    <td style="text-align: center;"> </td>
                    <td style="text-align: center;"> <input type="checkbox" name="withdraw_edit" <?php if ($row['withdraw_edit']) echo "checked"; ?>> </td>
                    <td style="text-align: center;"> <input type="checkbox" name="withdraw_del" <?php if ($row['withdraw_del']) echo "checked"; ?>> </td>
                    <td> </td>
                    <td> </td>
                </tr>
                <tr>
                    <td> </td>
                    <td> ADD COINS </td>
                    <td style="text-align: center;"> <input type="checkbox" name="add_coins_view" <?php if ($row['add_coins_view']) echo "checked"; ?>> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td style="text-align: center;"> <input type="checkbox" name="add_coins_special" <?php if ($row['add_coins_special']) echo "checked"; ?>> </td>
                    <td> </td>
                </tr>
                <tr>
                    <td> </td>
                    <td> HISTORY </td>
                    <td style="text-align: center;"> <input type="checkbox" name="history_view" <?php if ($row['history_view']) echo "checked"; ?>> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                </tr>
                <tr>
                    <td> </td>
                    <td> MESSAGE </td>
                    <td style="text-align: center;"> <input type="checkbox" name="message_view" <?php if ($row['message_view']) echo "checked"; ?>> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                </tr>
                <tr>
                    <td> </td>
                    <td> GAME </td>
                    <td style="text-align: center;"> <input type="checkbox" name="game_view" <?php if ($row['game_view']) echo "checked"; ?>> </td>
                    <td style="text-align: center;"> <input type="checkbox" name="game_create" <?php if ($row['game_create']) echo "checked"; ?>> </td>
                    <td style="text-align: center;"> <input type="checkbox" name="game_edit" <?php if ($row['game_edit']) echo "checked"; ?>> </td>
                    <td style="text-align: center;"> <input type="checkbox" name="game_del" <?php if ($row['game_del']) echo "checked"; ?>> </td>
                    <td> </td>
                    <td> </td>
                </tr>
                 <tr>
                    <td> </td>
                    <td> PLAYED </td>
                    <td style="text-align: center;"> <input type="checkbox" name="played_view" <?php if ($row['played_view']) echo "checked"; ?>> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                </tr>
                <tr>
                    <td> </td>
                    <td> RECORD </td>
                    <td style="text-align: center;"> <input type="checkbox" name="record_view" <?php if ($row['record_view']) echo "checked"; ?>> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                </tr>
               
            </table>
        <?php } ?>
        <div class="modal-footer">
            <button type="submit" class="btn btn-success btn-flat" name="update"><i class="fa fa-check"></i> UPDATE</button>
        </div>
    </form>
</body>

</html>