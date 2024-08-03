<?php require_once('link.php');
?>

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Danh sách người dùng</h4>
                        <div>
                            <a href="indexAdmin.php?page=adminAddUser"><button type="button" class="btn btn-primary">
                                    Thêm tài khoản người dùng
                                </button></a>
                        </div>
                    </div>
                    <div class="content table-responsive table-full-width">
                        <table class="table table-hover table-striped">
                            <thead>
                                <th>STT</th>
                                <th>Tên</th>
                                <th>Email</th>
                                <th>SĐT</th>
                                <th>Vai trò</th>
                                <th>Chức năng</th>
                            </thead>
                            <tbody>
                                <?php $count = 1; ?>
                                <?php 
                                foreach ($listUser as $user) {
                                    // print_r($listUser);
                                    extract($user);
                                    echo'  <tr>
                                        <td>'.$count++.'</td>
                                        <td>'.$ten.'</td>
                                        <td>'.$email.'</td>
                                        <td>'.$phone.'</td>
                                        <td>'.$type.'</td>
                                        <td><a href="indexAdmin.php?page=edituser&id='.$id.'">Sửa</a></td>
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