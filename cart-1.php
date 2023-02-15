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
                            <h1>Thanh toán</h1>
                        </div>
                        <div class="form-content f-cart f-payment">
                            <div class="cart-inner">
                                <div class="cart-left">
                                    <form action="">
                                        <div class="user-info">
                                            <div class="title">
                                                <h2>Thông tin chung</h2>
                                                <a href="#">
                                                    <img src="dist/images/change.svg" alt="change">
                                                    <span>Đổi thông tin nhận hàng</span></a>
                                            </div>
                                            <div class="des-info pay-info">
                                                <div class="no-address">
                                                    <p>Bạn chưa có địa chỉ nhận hàng mặc định!</p>
                                                    <a href="#">Thêm địa chỉ mới</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pay-content">
                                            <div class="pay-item">
                                                <div class="pay-item__content">
                                                    <h2>Thông tin vận chuyển</h2>
                                                    <div class="list-ppvc">
                                                        <div class="pp-vchuyen">
                                                            <div class="content">
                                                                <input type="radio" name="express" id="express">
                                                                <label for="express">
                                                                    <strong>Express delivery</strong>
                                                                    <span>3-4 ngày</span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="pp-vchuyen">
                                                            <div class="content">
                                                                <input type="radio" name="express1" id="express1">
                                                                <label for="express1">
                                                                    <strong>Bưu điện</strong>
                                                                    <span>10-15 ngày</span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="pp-vchuyen">
                                                            <div class="content">
                                                                <input type="radio" name="express2" id="express2">
                                                                <label for="express2">
                                                                    <strong>Giao hàng tiết kiệm</strong>
                                                                    <span>5-7 ngày</span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="pp-payment">
                                                <h2>Phương thức thanh toán</h2>
                                                <div class="pp-ttoan">
                                                    <div class="item-tt">
                                                        <a href="#">
                                                            <div class="tt-content">
                                                                <figure><img src="dist/images/pay-1.svg" alt="pay">
                                                                </figure>
                                                                <span>Thanh toán với thẻ</span>
                                                            </div>
                                                            <img src="dist/images/card.png" alt="cards" class="cards">
                                                        </a>
                                                    </div>
                                                    <div class="item-tt">
                                                        <a href="#">
                                                            <div class="tt-content">
                                                                <figure><img src="dist/images/pay-2.svg" alt="pay-2">
                                                                </figure>
                                                                <span>Thanh toán khi nhận hàng</span>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="item-tt">
                                                        <a href="#">
                                                            <div class="tt-content">
                                                                <figure><img src="dist/images/pay-3.svg" alt="pay-3">
                                                                </figure>
                                                                <span>Thanh toán bằng chuyển khoản sau</span>
                                                            </div>
                                                        </a>
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
<div class="popup-adress">
    <div class="popup-adress__inner">
        <div class="popup">
            <h2>Thêm mới địa chỉ</h2>
            <form action="">
                <div class="cl-6">
                    <span>
                        <label for="">Họ tên<span>*</span></label>
                        <input type="text" name="" id="" value="Nguyễn Anh">
                    </span>
                    <span>
                        <label for="">Số điện thoại<span>*</span></label>
                        <input type="text" name="" id="" value="096378945">
                    </span>
                </div>
                <span class="cl-12">
                    <label for="">Địa chỉ cụ thể<span>*</span></label>
                    <input type="text" name="" id="" value="15 Tố Hữu, Thanh Xuân, Hà Nội">
                </span>
                <div class="cl-4">
                    <span>
                        <label for="">Thành phố/Tỉnh<span>*</span></label>
                        <select name="" id="">
                            <option value="1">Hà Nội</option>
                            <option value="1">Hà Nội</option>
                            <option value="1">Hà Nội</option>
                            <option value="1">Hà Nội</option>
                        </select>
                    </span>
                    <span>
                        <label for="">Quận/Huyên<span>*</span></label>
                        <select name="" id="">
                            <option value="1">Thanh Xuân</option>
                            <option value="1">Hà Nội</option>
                            <option value="1">Hà Nội</option>
                            <option value="1">Hà Nội</option>
                        </select>
                    </span>
                    <span>
                        <label for="">Phường/Xã<span>*</span></label>
                        <select name="" id="">
                            <option value="1">Tố Hữu</option>
                            <option value="1">Hà Nội</option>
                            <option value="1">Hà Nội</option>
                            <option value="1">Hà Nội</option>
                        </select>
                    </span>
                </div>
                <span class="check">
                    <input type="checkbox" name="" id="">
                    <label for="">Giao hàng hành chính</label>
                </span>
                <span class="bnt-submit">
                    <button>Lưu</button>
                    <button>Huỷ</button>
                </span>
            </form>
        </div>
    </div>
</div>
<div class="adress-overlay"></div>
<?php include "footer.php"; ?>