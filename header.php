<div class="row">
    <div class="span12">
        <ul class="nav nav-tabs">
            <li class="col-md-4"> &nbsp</li>
            <li class="col-md-1">
                <a href="index.php">home</a>
            </li>
            <li class="col-md-1">
                <a href="gallary.php">shop</a>
            </li>
            <li class="col-md-1">
                <a href="about.php">about</a>
            </li>
            <li class="col-md-1">
                <a href="myCart.php">myCart</a>
            </li>
            <?php
            if (!empty($_COOKIE['username'])) {
                ?>

                <li class=" pull-right">
                    <a href="order.php" class="btn btn-primary btn-lg active"
                       role="button">welcome<?php echo $_COOKIE['username']; ?> </a>
                </li>

                <li class=" pull-right">
                    <a href="./logout.php" class="btn btn-default btn-lg active" role="button">Log out</a>
                </li>

                <?php
            } else {
                ?>
                <li class="pull-right">
                    <a href="loginView.php" class="btn btn-primary btn-lg active" role="button">Log in</a>
                </li>
                <li class=" pull-right">
                    <a href="registerView.php" class="btn btn-default btn-lg active" role="button">register</a>
                </li>

                <?php
            }
            ?>
        </ul>
    </div>
</div>


