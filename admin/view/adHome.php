<?php require_once('link.php');
$conn = new mysqli('localhost', 'root', '', 'chuong_store');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// đoạn code lấy dữ liệu trong bảng danh mục
$listDanhMuc = [];
$sql = "select * from danhmuc";
$result = $conn->query($sql);
while ($row = $result->fetch_assoc()) {
    $listDanhMuc[] = $row;
}
?>

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Danh mục các sản phẩm</h4>
                        <div>
                            <a href="/addpro.html"><button type="button" class="btn btn-primary">
                                    Thêm sản phẩm
                                </button></a>
                        </div>
                    </div>
                    <div class="content table-responsive table-full-width">
                        <table class="table table-hover table-striped">
                            <thead>
                                <th>STT</th>
                                <th>Tên</th>
                                <th>Hình ảnh</th>
                                <th>Chức năng</th>

                            </thead>
                            <tbody>
                                <?php
                                $counter = 1; ?>
                                <?php foreach ($listDanhMuc as $danhmuc) : ?>
                                    <tr>
                                        <td><?= $counter++ ?></td>
                                        <td><?= $danhmuc['tenDanhMuc'] ?></td>
                                        <td><a href="product.php"><img style="width: 200px; height: 300px;" class="anh-san-pham" title="<?= $danhmuc['tenDanhMuc'] ?>" src="img/<?= $danhmuc['image'] . '.webp' ?>" alt="<?= $danhmuc['tenDanhMuc'] ?>"></a></td>
                                        <td><a href="">Sửa</a> | <a href="">Xóa</a></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>

                    </div>
                    <ul class="pagination-list">
                        <li class="pagination-item">
                            <a href="" class="pagination-link">
                                <i class="fa-solid fa-chevron-left"></i>
                            </a>
                        </li>
                        <li class="pagination-item">
                            <a href="" class="pagination-link">1</a>
                        </li>
                        <li class="pagination-item">
                            <a href="" class="pagination-link">2</a>
                        </li>
                        <li class="pagination-item">
                            <a href="" class="pagination-link">3</a>
                        </li>
                        <li class="pagination-item">
                            <a href="" class="pagination-link">...</a>
                        </li>
                        <li class="pagination-item">
                            <a href="" class="pagination-link">10</a>
                        </li>
                        <li class="pagination-item">
                            <a href="" class="pagination-link">
                                <i class="fa-solid fa-chevron-right"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>