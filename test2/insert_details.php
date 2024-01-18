<?php require_once('config.php'); ?>

<?php
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $mobileNumber = $_POST['mobileNumber'];
    $items = $_POST['items'];
    $quantity = $_POST['quantity'];


    $itemarry = [
        'item1' => 100,
        'item2' => 200,
        'item3' => 300,
    ];

    $total = $quantity * $itemarry[$items];
    echo $total;

    $totalprice = 0;

    if ($quantity > 5) {


        $totalprice = $total * 0.95;

    } else {
        $totalprice = $total;
    }

    $sql = "INSERT INTO abc_details (username, number, option, quantity, price) VALUES (?,?,?,?,?)";
    $stmt =$conn->prepare($sql);
    $stmt->bind_param("sssdd", $username, $mobileNumber, $items, $quantity, $totalprice);
    $stmt->execute();
    // mysqli_execute($stmt);
    $stmt->close();
    header('location:display.php');

    $conn->query($sql);
















}



?>








<?php mysqli_close($conn); ?>