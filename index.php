<?php
$pageTittle="Shirt shopping";
include('inc/header.php');
include ('inc/products.php'); ?>


    <div class="section banner">

        <div class="wrapper">

            <img class="hero" src="img/mike-the-frog.png" alt="Mike the Frog says:">
            <div class="button">
                <a href="#">
                    <h2>Hey, I&rsquo;m Minh!</h2>
                    <p>Check Out My Shirts</p>
                </a>
            </div>
        </div>

    </div>

    <div class="section shirts latest">

        <div class="wrapper">

            <h2>Minh&rsquo;s Latest Shirts</h2>

            <ul class="products">
                <?php
                    $total=0;
                    $list_view='';
                    foreach($products as $product_id=>$product){
                        $total++;
                    //you can echo the html text inside php code block
                        if((count($products)-$total)<4) {
                            $list_view=$list_view. view_list($product_id, $product);
                        }
                    }
                    echo $list_view;
                ?>
            </ul>

        </div>

    </div>

<?php include('inc/footer.php'); ?>