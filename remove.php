<?php
session_start();
$con = mysqli_connect("localhost", "root","", "shopzada");

    $all_id = $_SESSION['item_id'];
    foreach ($all_id as $item){
        $query = "DELETE FROM items WHERE id = $item";
        $query_run = mysqli_query($con, $query);
    }

echo "<script>window.location.href='admin.php'</script>";

?>