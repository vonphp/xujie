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
include 'OPDBS.php';
include 'header.php';

$opdbs  = new OPDBS();
$id     = $_REQUEST['id'];
$userId = $_REQUEST['userId'];
$title = $_REQUEST['title'];
$price = $_REQUEST['price'];
$cart_uq = uniqid();
$status = $_REQUEST['status'];
$time = date('Y-m-d H:i:s');
$sql = "insert into  carts (cart_uq,mid,status,gid,create_time, title, price) values ( '{$cart_uq}',{$userId},{$status},{$id},'{$time}', '{$title}', '{$price}')";
$status = $opdbs->query($sql);
if ($status) {
    echo '<div class="alert alert-success" role="alert"> success </div>';
    $url = "./myCart.php";
    echo "<meta http-equiv='refresh' content ='3;url=$url'>";

    return;
}
echo '<div class="alert alert-warning" role="alert">err</div>';
$url = "./index.php";
echo "<meta http-equiv='refresh' content ='3;url=$url'>";
?>
        </div>
    </div>
</div>
</body>
</html>