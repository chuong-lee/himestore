<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Sửa danh mục</h4>
                        <p class="category"></p>
                    </div>
                    <div class="content table-responsive table-full-width">
                        <form action="" method="post" enctype="multipart/form-data">
                        <?php $catedetail = $data['cate_detail']; print_r($catedetail)?>
                            <label for="">Tên danh mục</label>
                            <input type="text" name="tenDanhMuc" id="tenDanhMuc" class="form-control" required value="<?=$catedetail['tenDanhMuc']?>">
                            <label for="">Hình ảnh</label>
                            <input type="file" name="image" id="image" class="form-control">
                            <img src="img/<?= $catedetail['image'] ?>" height="300px" width="300px" alt="">
                            <input type="hidden" name="image_old" value="<?= $catedetail['image'] ?>">
                            <input type="hidden" name="idcate" value="<?= $catedetail['id'] ?>">
                            <input type="submit" value="Cập nhật danh mục" onclick="" name="editCate">
                        </form>
                    </div>

                </div>
            </div>