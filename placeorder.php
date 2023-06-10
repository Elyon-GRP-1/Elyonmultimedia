<?php
session_start();
$ip_add = $_SERVER["REMOTE_ADDR"];
include "db.php";

$insert_query = "INSERT INTO orders (user_id, product_id, qty, trx_id, p_status) VALUES (?, ?, ?, ?, ?)";
$insert_stmt = mysqli_prepare($con, $insert_query);
mysqli_stmt_bind_param($insert_stmt, "iiiss", $user_id, $prod_id, $prod_qty, $trx_id, $p_status);

if ($insert_stmt) {
    $user_id = $_SESSION['user_id'];
    $trx_id = $_POST['trx_id'];
    $p_status = "Pending";

    mysqli_stmt_execute($insert_stmt);
    $order_id = mysqli_insert_id($con);

    $query = "SELECT prod_id, prod_qty, selling_price FROM carts WHERE user_id = ?";
    $stmt = mysqli_prepare($con, $query);
    mysqli_stmt_bind_param($stmt, "i", $user_id);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    while ($citem = mysqli_fetch_array($result)) {
        $prod_id = $citem['prod_id'];
        $prod_qty = $citem['prod_qty'];
        $price = $citem["selling_price"];

        $insert_items_query = "INSERT INTO order_items (order_id, prod_id, qty, price) VALUES (?, ?, ?, ?)";
        $insert_items_stmt = mysqli_prepare($con, $insert_items_query);
        mysqli_stmt_bind_param($insert_items_stmt, "iiid", $order_id, $prod_id, $prod_qty, $price);
        mysqli_stmt_execute($insert_items_stmt);

        $product_query = "SELECT qty FROM products WHERE id = ? LIMIT 1";
        $product_stmt = mysqli_prepare($con, $product_query);
        mysqli_stmt_bind_param($product_stmt, "i", $prod_id);
        mysqli_stmt_execute($product_stmt);
        $productData = mysqli_stmt_get_result($product_stmt);
        $productData = mysqli_fetch_array($productData);
        $current_qty = $productData['qty'];

        $new_qty = $current_qty - $prod_qty;

        $updateQty_query = "UPDATE products SET qty = ? WHERE id = ?";
        $updateQty_stmt = mysqli_prepare($con, $updateQty_query);
        mysqli_stmt_bind_param($updateQty_stmt, "ii", $new_qty, $prod_id);
        mysqli_stmt_execute($updateQty_stmt);
    }

    $deleteCartQuery = "DELETE FROM carts WHERE user_id = ?";
    $deleteCart_stmt = mysqli_prepare($con, $deleteCartQuery);
    mysqli_stmt_bind_param($deleteCart_stmt, "i", $user_id);
    mysqli_stmt_execute($deleteCart_stmt);

    $_SESSION['message'] = "Order placed successfully";
    header('Location: /customer_order.php');
    die();
} else {
    header('location:../index.php');
}
?>
