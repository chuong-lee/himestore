<?php require_once('link.php');
?>

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Danh mục các sản phẩm</h4>
                        <div>
                            <a href="indexAdmin.php?page=adminAddPro"><button type="button" class="btn btn-primary">
                                    Thêm sản phẩm
                                </button></a>
                        </div>
                    </div>
                    <div class="content table-responsive table-full-width">
                        <table class="table table-hover table-striped">
                            <thead>
                                <th>STT</th>
                                <th>Tên</th>
                                <th>Giá</th>
                                <th>Hình ảnh</th>
                                <th>Số lượng</th>
                                <th>Lược mua</th>
                                <th>Giảm giá</th>
                                <th>Mô tả</th>
                                <th>Chức năng</th>

                            </thead>
                            <tbody>
                                <?php
                                $counter = 1; ?>
                                <?php 
                                foreach ($products as $product){
                                    extract($product);
                                    echo '<tr>
                                        <td>'.$counter++.'</td>
                                        <td class="name">'.$name.'</td>
                                        <td class="price">'.$gia.' </td>
                                        <td><a href="#"><img style="width: 200px; height: 300px;" src="img/'.$image.'" alt="'.$name.'"></a></td>
                                        <td class="price">'.$soluong.' </td>
                                        <td class="price">'.$luot_mua.' </td>
                                        <td class="price">'.$sale.' </td>
                                        <td class="price">'.$mota.' </td>
                                        <td><button type="button" class="btn btn-success"><a href="indexAdmin.php?page=editpro&id='.$id.'">Sửa</a></button> </td>
                                        <td><button type="button" class="btn btn-danger"><a href="indexAdmin.php?page=delpro&id='.$id.'">Xóa</a></button></td>
                                    </tr>';
                                } ?>
                                    
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