<x-layout title="Cart | Study Laravel">
    <section class="main">
        <div class="product-full">
            <div class="grid">
                <form action="Cart.html" method="post" class="cart-form">
                    <div class="cart-info">
                        <div class="cart-info__detail">
                            <div class="cart-info__detail-table">
                                <table class="table-cart">
                                    <colgroup>
                                        <col width="20%">
                                        <col width="30%">
                                        <col width="20%">
                                        <col width="20%">
                                        <col width="10%">
                                    </colgroup>
                                    <thead>
                                        <tr>
                                            <th class="product-picture">Hình ảnh</th>
                                            <th class="product">Tên sản phẩm</th>
                                            <th class="unit-price">Giá bán</th>
                                            <th class="quantity">Số lượng</th>
                                            <th class="remove-from-cart"></th>
                                        </tr>
                                    </thead>
                                        <tbody>
                                            <tr>
                                                <td class="cart-product-picture">
                                                    <a href="#">
                                                        <img alt="Ảnh của iPhone 14 Pro 128GB" src="img/Product/product-items/iPhone/0008734_iphone-14-pro-128gb_240.png">
                                                    </a>
                                                </td>
                                                <td class="cart-product-title">
                                                    <a href="#" class="cart-product-title__name">iPhone 14 Pro 128GB</a>
                                                </td>
                                                <td class="cart-product-price">
                                                    <span>24.990.000₫</span>
                                                </td>
                                                <td class="cart-product-quantity">
                                                    <ul class="cart-product-quantity__list">
                                                        <li class="cart-product-quantity__item">
                                                            <a href="#" class="cart-product-quantity__item-link" onclick="decreaseValue(event)">
                                                                <i class="minus fa-solid fa-minus"></i>
                                                            </a>
                                                        </li>
                                                        <li class="cart-product-quantity__item">
                                                            <input id="quantityInput" type="text" value="1">
                                                        </li>
                                                        <li class="cart-product-quantity__item " onclick="increaseValue(event)">
                                                            <a href="#" class="cart-product-quantity__item-link">
                                                                <i class="plus fa-solid fa-plus"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </td>
                                                <td class="cart-product-edit">
                                                    <ul class="cart-product-edit__list">
                                                        <li class="cart-product-edit__item">
                                                            <a href="#">Xóa</a>
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr>
                                        </tbody>
                                    
                                </table>
                            </div>
                            

                            <div class="cart-info__detail-btn">
                                <button><a href="Home.html">Tiếp tục mua sắm</a></button>
                            </div>
                        </div>

                        <div class="cart-info__title">Thông tin thanh toán</div>

                        <div class="cart-info__billing">
                            <h4>Thông tin người dùng</h4>

                            <input class="cart-info__billing-name" type="text"  placeholder="Tên">

                            <div class="cart-info__billing-contact">
                                <input type="text"  placeholder="Số điện thoại">
                                <input type="text"  placeholder="Email">
                            </div>

                            <h4>Nơi nhận hàng</h4>

                            <input class="cart-info__billing-downtown" type="text"  placeholder="Tỉnh, Thành phố">

                            <div class="cart-info__billing-address">
                                <input type="text"  placeholder="Quận, Huyện">
                                <input type="text"  placeholder="Tên đường, Số nhà">
                            </div>
                        </div>
                    </div>
                    
                    <div class="cart-price">
                        <div class="cart-price-container">
                            <div class="cart-price-total">
                                <div class="cart-price-total__info">
                                    <table class="cart-price-total__info-table">
                                        <tbody>
                                            <tr class="subtotal">
                                                <td>
                                                    <label>Tổng phụ:</label>
                                                </td>
                                                <td>
                                                    <span>24.990.000₫</span>
                                                </td>
                                            </tr>
                                            <tr class="value-summary">
                                                <td>
                                                    <label>Tổng cộng:</label>
                                                </td>
                                                <td>
                                                    <span>24.990.000₫</span>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="cart-total__oder">
                                    <div class="cart-policy">
                                        <input type="checkbox">
                                    </div>
                                    <div class="termsofservice">
                                        <span>Tôi đã đọc và đồng ý với <a href="">điều khoản và điều kiện</a> của websites</span>
                                    </div>
                                </div>
                                <div class="cart-policy__btn">
                                    <button type="submit">Tiến hành đặt hàng</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
             </div>
        </div>
    </section>
</x-layout>