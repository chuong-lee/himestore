<?php require_once('header.php')
?>

<link rel="stylesheet" href="<?php echo 'app/view/css/style.css'; ?>">
<link rel="stylesheet" href="<?php echo 'app/view/css/sale.css'; ?>">
<link rel="stylesheet" href="<?php echo 'app/view/css/product.css'; ?>">

<div class="block-wrapper">
    <img style="width: 100%;" src="./asset/css/img/posterSale.webp" alt="">
    <div class="row">
        
            <?php


            foreach ($products as $product) {
                extract($product);
                echo '
                <div class="col-md-3">
                    <div class="san-pham">
                        <div class="ten">
                        
                        </div>
                        <a href="./chiTietSP.html"><img  src="app/view/img/' . $image . '" alt="#"></a>
                        <div class="product-sale">
                            <span>SALE</span>
                            <span>50%</span>
                        </div>
                        <div class="gia">
                            <p>' . $name . '</p>
                            ' . $gia . 'VND
                        </div>
                    </div>
                </div>';
            }

            ?>
    </div>



</div>


<?php require_once 'footer.php'; ?>