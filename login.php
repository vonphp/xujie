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

            $passWd  = md5($_POST['password']);
            $email   = $_POST['email'];
            $sql     = "select * from members where email = '{$email}' and passwd = '{$passWd}' ";
            $memberD = $opdbs->getOne($sql);
            if ($memberD) {
                setcookie("username", $memberD['username'], time() + 1200);
                setcookie("pwd", $passWd, time() + 1200);
                setcookie("id", $memberD['id'], time() + 1200);
                $url = "./index.php";
                echo "<div class='alert alert-success' role='alert'>Login successful, logging in...</div>";

            } else {
                $url = "./loginView.php";
                echo "<div class='alert alert-warning' role='alert'>Account password error</div>";

            }
            echo "<meta http-equiv='refresh' content ='3;url=$url'>";
            ?>

        </div>
    </div>
</div>
</body>
</html>


