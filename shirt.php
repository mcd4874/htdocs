
<!--/**
 * Created by PhpStorm.
 * User: minh
 * Date: 7/7/2015
 * Time: 1:44 PM
 */-->
<?php include('inc\products.php');
//check to see if the id of the shirt is correctly
if(isset($_GET['id'])){
    $product_id=$_GET['id'];
    //check to see if there is a product in product list fit the input id
    if(isset($products[$product_id])){
        $product=$products[$product_id];
    }
}
//if there is no product exist from previous condition then
//move back to the shirts.php page
if(!isset($product)){
    header("location:shirts.php");
    exit();
}
$pageTittle=$product['name'];
$section="shirts";
include('inc/header.php');
?>
    <div class="section">
        <div class="wrapper">
            <!--Create link back to shirts.php-->
            <div class="breadcrumb"><a href="shirts.php">Shirt</a> &gt;<?php echo $product['name'] ?></div>
            <!--Create picture of the product-->
            <div class="shirt-picture">
                <span>
                    <img src="<?php echo $product['img'];?>" alt="<?php echo $product['name'];?>">
                </span>
            </div>
            <!--Provide details of the product to customer-->
            <div class="shirt-details">
                <h1> <span class="price">$ <?php echo $product['price'];?> </span> <?php echo $product['name'];?> </h1>
                <!--Button to submit the payment of product-->
                <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                    <input type="hidden" name="cmd" value="_s-xclick">
                    <!--Each product has its own button, and each button has a code that we save in the array when create button-->
                    <input type="hidden" name="hosted_button_id" value=" <?php echo $product["paypal"]; ?>">
                    <input type="hidden" name="item_name" value="<?php echo $product['name']; ?>">
                    <table>
                        <tr><th><input type="hidden" name="on0" value="size">
                                <label for="os0">size</label>
                            </th>
                            <td><select name="os0" id="os0">
                                    <?php foreach ($product['size'] as $size) {?>
                                    <option value="<?php echo $size;?>"><?php echo $size;?> </option>
                                    <?php } ?>
                                </select> </td></tr>
                    </table>
                    <input type="submit" value="Add to Cart" name="submit" >
                </form>

                <p class="note-designer"> This shirt is sold by Minh</p>
            </div>

        </div>

    </div>