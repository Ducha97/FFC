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
                    <div class="row">
                        <div class="col-md-6">
                            <div class="content">
                                <div class="title">
                                    <h1>Yêu thích</h1>
                                </div>
                                <div class="form-content">
                                    <form action="">
                                        <div class="form-group">
                                            <h2>Thông tin đăng nhập</h2>
                                            <div class="col-info">
                                                <span>
                                                    <label for="tel">Số điện thoại</label>
                                                    <input type="text" name="tel" id="tel" placeholder="09872306410">
                                                </span>
                                                <span>
                                                    <label for="email">Email</label>
                                                    <input type="text" name="email" id="email"
                                                        placeholder="Acountlogin@gmail.com">
                                                </span>
                                            </div>
                                            <span>
                                                <label for="pass">Mật khẩu</label>
                                                <input type="password" name="pass" id="pass" placeholder="**********">
                                            </span>
                                            <button class="re__pass">Đổi mật khẩu</button>
                                        </div>
                                        <div class="form-group">
                                            <h2>Thông tin cá nhân</h2>
                                            <div class="col-info">
                                                <span>
                                                    <label for="name">Họ và tên <span>*</span></label>
                                                    <input type="text" name="name" id="name" value="Nguyễn Anh">
                                                </span>
                                                <span>
                                                    <label for="birthday">Ngày sinh</label>
                                                    <input type="text" name="birthday" id="birthday" value="20/04/1992">
                                                </span>
                                            </div>
                                            <span>
                                                <label for="male">Giới tính</label>
                                                <select name="male" id="male">
                                                    <option value="nam">Nam</option>
                                                    <option value="nu">Nữ</option>
                                                </select>
                                            </span>
                                            <button>Lưu thông tin</button>
                                        </div>
                                        <div class="form-group">
                                            <h2>Địa chỉ nhận hàng mặc định</h2>
                                            <div class="col-info">
                                                <span>
                                                    <label for="rename">Họ và tên <span>*</span></label>
                                                    <input type="text" name="rename" id="rename" value="Nguyễn Anh">
                                                </span>
                                                <span>
                                                    <label for="retel">Ngày sinh</label>
                                                    <input type="text" name="retel" id="retel" value="0393545958">
                                                </span>
                                            </div>
                                            <span class="cm-100">
                                                <label for="adress">Địa chỉ nhận hàng</label>
                                                <input type="text" name="adress" id="adress"
                                                    value="Số 15 Tố Hữu, Nam Từ Liêm, Hà Nội">
                                            </span>
                                            <div class="col-select">
                                                <span>
                                                    <label for="city">Tỉnh/Thành phố<span>*</span></label>
                                                    <select name="city" id="city">
                                                        <option value="1">Hà Nội</option>
                                                        <option value="2">Thành phố Hồ Chí Minh</option>
                                                    </select>
                                                </span>
                                                <span>
                                                    <label for="cicty-1">Quận/Huyện<span>*</span></label>
                                                    <select name="city-1" id="city-1">
                                                        <option value="1">Nam Từ Liêm</option>
                                                        <option value="2">Bắc Từ Liêm</option>
                                                    </select>
                                                </span>
                                                <span>
                                                    <label for="city-2">Quận/Huyện<span>*</span></label>
                                                    <select name="city-2" id="city-2">
                                                        <option value="1">Tố Hữu</option>
                                                        <option value="2">Vạn Phúc</option>
                                                    </select>
                                                </span>
                                            </div>
                                            <span class="checkform">
                                                <input type="checkbox" name="ggh" id="ggh">
                                                <label for="ggh">Giao giờ hành chính</label>
                                            </span>
                                            <button class="main-submit">Lưu địa chỉ</button>
                                        </div>
                                    </form>
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