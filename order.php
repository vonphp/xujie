<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Order</title>
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
    
    $sqlM  = "select * from members where id = {$userId}";
    $memberOne = $opdbs->getOne($sqlM);

    $sql  = "select * from carts where mid = {$userId} and status = 2 ";
    $data = $opdbs->getAll($sql);
    ?>
    <div id="app">
        <div class="panel panel-warning" style="margin:30px auto; ">
        
            <div class="panel-heading">
                <h1 style="display: inline-block;">My Order</h1>
            </div>
        </div>
        <div class="panel-body">
            <table class="table table-striped ">
                <thead>
                <tr>
                    <th>username</th>
                    <th>address</th>
                    <th>phone</th>
                    <th>product name</th>
                    <th>product price</th>
                </tr>
                </thead>
                <tbody>
                <?php
                foreach ($data as $datum) {
                    ?>
                    <tr>
                        <td><?php echo $_COOKIE['username']; ?></td>
                        <td><?php echo $memberOne['address']; ?></td>
                        <td><?php echo $memberOne['phone']; ?></td>
                        <td><?php echo $datum['title']; ?></td>
                        <td><?php echo $datum['price']; ?></td>
                    </tr>
                    <?php
                }
                ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<script type="text/javascript" src="./js/jquery.min.js"></script>    <!-- 引入jq.js文件-->
<script>
</script>
</body>
</html>