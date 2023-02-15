<?php include "header.php"; ?>
<section class="ffc-link">
    <div class="container">
        <div class="ffc-link__page">
            <a href="#"><img src="dist/images/home-link.svg" alt="home-link">Trang chủ</a>
            <span>|</span>
            <a href="#">Danh mục sản phẩm</a>
            <span>|</span>
            <a href="#" class="curent-page">Giới thiệu</a>
        </div>
    </div>
</section>
<section class="ffc-list__product">
    <div class="container">
        <div class="ffc-list-product__content">
            <div class="sort-bar">
                <span>Sắp xếp theo:</span>
                <div class="select-sort">
                    <select>
                        <option value="" selected>Mới nhất</option>
                        <option value="1">Cũ nhất</option>
                        <option value="2">Mua nhiều nhất</option>
                    </select>
                </div>
                <div class="select-sort">
                    <select>
                        <option value="" selected>Giá từ thấp đến cao</option>
                        <option value="1">Giá từ cao đến thấp</option>
                    </select>
                </div>
            </div>
            <div class="list-content">
                <div class="row">
                    <div class="col-md-3">
                        <div class="nav-left">
                            <div class="item">
                                <div class="title">
                                    <h2>Đồ điện tử</h2>
                                    <figure><img src="dist/images/ipro-1.svg" alt=""></figure>
                                </div>
                                <div class="list-category">
                                    <ul>
                                        <li><a href="#">Máy tính</a></li>
                                        <li><a href="#">Điện thoại</a></li>
                                        <li><a href="#">Ti vi</a></li>
                                        <li><a href="#">Tủ lạnh</a></li>
                                        <li><a href="#">Điền hoà</a></li>
                                        <li><a href="#">Máy giặt</a></li>
                                        <li><a href="#">Máy sấy</a></li>
                                        <li><a href="#">Nồi cơm điện</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="item">
                                <div class="title">
                                    <h2>Lọc theo</h2>
                                    <figure><img src="dist/images/ipro-2.svg" alt=""></figure>
                                </div>
                                <div class="sort-price">
                                    <form action="">
                                        <span>Giá sản phẩm</span>
                                        <div class="input-price">
                                            <input type="text" value="0">
                                            <input type="text" value="99.000.000">
                                        </div>
                                        <button>Lọc theo giá</button>
                                    </form>
                                </div>
                                <div class="list-brand">
                                    <h2>Thương hiệu</h2>
                                    <div class="brand">
                                        <form action="">
                                            <div class="check-list">
                                                <input type="checkbox" id="1" name="1" value="1">
                                                <label for="1">Sony</label>
                                            </div>
                                            <div class="check-list">
                                                <input type="checkbox" id="2" name="2" value="2">
                                                <label for="2">Lenovo</label>
                                            </div>
                                            <div class="check-list">
                                                <input type="checkbox" id="3" name="3" value="3">
                                                <label for="3">Jonson & Handson</label>
                                            </div>
                                            <div class="check-list">
                                                <input type="checkbox" id="4" name="4" value="4">
                                                <label for="4">Apple</label>
                                            </div>
                                            <div class="check-list">
                                                <input type="checkbox" id="5" name="5" value="5">
                                                <label for="5">Google</label>
                                            </div>
                                            <div class="check-list">
                                                <input type="checkbox" id="6" name="6" value="6">
                                                <label for="6">Uniliver</label>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="list-product">
                            <div class="row">
                                <div class="col-6 col-sm-4 col-xl-3 p-10">
                                    <div class="products">
                                        <div class="product">
                                            <div class="product__img">
                                                <a href="#" class="img">
                                                    <span class="label">25% OFF</span>
                                                    <figure><img src="dist/images/pro-1.png" alt="pro-1"></figure>
                                                </a>
                                            </div>
                                            <div class="product__content">
                                                <div class="product__content__title">
                                                    <h3><a href="#">Đồng hồ thông minh dành cho nam Sản xuất tại Nhật
                                                            Bản</a>
                                                    </h3>
                                                </div>
                                                <div class="product__content__price">
                                                    <span class="price-old">539.380 đ</span>
                                                    <span class="price-sale">600.000 đ</span>
                                                </div>
                                                <div class="product__content__meta-info">
                                                    <a href="#">Mua ngay</a>
                                                    <div class="bnt-info">
                                                        <button>
                                                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M5.13901 1.16663L3.02734 3.28413"
                                                                    stroke="#292B2E" stroke-width="1.2"
                                                                    stroke-miterlimit="10" stroke-linecap="round"
                                                                    stroke-linejoin="round"></path>
                                                                <path d="M8.86133 1.16663L10.973 3.28413"
                                                                    stroke="#292B2E" stroke-width="1.2"
                                                                    stroke-miterlimit="10" stroke-linecap="round"
                                                                    stroke-linejoin="round"></path>
                                                                <path
                                                                    d="M1.16699 4.57914C1.16699 3.49998 1.74449 3.41248 2.46199 3.41248H11.5387C12.2562 3.41248 12.8337 3.49998 12.8337 4.57914C12.8337 5.83331 12.2562 5.74581 11.5387 5.74581H2.46199C1.74449 5.74581 1.16699 5.83331 1.16699 4.57914Z"
                                                                    stroke="#292B2E" stroke-width="1.2"></path>
                                                                <path d="M5.69336 8.16663V10.2375" stroke="#292B2E"
                                                                    stroke-width="1.2" stroke-linecap="round"></path>
                                                                <path d="M8.37695 8.16663V10.2375" stroke="#292B2E"
                                                                    stroke-width="1.2" stroke-linecap="round"></path>
                                                                <path
                                                                    d="M2.04199 5.83337L2.86449 10.8734C3.05116 12.005 3.50033 12.8334 5.16866 12.8334H8.68616C10.5003 12.8334 10.7687 12.04 10.9787 10.9434L11.9587 5.83337"
                                                                    stroke="#292B2E" stroke-width="1.2"
                                                                    stroke-linecap="round">
                                                                </path>
                                                            </svg>
                                                        </button>
                                                        <button>
                                                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                                                </div>
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M7.36199 12.1392C7.16366 12.2092 6.83699 12.2092 6.63866 12.1392C4.94699 11.5617 1.16699 9.15252 1.16699 5.06918C1.16699 3.26668 2.61949 1.80835 4.41033 1.80835C5.47199 1.80835 6.41116 2.32168 7.00033 3.11502C7.58949 2.32168 8.53449 1.80835 9.59033 1.80835C11.3812 1.80835 12.8337 3.26668 12.8337 5.06918C12.8337 9.15252 9.05366 11.5617 7.36199 12.1392Z"
                                                                    stroke="#292B2E" stroke-width="1.2"
                                                                    stroke-linecap="round" stroke-linejoin="round">
                                                                </path>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-sm-4 col-xl-3 p-10">
                                    <div class="products">
                                        <div class="product">
                                            <div class="product__img">
                                                <a href="#" class="img">
                                                    <span class="label">25% OFF</span>
                                                    <figure><img src="dist/images/pro-1.png" alt="pro-1"></figure>
                                                </a>
                                            </div>
                                            <div class="product__content">
                                                <div class="product__content__title">
                                                    <h3><a href="#">Đồng hồ thông minh dành cho nam Sản xuất tại Nhật
                                                            Bản</a>
                                                    </h3>
                                                </div>
                                                <div class="product__content__price">
                                                    <span class="price-old">539.380 đ</span>
                                                    <span class="price-sale">600.000 đ</span>
                                                </div>
                                                <div class="product__content__meta-info">
                                                    <a href="#">Mua ngay</a>
                                                    <div class="bnt-info">
                                                        <button>
                                                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M5.13901 1.16663L3.02734 3.28413"
                                                                    stroke="#292B2E" stroke-width="1.2"
                                                                    stroke-miterlimit="10" stroke-linecap="round"
                                                                    stroke-linejoin="round"></path>
                                                                <path d="M8.86133 1.16663L10.973 3.28413"
                                                                    stroke="#292B2E" stroke-width="1.2"
                                                                    stroke-miterlimit="10" stroke-linecap="round"
                                                                    stroke-linejoin="round"></path>
                                                                <path
                                                                    d="M1.16699 4.57914C1.16699 3.49998 1.74449 3.41248 2.46199 3.41248H11.5387C12.2562 3.41248 12.8337 3.49998 12.8337 4.57914C12.8337 5.83331 12.2562 5.74581 11.5387 5.74581H2.46199C1.74449 5.74581 1.16699 5.83331 1.16699 4.57914Z"
                                                                    stroke="#292B2E" stroke-width="1.2"></path>
                                                                <path d="M5.69336 8.16663V10.2375" stroke="#292B2E"
                                                                    stroke-width="1.2" stroke-linecap="round"></path>
                                                                <path d="M8.37695 8.16663V10.2375" stroke="#292B2E"
                                                                    stroke-width="1.2" stroke-linecap="round"></path>
                                                                <path
                                                                    d="M2.04199 5.83337L2.86449 10.8734C3.05116 12.005 3.50033 12.8334 5.16866 12.8334H8.68616C10.5003 12.8334 10.7687 12.04 10.9787 10.9434L11.9587 5.83337"
                                                                    stroke="#292B2E" stroke-width="1.2"
                                                                    stroke-linecap="round">
                                                                </path>
                                                            </svg>
                                                        </button>
                                                        <button>
                                                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                                                </div>
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M7.36199 12.1392C7.16366 12.2092 6.83699 12.2092 6.63866 12.1392C4.94699 11.5617 1.16699 9.15252 1.16699 5.06918C1.16699 3.26668 2.61949 1.80835 4.41033 1.80835C5.47199 1.80835 6.41116 2.32168 7.00033 3.11502C7.58949 2.32168 8.53449 1.80835 9.59033 1.80835C11.3812 1.80835 12.8337 3.26668 12.8337 5.06918C12.8337 9.15252 9.05366 11.5617 7.36199 12.1392Z"
                                                                    stroke="#292B2E" stroke-width="1.2"
                                                                    stroke-linecap="round" stroke-linejoin="round">
                                                                </path>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-sm-4 col-xl-3 p-10">
                                    <div class="products">
                                        <div class="product">
                                            <div class="product__img">
                                                <a href="#" class="img">
                                                    <span class="label">25% OFF</span>
                                                    <figure><img src="dist/images/pro-1.png" alt="pro-1"></figure>
                                                </a>
                                            </div>
                                            <div class="product__content">
                                                <div class="product__content__title">
                                                    <h3><a href="#">Đồng hồ thông minh dành cho nam Sản xuất tại Nhật
                                                            Bản</a>
                                                    </h3>
                                                </div>
                                                <div class="product__content__price">
                                                    <span class="price-old">539.380 đ</span>
                                                    <span class="price-sale">600.000 đ</span>
                                                </div>
                                                <div class="product__content__meta-info">
                                                    <a href="#">Mua ngay</a>
                                                    <div class="bnt-info">
                                                        <button>
                                                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M5.13901 1.16663L3.02734 3.28413"
                                                                    stroke="#292B2E" stroke-width="1.2"
                                                                    stroke-miterlimit="10" stroke-linecap="round"
                                                                    stroke-linejoin="round"></path>
                                                                <path d="M8.86133 1.16663L10.973 3.28413"
                                                                    stroke="#292B2E" stroke-width="1.2"
                                                                    stroke-miterlimit="10" stroke-linecap="round"
                                                                    stroke-linejoin="round"></path>
                                                                <path
                                                                    d="M1.16699 4.57914C1.16699 3.49998 1.74449 3.41248 2.46199 3.41248H11.5387C12.2562 3.41248 12.8337 3.49998 12.8337 4.57914C12.8337 5.83331 12.2562 5.74581 11.5387 5.74581H2.46199C1.74449 5.74581 1.16699 5.83331 1.16699 4.57914Z"
                                                                    stroke="#292B2E" stroke-width="1.2"></path>
                                                                <path d="M5.69336 8.16663V10.2375" stroke="#292B2E"
                                                                    stroke-width="1.2" stroke-linecap="round"></path>
                                                                <path d="M8.37695 8.16663V10.2375" stroke="#292B2E"
                                                                    stroke-width="1.2" stroke-linecap="round"></path>
                                                                <path
                                                                    d="M2.04199 5.83337L2.86449 10.8734C3.05116 12.005 3.50033 12.8334 5.16866 12.8334H8.68616C10.5003 12.8334 10.7687 12.04 10.9787 10.9434L11.9587 5.83337"
                                                                    stroke="#292B2E" stroke-width="1.2"
                                                                    stroke-linecap="round">
                                                                </path>
                                                            </svg>
                                                        </button>
                                                        <button>
                                                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                                                </div>
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M7.36199 12.1392C7.16366 12.2092 6.83699 12.2092 6.63866 12.1392C4.94699 11.5617 1.16699 9.15252 1.16699 5.06918C1.16699 3.26668 2.61949 1.80835 4.41033 1.80835C5.47199 1.80835 6.41116 2.32168 7.00033 3.11502C7.58949 2.32168 8.53449 1.80835 9.59033 1.80835C11.3812 1.80835 12.8337 3.26668 12.8337 5.06918C12.8337 9.15252 9.05366 11.5617 7.36199 12.1392Z"
                                                                    stroke="#292B2E" stroke-width="1.2"
                                                                    stroke-linecap="round" stroke-linejoin="round">
                                                                </path>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-sm-4 col-xl-3 p-10">
                                    <div class="products">
                                        <div class="product">
                                            <div class="product__img">
                                                <a href="#" class="img">
                                                    <span class="label">25% OFF</span>
                                                    <figure><img src="dist/images/pro-1.png" alt="pro-1"></figure>
                                                </a>
                                            </div>
                                            <div class="product__content">
                                                <div class="product__content__title">
                                                    <h3><a href="#">Đồng hồ thông minh dành cho nam Sản xuất tại Nhật
                                                            Bản</a>
                                                    </h3>
                                                </div>
                                                <div class="product__content__price">
                                                    <span class="price-old">539.380 đ</span>
                                                    <span class="price-sale">600.000 đ</span>
                                                </div>
                                                <div class="product__content__meta-info">
                                                    <a href="#">Mua ngay</a>
                                                    <div class="bnt-info">
                                                        <button>
                                                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M5.13901 1.16663L3.02734 3.28413"
                                                                    stroke="#292B2E" stroke-width="1.2"
                                                                    stroke-miterlimit="10" stroke-linecap="round"
                                                                    stroke-linejoin="round"></path>
                                                                <path d="M8.86133 1.16663L10.973 3.28413"
                                                                    stroke="#292B2E" stroke-width="1.2"
                                                                    stroke-miterlimit="10" stroke-linecap="round"
                                                                    stroke-linejoin="round"></path>
                                                                <path
                                                                    d="M1.16699 4.57914C1.16699 3.49998 1.74449 3.41248 2.46199 3.41248H11.5387C12.2562 3.41248 12.8337 3.49998 12.8337 4.57914C12.8337 5.83331 12.2562 5.74581 11.5387 5.74581H2.46199C1.74449 5.74581 1.16699 5.83331 1.16699 4.57914Z"
                                                                    stroke="#292B2E" stroke-width="1.2"></path>
                                                                <path d="M5.69336 8.16663V10.2375" stroke="#292B2E"
                                                                    stroke-width="1.2" stroke-linecap="round"></path>
                                                                <path d="M8.37695 8.16663V10.2375" stroke="#292B2E"
                                                                    stroke-width="1.2" stroke-linecap="round"></path>
                                                                <path
                                                                    d="M2.04199 5.83337L2.86449 10.8734C3.05116 12.005 3.50033 12.8334 5.16866 12.8334H8.68616C10.5003 12.8334 10.7687 12.04 10.9787 10.9434L11.9587 5.83337"
                                                                    stroke="#292B2E" stroke-width="1.2"
                                                                    stroke-linecap="round">
                                                                </path>
                                                            </svg>
                                                        </button>
                                                        <button>
                                                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                                                </div>
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M7.36199 12.1392C7.16366 12.2092 6.83699 12.2092 6.63866 12.1392C4.94699 11.5617 1.16699 9.15252 1.16699 5.06918C1.16699 3.26668 2.61949 1.80835 4.41033 1.80835C5.47199 1.80835 6.41116 2.32168 7.00033 3.11502C7.58949 2.32168 8.53449 1.80835 9.59033 1.80835C11.3812 1.80835 12.8337 3.26668 12.8337 5.06918C12.8337 9.15252 9.05366 11.5617 7.36199 12.1392Z"
                                                                    stroke="#292B2E" stroke-width="1.2"
                                                                    stroke-linecap="round" stroke-linejoin="round">
                                                                </path>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-sm-4 col-xl-3 p-10">
                                    <div class="products">
                                        <div class="product">
                                            <div class="product__img">
                                                <a href="#" class="img">
                                                    <span class="label">25% OFF</span>
                                                    <figure><img src="dist/images/pro-1.png" alt="pro-1"></figure>
                                                </a>
                                            </div>
                                            <div class="product__content">
                                                <div class="product__content__title">
                                                    <h3><a href="#">Đồng hồ thông minh dành cho nam Sản xuất tại Nhật
                                                            Bản</a>
                                                    </h3>
                                                </div>
                                                <div class="product__content__price">
                                                    <span class="price-old">539.380 đ</span>
                                                    <span class="price-sale">600.000 đ</span>
                                                </div>
                                                <div class="product__content__meta-info">
                                                    <a href="#">Mua ngay</a>
                                                    <div class="bnt-info">
                                                        <button>
                                                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M5.13901 1.16663L3.02734 3.28413"
                                                                    stroke="#292B2E" stroke-width="1.2"
                                                                    stroke-miterlimit="10" stroke-linecap="round"
                                                                    stroke-linejoin="round"></path>
                                                                <path d="M8.86133 1.16663L10.973 3.28413"
                                                                    stroke="#292B2E" stroke-width="1.2"
                                                                    stroke-miterlimit="10" stroke-linecap="round"
                                                                    stroke-linejoin="round"></path>
                                                                <path
                                                                    d="M1.16699 4.57914C1.16699 3.49998 1.74449 3.41248 2.46199 3.41248H11.5387C12.2562 3.41248 12.8337 3.49998 12.8337 4.57914C12.8337 5.83331 12.2562 5.74581 11.5387 5.74581H2.46199C1.74449 5.74581 1.16699 5.83331 1.16699 4.57914Z"
                                                                    stroke="#292B2E" stroke-width="1.2"></path>
                                                                <path d="M5.69336 8.16663V10.2375" stroke="#292B2E"
                                                                    stroke-width="1.2" stroke-linecap="round"></path>
                                                                <path d="M8.37695 8.16663V10.2375" stroke="#292B2E"
                                                                    stroke-width="1.2" stroke-linecap="round"></path>
                                                                <path
                                                                    d="M2.04199 5.83337L2.86449 10.8734C3.05116 12.005 3.50033 12.8334 5.16866 12.8334H8.68616C10.5003 12.8334 10.7687 12.04 10.9787 10.9434L11.9587 5.83337"
                                                                    stroke="#292B2E" stroke-width="1.2"
                                                                    stroke-linecap="round">
                                                                </path>
                                                            </svg>
                                                        </button>
                                                        <button>
                                                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                                                </div>
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M7.36199 12.1392C7.16366 12.2092 6.83699 12.2092 6.63866 12.1392C4.94699 11.5617 1.16699 9.15252 1.16699 5.06918C1.16699 3.26668 2.61949 1.80835 4.41033 1.80835C5.47199 1.80835 6.41116 2.32168 7.00033 3.11502C7.58949 2.32168 8.53449 1.80835 9.59033 1.80835C11.3812 1.80835 12.8337 3.26668 12.8337 5.06918C12.8337 9.15252 9.05366 11.5617 7.36199 12.1392Z"
                                                                    stroke="#292B2E" stroke-width="1.2"
                                                                    stroke-linecap="round" stroke-linejoin="round">
                                                                </path>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-sm-4 col-xl-3 p-10">
                                    <div class="products">
                                        <div class="product">
                                            <div class="product__img">
                                                <a href="#" class="img">
                                                    <span class="label">25% OFF</span>
                                                    <figure><img src="dist/images/pro-1.png" alt="pro-1"></figure>
                                                </a>
                                            </div>
                                            <div class="product__content">
                                                <div class="product__content__title">
                                                    <h3><a href="#">Đồng hồ thông minh dành cho nam Sản xuất tại Nhật
                                                            Bản</a>
                                                    </h3>
                                                </div>
                                                <div class="product__content__price">
                                                    <span class="price-old">539.380 đ</span>
                                                    <span class="price-sale">600.000 đ</span>
                                                </div>
                                                <div class="product__content__meta-info">
                                                    <a href="#">Mua ngay</a>
                                                    <div class="bnt-info">
                                                        <button>
                                                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M5.13901 1.16663L3.02734 3.28413"
                                                                    stroke="#292B2E" stroke-width="1.2"
                                                                    stroke-miterlimit="10" stroke-linecap="round"
                                                                    stroke-linejoin="round"></path>
                                                                <path d="M8.86133 1.16663L10.973 3.28413"
                                                                    stroke="#292B2E" stroke-width="1.2"
                                                                    stroke-miterlimit="10" stroke-linecap="round"
                                                                    stroke-linejoin="round"></path>
                                                                <path
                                                                    d="M1.16699 4.57914C1.16699 3.49998 1.74449 3.41248 2.46199 3.41248H11.5387C12.2562 3.41248 12.8337 3.49998 12.8337 4.57914C12.8337 5.83331 12.2562 5.74581 11.5387 5.74581H2.46199C1.74449 5.74581 1.16699 5.83331 1.16699 4.57914Z"
                                                                    stroke="#292B2E" stroke-width="1.2"></path>
                                                                <path d="M5.69336 8.16663V10.2375" stroke="#292B2E"
                                                                    stroke-width="1.2" stroke-linecap="round"></path>
                                                                <path d="M8.37695 8.16663V10.2375" stroke="#292B2E"
                                                                    stroke-width="1.2" stroke-linecap="round"></path>
                                                                <path
                                                                    d="M2.04199 5.83337L2.86449 10.8734C3.05116 12.005 3.50033 12.8334 5.16866 12.8334H8.68616C10.5003 12.8334 10.7687 12.04 10.9787 10.9434L11.9587 5.83337"
                                                                    stroke="#292B2E" stroke-width="1.2"
                                                                    stroke-linecap="round">
                                                                </path>
                                                            </svg>
                                                        </button>
                                                        <button>
                                                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                                                </div>
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M7.36199 12.1392C7.16366 12.2092 6.83699 12.2092 6.63866 12.1392C4.94699 11.5617 1.16699 9.15252 1.16699 5.06918C1.16699 3.26668 2.61949 1.80835 4.41033 1.80835C5.47199 1.80835 6.41116 2.32168 7.00033 3.11502C7.58949 2.32168 8.53449 1.80835 9.59033 1.80835C11.3812 1.80835 12.8337 3.26668 12.8337 5.06918C12.8337 9.15252 9.05366 11.5617 7.36199 12.1392Z"
                                                                    stroke="#292B2E" stroke-width="1.2"
                                                                    stroke-linecap="round" stroke-linejoin="round">
                                                                </path>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-sm-4 col-xl-3 p-10">
                                    <div class="products">
                                        <div class="product">
                                            <div class="product__img">
                                                <a href="#" class="img">
                                                    <span class="label">25% OFF</span>
                                                    <figure><img src="dist/images/pro-1.png" alt="pro-1"></figure>
                                                </a>
                                            </div>
                                            <div class="product__content">
                                                <div class="product__content__title">
                                                    <h3><a href="#">Đồng hồ thông minh dành cho nam Sản xuất tại Nhật
                                                            Bản</a>
                                                    </h3>
                                                </div>
                                                <div class="product__content__price">
                                                    <span class="price-old">539.380 đ</span>
                                                    <span class="price-sale">600.000 đ</span>
                                                </div>
                                                <div class="product__content__meta-info">
                                                    <a href="#">Mua ngay</a>
                                                    <div class="bnt-info">
                                                        <button>
                                                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M5.13901 1.16663L3.02734 3.28413"
                                                                    stroke="#292B2E" stroke-width="1.2"
                                                                    stroke-miterlimit="10" stroke-linecap="round"
                                                                    stroke-linejoin="round"></path>
                                                                <path d="M8.86133 1.16663L10.973 3.28413"
                                                                    stroke="#292B2E" stroke-width="1.2"
                                                                    stroke-miterlimit="10" stroke-linecap="round"
                                                                    stroke-linejoin="round"></path>
                                                                <path
                                                                    d="M1.16699 4.57914C1.16699 3.49998 1.74449 3.41248 2.46199 3.41248H11.5387C12.2562 3.41248 12.8337 3.49998 12.8337 4.57914C12.8337 5.83331 12.2562 5.74581 11.5387 5.74581H2.46199C1.74449 5.74581 1.16699 5.83331 1.16699 4.57914Z"
                                                                    stroke="#292B2E" stroke-width="1.2"></path>
                                                                <path d="M5.69336 8.16663V10.2375" stroke="#292B2E"
                                                                    stroke-width="1.2" stroke-linecap="round"></path>
                                                                <path d="M8.37695 8.16663V10.2375" stroke="#292B2E"
                                                                    stroke-width="1.2" stroke-linecap="round"></path>
                                                                <path
                                                                    d="M2.04199 5.83337L2.86449 10.8734C3.05116 12.005 3.50033 12.8334 5.16866 12.8334H8.68616C10.5003 12.8334 10.7687 12.04 10.9787 10.9434L11.9587 5.83337"
                                                                    stroke="#292B2E" stroke-width="1.2"
                                                                    stroke-linecap="round">
                                                                </path>
                                                            </svg>
                                                        </button>
                                                        <button>
                                                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                                                </div>
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M7.36199 12.1392C7.16366 12.2092 6.83699 12.2092 6.63866 12.1392C4.94699 11.5617 1.16699 9.15252 1.16699 5.06918C1.16699 3.26668 2.61949 1.80835 4.41033 1.80835C5.47199 1.80835 6.41116 2.32168 7.00033 3.11502C7.58949 2.32168 8.53449 1.80835 9.59033 1.80835C11.3812 1.80835 12.8337 3.26668 12.8337 5.06918C12.8337 9.15252 9.05366 11.5617 7.36199 12.1392Z"
                                                                    stroke="#292B2E" stroke-width="1.2"
                                                                    stroke-linecap="round" stroke-linejoin="round">
                                                                </path>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-sm-4 col-xl-3 p-10">
                                    <div class="products">
                                        <div class="product">
                                            <div class="product__img">
                                                <a href="#" class="img">
                                                    <span class="label">25% OFF</span>
                                                    <figure><img src="dist/images/pro-1.png" alt="pro-1"></figure>
                                                </a>
                                            </div>
                                            <div class="product__content">
                                                <div class="product__content__title">
                                                    <h3><a href="#">Đồng hồ thông minh dành cho nam Sản xuất tại Nhật
                                                            Bản</a>
                                                    </h3>
                                                </div>
                                                <div class="product__content__price">
                                                    <span class="price-old">539.380 đ</span>
                                                    <span class="price-sale">600.000 đ</span>
                                                </div>
                                                <div class="product__content__meta-info">
                                                    <a href="#">Mua ngay</a>
                                                    <div class="bnt-info">
                                                        <button>
                                                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M5.13901 1.16663L3.02734 3.28413"
                                                                    stroke="#292B2E" stroke-width="1.2"
                                                                    stroke-miterlimit="10" stroke-linecap="round"
                                                                    stroke-linejoin="round"></path>
                                                                <path d="M8.86133 1.16663L10.973 3.28413"
                                                                    stroke="#292B2E" stroke-width="1.2"
                                                                    stroke-miterlimit="10" stroke-linecap="round"
                                                                    stroke-linejoin="round"></path>
                                                                <path
                                                                    d="M1.16699 4.57914C1.16699 3.49998 1.74449 3.41248 2.46199 3.41248H11.5387C12.2562 3.41248 12.8337 3.49998 12.8337 4.57914C12.8337 5.83331 12.2562 5.74581 11.5387 5.74581H2.46199C1.74449 5.74581 1.16699 5.83331 1.16699 4.57914Z"
                                                                    stroke="#292B2E" stroke-width="1.2"></path>
                                                                <path d="M5.69336 8.16663V10.2375" stroke="#292B2E"
                                                                    stroke-width="1.2" stroke-linecap="round"></path>
                                                                <path d="M8.37695 8.16663V10.2375" stroke="#292B2E"
                                                                    stroke-width="1.2" stroke-linecap="round"></path>
                                                                <path
                                                                    d="M2.04199 5.83337L2.86449 10.8734C3.05116 12.005 3.50033 12.8334 5.16866 12.8334H8.68616C10.5003 12.8334 10.7687 12.04 10.9787 10.9434L11.9587 5.83337"
                                                                    stroke="#292B2E" stroke-width="1.2"
                                                                    stroke-linecap="round">
                                                                </path>
                                                            </svg>
                                                        </button>
                                                        <button>
                                                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                                                </div>
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M7.36199 12.1392C7.16366 12.2092 6.83699 12.2092 6.63866 12.1392C4.94699 11.5617 1.16699 9.15252 1.16699 5.06918C1.16699 3.26668 2.61949 1.80835 4.41033 1.80835C5.47199 1.80835 6.41116 2.32168 7.00033 3.11502C7.58949 2.32168 8.53449 1.80835 9.59033 1.80835C11.3812 1.80835 12.8337 3.26668 12.8337 5.06918C12.8337 9.15252 9.05366 11.5617 7.36199 12.1392Z"
                                                                    stroke="#292B2E" stroke-width="1.2"
                                                                    stroke-linecap="round" stroke-linejoin="round">
                                                                </path>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-sm-4 col-xl-3 p-10">
                                    <div class="products">
                                        <div class="product">
                                            <div class="product__img">
                                                <a href="#" class="img">
                                                    <span class="label">25% OFF</span>
                                                    <figure><img src="dist/images/pro-1.png" alt="pro-1"></figure>
                                                </a>
                                            </div>
                                            <div class="product__content">
                                                <div class="product__content__title">
                                                    <h3><a href="#">Đồng hồ thông minh dành cho nam Sản xuất tại Nhật
                                                            Bản</a>
                                                    </h3>
                                                </div>
                                                <div class="product__content__price">
                                                    <span class="price-old">539.380 đ</span>
                                                    <span class="price-sale">600.000 đ</span>
                                                </div>
                                                <div class="product__content__meta-info">
                                                    <a href="#">Mua ngay</a>
                                                    <div class="bnt-info">
                                                        <button>
                                                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M5.13901 1.16663L3.02734 3.28413"
                                                                    stroke="#292B2E" stroke-width="1.2"
                                                                    stroke-miterlimit="10" stroke-linecap="round"
                                                                    stroke-linejoin="round"></path>
                                                                <path d="M8.86133 1.16663L10.973 3.28413"
                                                                    stroke="#292B2E" stroke-width="1.2"
                                                                    stroke-miterlimit="10" stroke-linecap="round"
                                                                    stroke-linejoin="round"></path>
                                                                <path
                                                                    d="M1.16699 4.57914C1.16699 3.49998 1.74449 3.41248 2.46199 3.41248H11.5387C12.2562 3.41248 12.8337 3.49998 12.8337 4.57914C12.8337 5.83331 12.2562 5.74581 11.5387 5.74581H2.46199C1.74449 5.74581 1.16699 5.83331 1.16699 4.57914Z"
                                                                    stroke="#292B2E" stroke-width="1.2"></path>
                                                                <path d="M5.69336 8.16663V10.2375" stroke="#292B2E"
                                                                    stroke-width="1.2" stroke-linecap="round"></path>
                                                                <path d="M8.37695 8.16663V10.2375" stroke="#292B2E"
                                                                    stroke-width="1.2" stroke-linecap="round"></path>
                                                                <path
                                                                    d="M2.04199 5.83337L2.86449 10.8734C3.05116 12.005 3.50033 12.8334 5.16866 12.8334H8.68616C10.5003 12.8334 10.7687 12.04 10.9787 10.9434L11.9587 5.83337"
                                                                    stroke="#292B2E" stroke-width="1.2"
                                                                    stroke-linecap="round">
                                                                </path>
                                                            </svg>
                                                        </button>
                                                        <button>
                                                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                                                </div>
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M7.36199 12.1392C7.16366 12.2092 6.83699 12.2092 6.63866 12.1392C4.94699 11.5617 1.16699 9.15252 1.16699 5.06918C1.16699 3.26668 2.61949 1.80835 4.41033 1.80835C5.47199 1.80835 6.41116 2.32168 7.00033 3.11502C7.58949 2.32168 8.53449 1.80835 9.59033 1.80835C11.3812 1.80835 12.8337 3.26668 12.8337 5.06918C12.8337 9.15252 9.05366 11.5617 7.36199 12.1392Z"
                                                                    stroke="#292B2E" stroke-width="1.2"
                                                                    stroke-linecap="round" stroke-linejoin="round">
                                                                </path>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-sm-4 col-xl-3 p-10">
                                    <div class="products">
                                        <div class="product">
                                            <div class="product__img">
                                                <a href="#" class="img">
                                                    <span class="label">25% OFF</span>
                                                    <figure><img src="dist/images/pro-1.png" alt="pro-1"></figure>
                                                </a>
                                            </div>
                                            <div class="product__content">
                                                <div class="product__content__title">
                                                    <h3><a href="#">Đồng hồ thông minh dành cho nam Sản xuất tại Nhật
                                                            Bản</a>
                                                    </h3>
                                                </div>
                                                <div class="product__content__price">
                                                    <span class="price-old">539.380 đ</span>
                                                    <span class="price-sale">600.000 đ</span>
                                                </div>
                                                <div class="product__content__meta-info">
                                                    <a href="#">Mua ngay</a>
                                                    <div class="bnt-info">
                                                        <button>
                                                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M5.13901 1.16663L3.02734 3.28413"
                                                                    stroke="#292B2E" stroke-width="1.2"
                                                                    stroke-miterlimit="10" stroke-linecap="round"
                                                                    stroke-linejoin="round"></path>
                                                                <path d="M8.86133 1.16663L10.973 3.28413"
                                                                    stroke="#292B2E" stroke-width="1.2"
                                                                    stroke-miterlimit="10" stroke-linecap="round"
                                                                    stroke-linejoin="round"></path>
                                                                <path
                                                                    d="M1.16699 4.57914C1.16699 3.49998 1.74449 3.41248 2.46199 3.41248H11.5387C12.2562 3.41248 12.8337 3.49998 12.8337 4.57914C12.8337 5.83331 12.2562 5.74581 11.5387 5.74581H2.46199C1.74449 5.74581 1.16699 5.83331 1.16699 4.57914Z"
                                                                    stroke="#292B2E" stroke-width="1.2"></path>
                                                                <path d="M5.69336 8.16663V10.2375" stroke="#292B2E"
                                                                    stroke-width="1.2" stroke-linecap="round"></path>
                                                                <path d="M8.37695 8.16663V10.2375" stroke="#292B2E"
                                                                    stroke-width="1.2" stroke-linecap="round"></path>
                                                                <path
                                                                    d="M2.04199 5.83337L2.86449 10.8734C3.05116 12.005 3.50033 12.8334 5.16866 12.8334H8.68616C10.5003 12.8334 10.7687 12.04 10.9787 10.9434L11.9587 5.83337"
                                                                    stroke="#292B2E" stroke-width="1.2"
                                                                    stroke-linecap="round">
                                                                </path>
                                                            </svg>
                                                        </button>
                                                        <button>
                                                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                                                </div>
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M7.36199 12.1392C7.16366 12.2092 6.83699 12.2092 6.63866 12.1392C4.94699 11.5617 1.16699 9.15252 1.16699 5.06918C1.16699 3.26668 2.61949 1.80835 4.41033 1.80835C5.47199 1.80835 6.41116 2.32168 7.00033 3.11502C7.58949 2.32168 8.53449 1.80835 9.59033 1.80835C11.3812 1.80835 12.8337 3.26668 12.8337 5.06918C12.8337 9.15252 9.05366 11.5617 7.36199 12.1392Z"
                                                                    stroke="#292B2E" stroke-width="1.2"
                                                                    stroke-linecap="round" stroke-linejoin="round">
                                                                </path>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-sm-4 col-xl-3 p-10">
                                    <div class="products">
                                        <div class="product">
                                            <div class="product__img">
                                                <a href="#" class="img">
                                                    <span class="label">25% OFF</span>
                                                    <figure><img src="dist/images/pro-1.png" alt="pro-1"></figure>
                                                </a>
                                            </div>
                                            <div class="product__content">
                                                <div class="product__content__title">
                                                    <h3><a href="#">Đồng hồ thông minh dành cho nam Sản xuất tại Nhật
                                                            Bản</a>
                                                    </h3>
                                                </div>
                                                <div class="product__content__price">
                                                    <span class="price-old">539.380 đ</span>
                                                    <span class="price-sale">600.000 đ</span>
                                                </div>
                                                <div class="product__content__meta-info">
                                                    <a href="#">Mua ngay</a>
                                                    <div class="bnt-info">
                                                        <button>
                                                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M5.13901 1.16663L3.02734 3.28413"
                                                                    stroke="#292B2E" stroke-width="1.2"
                                                                    stroke-miterlimit="10" stroke-linecap="round"
                                                                    stroke-linejoin="round"></path>
                                                                <path d="M8.86133 1.16663L10.973 3.28413"
                                                                    stroke="#292B2E" stroke-width="1.2"
                                                                    stroke-miterlimit="10" stroke-linecap="round"
                                                                    stroke-linejoin="round"></path>
                                                                <path
                                                                    d="M1.16699 4.57914C1.16699 3.49998 1.74449 3.41248 2.46199 3.41248H11.5387C12.2562 3.41248 12.8337 3.49998 12.8337 4.57914C12.8337 5.83331 12.2562 5.74581 11.5387 5.74581H2.46199C1.74449 5.74581 1.16699 5.83331 1.16699 4.57914Z"
                                                                    stroke="#292B2E" stroke-width="1.2"></path>
                                                                <path d="M5.69336 8.16663V10.2375" stroke="#292B2E"
                                                                    stroke-width="1.2" stroke-linecap="round"></path>
                                                                <path d="M8.37695 8.16663V10.2375" stroke="#292B2E"
                                                                    stroke-width="1.2" stroke-linecap="round"></path>
                                                                <path
                                                                    d="M2.04199 5.83337L2.86449 10.8734C3.05116 12.005 3.50033 12.8334 5.16866 12.8334H8.68616C10.5003 12.8334 10.7687 12.04 10.9787 10.9434L11.9587 5.83337"
                                                                    stroke="#292B2E" stroke-width="1.2"
                                                                    stroke-linecap="round">
                                                                </path>
                                                            </svg>
                                                        </button>
                                                        <button>
                                                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                                                </div>
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M7.36199 12.1392C7.16366 12.2092 6.83699 12.2092 6.63866 12.1392C4.94699 11.5617 1.16699 9.15252 1.16699 5.06918C1.16699 3.26668 2.61949 1.80835 4.41033 1.80835C5.47199 1.80835 6.41116 2.32168 7.00033 3.11502C7.58949 2.32168 8.53449 1.80835 9.59033 1.80835C11.3812 1.80835 12.8337 3.26668 12.8337 5.06918C12.8337 9.15252 9.05366 11.5617 7.36199 12.1392Z"
                                                                    stroke="#292B2E" stroke-width="1.2"
                                                                    stroke-linecap="round" stroke-linejoin="round">
                                                                </path>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-sm-4 col-xl-3 p-10">
                                    <div class="products">
                                        <div class="product">
                                            <div class="product__img">
                                                <a href="#" class="img">
                                                    <span class="label">25% OFF</span>
                                                    <figure><img src="dist/images/pro-1.png" alt="pro-1"></figure>
                                                </a>
                                            </div>
                                            <div class="product__content">
                                                <div class="product__content__title">
                                                    <h3><a href="#">Đồng hồ thông minh dành cho nam Sản xuất tại Nhật
                                                            Bản</a>
                                                    </h3>
                                                </div>
                                                <div class="product__content__price">
                                                    <span class="price-old">539.380 đ</span>
                                                    <span class="price-sale">600.000 đ</span>
                                                </div>
                                                <div class="product__content__meta-info">
                                                    <a href="#">Mua ngay</a>
                                                    <div class="bnt-info">
                                                        <button>
                                                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M5.13901 1.16663L3.02734 3.28413"
                                                                    stroke="#292B2E" stroke-width="1.2"
                                                                    stroke-miterlimit="10" stroke-linecap="round"
                                                                    stroke-linejoin="round"></path>
                                                                <path d="M8.86133 1.16663L10.973 3.28413"
                                                                    stroke="#292B2E" stroke-width="1.2"
                                                                    stroke-miterlimit="10" stroke-linecap="round"
                                                                    stroke-linejoin="round"></path>
                                                                <path
                                                                    d="M1.16699 4.57914C1.16699 3.49998 1.74449 3.41248 2.46199 3.41248H11.5387C12.2562 3.41248 12.8337 3.49998 12.8337 4.57914C12.8337 5.83331 12.2562 5.74581 11.5387 5.74581H2.46199C1.74449 5.74581 1.16699 5.83331 1.16699 4.57914Z"
                                                                    stroke="#292B2E" stroke-width="1.2"></path>
                                                                <path d="M5.69336 8.16663V10.2375" stroke="#292B2E"
                                                                    stroke-width="1.2" stroke-linecap="round"></path>
                                                                <path d="M8.37695 8.16663V10.2375" stroke="#292B2E"
                                                                    stroke-width="1.2" stroke-linecap="round"></path>
                                                                <path
                                                                    d="M2.04199 5.83337L2.86449 10.8734C3.05116 12.005 3.50033 12.8334 5.16866 12.8334H8.68616C10.5003 12.8334 10.7687 12.04 10.9787 10.9434L11.9587 5.83337"
                                                                    stroke="#292B2E" stroke-width="1.2"
                                                                    stroke-linecap="round">
                                                                </path>
                                                            </svg>
                                                        </button>
                                                        <button>
                                                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                                                </div>
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M7.36199 12.1392C7.16366 12.2092 6.83699 12.2092 6.63866 12.1392C4.94699 11.5617 1.16699 9.15252 1.16699 5.06918C1.16699 3.26668 2.61949 1.80835 4.41033 1.80835C5.47199 1.80835 6.41116 2.32168 7.00033 3.11502C7.58949 2.32168 8.53449 1.80835 9.59033 1.80835C11.3812 1.80835 12.8337 3.26668 12.8337 5.06918C12.8337 9.15252 9.05366 11.5617 7.36199 12.1392Z"
                                                                    stroke="#292B2E" stroke-width="1.2"
                                                                    stroke-linecap="round" stroke-linejoin="round">
                                                                </path>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-sm-4 col-xl-3 p-10">
                                    <div class="products">
                                        <div class="product">
                                            <div class="product__img">
                                                <a href="#" class="img">
                                                    <span class="label">25% OFF</span>
                                                    <figure><img src="dist/images/pro-1.png" alt="pro-1"></figure>
                                                </a>
                                            </div>
                                            <div class="product__content">
                                                <div class="product__content__title">
                                                    <h3><a href="#">Đồng hồ thông minh dành cho nam Sản xuất tại Nhật
                                                            Bản</a>
                                                    </h3>
                                                </div>
                                                <div class="product__content__price">
                                                    <span class="price-old">539.380 đ</span>
                                                    <span class="price-sale">600.000 đ</span>
                                                </div>
                                                <div class="product__content__meta-info">
                                                    <a href="#">Mua ngay</a>
                                                    <div class="bnt-info">
                                                        <button>
                                                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M5.13901 1.16663L3.02734 3.28413"
                                                                    stroke="#292B2E" stroke-width="1.2"
                                                                    stroke-miterlimit="10" stroke-linecap="round"
                                                                    stroke-linejoin="round"></path>
                                                                <path d="M8.86133 1.16663L10.973 3.28413"
                                                                    stroke="#292B2E" stroke-width="1.2"
                                                                    stroke-miterlimit="10" stroke-linecap="round"
                                                                    stroke-linejoin="round"></path>
                                                                <path
                                                                    d="M1.16699 4.57914C1.16699 3.49998 1.74449 3.41248 2.46199 3.41248H11.5387C12.2562 3.41248 12.8337 3.49998 12.8337 4.57914C12.8337 5.83331 12.2562 5.74581 11.5387 5.74581H2.46199C1.74449 5.74581 1.16699 5.83331 1.16699 4.57914Z"
                                                                    stroke="#292B2E" stroke-width="1.2"></path>
                                                                <path d="M5.69336 8.16663V10.2375" stroke="#292B2E"
                                                                    stroke-width="1.2" stroke-linecap="round"></path>
                                                                <path d="M8.37695 8.16663V10.2375" stroke="#292B2E"
                                                                    stroke-width="1.2" stroke-linecap="round"></path>
                                                                <path
                                                                    d="M2.04199 5.83337L2.86449 10.8734C3.05116 12.005 3.50033 12.8334 5.16866 12.8334H8.68616C10.5003 12.8334 10.7687 12.04 10.9787 10.9434L11.9587 5.83337"
                                                                    stroke="#292B2E" stroke-width="1.2"
                                                                    stroke-linecap="round">
                                                                </path>
                                                            </svg>
                                                        </button>
                                                        <button>
                                                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                                                </div>
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M7.36199 12.1392C7.16366 12.2092 6.83699 12.2092 6.63866 12.1392C4.94699 11.5617 1.16699 9.15252 1.16699 5.06918C1.16699 3.26668 2.61949 1.80835 4.41033 1.80835C5.47199 1.80835 6.41116 2.32168 7.00033 3.11502C7.58949 2.32168 8.53449 1.80835 9.59033 1.80835C11.3812 1.80835 12.8337 3.26668 12.8337 5.06918C12.8337 9.15252 9.05366 11.5617 7.36199 12.1392Z"
                                                                    stroke="#292B2E" stroke-width="1.2"
                                                                    stroke-linecap="round" stroke-linejoin="round">
                                                                </path>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-sm-4 col-xl-3 p-10">
                                    <div class="products">
                                        <div class="product">
                                            <div class="product__img">
                                                <a href="#" class="img">
                                                    <span class="label">25% OFF</span>
                                                    <figure><img src="dist/images/pro-1.png" alt="pro-1"></figure>
                                                </a>
                                            </div>
                                            <div class="product__content">
                                                <div class="product__content__title">
                                                    <h3><a href="#">Đồng hồ thông minh dành cho nam Sản xuất tại Nhật
                                                            Bản</a>
                                                    </h3>
                                                </div>
                                                <div class="product__content__price">
                                                    <span class="price-old">539.380 đ</span>
                                                    <span class="price-sale">600.000 đ</span>
                                                </div>
                                                <div class="product__content__meta-info">
                                                    <a href="#">Mua ngay</a>
                                                    <div class="bnt-info">
                                                        <button>
                                                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M5.13901 1.16663L3.02734 3.28413"
                                                                    stroke="#292B2E" stroke-width="1.2"
                                                                    stroke-miterlimit="10" stroke-linecap="round"
                                                                    stroke-linejoin="round"></path>
                                                                <path d="M8.86133 1.16663L10.973 3.28413"
                                                                    stroke="#292B2E" stroke-width="1.2"
                                                                    stroke-miterlimit="10" stroke-linecap="round"
                                                                    stroke-linejoin="round"></path>
                                                                <path
                                                                    d="M1.16699 4.57914C1.16699 3.49998 1.74449 3.41248 2.46199 3.41248H11.5387C12.2562 3.41248 12.8337 3.49998 12.8337 4.57914C12.8337 5.83331 12.2562 5.74581 11.5387 5.74581H2.46199C1.74449 5.74581 1.16699 5.83331 1.16699 4.57914Z"
                                                                    stroke="#292B2E" stroke-width="1.2"></path>
                                                                <path d="M5.69336 8.16663V10.2375" stroke="#292B2E"
                                                                    stroke-width="1.2" stroke-linecap="round"></path>
                                                                <path d="M8.37695 8.16663V10.2375" stroke="#292B2E"
                                                                    stroke-width="1.2" stroke-linecap="round"></path>
                                                                <path
                                                                    d="M2.04199 5.83337L2.86449 10.8734C3.05116 12.005 3.50033 12.8334 5.16866 12.8334H8.68616C10.5003 12.8334 10.7687 12.04 10.9787 10.9434L11.9587 5.83337"
                                                                    stroke="#292B2E" stroke-width="1.2"
                                                                    stroke-linecap="round">
                                                                </path>
                                                            </svg>
                                                        </button>
                                                        <button>
                                                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                                                </div>
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M7.36199 12.1392C7.16366 12.2092 6.83699 12.2092 6.63866 12.1392C4.94699 11.5617 1.16699 9.15252 1.16699 5.06918C1.16699 3.26668 2.61949 1.80835 4.41033 1.80835C5.47199 1.80835 6.41116 2.32168 7.00033 3.11502C7.58949 2.32168 8.53449 1.80835 9.59033 1.80835C11.3812 1.80835 12.8337 3.26668 12.8337 5.06918C12.8337 9.15252 9.05366 11.5617 7.36199 12.1392Z"
                                                                    stroke="#292B2E" stroke-width="1.2"
                                                                    stroke-linecap="round" stroke-linejoin="round">
                                                                </path>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-sm-4 col-xl-3 p-10">
                                    <div class="products">
                                        <div class="product">
                                            <div class="product__img">
                                                <a href="#" class="img">
                                                    <span class="label">25% OFF</span>
                                                    <figure><img src="dist/images/pro-1.png" alt="pro-1"></figure>
                                                </a>
                                            </div>
                                            <div class="product__content">
                                                <div class="product__content__title">
                                                    <h3><a href="#">Đồng hồ thông minh dành cho nam Sản xuất tại Nhật
                                                            Bản</a>
                                                    </h3>
                                                </div>
                                                <div class="product__content__price">
                                                    <span class="price-old">539.380 đ</span>
                                                    <span class="price-sale">600.000 đ</span>
                                                </div>
                                                <div class="product__content__meta-info">
                                                    <a href="#">Mua ngay</a>
                                                    <div class="bnt-info">
                                                        <button>
                                                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M5.13901 1.16663L3.02734 3.28413"
                                                                    stroke="#292B2E" stroke-width="1.2"
                                                                    stroke-miterlimit="10" stroke-linecap="round"
                                                                    stroke-linejoin="round"></path>
                                                                <path d="M8.86133 1.16663L10.973 3.28413"
                                                                    stroke="#292B2E" stroke-width="1.2"
                                                                    stroke-miterlimit="10" stroke-linecap="round"
                                                                    stroke-linejoin="round"></path>
                                                                <path
                                                                    d="M1.16699 4.57914C1.16699 3.49998 1.74449 3.41248 2.46199 3.41248H11.5387C12.2562 3.41248 12.8337 3.49998 12.8337 4.57914C12.8337 5.83331 12.2562 5.74581 11.5387 5.74581H2.46199C1.74449 5.74581 1.16699 5.83331 1.16699 4.57914Z"
                                                                    stroke="#292B2E" stroke-width="1.2"></path>
                                                                <path d="M5.69336 8.16663V10.2375" stroke="#292B2E"
                                                                    stroke-width="1.2" stroke-linecap="round"></path>
                                                                <path d="M8.37695 8.16663V10.2375" stroke="#292B2E"
                                                                    stroke-width="1.2" stroke-linecap="round"></path>
                                                                <path
                                                                    d="M2.04199 5.83337L2.86449 10.8734C3.05116 12.005 3.50033 12.8334 5.16866 12.8334H8.68616C10.5003 12.8334 10.7687 12.04 10.9787 10.9434L11.9587 5.83337"
                                                                    stroke="#292B2E" stroke-width="1.2"
                                                                    stroke-linecap="round">
                                                                </path>
                                                            </svg>
                                                        </button>
                                                        <button>
                                                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                                                </div>
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M7.36199 12.1392C7.16366 12.2092 6.83699 12.2092 6.63866 12.1392C4.94699 11.5617 1.16699 9.15252 1.16699 5.06918C1.16699 3.26668 2.61949 1.80835 4.41033 1.80835C5.47199 1.80835 6.41116 2.32168 7.00033 3.11502C7.58949 2.32168 8.53449 1.80835 9.59033 1.80835C11.3812 1.80835 12.8337 3.26668 12.8337 5.06918C12.8337 9.15252 9.05366 11.5617 7.36199 12.1392Z"
                                                                    stroke="#292B2E" stroke-width="1.2"
                                                                    stroke-linecap="round" stroke-linejoin="round">
                                                                </path>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-sm-4 col-xl-3 p-10">
                                    <div class="products">
                                        <div class="product">
                                            <div class="product__img">
                                                <a href="#" class="img">
                                                    <span class="label">25% OFF</span>
                                                    <figure><img src="dist/images/pro-1.png" alt="pro-1"></figure>
                                                </a>
                                            </div>
                                            <div class="product__content">
                                                <div class="product__content__title">
                                                    <h3><a href="#">Đồng hồ thông minh dành cho nam Sản xuất tại Nhật
                                                            Bản</a>
                                                    </h3>
                                                </div>
                                                <div class="product__content__price">
                                                    <span class="price-old">539.380 đ</span>
                                                    <span class="price-sale">600.000 đ</span>
                                                </div>
                                                <div class="product__content__meta-info">
                                                    <a href="#">Mua ngay</a>
                                                    <div class="bnt-info">
                                                        <button>
                                                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M5.13901 1.16663L3.02734 3.28413"
                                                                    stroke="#292B2E" stroke-width="1.2"
                                                                    stroke-miterlimit="10" stroke-linecap="round"
                                                                    stroke-linejoin="round"></path>
                                                                <path d="M8.86133 1.16663L10.973 3.28413"
                                                                    stroke="#292B2E" stroke-width="1.2"
                                                                    stroke-miterlimit="10" stroke-linecap="round"
                                                                    stroke-linejoin="round"></path>
                                                                <path
                                                                    d="M1.16699 4.57914C1.16699 3.49998 1.74449 3.41248 2.46199 3.41248H11.5387C12.2562 3.41248 12.8337 3.49998 12.8337 4.57914C12.8337 5.83331 12.2562 5.74581 11.5387 5.74581H2.46199C1.74449 5.74581 1.16699 5.83331 1.16699 4.57914Z"
                                                                    stroke="#292B2E" stroke-width="1.2"></path>
                                                                <path d="M5.69336 8.16663V10.2375" stroke="#292B2E"
                                                                    stroke-width="1.2" stroke-linecap="round"></path>
                                                                <path d="M8.37695 8.16663V10.2375" stroke="#292B2E"
                                                                    stroke-width="1.2" stroke-linecap="round"></path>
                                                                <path
                                                                    d="M2.04199 5.83337L2.86449 10.8734C3.05116 12.005 3.50033 12.8334 5.16866 12.8334H8.68616C10.5003 12.8334 10.7687 12.04 10.9787 10.9434L11.9587 5.83337"
                                                                    stroke="#292B2E" stroke-width="1.2"
                                                                    stroke-linecap="round">
                                                                </path>
                                                            </svg>
                                                        </button>
                                                        <button>
                                                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                                                </div>
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M7.36199 12.1392C7.16366 12.2092 6.83699 12.2092 6.63866 12.1392C4.94699 11.5617 1.16699 9.15252 1.16699 5.06918C1.16699 3.26668 2.61949 1.80835 4.41033 1.80835C5.47199 1.80835 6.41116 2.32168 7.00033 3.11502C7.58949 2.32168 8.53449 1.80835 9.59033 1.80835C11.3812 1.80835 12.8337 3.26668 12.8337 5.06918C12.8337 9.15252 9.05366 11.5617 7.36199 12.1392Z"
                                                                    stroke="#292B2E" stroke-width="1.2"
                                                                    stroke-linecap="round" stroke-linejoin="round">
                                                                </path>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="parag">
                                <a href="#"></a>
                                <a href="#">1</a>
                                <a href="#">2</a>
                                <a href="#" class="curent">3</a>
                                <a href="#">4</a>
                                <a href="#">5</a>
                                <a href="#"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>