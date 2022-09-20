<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>register</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"
          crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
<?php
    include 'header.php';

include 'OPDBS.php';
$opdbs = new OPDBS();

$cartId = $_GET['id'] ?? 0;
$type   = $_GET['type'] ?? 0;
switch ($type) {
    case 1:
        $sql    = "UPDATE carts SET status = 3 WHERE id={$cartId} and status =1";
        $status = $opdbs->query($sql);
        break;
    case 2:
        $userId = $_COOKIE['id'];
        $sql    = "UPDATE carts SET status = 3 WHERE mid={$userId} and status =1";
        $status = $opdbs->query($sql);
        break;
}
if ($status) {
    echo '<div class="alert alert-success" role="alert"> success </div>';
    $url = "./myCart.php";
    echo "<meta http-equiv='refresh' content ='3;url=$url'>";
    die;
}
echo '<div class="alert alert-waring" role="alert"> err </div>';
$url = "./index.php";
echo "<meta http-equiv='refresh' content ='3;url=$url'>";
?>
</div>
</div>
</div>
</body>
</html>