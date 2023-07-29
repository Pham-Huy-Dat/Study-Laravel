<x-layout title="Show To Cart">
    <div class="app">
        <section class="main">
            <div class="product-full">
                <div class="grid" style="display: flex">
                    @if (session()->has('message'))
                        <div class="alert alert-success">
                            {!! session()->get('message') !!}
                        </div>
                    @elseif(session()->has('error'))
                        <div class="alert alert-danger">
                            {!! session()->get('error') !!}
                        </div>
                    @endif
                    <form action="{{ URL::to('/save_checkout_customer') }}" method="POST" class="cart-form">
                        @csrf
                        <div class="cart-info">
                            <div>
                                <div class="cart-info__detail">
                                    {{-- <form action="{{URL::to('update-cart')}}" method="POST">
                                        @csrf --}}
                                            <div class="cart-info__detail-table">
                                                <table class="table-cart">
                                                    <colgroup>
                                                        <col width="20%">
                                                        <col width="35%">
                                                        <col width="25%">
                                                        <col width="15%">
                                                        <col width="5%">
                                                    </colgroup>
                                                    <thead>
                                                        <tr>
                                                            <th class="product-picture">Hình ảnh</th>
                                                            <th class="product"style="text-align: center">Tên sản phẩm</th>
                                                            <th class="unit-price">Giá bán</th>
                                                            <th class="quantity" style="text-align: center">Số lượng</th>
                                                            <th class="remove-from-cart"></th>
                                                        </tr>
                                                    </thead>
                                                    <?php
                                                    $content = Cart::content();
                                                    $total = 0;
                                                    ?>
                                                    {{-- @* RENDER ALL PRODUCT IN CART *@ --}}
                                                    <tbody>
                                                        @if (Cart::count() > 0)
                                                            @php
                                                                $total = 0;
                                                            @endphp
                                                            @foreach ($content as $item)
                                                                @php
                                                                    $subtotal = $item->price * $item->qty;
                                                                    if($subtotal){
                                                                        $total += $subtotal;
                                                                    }
                                                                @endphp
                                                                <tr>
                                                                    <td class="cart-product-picture">
                                                                        <a href="#" title="dua ve chi tiet sp">
                                                                            <img alt=""
                                                                                src="{{ URL::to('frontend/' . $item->options->image) }}">
                                                                        </a>
                                                                    </td>
        
                                                                    <td class="cart-product-title">
                                                                        <a href="{{ URL::to('/detail/' . $item->id) }}"
                                                                            title="{{ $item->name }}"
                                                                            class="cart-product-title__name">{{ $item->name }}</a>
                                                                    </td>
        
                                                                    <td class="cart-product-price">
                                                                        <span>
                                                                            {{ number_format($item->price, 0, ',', '.') . ' ' . '' }}₫
                                                                        </span>
                                                                    </td>
        
                                                                    <td class="cart-product-quantity">
                                                                        <ul class="cart-product-quantity__list">
                                                                            <li class="cart-product-quantity__item">
                                                                                <button type="button"
                                                                                    class="cart-product-quantity__item-link"
                                                                                    onclick="var result = document.getElementById('qty_' +{{ $item->id}}); var qty = result.value; if (!isNaN(qty) & qty > 1) result.value--; return false;">
                                                                                    <i class="minus fa-solid fa-minus"></i>
                                                                                </button>
                                                                            </li>
        
                                                                            <li class="cart-product-quantity__item">
                                                                                <input type="hidden"
                                                                                    value="{{ $item->id }}"
                                                                                    name="IdProduct" />
        
                                                                                <input type="text"
                                                                                    data-id="{{ $item->id }}"
                                                                                    class="txtQuantity"
                                                                                    value="{{ $item->qty }}"
                                                                                    id="qty_{{ $item->id }}" size="4"
                                                                                    maxlength="3"
                                                                                    name="cart_qty[{{$item->rowId}}]"
                                                                                    onkeypress="if ( isNaN(this.value + String.fromCharCode(event.keyCode) )) return false;"
                                                                                    onchange="if(this.value == 0)this.value=1;">
                                                                            </li>
        
                                                                            <li class="cart-product-quantity__item">
                                                                                <button type="button"
                                                                                    class="cart-product-quantity__item-link"
                                                                                    onclick="var result = document.getElementById('qty_' + {{$item->id}}); var qty = result.value; if(!isNaN(qty)) result.value++; return false;">
                                                                                    <i class="plus fa-solid fa-plus"></i>
                                                                                </button>
                                                                            </li>
                                                                        </ul>
                                                                    </td>
                                                                    {{-- @* BEGIN DELETE CART *@ --}}
                                                                    <td class="cart-product-edit">
                                                                        <ul class="cart-product-edit__list">
                                                                            <li class="cart-product-edit__item">
                                                                                <a
                                                                                    href="{{ URL::to('/delete-cart-product/' . $item->rowId) }}">Xóa</a>
                                                                            </li>
                                                                        </ul>
                                                                    </td>
                                                                    {{-- @* END DELETE *@ --}}
                                                                </tr>
                                                            @endforeach
                                                        @else
                                                            <tr>
                                                                <td colspan="5">
                                                                    <center>
                                                                        @php
                                                                            echo 'Làm ơn thêm sản phẩm vào giỏ hàng';
                                                                        @endphp
                                                                    </center>
                                                                </td>
                                                            </tr>
                                                        @endif
                                                    </tbody>
                                                    {{-- @* END RENDER CART *@ --}}
                                                </table>
                                            </div>
        
                                            {{-- @* BEGIN BTN OPTION -- UPDATE CART *@ --}}
                                            <div class="cart-info__detail-btn">
        
                                                <button type="button" style="margin-right: 20px; color:blue" id="btnUpdate">
                                                    <a href="">
                                                        Cập nhật giỏ hàng
                                                    </a>
                                                </button>
        
                                                <button style="color:blue" type="button">
                                                    <a href="{{ URL::to('/') }}">
                                                        Tiếp tục mua sắm
                                                    </a>
                                                </button>
                                            </div>
                                        </div>
                                    {{-- </form> --}}
                            </div>
                            {{-- @* INPUT INFORMATION RECEIVED *@ --}}
                            <div class="cart-info__title">Thông tin người nhận</div>
                            {{-- <form action="{{ URl::to('/save_checkout_customer') }}" method="POST"> --}}
                                {{ csrf_field() }}
                                <div class="cart-info__billing">
                                    <h4>Thông tin người dùng</h4>
                                    <input class="cart-info__billing-name" type="text" placeholder="Tên"
                                        name="NameCus" required>

                                    <div class="cart-info__billing-contact">
                                        <input type="text" placeholder="Số điện thoại" name="phone" required>
                                        <input type="text" placeholder="Email" name="email">
                                    </div>

                                    <h4>Nơi nhận hàng</h4>

                                    <input class="cart-info__billing-downtown" type="text"
                                        placeholder="Tỉnh, Thành phố" name="city" required>

                                    <div class="cart-info__billing-address">
                                        <input type="text" placeholder="Quận, Huyện" name="district" required>
                                        <input type="text" placeholder="Tên đường, Số nhà" name="commune" required>
                                    </div>
                                </div>
                            {{-- </form> --}}
                        </div>

                        {{-- @* END INPUT RECEIVED *@ --}}
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
                                                        {{ number_format($total, 0, ',', '.') . ' ' . '₫' }}
                                                    </td>
                                                </tr>
                                                <tr class="value-summary">
                                                    <td>
                                                        <label>Tổng chính:</label>
                                                    </td>
                                                    <td>
                                                        <span>
                                                            {{ number_format($total, 0, ',', '.') . ' ' . '₫' }}
                                                        </span>
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
                                            <span>Tôi đã đọc và đồng ý với
                                                <a href="">điều khoản và điều kiện</a> của websites
                                            </span>
                                        </div>
                                    </div>
                                    <?php
                                        $customer_id = Session::get('customer_id');
                                        if($customer_id == null){
                                    ?>

                                    <div class="cart-policy__btn">
                                        <button type="button"
                                            onclick="location.href = '{{ URL::to('/login') }}'">Tiến
                                            hành đặt hàng </button>
                                    </div>
                                    <?php
                                    }
                                    else
                                    {
                                        ?>
                                    <div class="cart-policy__btn">
                                        <button type="submit">Tiến hành đặt hàng</button>
                                    </div>
                                    <?php
                                    }
                                        ?>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
</x-layout>
