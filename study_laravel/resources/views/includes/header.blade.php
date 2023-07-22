<header>
    <div class="header__fullscreen-pc">
        <div class="header__logo" >
            <a href="{{URL::to('/')}}">
                <img alt="ShopDunk" src="frontend/img/logo.png" style="background: #777777">
            </a>
        </div>

        <div class="header__menu">
            <ul class="header__menu-list">
                <li class="header__menu-list-item">
                    <a class="header__menu-link" href="{{URL::to('/product.iphone')}}">iPhone</a>
                </li>
                <li class="header__menu-list-item">
                    <a class="header__menu-link" href="{{URL::to('/product.ipad')}}">iPad</a>
                </li>
                <li class="header__menu-list-item">
                    <a class="header__menu-link" href="{{URL::to('/product.mac')}}">Mac</a>
                </li>
                <li class="header__menu-list-item">
                    <a class="header__menu-link" href="{{URL::to('/product.watch')}}">Watch</a>
                </li>
                <li class="header__menu-list-item">
                    <a class="header__menu-link" href="{{URL::to('/product.sound')}}">Sound</a>
                </li>
            </ul>
        </div>

        <div class="header__links-wrapper">
            <div class="header__search">
                <a class="header__search-link js-modal-search-icon" href="#">
                    <i class="header-icon ti-search"></i>
                </a>
                <!-- Modal search start -->
                <div class="modal-search js-modal-search">
                    <div class="modal-container js-modal-container">
                        <form class="search-box" action="" method="get">
                            <input class="search-box__text" type="text" name="search"
                                placeholder="Tìm kiếm sản phẩm">
                            <button class="search-box__btn" type="submit"></button>
                        </form>
                    </div>
                </div>
                <!-- Modal search end -->
            </div>
            <div class="header__cart">
                <a class="header__search-link js-modal-search-icon" href="{{URL::to('/show-to-cart')}}">
                    <i class="header-icon ti-bag"></i>
                    <span class="header__cart-number">
                        <?php 
                            $content = Cart::count();
                            if($content){
                                echo $content;
                            }
                        ?>
                        
                    </span>
                </a>
            </div>
            <div class="header__user">
                <a class="header__search-link js-modal-search-icon" href="#">
                    <i class="header-icon ti-user"></i>
                </a>
                <div class="header__user-navbar">
                    <?php
                        $customer_id = Session::get('customer_id');
                        if($customer_id == null){
                    ?>

                    <ul class="header__user-navbar-list">
                        <li class="header__user-item">
                            <a href="{{url::to('/register')}}">Tạo tài khoản ngay</a>
                        </li>
                        <li class="header__user-item">
                            <a type="submit" href="{{url::to('/login')}}">Đăng nhập {{$customer_id}}</a>
                        </li>
                    </ul>

                    <?php
                        }else{
                    ?>

                    <ul class="header__user-navbar-list">
                        <li class="header__user-item">
                            <a href="{{url::to('/register')}}">Tạo tài khoản ngay</a>
                        </li>
                        <li class="header__user-item">
                            <a type="submit" href="{{url::to('/logout')}}">
                                <i class="fa-solid fa-arrow-right-from-bracket" title="Đăng xuất"></i> &ensp; Đăng xuất
                            
                            </a>
                        </li>
                    </ul>

                    <?php
                        }
                    ?>

                </div>
            </div>
        </div>
    </div>
</header>
