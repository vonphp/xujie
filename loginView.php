<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"
          crossorigin="anonymous">
</head>
<body>
<div class="container">
    <?php
    include 'header.php';
    ?>
    <hr width="100%">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title text-center">User login</h3>
        </div>
        <form method="post" class="form-horizontal">
            <div class="panel-body form-horizontal text-center">
                <div class="form-group">
                    <label>
                        email :
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
                    <input type="submit" value="Log in" class=" login btn btn-success "
                           onclick="form.action='login.php'" id="login"/>
                </div>
            </div>
        </form>
    </div>
</div>
</body>
</html>