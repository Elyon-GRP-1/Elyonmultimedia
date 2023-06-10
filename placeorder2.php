<?php
session_start();
if (!isset($_SESSION['uid']) || empty($_SESSION['uid'])) header('Location: login_form.php');
$ip_add = $_SERVER["REMOTE_ADDR"];
include "db.php";

// get all products of user in carts table using user_id
$get_user_carts = "SELECT * FROM `cart` WHERE `user_id` = '$_SESSION[uid]'";
$result = mysqli_query($con, $get_user_carts);
if ($result) {

    // Generate unique order number using current date and time
    $orderNumber = date('YmdHis') . uniqid();

    while ($row = mysqli_fetch_assoc($result)) {
        // Access the data of each row
        $prod_id = $row['p_id'];
        $prod_qty = $row['qty'];
        $user_id = $row['user_id'];
        // ... and so on

        // insert products from carts into the order table
        $insert_items_query = "INSERT INTO `orders` (`user_id`, `product_id`, `qty`, `trx_id`) VALUES (?, ?, ?, ?)";
        $insert_items_stmt = mysqli_prepare($con, $insert_items_query);
        mysqli_stmt_bind_param($insert_items_stmt, "iiis", $user_id, $prod_id, $prod_qty, $orderNumber);
        mysqli_stmt_execute($insert_items_stmt);

    }

    // delete all product of user in carts table
    $deleteCartQuery = "DELETE FROM cart WHERE user_id = ?";
    $deleteCart_stmt = mysqli_prepare($con, $deleteCartQuery);
    mysqli_stmt_bind_param($deleteCart_stmt, "i", $user_id);
    mysqli_stmt_execute($deleteCart_stmt);

    // Free the result set
    mysqli_free_result($result);
    echo '
        <script>
            alert("Order successfully placed!"); 
            window.location.href = "cart.php";
        </script>
    ';

} else {
    // Query execution failed
    echo "Error executing query: " . mysqli_error($con);
}