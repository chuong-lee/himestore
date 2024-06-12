
<link rel="stylesheet" href="<?php echo 'app/view/css/style.css'; ?>">
<link rel="stylesheet" href="<?php echo 'app/view/css/sale.css'; ?>">
<link rel="stylesheet" href="<?php echo 'app/view/css/product.css'; ?>">
<div class="the-loai">
            <h2>Sản Phẩm</h2>
            <div class="row">

                <?php 
                $listcate = $data['dsdm'];
                foreach ($listcate as $danhmuc){
                    extract($danhmuc);
                    echo '<div class="col-md-4 danh-muc-san-pham">
                
                    <div class="ao">
                        <a href="index.php?page=cateproduct&id_danhmuc='.$id.'"><img class="anh-san-pham" title="'.$tenDanhMuc.'" src="app/view/img/'.$image.'" alt="'.$tenDanhMuc.'"></a>
                    </div>
                </div>';
                }
                ?>
                
            </div>    
</div>
            

        <div class="block-wrapper">
            <img style="width: 100%;" src="app/view/img/posterSale.webp" alt="">
            <div class="row">
            <?php 
            $listProduct = $data['dsproduct'];
            
            foreach ($listProduct as $product){
                extract($product);
                $discountPercentage = (($gia - $sale) / $gia) * 100;
                $discountPercentage = round($discountPercentage);
                echo '
                <div class="col-md-3">
                    <div class="san-pham">
                        <div class="ten">
                        
                        </div>
                        <a href="index.php?page=detailSale&id='.$id.'"><img  src="app/view/img/'.$image.'" alt="'.$name.'"></a>
                        <div class="product-sale">
                            <span>SALE</span>
                            <span>'.$discountPercentage.'%</span>
                        </div>
                        <div class="gia">
                            <p> '.$name.'</p>
                            <del>'.$gia.'VND</del> '.$sale.' VND
                        </div>
                    </div>
                </div>
                ';
            }
                // print_r($listProduct);
            ?>
                
            
            </div>
            
        </div>

        <div class="block-wrapper">
            <h2>Bán chạy</h2>
            <div class="row">
            <?php
            $listBc = $data['dsbc'];
             foreach ($listBc as $product){
                extract($product);
                echo ' <div class="col-md-3">
                    <div class="san-pham">
                        <div class="ten">
                        
                        </div>
                        <a href="index.php?page=detail&id='.$id.'"><img  src="app/view/img/'.$image.'" alt="'.$name.'"></a>
                        <div class="product-sale">
                            <span>HOT</span>
                        </div>
                        <div class="gia">
                            <p>'.$name.'</p>
                            '.$sale.' VND
                        </div>
                    </div>
                </div>';
           } ?>
    </div>
</div>
<?php require_once 'footer.php'; ?>
