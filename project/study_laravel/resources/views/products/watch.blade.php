<x-layout title="watch">
    <section class="main">
        <article class="product-full">
            <div class="grid">
                <h1 class="product-full__tile">Watch</h1>
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
                                            src="frontend/img/BANNER/Watch/banner apple watch t4_Danh mục PC.jpeg"
                                            alt="banner"></a>
                                </div>
                                <div class="banner__item">
                                    <a class="banner__item-link" href="" target="_blank"><img
                                            class="banner__item-img"
                                            src="frontend/img/BANNER/Watch/Banner danh mục ncm.png" alt="banner"></a>
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
                            <a href="~/Home/Watch" class="product-list__link">Tất cả</a>
                        </li>
                        <li class="product-list__item">
                            <a href="~/Home/Watch?type=ultra" class="product-list__link ">Apple Watch Ultra</a>
                        </li>
                        <li class="product-list__item">
                            <a href="~/Home/Watch?type=series 8" class="product-list__link">Apple Watch Series 8</a>
                        </li>
                        <li class="product-list__item">
                            <a href="~/Home/Watch?type=series 7" class="product-list__link">Apple Watch Series 7</a>
                        </li>
                        <li class="product-list__item">
                            <a href="~/Home/Watch?type=series 6" class="product-list__link ">Apple Watch Series 6</a>
                        </li>
                        <li class="product-list__item">
                            <a href="~/Home/Watch?type=series 3" class="product-list__link">Apple Watch Series 3</a>
                        </li>
                        <li class="product-list__item">
                            <a href="~/Home/Watch?type=watch se" class="product-list__link ">Apple Watch SE</a>
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
                        @foreach ($watch as $item)
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
                        @if ($watch->lastPage() > 1)
                            <ul class="number-page__list">
                                {{-- <li class="number-page__list{{ $data->currentPage() == 1 ? ' disabled' : '' }}">
                                    <a href="{{ $data->url(1) }}">Previous</a>
                                </li> --}}
                                @for ($i = 1; $i <= $watch->lastPage(); $i++)
                                    <li class="number-page__item">
                                        <a href="{{ $watch->url($i) }}" class="number-page__item-link {{$i ?? "number-page__item-link--active"}} ">{{ $i }}</a>
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
                            <h1 class="product-full-description__item-title">Apple Watch là gì?</h1>
                            <div class="product-full-description__item-detail">
                                <p>
                                    Apple Watch là dòng đồng hồ thông minh được tạo ra bởi Apple Inc., ra mắt ngày 9
                                    tháng 9 năm 2014 với 3 bộ sưu tập Apple Watch Sport, Apple Watch, Apple Watch
                                    Edition. có nhiều chức năng thông minh mà đồng hồ thông thường không có như: cho
                                    phép người dùng theo dõi thể thao, các chức năng liên quan đến sức khỏe,…
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
                            <h1 class="product-full-description__item-title">Công nghệ trên đồng hồ thông minh Apple
                                Watch</h1>
                            <div class="product-full-description__item-detail">
                                <p>
                                    Được đầu tư chú trọng phát triển không kém các dòng sản phẩm khác, Apple không ngần
                                    ngại trang bị các công nghệ tiên tiến, hiện đại nhất trên Apple Watch. Qua từng
                                    phiên bản, chiếc đồng hồ này được cải tiến ngày càng hoàn thiện ưu việt hơn.
                                </p>
                            </div>
                        </div>
                        <div class="product-full-description__item">
                            <h1 class="product-full-description__item-title">Tính năng nổi bật của đồng hồ thông minh
                                Apple Watch</h1>
                            <div class="product-full-description__item-detail">
                                <p>
                                    Không chỉ mang đến nhiều ưu điểm về vẻ đẹp mà đồng hồ thông minh còn được nhiều
                                    người yêu thích bởi có nhiều tính năng thông minh. Sẽ không ngoa khi nói rằng Apple
                                    luôn dẫn đầu xu hướng và luôn đánh đúng tâm lý người tiêu dùng. Vì vậy chiếc đồng hồ
                                    Apple Watch mang đến nhiều tính năng thông minh làm hài lòng tuyệt đối yêu cầu khách
                                    hàng
                                </p>
                            </div>
                        </div>
                        <div class="product-full-description__item">
                            <h1 class="product-full-description__item-title">Giá của một chiếc Apple Watch là bao nhiêu?
                            </h1>
                            <div class="product-full-description__item-detail">
                                <p>
                                    Tùy vào từng phiên bản khác nhau, chiếc đồng hồ thông minh bạn lựa chọn sẽ có mức
                                    giá là khác nhau. Hiện tại, các dòng đồng hồ Apple Watch tại ShopDunk đang bán ra
                                    với giá chỉ từ 4.700.000đ.
                                </p>
                                <br>
                                <p>
                                    Như vậy, với các tính năng, công dụng, kiểu dáng thiết kế cũng như giá trị đến từ
                                    thương hiệu Apple có thể thấy mức giá bán đưa ra là hoàn toàn phù hợp. Chiếc đồng hồ
                                    này sẽ giúp thể hiện sự đẳng cấp của những khách hàng sở hữu nó trên cổ tay của
                                    mình.
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
