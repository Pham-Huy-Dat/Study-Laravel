<x-layout title="Home">
    <section class="main">
        <article class="product-full">
            <div class="grid">
                <h1 class="product-full__tile">Sounds</h1>
                <article class="product-full__banner">
                    <div class="slider">
                        <div class="slider-prev">
                            <i class="fa fa-angle-left slider-prev__icon"></i>
                        </div>
                        <ul class="slider-dots">
                            <li class="slider-dot-item active" data-index="0"></li>
                            <li class="slider-dot-item" data-index="1"></li>
                        </ul>
                        <div class="slider-wrapper">
                            <div class="slider-main">
                                <div class="banner__item">
                                    <a class="banner__item-link" href="" target="_blank"><img
                                            class="banner__item-img"
                                            src="frontend/img/BANNER/Sounds/danh mục loa t4-2.jpeg" alt="banner"></a>
                                </div>
                                <div class="banner__item">
                                    <a class="banner__item-link" href="" target="_blank"><img
                                            class="banner__item-img"
                                            src="frontend/img/BANNER/Sounds/hero-banner-airpods.image.large_2x.jpg"
                                            alt="banner"></a>
                                </div>
                            </div>
                        </div>
                        <div class="slider-next">
                            <i class="fa fa-angle-right slider-next__icon"></i>
                        </div>
                    </div>
                </article>
                <article class="product-sort">
                    <ul class="product-list">
                        <li class="product-list__item product-item--active">
                            <a href="~/Home/Sound" class="product-list__link">Tất cả</a>
                        </li>
                        <li class="product-list__item">
                            <a href="~/Home/Sound?type=airPods" class="product-list__link ">AirPods</a>
                        </li>
                        <li class="product-list__item">
                            <a href="~/Home/Sound?type=airPods pro" class="product-list__link ">AirPods Pro</a>
                        </li>
                        <li class="product-list__item">
                            <a href="~/Home/Sound?type=earPods" class="product-list__link">EarPods</a>
                        </li>
                        <li class="product-list__item">
                            <a href="~/Home/Sound?type=airPods max" class="product-list__link">AirPods Max</a>
                        </li>
                    </ul>
                    <form action="#" method="post">
                        <select class="product-sorting" onchange="handleFilter(value);">
                            <option value="">Thứ tự hiển thị</option>
                            <option value="1">Giá cao đến thấp</option>
                            <option value="2">Giá thấp đến cao</option>
                        </select>
                    </form>
                </article>

                <article class="product-full-item-detail">
                    <div class="grid__row">
                        @foreach ($sound as $item)
                            <div class="grid__column-4 mt-3">
                                <div class="home-product-item">
                                    <div class="home-product__img">
                                        <a class="home-product__img-link" href="{{ URL::to('/detail/' . $item->id) }}">
                                            <img src="{{ URL::to('frontend/' . $item->image) }}" />
                                        </a>
                                    </div>
                                    <div class="home-product__detail">
                                        <h3 class="home-product__detail-name"><a
                                                href="{{ URL::to('/detail/' . $item->id) }}">{{ $item->name_product }}</a>
                                        </h3>
                                        <div class="home-product__detail-price">
                                            <span
                                                class="home-product__detail-price-new">{{ number_format($item->price, 0, ',', '.') . ' ' . '₫' }}</span>
                                            <span
                                                class="home-product__detail-price-old">{{ number_format($item->discount, 0, ',', '.') . ' ' . '₫' }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="product-full-item-detail__number-page">
                        @if ($sound->lastPage() > 1)
                            <ul class="number-page__list">
                                {{-- <li class="number-page__list{{ $data->currentPage() == 1 ? ' disabled' : '' }}">
                                    <a href="{{ $data->url(1) }}">Previous</a>
                                </li> --}}
                                @for ($i = 1; $i <= $sound->lastPage(); $i++)
                                    <li class="number-page__item">
                                        <a href="{{ $sound->url($i) }}" class="number-page__item-link {{$i ?? "number-page__item-link--active"}} ">{{ $i }}</a>
                                    </li>
                                @endfor
                                {{-- <li class="number-page__list{{ $data->currentPage() == $data->lastPage() ? ' disabled' : '' }}">
                                    <a href="{{ $data->url($data->currentPage() + 1) }}">Next</a>
                                </li> --}}
                            </ul>
                        @endif
                    </div>
                </article>

                <article class="product-full-description">
                    <div class="product-full-description__container">
                        <div class="product-full-description__item">
                            <h1 class="product-full-description__item-title">Thiết bị âm thanh - Mang lại trải nghiệm
                                nghe nhạc cực đã</h1>
                            <div class="product-full-description__item-detail">
                                <p>
                                    Nghe nhạc, xem phim là nhu cầu thường ngày trong cuộc sống, giúp chúng ta thư giãn
                                    sau quãng thời gian học tập và làm việc căng thẳng. Tuy nhiên, để nâng cao trải
                                    nghiệm và có được những giây phút giải trí ấn tượng hơn, người dùng nên mua những
                                    thiết bị âm thanh chuyên dụng.
                                </p>
                                <br>
                                <p>
                                    Dòng sản phẩm này chạy hệ điều hành watchOS, tương thích với iOS và các sản phẩm
                                    dịch vụ khác của Apple, kết nối không dây với iPhone thông qua kết nối Bluetooth
                                    hoặc Wifi..
                                </p>
                            </div>
                        </div>
                        <div class="product-full-description__item">
                            <h1 class="product-full-description__item-title">Các thiết bị âm thanh hiện đại đang có mặt
                                tại ShopDunk?</h1>
                            <div class="product-full-description__item-detail">
                                <p>
                                    Tai nghe dây dành riêng cho các sản phẩm Apple, kết nối với thiết bị thông qua jack
                                    cắm lightning.
                                    Điểm nổi bật: đầu tai nghe nhỏ, áp sát, nằm gọn trong tai, tăng giảm âm lượng với
                                    nút bấm dễ dàng, chiều dài dây tai nghe 1.2m, dễ dàng kết nối và nghe nhạc với điện
                                    thoại bỏ trong túi hoặc balo.
                                </p>
                                <p>
                                    Các sản phẩm tai nghe dây tiêu biểu tại ShopDunk đến từ thương hiệu Earpods của
                                    Apple, tối ưu hóa về chất lượng âm thanh, mang lại những bản nhạc có chất âm rõ
                                    ràng, trung thực và sâu lắng.
                                </p>
                                <br>
                                <p>
                                    Tai nghe sử dụng giao tiếp Bluetooth để kết nối không dây với các thiết bị di động,
                                    rất thuận tiện cho những người thường xuyên di chuyển.
                                    Điểm nổi bật: thiết kế tinh tế, toát lên vẻ thời trang, tích hợp công nghệ loại bỏ
                                    tiếng ồn, truyền tải âm thanh chân thực, hỗ trợ micro cho phép đàm thoại rảnh tay
                                    (không cần đụng đến điện thoại), nhỏ gọn, dễ dàng mang theo mọi nơi. Thiết kế hiện
                                    đại, kiểu dáng hợp thời trang, thể hiện được cá tính của người trẻ, cộng với màu sắc
                                    thu hút, đang là những điểm mạnh thu hút nhiều người dùng chuyển từ tai nghe dây
                                    sang tai nghe Bluetooth bất chấp giá cả có phần cao hơn.
                                </p>
                            </div>
                        </div>
                        <div class="product-full-description__item">
                            <h1 class="product-full-description__item-title">Tại sao người dùng cần đến sự hỗ trợ của
                                các thiết bị âm thanh?</h1>
                            <div class="product-full-description__item-detail">
                                <p>
                                    Nghe nhạc, xem phim với âm thanh không chỉ chân thực, sống động hơn, gia tăng sự
                                    thoải mái mà còn trong trẻo, rõ ràng, âm bass chi tiết.
                                </p>
                                <br>
                                <p>
                                    Các sản phẩm tai nghe duy trì sự riêng tư, mang lại trải nghiệm cá nhân thêm phần ấn
                                    tượng.
                                </p>
                                <br>
                                <p>
                                    Nhiều loại mang tính di động cao, dễ dàng mang theo bên mình khi di chuyển.
                                </p>
                                <br>
                                <p>
                                    Tích hợp nhiều công nghệ, tính năng hiện đại và hữu ích.
                                </p>
                                <br>
                                <p>
                                    Những loại tai nghe Bluetooth được chú trọng về kiểu dáng thiết kế cũng như màu sắc,
                                    tạo nên sự thời thượng, phù hợp phong cách giới trẻ
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="read-more-link"></div>
                </article>
            </div>
        </article>
    </section>
</x-layout>
