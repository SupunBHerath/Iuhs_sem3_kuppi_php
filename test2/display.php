<?php require_once('config.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table>
        <tr>
            <th>Id</th>
            <th>user name</th>
            <th>number</th>
            <th>option</th>
            <th>quantity</th>
            <th>price</th>
        </tr>
        <?php
        $getsql = "SELECT * FROM abc_details ";
        $result = mysqli_query($conn, $getsql);

        if ($result) {
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    ?>

                    <tr>
                        <td>
                            <?php echo $row['id'] ?>
                        </td>
                        <td>
                            <?php echo $row['username'] ?>
                        </td>
                        <td>
                            <?php echo $row['number'] ?>
                        </td>
                        <td>
                            <?php echo $row['option'] ?>
                        </td>
                        <td>
                            <?php echo $row['quantity'] ?>
                        </td>
                        <td>
                            <?php echo $row['price'] ?>
                        </td>
                    </tr>
            
            <?php }
            }
        } ?>
    </table>
</body>

</html>