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
                        <div class="result-cart">
                            <div class="text">
                                <h1>Đặt hàng thành công</h1>
                                <p>Đơn hàng của bạn đã được đặt thành công, quá trình giao hàng sẽ được cập nhật liên
                                    tục trên hệ thống, bạn vui lòng kiểm tra thường xuyên để nhận hàng sớm nhất có thể
                                </p>
                                <div class="bnt-cart">
                                    <button><img src="dist/images/re-cart-1.svg" alt="re-cart">Quay lại mua hàng</button>
                                    <button><img src="dist/images/re-cart-2.svg" alt="re-cart-2">Quản lý đơn hàng</button>
                                </div>
                            </div>
                            <div class="img-cart">
                                <figure>
                                    <img src="dist/images/cart-right.png" alt="cart-right">
                                </figure>
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