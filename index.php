<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>home</title>

    <script type="text/javascript" src="./js/jquery.min.js"></script>  
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"
          crossorigin="anonymous">
    <link rel="stylesheet" href="./css/index.css">   <!-- css-->
</head>
<body>
<div class="container">
    <?php
    include './header.php';
    include './OPDBS.php';
    $opdbs = new OPDBS();

    $sql = "select * from goods where home =1 limit 0,4 ";
    $rows = $opdbs->query($sql);
    ?>

    <div class="carousel-inner">
        <div class="item active">
            <img alt=""
                 src="./images/about/QQQ.jpg"/>
        </div>
    </div>
    <div class="content">
        <div class="products">
            <div class="row">
                <?php
                foreach ($rows as $row) {
                    ?>
                    <div class="col-md-3">
                        <div class="product-grid">
                            <div class="product-image">
                                <a href="details.php?id=<?php echo $row['id']; ?>" class="image">
                                    <img style="" src="<?php echo $row['file_url']; ?>">
                                </a>
                            </div>
                            <h3 class="title"><a
                                        href="details.php?id=<?php echo $row['id']; ?>"><?php echo $row['title']; ?></a>
                            </h3>
                            <div class="price">$<?php echo $row['price']; ?></div>
                        </div>
                    </div>
                    <?php
                }
                ?>
            </div>
            <?php

            $sql = "select * from goods where home =1 limit 4,8 ";
            $rows = $opdbs->query($sql);
            ?>

            <div class="row">
                <?php
                foreach ($rows as $row) {
                    ?>
                    <div class="col-md-3">
                        <div class="product-grid">
                            <div class="product-image">
                                <a href="details.php?id=<?php echo $row['id']; ?>" class="image">
                                    <img class="pic-1" style="" src="<?php echo $row['file_url']; ?>">
                                </a>
                            </div>
                            <h3 class="title"><a
                                        href="details.php?id=<?php echo $row['id']; ?>"><?php echo $row['title']; ?></a>
                            </h3>
                            <div class="price">$<?php echo $row['price']; ?></div>
                        </div>
                    </div>
                    <?php
                }
                ?>
            </div>
        </div>
    </div>

    <?php
    include 'footer.php';
    ?>
</div>


</body>
</html>
