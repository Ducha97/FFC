<?php include "header.php"; ?>
<section class="ffc-dashboard">
    <div class="main-nav">
        <div class="main-nav__inner">
            <div class="dash-logo">
                <a href="#">
                    <figure><img src="dist/images/dash-logo.png" alt="dash-logo"></figure>
                </a>
            </div>
            <div class="list-option">
                <div class="link-level-0">
                    <div class="main-link">
                        <a href="#">
                            <span><img src="dist/images/i-1.svg" alt="i-1"></span>
                            <span>Tài khoản</span>
                        </a>
                    </div>
                </div>
                <div class="link-level-0">
                    <div class="main-link">
                        <a href="#">
                            <span><img src="dist/images/i-2.svg" alt="i-2"></span>
                            <span>Giỏ hàng</span>
                        </a>
                    </div>
                </div>
                <div class="link-level-0">
                    <div class="main-link">
                        <a href="#">
                            <span><img src="dist/images/i-3.svg" alt="i-3"></span>
                            <span>Quản lý đơn hàng</span>
                        </a>
                        <i class="fal fa-angle-right"></i>
                    </div>
                </div>
                <div class="link-level-0">
                    <div class="main-link">
                        <a href="#">
                            <span><img src="dist/images/i-4.svg" alt="i-4"></span>
                            <span>Yêu thích</span>
                        </a>
                    </div>
                </div>
                <div class="link-level-0">
                    <div class="main-link">
                        <a href="#">
                            <span><img src="dist/images/i-5.svg" alt="i-5"></span>
                            <span>Mã giảm giá</span>
                        </a>
                    </div>
                </div>
                <div class="link-level-0">
                    <div class="main-link">
                        <a href="#">
                            <span><img src="dist/images/i-6.svg" alt="i-6"></span>
                            <span>giới thiệu bạn bè</span>
                        </a>
                    </div>
                </div>
                <div class="link-level-0">
                    <div class="main-link">
                        <a href="#">
                            <span><img src="dist/images/i-7.svg" alt="i-7"></span>
                            <span>Thông báo</span>
                        </a>
                    </div>
                </div>
                <div class="link-level-0">
                    <div class="main-link">
                        <a href="#">
                            <span><img src="dist/images/i-8.svg" alt="i-8"></span>
                            <span>Đăng xuất</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="main-content">
        <div class="main-content__inner">
            <div class="dash-header">
                <div class="container dash-header__inner">
                    <div class="dash-search">
                        <div class="dash-search__input">
                            <input type="text" placeholder="Tìm kiếm sản phẩm">
                            <button><img src="dist/images/search.svg" alt="search"></button>
                        </div>
                    </div>
                    <div class="dash-button">
                        <div class="dash-button__inner">
                            <button><img src="dist/images/dflash.svg" alt="dflash">Săn deal</button>
                        </div>
                        <div class="cart">
                            <div class="cart__item">
                                <a href="#!">
                                    <img src="dist/images/dcart.svg" alt="cart">
                                    <div class="cart__label">9</div>
                                </a>
                            </div>
                            <div class="cart__item">
                                <a href="#!">
                                    <img src="dist/images/dcart-2.svg" alt="cart">
                                    <div class="cart__label">9</div>
                                </a>
                            </div>
                            <div class="user">
                                <div class="user__item">
                                    <div class="user__img"><img src="dist/images/user.svg" alt="user"></div>
                                    <div class="user__label">
                                        <span>Xin chào!</span>
                                        <h4>Nguyễn Anh</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main-content__content">
                <div class="main-content__inner">
                    <div class="content">
                        <div class="title">
                            <h1>Giỏ hàng</h1>
                        </div>
                        <div class="form-content f-cart">
                            <div class="cart-inner">
                                <div class="cart-left">
                                    <form action="">
                                        <div class="user-info">
                                            <div class="title">
                                                <h2>Thông tin chung</h2>
                                                <a href="#"><img src="dist/images/change.svg" alt="change"><span>Đổi
                                                        thông tin
                                                        nhận hàng</span></a>
                                            </div>
                                            <div class="des-info">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="i-info">
                                                            <span>Họ và tên:</span>
                                                            <h4>Nguyễn Hoàng Long</h4>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="i-info">
                                                            <span>Điện thoại</span>
                                                            <h4>035 654 8547</h4>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="i-info">
                                                            <span>Đia chỉ nhận hàng</span>
                                                            <h4>Số 15 Tố Hữu, Nam Từ Liêm, Hà Nội</h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="table-cart">
                                            <div class="table-inner">
                                                <div class="table-content">
                                                    <div class="table-label">
                                                        <div class="del">
                                                            <div class="del-check">
                                                                <input type="checkbox" name="check-all" id="check-all">
                                                                <label for="check-all">Tất cả sản phẩm</label>
                                                            </div>
                                                        </div>
                                                        <div class="more-col">
                                                            <div class="col-title quanlity">
                                                                <h4>Số lượng</h4>
                                                            </div>
                                                            <div class="col-title price">
                                                                <h4>Số tiền</h4>
                                                            </div>
                                                            <div class="col-title remove">
                                                                <h4>Thao tác</h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="table-main">
                                                        <div class="li-item">
                                                            <div class="col-first">
                                                                <div class="del">
                                                                    <input type="checkbox" name="check">
                                                                </div>
                                                                <div class="thumbnail">
                                                                    <div class="thumb">
                                                                        <figure><img src="dist/images/thumb-1.png"
                                                                                alt="thumb-1"></figure>
                                                                        <a href="#">Combo dầu gội 640 gr và dầu xả 620
                                                                            gr
                                                                            Treseme.... </a>
                                                                    </div>
                                                                </div>
                                                                <div class="type">
                                                                    <div class="type-button">
                                                                        <span>Phân loại hàng</span>
                                                                        <i class="fas fa-caret-down"></i>
                                                                    </div>
                                                                    <div class="result-type">
                                                                        <span>Thể loại:</span>
                                                                        <strong>15 ml</strong>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-main">
                                                                <div class="quanlity">
                                                                    <button class="minus"></button>
                                                                    <input type="number" name="qty" id="qty" min="1"
                                                                        max="100" value="1">
                                                                    <button class="plus"></button>
                                                                </div>
                                                                <div class="price">
                                                                    <span>250.000 <strong>đ</strong></span>
                                                                </div>
                                                                <div class="remove">
                                                                    <a href="#">Xoá</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="li-item">
                                                            <div class="col-first">
                                                                <div class="del">
                                                                    <input type="checkbox" name="check">
                                                                </div>
                                                                <div class="thumbnail">
                                                                    <div class="thumb">
                                                                        <figure><img src="dist/images/thumb-1.png"
                                                                                alt="thumb-1"></figure>
                                                                        <a href="#">Combo dầu gội 640 gr và dầu xả 620
                                                                            gr
                                                                            Treseme.... </a>
                                                                    </div>
                                                                </div>
                                                                <div class="type">
                                                                    <div class="type-button">
                                                                        <span>Phân loại hàng</span>
                                                                        <i class="fas fa-caret-down"></i>
                                                                    </div>
                                                                    <div class="result-type">
                                                                        <span>Thể loại:</span>
                                                                        <strong>15 ml</strong>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-main">
                                                                <div class="quanlity">
                                                                    <button class="minus"></button>
                                                                    <input type="number" name="qty" id="qty" min="1"
                                                                        max="100" value="1">
                                                                    <button class="plus"></button>
                                                                </div>
                                                                <div class="price">
                                                                    <span>250.000 <strong>đ</strong></span>
                                                                </div>
                                                                <div class="remove">
                                                                    <a href="#">Xoá</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="li-item">
                                                            <div class="col-first">
                                                                <div class="del">
                                                                    <input type="checkbox" name="check">
                                                                </div>
                                                                <div class="thumbnail">
                                                                    <div class="thumb">
                                                                        <figure><img src="dist/images/thumb-1.png"
                                                                                alt="thumb-1"></figure>
                                                                        <a href="#">Combo dầu gội 640 gr và dầu xả 620
                                                                            gr
                                                                            Treseme.... </a>
                                                                    </div>
                                                                </div>
                                                                <div class="type">
                                                                    <div class="type-button">
                                                                        <span>Phân loại hàng</span>
                                                                        <i class="fas fa-caret-down"></i>
                                                                    </div>
                                                                    <div class="result-type">
                                                                        <span>Thể loại:</span>
                                                                        <strong>15 ml</strong>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-main">
                                                                <div class="quanlity">
                                                                    <button class="minus"></button>
                                                                    <input type="number" name="qty" id="qty" min="1"
                                                                        max="100" value="1">
                                                                    <button class="plus"></button>
                                                                </div>
                                                                <div class="price">
                                                                    <span>250.000 <strong>đ</strong></span>
                                                                </div>
                                                                <div class="remove">
                                                                    <a href="#">Xoá</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="li-item">
                                                            <div class="col-first">
                                                                <div class="del">
                                                                    <input type="checkbox" name="check">
                                                                </div>
                                                                <div class="thumbnail">
                                                                    <div class="thumb">
                                                                        <figure><img src="dist/images/thumb-1.png"
                                                                                alt="thumb-1"></figure>
                                                                        <a href="#">Combo dầu gội 640 gr và dầu xả 620
                                                                            gr
                                                                            Treseme.... </a>
                                                                    </div>
                                                                </div>
                                                                <div class="type">
                                                                    <div class="type-button">
                                                                        <span>Phân loại hàng</span>
                                                                        <i class="fas fa-caret-down"></i>
                                                                    </div>
                                                                    <div class="result-type">
                                                                        <span>Thể loại:</span>
                                                                        <strong>15 ml</strong>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-main">
                                                                <div class="quanlity">
                                                                    <button class="minus"></button>
                                                                    <input type="number" name="qty" id="qty" min="1"
                                                                        max="100" value="1">
                                                                    <button class="plus"></button>
                                                                </div>
                                                                <div class="price">
                                                                    <span>250.000 <strong>đ</strong></span>
                                                                </div>
                                                                <div class="remove">
                                                                    <a href="#">Xoá</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="cart-right">
                                    <div class="cart-right__inner">
                                        <div class="table-right">
                                            <h2>Hoá đơn</h2>
                                            <div class="form-right">
                                                <div class="header-item">
                                                    <ul>
                                                        <li>
                                                            <span>Tạm tính<p>(Đã bao gồm thuế VAT)</p></span>
                                                            <span>1.000.000<strong>Đ</strong></span>
                                                        </li>
                                                        <li>
                                                            <span>Phí vận chuyển</span>
                                                            <span>20.000<strong>Đ</strong></span>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="body-item">
                                                    <div class="voucher">
                                                        <input type="text" name="voucher" id="">
                                                        <button>Áp dụng</button>
                                                    </div>
                                                </div>
                                                <div class="footer-item">
                                                    <div class="total">
                                                        <span>Tổng tiền:</span>
                                                        <span>1.000.000 <strong>Đ</strong></span>
                                                    </div>
                                                    <div class="check">
                                                        <input type="checkbox" name="yes" id="yes">
                                                        <label for="yes">Đồng ý với <a href="#">điều khoản & chính
                                                                sách</a> của FangFangChoice</label>
                                                    </div>
                                                    <button>Đặt hàng</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include "footer.php"; ?>