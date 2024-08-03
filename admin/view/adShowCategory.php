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
                            <a href="indexAdmin.php?page=adCategory"><button type="button" class="btn btn-primary">
                                    Thêm danh mục
                                </button></a>
                        </div>
                    </div>
                    <div class="content table-responsive table-full-width">
                        <table class="table table-hover table-striped">
                            <thead>
                                <th>STT</th>
                                <th>Tên danh mục</th>
                                <th>Hình</th>

                            </thead>
                            <tbody>
                                <?php
                                $counter = 1; ?>
                                <?php 
                                $category = $data['category'];
                                foreach ($category as $category){
                                    extract($category);
                                    echo '<tr>
                                        <td>'.$counter++.'</td>
                                        <td class="name">'.$tenDanhMuc.'</td>
                                        <td><a href="#"><img style="width: 200px; height: 300px;" src="img/'.$image.'" alt="'.$tenDanhMuc.'"></a></td>
                                        <td><button type="button" class="btn btn-success"><a href="indexAdmin.php?page=editcate&id='.$id.'">Sửa</a></button> </td>
                                        <td><button type="button" class="btn btn-danger"><a href="indexAdmin.php?page=delcate&id='.$id.'">Xóa</a></button></td>
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