<div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="header">
                                    <h4 class="title">Cập nhật sản phẩm</h4>
                                    <p class="category"></p>
                                </div>
                                <div class="content table-responsive table-full-width">
                                    <form action="" method="post" enctype="multipart/form-data">
                                        <label for="">Danh mục sản phẩm</label>
                                        <select name="id_danhmuc" id="id_danhmuc" class="form-control">
                                            <?php
                                                $listcate = $data['listcate'];
                                                $pro_detail = $data['pro_detail'];
                                                $kq = '';
                                                foreach($listcate as $item){
                                                    extract($item);
                                                    if($id == $pro_detail['id_danhmuc']){
                                                        $kq .= '<option value="'.$id.'" selected>'.$tenDanhMuc.'</option>';
                                                    } else{
                                                        $kq .= '<option value="'.$id.'">'.$tenDanhMuc.'</option>';
                                                    }
                                                }
                                                echo $kq;
                                            ?>
                                        </select>
                                        <label for="">Tên sản phẩm</label>
                                        <input type="text" name="name" id="name" class="form-control" value="<?=$pro_detail['name']?>">
                                        <label for="">Giá sản phẩm</label> 
                                        <input type="number" name="gia" id="price" class="form-control" value="<?=$pro_detail['gia']?>">
                                        <label for="">Số lượng sản phẩm</label>
                                        <input type="number" name="soluong" id="quantity" class="form-control" value="<?=$pro_detail['soluong']?>">
                                        <label for="">Mô tả sản phẩm</label>
                                        <input type="text" name="mota" id="description" class="form-control" value="<?=$pro_detail['mota']?>">
                                        <label for="">Giảm giá sản phẩm</label>
                                        <input type="number" name="sale" id="sale-price" class="form-control" value="<?=$pro_detail['sale']?>">
                                        <label for="">Hình ảnh</label>
                                        <input type="file" name="image" id="image" class="form-control">
                                        <img src="img/<?=$pro_detail['image']?>" height = "300px" width = "300px" alt="">
                                        <input type="hidden" name="image_old" value="<?=$pro_detail['image']?>">
                                        <input type="hidden" name="idpro" value="<?=$pro_detail['id']?>">
                                        <input type="submit" value="Cập nhật sản phẩm" onclick="" name="edit">
                                    </form>

                                </div>
                                
                            </div>
                        </div>