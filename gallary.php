<?php
include 'OPDBS.php';
$opdbs = new OPDBS();

$title = $_GET['title'] ?? '';
if ($title) {
    $sql = "select * from goods where title like '%{$title}%'";
} else {
    $sql = "select * from goods";
}

$rows = $opdbs->getAll($sql);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"
          crossorigin="anonymous">
    <title>shop</title>
</head>
<body>
<div class="container">
    <?php
    include 'header.php';
    ?>
    <form class="navbar-form ">
        <div class="form-group">
            <label for="">
                <input type="text" class="form-control" placeholder="search" name="title" id="keyT"
                       style="float: left;">
                <span class="input-group-btn" onclick="keyT()">
                    <button class="btn btn-default" type="button">
                        <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                    </button>
                </span>
            </label>
        </div>
    </form>

    <!--banner-->
    <div class="carousel-inner">
        <div class="item active">
            <img alt=""
            src="./images/about/QQQ.jpg"/>
        </div>
    </div>
    <div class="products">
        <!-- Products Featured-->
        <div class="row">
            <div class="col-md-3 ">
                <h2>Products</h2>
            </div>
        </div>
        <hr>
        
        <div class="row">
        <?php
        foreach ($rows as $key => $row) {
            
                ?>

       
            <div class="col-md-3 ">
                <div>
                    <div class="product-image">
                        <a href="details.php?id=<?php echo $row['id']; ?>" class="image">
                            <img class="pic-1" style="height: 200px;width: 250px"
                                 src="<?php echo $row['file_url']; ?>">
                        </a>
                    </div>
                    <div class="product-content">
                        <h3 class="title"><a
                                    href="details.php?id=<?php echo $row['id']; ?>"><?php echo $row['title']; ?></a>
                        </h3>
                        <div class="price">$<?php echo $row['price']; ?></div>
                    </div>
                </div>
            </div>

           
                <?php

          
        }
        ?>
    </div>

    </div>

    <?php
    include 'footer.php';
    ?>
 
</div>
<script>
    function keyT() {

        var title = document.getElementById("keyT").value;
        window.location.href = './gallary.php?title=' + title;
    }
</script>
</body>
</html>
