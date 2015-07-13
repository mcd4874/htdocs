<!---->
<!--/**-->
<!-- * Created by PhpStorm.-->
<!-- * User: minh-->
<!-- * Date: 6/29/2015-->
<!-- * Time: 8:01 AM-->
<!-- */-->
<?php include('inc\products.php'); ?>
<?php
$pageTittle="Minh' full catalog of shirts";
$section="shirts";
include('inc/header.php'); ?>

    <div class="section shirts page">

        <h1>Minh' full catalog of shirts to pick</h1>
        <ul class="products">
            <?php foreach($products as $product_id=>$product){
                //you can echo the html text inside php code block
                //use the funciton from products.php to print out html text details
                echo view_list($product_id,$product);

             } ?>
        </ul>


    </div>

<?php include('inc/footer.php'); ?>