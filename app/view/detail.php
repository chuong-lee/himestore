<?php

?>

<div class="wrapper-container">
        <div class="row">
            <div class="custom-div">
                <div class="row">
                    <div class="column anh-sp">
                        <div class="san-pham">
                            <div class="ten">
                                <h1><?= htmlspecialchars($product['ten_sanpham']) ?></h1>
                            </div>
                            <img src="<?= $product['hinh_anh'] ?>" alt="Product Image">
                        </div>
                        <div class="row">
                            <!-- Các sản phẩm liên quan hoặc hình ảnh chi tiết khác -->
                            <div class="san-pham">
                                <div class="ten">
                                    <h1><?= htmlspecialchars($product['ten_sanpham']) ?></h1>
                                </div>
                                <img src="<?= htmlspecialchars($product['hinh_anh']) ?>" alt="Product Image">
                            </div>
                            <!-- Bạn có thể thêm các sản phẩm khác tương tự ở đây -->
                        </div>
                    </div>
                </div>
            </div>

            <div class="column thong_tin_sp">
                <div class="product-wrapper">
                    <div class="product-title">
                        <h1><?= htmlspecialchars($product['ten_sanpham']) ?></h1>
                        <p>SKU: <?= htmlspecialchars($product['sku']) ?></p>
                    </div>

                    <div class="column gia">
                        <span><?= htmlspecialchars($product['gia']) ?> VND</span>
                        <del><?= htmlspecialchars($product['gia_goc']) ?> VND</del> 
                        <span><?= htmlspecialchars($product['giam_gia']) ?>%</span>
                    </div>
                </div>
                <div class="info-product">
                    <div class="product-title">
                        <div class="header">Kích thước</div>
                        <div class="select-swap">
                            <!-- Hiển thị kích thước -->
                            <?php foreach (explode(',', $product['kich_thuoc']) as $size): ?>
                                <label for="" class="sd">
                                    <span><?= htmlspecialchars($size) ?></span>
                                </label>
                            <?php endforeach; ?>
                        </div>
                    </div>

                    <div class="product-color">
                        <div class="header">Màu sắc</div>
                        <div class="color-swap">
                            <!-- Hiển thị màu sắc -->
                            <?php foreach (explode(',', $product['mau_sac']) as $color): ?>
                                <input type="radio" id="<?= htmlspecialchars($color) ?>" name="color" value="<?= htmlspecialchars($color) ?>" <?= $color == 'black' ? 'checked' : '' ?>>
                                <label for="<?= htmlspecialchars($color) ?>" class="choose-color">
                                    <span><?= ucfirst(htmlspecialchars($color)) ?></span>
                                </label>
                            <?php endforeach; ?>
                        </div>
                    </div>

                    <div class="huong-dan">
                        <a href="#" class="btn-choose-size">
                            <label class="size-list">
                                <span>Hướng dẫn chọn size</span>
                            </label>
                        </a>
                    </div>

                    <div class="huong-dan">
                        <a href="./gioHang.html" class="btn-choose-size">
                            <label class="size-list">
                                <span>Thêm giỏ hàng</span>
                            </label>
                        </a>
                        <div>
                            <p>
                                <b>Chất liệu:</b> <?= htmlspecialchars($product['chat_lieu']) ?><br>
                                <b>Kiểu dáng:</b> <?= htmlspecialchars($product['kieu_dang']) ?><br>
                                <b>Sản phẩm kết hợp:</b> <?= htmlspecialchars($product['san_pham_ket_hop']) ?><br>
                                <b>Thông tin người mẫu:</b> <?= htmlspecialchars($product['thong_tin_nguoi_mau']) ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="gioi_y_san_pham">
        <h4>Sản phẩm gợi ý</h4>
        <div class="block-wrapper">
            <div class="row">
                <!-- Hiển thị sản phẩm gợi ý -->
                <div class="column">
                    <div class="san-pham">
                        <div class="ten">
                            <!-- Tên sản phẩm gợi ý -->
                        </div>
                        <img src="../asset/css/img/sanPhamhot2.webp" alt="#">
                        <div class="gia">
                            <p>Áo khoác da</p>
                            600.000 VND
                        </div>
                    </div>
                </div>
                <!-- Bạn có thể thêm các sản phẩm gợi ý khác tương tự ở đây -->
            </div>
        </div>
    </div>