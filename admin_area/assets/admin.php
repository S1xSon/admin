<?php
include "./admin_area/assets/php/functions_admin.php"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="wrapper">
        <header>
            <?php
            include "./admin_area/assets/php/header.php"
            ?>
        </header>

        <?php
        include "./admin_area/assets/php/nav.php"
        ?>
    </div>
    <div class="page-wrapper">
        <div class="page-content-wrapper">
            <div calss="page-content">
                <div class="row">
                    <div class="col">
        <div class="card radius-15">
            <div class="card-body">
                <div class="card-title">
                    <h4 class="mb-0">Brand and Categories</h4>
                </div>
                <hr />
                <div class="form-group">
                    <select class="form-control" id="categories">
                        <option Value="">Categories</option>
                        <?php
                        // get_cat_option();
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <select class="form-control" id="brands">
                        <option Value="">Brand</option>
                        <?php
                        // get_brands_option();
                        ?>
                    </select>
                </div>
            </div>
        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>