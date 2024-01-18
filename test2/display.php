<?php require_once('config.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
        }
        table {
            border-collapse: collapse;
            width: 50%;
            margin: 0 auto;
        }
        td,
        th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
      
        th {
            color: red;
            
        }
    </style>
</head>

<body>
    <table>
        <tr>
            <th>User ID </th>
            <th>User Name</th>
            <th>Mobile Number</th>
            <th>Select Item</th>
            <th>Quantity</th>
            <th>Price</th>
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