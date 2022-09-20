<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>register</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"
          crossorigin="anonymous">
</head>
<body>
<div class="container" >
    <div class="row">
        <div class="col-md-12">
            <?php
            include 'header.php';
            setcookie("username", '');
            setcookie("pwd", '');
            setcookie("id", '');
            echo "<div class='alert alert-success' role='alert'>exit successfully...</div>";
            $url = "./index.php";
            echo "<meta http-equiv='refresh' content ='3;url=$url'>";
            ?>
        </div>
    </div>
</div>
</body>
</html>
