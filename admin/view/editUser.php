<?php require_once('link.php') ?>

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Cập nhật tài khoản</h4>

                    </div>
                    <div class="content table-responsive table-full-width">
                        <form action="indexAdmin.php?page=edituser" method="post" enctype="multipart/form-data">
                            <?php $user_detail = $data['user_detail'];
                                print_r($user_detail);?>
                            <label for="">Họ và Tên</label>
                            <input type="input" name="ten" class="form-control" value="<?=$user_detail['ten']?>">
                            <label for="">SĐT</label>
                            <input type="input" name="phone" class="form-control" value="<?=$user_detail['phone']?>">
                            <label for="">Vai trò</label>
                            <select name="id_role" class="form-control">
                                <?php
                                $listrole = $data['ds_role'];
                                
                                $kq = '';
                                foreach ($listrole as $item) {

                                    print_r($listrole);
                                    extract($item);
                                    if ($id == $user_detail['id_role']) {
                                        $kq .= '<option value="' . $id . '" selected>' . $type . '</option>';
                                    } else {
                                        $kq .= '<option value="' . $id . '">' . $type . '</option>';
                                    }
                                }
                                echo $kq;
                                ?>
                            </select>
                            <input type="hidden" name="iduser" value="<?=$user_detail['id']?>">
                            <input type="submit" value="Cập nhật tài khoản" onclick="" name="editUser">
                        </form>
                        
                    </div>
                    
                </div>
            </div>

        </div>


    </div>
</div>