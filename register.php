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
            $opdbs = new OPDBS();

            $passWd = md5($_POST['password']);
            $email = $_POST['email'];
            $username = $_POST['userName'];
            $phone = $_POST['phone'];
            $address = $_POST['address'];
            $time = date('Y-m-d H:i:s');
            $sql = "select * from members where email = '{$email}' ";
            $memberD = $opdbs->getOne($sql);
           
            if ($memberD) {
                echo '<div class="alert alert-warning" role="alert">account already exists</div>';
                $url = "./loginView.php";
                echo "<meta http-equiv='refresh' content ='3;url=$url'>";
                die;
            }
            $sql = "insert into  members (email,passwd,create_time,phone,address,username) 
values ( '{$email}','{$passWd}','{$time}','{$phone}','{$address}','{$username}')";
            $status = $opdbs->query($sql);
              $sql = "select * from members where email = '{$email}' ";
            $memberD = $opdbs->getOne($sql);
            if ($status) {
                echo '<div class="alert alert-success" role="alert">Registered successfully, logging in...</div>';
                setcookie("username", $memberD['username'], time() + 1200);//秒
                setcookie("pwd", $passWd, time() + 1200);
                setcookie("id", $memberD['id'], time() + 1200);
                $url = "./index.php";
                echo "<meta http-equiv='refresh' content ='3;url=$url'>";
                die;
            }
            ?>
        </div>
    </div>
</div>
</body>
</html>
