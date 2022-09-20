<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Cart</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>

<div class="container">
    <?php
    include 'header.php';
    include 'OPDBS.php';

    $opdbs  = new OPDBS();
    $userId = $_COOKIE['id'] ?? 0;
    if (!$userId) {
        echo "<div class='alert alert-warning' role='alert'>please log in</div>";
        die;
    }
    $sql  = "select * from carts where mid = {$userId} and status = 1 ";
    $data = $opdbs->getAll($sql);
    ?>
    <div id="app">
        <div class="panel panel-warning" style="margin:30px auto; ">
            <!-- 头部 -->
            <div class="panel-heading">
                <h1 style="display: inline-block;">My Cart</h1>
            </div>
        </div>
        <div class="panel-body">
            <table class="table table-striped ">
                <thead>
                <tr>
                    <th>Product number</th>
                    <th>product name</th>
                    <th>Product unit price</th>
                    <th>operate</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $priceCount = 0;
                foreach ($data as $datum) {
                    $priceCount += $datum['price'];
                    ?>
                    <tr>
                        <td><?php echo $datum['id']; ?></td>
                        <td><?php echo $datum['title']; ?></td>
                        <td><?php echo $datum['price']; ?></td>
                        <td>
                            <button type="button" class="btn btn-success"
            >
                                    <a href="./settle.php?id=<?php echo $datum['id']; ?>&type=1"> settlement</a> 
                            </button>
                            <button type="button" class="btn btn-danger" onclick="del(<?php echo $datum['id']; ?>, 1)">
                            <a href="./remove.php?id=<?php echo $datum['id']; ?>&type=1"> remove</a> 
                                
                            </button>
                        </td>
                    </tr>
                    <?php
                }
                ?>
                <tr>
                    <td>Total cost $<?php echo $priceCount; ?></td>
                    <td></td>
                    <td></td>
                    <td colspan="2">
                        <button type="button" class="btn btn-success btn-sm"
                                ><a href="./settle.php?id=<?php echo $datum['id']; ?>&type=2"> to settle</a>
                        </button>
                        <button type="button" class="btn btn-danger btn-sm"
                        >
                                <a href="./remove.php?id=<?php echo $datum['id']; ?>&type=2">  Rrmove shopping trolley</a>
                               
                        </button>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
</html>