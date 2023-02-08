<?php
    function get_cat_option(){
        global $con;

        $get_cats = "select * from categories";
        $run_cats = mysqli_query($con, $get_cats);

        while ($row_cats = mysqli_fetch_array($run_cats)) {
            $cat_title = $row_cats["cat_title"];
            $cat_id = $row_cats["cat_id"];

            echo <<<EOT
            <option value=$cat_id>$cat_title</option>
            EOT;
        }
    }

    function get_brands_option(){
        global $con;

        $get_brands = "select * from categories";
        $run_brands = mysqli_query($con, $get_brands);

        while ($row_brands = mysqli_fetch_array($run_brands)) {
            $brand_title = $row_brands["brand_title"];
            $brand_id = $row_brands["brand_id"];

            echo <<<EOT
            <option value=$brand_id>$brand_title</option>
            EOT;
        }
    }
?>