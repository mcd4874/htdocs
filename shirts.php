<!---->
<!--/**-->
<!-- * Created by PhpStorm.-->
<!-- * User: minh-->
<!-- * Date: 6/29/2015-->
<!-- * Time: 8:01 AM-->
<!-- */-->
<?php
$products=array();
$products[101]=array(
    "name"=> "RIT shirt, black ",
    "price"=>15,
    "img"=>"img/shirts/RIT1.jpg"
);
$products[102]=array(
    "name"=> "RIT shirt, Love RIT ",
    "price"=>16,
    "img"=>"img/shirts/RIT2.jpg"
);
$products[103]=array(
    "name"=> "RIT shirt, hockey ",
    "price"=>20,
    "img"=>"img/shirts/RIT3.jpg"
);
$products[104]=array(
    "name"=> "RIT hockey jersey ",
    "price"=>20,
    "img"=>"img/shirts/RIT4.jpg"
);
$products[105]=array(
    "name"=> "RIT jacket ",
    "price"=>20,
    "img"=>"img/shirts/RIT5.jpg"
);
$products[106]=array(
    "name"=> "RIT hockey jersey ",
    "price"=>20,
    "img"=>"img/shirts/RIT6.jpg"
);
$products[107]=array(
    "name"=> "RIT Jacket ",
    "price"=>20,
    "img"=>"img/shirts/RIT7.jpg"
);
$products[108]=array(
    "name"=> "RIT hockey jersey ",
    "price"=>20,
    "img"=>"img/shirts/RIT8.jpg"
);
?>
<?php
$pageTittle="Minh' full catalog of shirts";
$section="shirts";
include('inc/header.php'); ?>

    <div class="section shirts page">

        <h1>Minh' full catalog of shirts to pick</h1>
        <ul class="products">
            <?php foreach($products as $product){
                //you can echo the html text inside php code block
                echo "<li>";
                echo '<a href="#" >';
                echo '<img src="'.$product['img'].'" alt="'.$product['name'].'"';
                echo" <p>View Details</p>";
                echo "</a>";
                echo "</li>";
             } ?>
        </ul>


    </div>

<?php include('inc/footer.php'); ?>