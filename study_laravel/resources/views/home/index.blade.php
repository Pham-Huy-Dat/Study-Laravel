<x-layout title="Home">
    <section class="main">
        <article class="banner">
            <div class="slider">
                <div class="slider-prev">
                    <i class="fa fa-angle-left slider-prev__icon"></i>
                </div>
                <ul class="slider-dots">
                    <li class="slider-dot-item active" data-index="0"></li>
                    <li class="slider-dot-item" data-index="1"></li>
                    <li class="slider-dot-item" data-index="2"></li>
                    <li class="slider-dot-item" data-index="3"></li>
                    <li class="slider-dot-item" data-index="4"></li>
                </ul>
                <div class="slider-wrapper">
                    <div class="slider-main">
                        <div class="banner__item">
                            <a class="banner__item-link" href="" target="_blank"><img class="banner__item-img"
                                    src="frontend/img/BANNER/banner iphone 14 Pro Max PC3.jpeg" alt="banner"></a>
                        </div>
                        <div class="banner__item">
                            <a class="banner__item-link" href="" target="_blank"><img class="banner__item-img"
                                    src="frontend/img/BANNER/banner apple watch t5_Banner PC.jpeg" alt="banner"></a>
                        </div>
                        <div class="banner__item">
                            <a class="banner__item-link" href="" target="_blank"><img class="banner__item-img"
                                    src="frontend/img/BANNER/banner ipad gen 9 PC.png" alt="banner"></a>
                        </div>
                        <div class="banner__item">
                            <a class="banner__item-link" href="" target="_blank"><img class="banner__item-img"
                                    src="frontend/img/BANNER/banner khai trương LB-PC.jpeg" alt="banner"></a>
                        </div>
                        <div class="banner__item">
                            <a class="banner__item-link" href="" target="_blank"><img class="banner__item-img"
                                    src="frontend/img/BANNER/banner macbook air t5_Banner PC.jpeg" alt="banner"></a>
                        </div>

                    </div>
                </div>
                <div class="slider-next">
                    <i class="fa fa-angle-right slider-next__icon"></i>
                </div>
            </div>
        </article>

        <article class="bonus-banner">
            <section class="grid">
                <div class="topic">
                    <a href="" class="topic__link" target="_blank">
                        <img class="topic__link-img" src="frontend/img/BONUS BANNER/Bonus banner-03.png" alt="BONUS BANNER">
                    </a>
                    <a href="" class="topic__link" target="_blank">
                        <img class="topic__link-img" src="frontend/img/BONUS BANNER/Bonus banner-02.png" alt="BONUS BANNER">
                    </a>
                    <a href="" class="topic__link" target="_blank">
                        <img class="topic__link-img" src="frontend/img/BONUS BANNER/Bonus banner-01.png" alt="BONUS BANNER">
                    </a>
                </div>
            </section>
        </article>

        <article class="home-page-category">
            <section class="grid">
                <div class="category">
                    <div class="category-list">
                        <h2 class="category-heading"><a href="{{'/product.iphone'}}">iPhone</a></h2>
                        <!-- Product items -->
                        <div class="grid__row">
                            @foreach ($iphone as $key => $product)
                                <div class="grid__column-4">
                                    <div class="home-product-item">
                                        <div class="home-product__img">
                                            <a class="home-product__img-link" href="{{ URL::to('/detail/'.$product->id)}}">
                                                <img src="{{URL::to( 'frontend/'. $product->image )}}" alt="{{ $product->name_product }}">
                                            </a>
                                        </div>
                                        <div class="home-product__detail">
                                            <h3 class="home-product__detail-name"><a
                                                    href="{{ URL::to('/detail/'.$product->id) }}">{{$product->name_product }}</a></h3>
                                            <div class="home-product__detail-price">
                                                <span
                                                    class="home-product__detail-price-new">{{ number_format($product->price, 0, ',', '.') . ' ' . '₫' }}</span>
                                                <span
                                                    class="home-product__detail-price-old">{{ number_format($product->discount, 0, ',', '.') . ' ' . '₫' }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="show-all">
                        <a href="{{URL::to('/product.iphone')}}" class="show-all__link">Xem tất cả iPhone
                            <i class="show-all__icon fa-solid fa-chevron-right"></i>
                        </a>
                    </div>

                    <div class="category-list">
                        <h2 class="category-heading"><a href="{{'/product.ipad'}}">iPad</a></h2>
                        <!-- Product items -->
                        <div class="grid__row">
                            @foreach ($ipad as $key => $product)
                                <div class="grid__column-4">
                                    <div class="home-product-item">
                                        <div class="home-product__img">
                                            <a class="home-product__img-link" href="{{ URL::to('/detail/'.$product->id)}}">
                                                <img src="{{URL::to( 'frontend/'. $product->image )}}" alt="{{ $product->name_product }}">
                                            </a>
                                        </div>
                                        <div class="home-product__detail">
                                            <h3 class="home-product__detail-name"><a
                                                    href="{{ URL::to('/detail/'.$product->id)}}">{{$product->name_product }}</a></h3>
                                            <div class="home-product__detail-price">
                                                <span
                                                    class="home-product__detail-price-new">{{ number_format($product->price, 0, ',', '.') . ' ' . '₫' }}</span>
                                                <span
                                                    class="home-product__detail-price-old">{{ number_format($product->discount, 0, ',', '.') . ' ' . '₫' }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="show-all">
                        <a href="{{'product.ipad'}}" class="show-all__link">Xem tất cả iPad
                            <i class="show-all__icon fa-solid fa-chevron-right"></i>
                        </a>
                    </div>
                    <div class="category-list">
                        <h2 class="category-heading"><a href="{{'product.mac'}}">Mac</a></h2>
                        <!-- Product items -->
                        <div class="grid__row">
                            @foreach ($mac as $key => $product)
                                <div class="grid__column-4">
                                    <div class="home-product-item">
                                        <div class="home-product__img">
                                            <a class="home-product__img-link" href="{{ URL::to('/detail/'.$product->id) }}">
                                                <img src="{{URL::to( 'frontend/'. $product->image )}}" alt="{{ $product->name_product }}">
                                            </a>
                                        </div>
                                        <div class="home-product__detail">
                                            <h3 class="home-product__detail-name"><a
                                                    href="{{ URL::to('/detail/'.$product->id) }}">{{$product->name_product }}</a></h3>
                                            <div class="home-product__detail-price">
                                                <span
                                                    class="home-product__detail-price-new">{{ number_format($product->price, 0, ',', '.') . ' ' . '₫' }}</span>
                                                <span
                                                    class="home-product__detail-price-old">{{ number_format($product->discount, 0, ',', '.') . ' ' . '₫' }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="show-all">
                        <a href="{{'product.mac'}}" class="show-all__link">Xem tất cả Mac
                            <i class="show-all__icon fa-solid fa-chevron-right"></i>
                        </a>
                    </div>

                    <div class="category-list">
                        <h2 class="category-heading"><a href="{{'product.watch'}}">Watch</a></h2>
                        <!-- Product items -->
                        <div class="grid__row">
                            @foreach ($watch as $key => $product)
                                <div class="grid__column-4">
                                    <div class="home-product-item">
                                        <div class="home-product__img">
                                            <a class="home-product__img-link" href="{{ URL::to('/detail/'.$product->id) }}">
                                                <img src="{{URL::to( 'frontend/'. $product->image )}}" alt="{{ $product->name_product }}">
                                            </a>
                                        </div>
                                        <div class="home-product__detail">
                                            <h3 class="home-product__detail-name"><a
                                                    href="{{ URL::to('/detail/'.$product->id) }}">{{$product->name_product }}</a></h3>
                                            <div class="home-product__detail-price">
                                                <span
                                                    class="home-product__detail-price-new">{{ number_format($product->price, 0, ',', '.') . ' ' . '₫' }}</span>
                                                <span
                                                    class="home-product__detail-price-old">{{ number_format($product->discount, 0, ',', '.') . ' ' . '₫' }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="show-all">
                        <a href="{{'product.watch'}}" class="show-all__link">Xem tất cả Watch
                            <i class="show-all__icon fa-solid fa-chevron-right"></i>
                        </a>
                    </div>

                    <div class="category-list">
                        <h2 class="category-heading"><a href="{{'product.sound'}}">Âm thanh</a></h2>
                        <!-- Product items -->
                        <div class="grid__row">
                            @foreach ($sound as $key => $product)
                                <div class="grid__column-4">
                                    <div class="home-product-item">
                                        <div class="home-product__img">
                                            <a class="home-product__img-link" href="{{ URL::to('/detail/'.$product->id) }}">
                                                <img src="{{URL::to( 'frontend/'. $product->image )}}" alt="{{ $product->name_product }}">
                                            </a>
                                        </div>
                                        <div class="home-product__detail">
                                            <h3 class="home-product__detail-name"><a
                                                    href="{{ URL::to('/detail/'.$product->id) }}">{{$product->name_product }}</a></h3>
                                            <div class="home-product__detail-price">
                                                <span
                                                    class="home-product__detail-price-new">{{ number_format($product->price, 0, ',', '.') . ' ' . '₫' }}</span>
                                                <span
                                                    class="home-product__detail-price-old">{{ number_format($product->discount, 0, ',', '.') . ' ' . '₫' }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="show-all">
                        <a href="{{'product.sound'}}" class="show-all__link">Xem tất cả Âm thanh
                            <i class="show-all__icon fa-solid fa-chevron-right"></i>
                        </a>
                    </div>
                </div>
            </section>
        </article>

        <article class="banner-home">
            <section class="grid">
                <div class="banner-home-product">
                    <div class="banner-home-product__item">
                        <a href="#" class="banner-home-product__link">
                            <img class="banner-home-product__img" src="frontend/img/BANNER/banner-home-product.jpeg"
                                alt="footer">
                        </a>
                    </div>
                </div>
            </section>
        </article>
    </section>
</x-layout>
