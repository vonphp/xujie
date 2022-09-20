<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User register</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <?php
    include 'header.php';
    ?>
    <hr width="100%">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title text-center">User register</h3>
        </div>
        <form method="post" class="form-horizontal">
            <div class="panel-body form-horizontal text-center">
                <div class="form-group">
                    <label>
                        User :
                        <input type="text" class="form-control" name="userName" id="userName">
                    </label>
                </div>

                <div class="form-group">
                    <label>
                        email:
                        <input type="text" class="form-control" name="email" id="email">
                    </label>
                </div>
                <div class="form-group">
                    <label>
                        password:
                        <input type="password" class="form-control" name="password" id="password">
                    </label>
                </div>
                <div class="form-group">
                    <label>
                        address:
                        <input type="text" class="form-control" name="address" id="address">
                    </label>
                </div>
                <div class="form-group">
                    <label>
                        phone:
                        <input type="text" class="form-control" name="phone" id="phone">
                    </label>
                </div>
                <div class="form-group">
                    <input type="submit" value="register" class=" login btn btn-success "
                           onclick="form.action='register.php'" id="register"/>
                </div>
            </div>
        </form>
    </div>
</div>
</body>
</html>