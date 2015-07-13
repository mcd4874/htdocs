
<!--/**
 * Created by PhpStorm.
 * User: minh
 * Date: 7/7/2015
 * Time: 1:53 PM
 */-->
<?php
//create function to printout the html text to show detail of each shirt
function view_list($product_id,$product){
    $output='';
    $output=$output . "<li>";
    $output=$output . '<a href="shirt.php?id='.$product_id.'" >';
    $output=$output . '<img src="'.$product['img'].'" alt="'.$product['name'].'"';
    $output=$output . " <p>View Details</p>";
    $output=$output .  "</a>";
    $output=$output .  "</li>";
    return $output;
}

$products=array();
$products[101]=array(
    "name"=> "RIT shirt, black ",
    "price"=>15,
    "img"=>"img/shirts/RIT1.jpg",
    "paypal"=>"6G8NXFCWQMPU2",
    "size"=>array("Small","Medium","Large","X-Large")
);
$products[102]=array(
    "name"=> "RIT shirt, Love RIT ",
    "price"=>16,
    "img"=>"img/shirts/RIT2.jpg",
    "size"=>array("Small","Medium","Large","X-Large")
);
$products[103]=array(
    "name"=> "RIT shirt, hockey ",
    "price"=>20,
    "img"=>"img/shirts/RIT3.jpg",
    "size"=>array("Small","Medium","Large","X-Large")
);
$products[104]=array(
    "name"=> "RIT hockey jersey ",
    "price"=>20,
    "img"=>"img/shirts/RIT4.jpg",
    "size"=>array("Small","Medium","Large","X-Large")
);
$products[105]=array(
    "name"=> "RIT jacket ",
    "price"=>20,
    "img"=>"img/shirts/RIT5.jpg",
    "size"=>array("Small","Medium","Large","X-Large")
);
$products[106]=array(
    "name"=> "RIT hockey jersey ",
    "price"=>20,
    "img"=>"img/shirts/RIT6.jpg",
    "size"=>array("Small","Medium","Large","X-Large")
);
$products[107]=array(
    "name"=> "RIT Jacket ",
    "price"=>20,
    "img"=>"img/shirts/RIT7.jpg",
    "size"=>array("Medium","Large","X-Large")
);
$products[108]=array(
    "name"=> "RIT hockey jersey ",
    "price"=>20,
    "img"=>"img/shirts/RIT8.jpg",
    "size"=>array("Large","X-Large")
);
?>