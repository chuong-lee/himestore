<?php require_once('link.php') ?>

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Tạo tài khoản</h4>

                        <p class="category"></p>
                    </div>
                    <div class="content table-responsive table-full-width">
                        <form action="indexAdmin.php?page=adminAddUser" method="post" enctype="multipart/form-data">
                            <label for="">Họ và Tên</label>
                            <input type="input" name="ten"  class="form-control">
                            <label for="">SĐT</label>
                            <input type="input" name="phone"  class="form-control">
                            <label for="">Email</label>
                            <input type="email" name="email"  class="form-control">
                            <label for="">Password</label>
                            <input type="password" name="password"  class="form-control">
                            <input type="submit" value="Tạo tài khoản" onclick="" name="addUser">
                        </form>

                    </div>

                </div>
            </div>

        </div>


    </div>
</div>