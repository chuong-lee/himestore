<?php require_once('link.php') ?>

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Thêm sản phẩm</h4>
                        <p class="category"></p>
                    </div>
                    <div class="content table-responsive table-full-width">
                        <form action="indexAdmin.php?page=adminAddPro" method="post" enctype="multipart/form-data">
                            <label for="">Danh mục sản phẩm</label>
                            <select name="id_danhmuc" id="id_danhmuc" class="form-control">
                            <?php
                                        $listcate = $data['dsdm'];
                                        $kq = '';
                                        foreach ($listcate as $item){
                                            extract($item);
                                            $kq .= '<option value="'.$id.'">'.$tenDanhMuc.'</option>';
                                        };
                                        echo $kq;
                                    ?>
                            </select>
                            
                            <label for="">Tên sản phẩm</label>
                            <input type="text" name="name" id="name" class="form-control">
                            <label for="">Giá sản phẩm</label>
                            <input type="number" name="gia" id="price" class="form-control">
                            <label for="">Số lượng sản phẩm</label>
                            <input type="number" name="soluong" id="quantity" class="form-control">
                            <label for="">Mô tả sản phẩm</label>
                            <input type="text" name="mota" id="description" class="form-control">
                            <label for="">Giảm giá sản phẩm</label>
                            <input type="number" name="sale" id="sale-price" class="form-control">
                            <label for="">Hình ảnh</label>
                            <input type="file" name="image" id="image" class="form-control">
                            <input type="submit" value="Thêm sản phẩm" onclick="" name="addPro">
                        </form>

                    </div>

                </div>
            </div>

        </div>


    </div>
</div>