<div class="the-loai">
    <h2>Sản Phẩm</h2>
    <div class="row">

        <?php
        $listcate = $data['dsdm'];
        foreach ($listcate as $danhmuc) {
            extract($danhmuc);
            echo '<div class="col-md-4 danh-muc-san-pham">
                
                    <div class="ao">
                        <a href="index.php?page=cateproduct&id_danhmuc=' . $id . '"><img class="anh-san-pham" title="' . $tenDanhMuc . '" src="app/view/img/' . $image . '" alt="' . $tenDanhMuc . '"></a>
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
            extract($data['category']);
        
        ?>
        <h1 style="text-align:center; margin-top: 10px;"> Sản phẩm: <?= $tenDanhMuc ?>  </h1>
        <?php
        $listProduct = $data['productDanhMuc'];
        foreach ($listProduct as $product) {
            extract($product);
            echo '
                
                <div class="col-md-3 mt-5">
                    <div class="san-pham">
                        <div class="ten">
                            
                        </div>
                        <a href="index.php?page=detail&id='.$id.'"><img  src="app/view/img/' . $image . '" alt="' . $name . '"></a>
                        <div class="gia">
                            <p> ' . $name . '</p>
                            <p>' . $gia . 'VND</p> 
                        </div>
                    </div>
                </div>
                ';
        }
        ?>


    </div>

</div>