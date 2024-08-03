<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Thêm danh mục</h4>
                        <p class="category"></p>
                    </div>
                    <div class="content table-responsive table-full-width">
                        <form action="indexAdmin.php?page=adCategory" method="post" enctype="multipart/form-data">
                            <label for="">Tên danh mục</label>
                            <input type="text" name="tenDanhMuc"class="form-control" required>
                            <label for="">Hình ảnh</label>
                            <input type="file" name="image" class="form-control">
                            <input type="submit" value="Thêm danh mục" onclick="" name="addcate">
                        </form>
                    </div>

                </div>
            </div>