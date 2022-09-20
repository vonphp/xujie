<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Purchase details</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/details.css">
</head>
<body>
<div class="container">
    <?php
    include 'header.php';
    include 'OPDBS.php';
    $opdbs = new OPDBS();
    $id = $_GET['id'] ?? 1;
    $id = intval($id);
    $sql = "select * from goods where id = {$id}";
    $rows = $opdbs->getOne($sql);
    ?>
    <br>
    <div class="row">
        <div class="col-md-5" style="height: 800%">
            <img src="<?php echo $rows['file_url']; ?>" style="width: 100%;height: auto;">
        </div>
        <div class="col-md-6 sinfos ">
            <h2><?php echo $rows['title']; ?></h2>
            <div class="row">
                <div class="col-md-12 ">
                    <div class="col-md-8 ">
                        <h1>$<?php echo $rows['price']; ?></h1>
                    </div>
                </div>
            </div>
            <P>product id <?php echo $rows['number']; ?></P>
            <div class="row ">
                <div class="col-md-6 btn_cat ">
                    <button id="addCart"><a class="text-center" href="./myCartP.php?id=<?php echo $rows['id'];?>&title=<?php echo $rows['title'];?>&price=<?php echo $rows['price'];?>&userId=<?php echo $_COOKIE['id'] ?? 0?>&status=1">add to Shopping Cart</a></button>
                </div>
                <div class="col-md-6  btn_buy">
                    <button id="payM"><a href="./myCartP.php?id=<?php echo $rows['id'];?>&title=<?php echo $rows['title'];?>&price=<?php echo $rows['price'];?>&userId=<?php echo $_COOKIE['id'] ?? 0?>&status=2" class="text-center">pay immediately</a></button>
                </div>
            </div>
        </div>
    </div>
    <br>
    <hr>
        <div class="row">
            <div class="col-md-12 ">
                <img src=" <?php echo $rows['notes1']; ?>" class="img-responsive" alt="">
            </div>
            <div class="col-md-12 ">
                <img src="<?php echo $rows['notes2']; ?>" class="img-responsive" alt="">
            </div>
            <div class="col-md-12 ">
                <img src="<?php echo $rows['notes3']; ?>" class="img-responsive" alt="">
            </div>
        </div>

    <?php
    include 'footer.php';
    ?></div>


</body>
</html>
