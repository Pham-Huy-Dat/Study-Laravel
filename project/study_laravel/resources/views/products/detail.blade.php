<x-layout title="">
    <section class="main">
        <div class="product-full" style="background: white;">
            @foreach ($detail_product as $item)
                <div class="grid">
                    <div class="product-detail">
                        <div class="product-detail__img">
                            <div class="product-detail__img-max-slide">
                                <img class="mySlides" src="{{ URL::to('frontend/' . $item->image) }}"
                                    style="display: block; width: 100%;">
                                <img class="mySlides" src="{{ URL::to('frontend/' . $item->image2) }}"
                                    style="display: none; width: 100%;">
                                <img class="mySlides" src="{{ URL::to('frontend/' . $item->image3) }}"
                                    style="display: none; width: 100%;">
                            </div>

                            <div class="product-detail__img-mini-slide">
                                <button type="button" class="product-detail__img-mini-slide-left"
                                    onclick="plusDivs(-1)">
                                    <i class="fa-solid fa-chevron-left"></i>
                                </button>
                                <img class="demo hide show" src="{{ URL::to('frontend/' . $item->image) }}"
                                    onmouseover="currentDiv(1)">
                                <img class="demo hide" src="{{ URL::to('frontend/' . $item->image2) }}"
                                    onmouseover="currentDiv(2)">
                                <img class="demo hide" src="{{ URL::to('frontend/' . $item->image3) }}"
                                    onmouseover="currentDiv(3)">
                                <button type="button" class="product-detail__img-mini-slide-right"
                                    onclick="plusDivs(1)">
                                    <i class="fa-solid fa-chevron-right"></i>
                                </button>
                            </div>
                        </div>

                        <div class="product-detail__info">
                            <h1 class="product-detail__info-name">{{ $item->name_product }}</h1>
                            <div class="home-product__detail-price product-detail__info-price">
                                <span
                                    class="home-product__detail-price-new product-detail__info-price-new">{{ number_format($item->price, 0, ',', '.') . ' ' . '₫' }}</span>
                                <span
                                    class="home-product__detail-price-old product-detail__info-price-old">{{ number_format($item->discount, 0, ',', '.') . ' ' . '₫' }}</span>
                            </div>
                            <form action="{{ URL::to('/save-add-cart') }}" method="POST">
                                @csrf
                                <div class="quantity mt-2" style="margin-bottom:-70px">
                                    <div class="input-group">
                                        <button class="btn-minus btn-cts"
                                            onclick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN(qty) & qty > 1 ) result.value--; return false;"
                                            type="button">–</button>
                                        <input aria-label="quantity" type="text" data-id="{{ $item->id }}"
                                            class="quantity-field input-text" id="qty" name="qty"
                                            size="4" value="1" maxlength="3"
                                            onkeypress="if ( isNaN(this.value + String.fromCharCode(event.keyCode) )) return false;"
                                            onchange="if(this.value == 0)this.value=1;" />
                                        <input type="hidden" name="IdProduct_hidden" id="IdProduct"
                                            value="{{ $item->id }}" />
                                        <button class="btn-plus btn-cts"
                                            onclick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN(qty)) result.value++; return false;"
                                            type="button">+</button>
                                    </div>
                                </div>

                                <div class="product-detail__info-policy">
                                    <ul class="product-detail__info-policy-list">
                                        <li class="product-detail__info-policy-item">
                                            <span class="product-detail__info-policy-item-check"><i
                                                    class="fa-solid fa-check"></i></span>
                                            <span class="product-detail__info-policy-item-detail">Bộ sản phẩm gồm: Hộp,
                                                Sách hướng dẫn, Cáp Lightning - Type C</span>
                                        </li>
                                        <li class="product-detail__info-policy-item">
                                            <span class="product-detail__info-policy-item-check"><i
                                                    class="fa-solid fa-check"></i></span>
                                            <span class="product-detail__info-policy-item-detail">Bảo hành chính hãng 1
                                                năm</span>
                                        </li>
                                        <li class="product-detail__info-policy-item">
                                            <span class="product-detail__info-policy-item-check"><i
                                                    class="fa-solid fa-check"></i></span>
                                            <span class="product-detail__info-policy-item-detail">
                                                Giao hàng nhanh toàn quốc
                                            </span>
                                        </li>
                                        <li class="product-detail__info-policy-item">
                                            <span class="product-detail__info-policy-item-check">
                                                <i class="fa-solid fa-check"></i>
                                            </span>
                                            <span class="product-detail__info-policy-item-detail">
                                                Gọi đặt mua<a href="#">0987 777 777</a>
                                                </span>
                                        </li>
                                    </ul>
                                </div>

                                <div class="product-detail__info-btn">
                                    <button class="add-to-cart" type="submit" data-id_product="{{ $item->id }}"
                                        id="btnAddToCart">
                                        THÊM VÀO GIỎ HÀNG
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="product-detail__description">
                        <div class="product-detail__specifications">
                            <h1 class="product-detail__specifications-title">MÔ TẢ SẢN PHẨM</h1>
                            <p class="product-detail__specifications-des">
                                {{ $item->description }}
                            </p>
                            <img src="{{ URL::to('frontend/' . $item->image2) }}"
                                alt="image {{ $item->name_product }}">
                            <p class="product-detail__specifications-des">
                                {{ $item->description2 }}
                            </p>
                            <img src="{{ URL::to('frontend/' . $item->image3) }}"
                                alt="image {{ $item->name_product }}">
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    <section class="similar-product">
        <div class="product-full bg-grey" style="margin-top: 0; padding-top: 0;">
            <div class="grid">
                <div class="product-detail__similar-product">
                    <h1 class="product-detail__similar-product-title">SẢN PHẨM TƯƠNG TỰ</h1>
                    <a class="product-detail__similar-product-link" href="#">Xem tất cả</a>
                    <div class="product-detail__similar-product-items">
                        <div class="grid__row">
                            @foreach ($list_product as $list_item)
                                <div class="grid__column-4">
                                    <div class="home-product-item">
                                        <div class="home-product__img">
                                            <a class="home-product__img-link"
                                                href="{{ URL::to('/detail/' . $list_item->id) }}">
                                                <img src="{{ URL::to('frontend/' . $list_item->image) }}" />
                                            </a>
                                        </div>
                                        <div class="home-product__detail">
                                            <h3 class="home-product__detail-name"><a
                                                    href="">{{ $list_item->name_product }}</a></h3>
                                            <div class="home-product__detail-price">
                                                <span
                                                    class="home-product__detail-price-new">{{ number_format($list_item->price, 0, ',', '.') . ' ' . '₫' }}</span>
                                                <span
                                                    class="home-product__detail-price-old">{{ number_format($list_item->discount, 0, ',', '.') . ' ' . '₫' }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layout>
