{{-- @extends('layout_admin') --}}
<x-layout-admin title="All prodcut">
    {{-- <main> --}}
    <div class="float-right m-2 filter-search">
        <div class="filter">
            <article class="product-sort">
                <ul class="product-list" style="overflow-x: unset; overflow-y: unset;">
                    <li class="product-list__item product-item--active">
                        <a href="" class="product-list__link">Tất cả</a>
                    </li>
                    <li class="product-list__item">
                        <a href="" class="product-list__link ">Iphone</a>
                    </li>
                    <li class="product-list__item">
                        <a href="" class="product-list__link">Ipad</a>
                    </li>
                    <li class="product-list__item">
                        <a href="" class="product-list__link ">Mac</a>
                    </li>
                    <li class="product-list__item">
                        <a href="" class="product-list__link ">Watch</a>
                    </li>
                    <li class="product-list__item">
                        <a href="" class="product-list__link">Âm Thanh</a>
                    </li>
                </ul>
            </article>
        </div>
        <div class="search">
            <a href="{{ URL::to('/add-product') }}" class="btn btn-success">Thêm mới sản phẩm</a>
        </div>
    </div>

    <form action="">
        <div class="input-group rounded m-2">
            <input type="search" class="form-control rounded" name="search" placeholder="Tìm kiếm sản phẩm..."
                value="" />
            <button type="submit" class="input-group-text border-0 mx-2">
                <i class="fas fa-search"></i>
            </button>
        </div>
    </form>
    <?php
    $message = Session::get('message');
    if ($message) {
        echo '<span class="text-alert">' . $message . '</span>';
        Session::put('message', null);
    }
    ?>
    <table class="table table-hover mx-2" style="text-align: center; vertical-align: baseline;">

        <thead>
            <tr>
                <th>Tên sản phẩm</th>
                <th>Ảnh</th>
                <th>Giá mới</th>
                <th>Giá Cũ</th>
                <th>Dòng</th>
                <th>Thao tác</th>
            </tr>
        </thead>
        @foreach ($data as $item)
            <tbody>
                <tr>
                    <td style="width: 20%;">{{ $item->name_product }}</td>
                    <td>
                        <img src="{{ URL::to('/frontend/' . $item->image) }}" style="width:100px">
                    </td>
                    <td> {{ number_format($item->price, 0, ',', '.') . ' ' . '' }}₫ </td>
                    <td> {{ number_format($item->discount, 0, ',', '.') . ' ' . '' }}₫ </td>
                    <td>
                        @switch($item->id_category)
                            @case(1)
                                <span>
                                    Iphone
                                </span>
                            @break

                            @case(2)
                                <span>
                                    Ipad
                                </span>
                            @break

                            @case(3)
                                <span>
                                    Mac
                                </span>
                            @break

                            @case(4)
                                <span>
                                    Watch
                                </span>
                            @break
                            @case(5)
                                <span>
                                    Sound
                                </span>
                            @break
                            @default
                        @endswitch
                    </td>
                    <td>
                        <a href="{{ URL::to('/edit-product/'.$item->id) }}" class="btn btn-primary">Sửa</a>
                        <a class="btn btn-danger" onclick="confirmDeleteProduct($item->id)" href="{{ URL::to('/admin-delete-product/'.$item->id)}}">Xoá</a>
                    </td>
                </tr>
            </tbody>
        @endforeach
    </table>

    <div class="product-full-item-detail__number-page">
        @if ($data->lastPage() > 1)
            <ul class="number-page__list">
                {{-- <li class="number-page__list{{ $data->currentPage() == 1 ? ' disabled' : '' }}">
                    <a href="{{ $data->url(1) }}">Previous</a>
                </li> --}}
                @for ($i = 1; $i <= $data->lastPage(); $i++)
                    <li class="number-page__item">
                        <a href="{{ $data->url($i) }}"
                            class="number-page__item-link {{ $i ?? 'number-page__item-link--active' }} ">{{ $i }}</a>
                    </li>
                @endfor
                {{-- <li class="number-page__list{{ $data->currentPage() == $data->lastPage() ? ' disabled' : '' }}">
                    <a href="{{ $data->url($data->currentPage() + 1) }}">Next</a>
                </li> --}}
            </ul>
        @endif
    </div>

    <input class="actionProduct" type="hidden" value="" />
    <div id="snackbar"> <img src="" style="width: 80px" /> </div>
    {{-- </main> --}}

    <script>
        //------------sau khi thêm 1 sản phẩm thành công thì sẽ hiện toast message này lên-------------
        let actionProduct = document.querySelector('.actionProduct').value;
        if (actionProduct.length > 0) {
            toastMessage();
        }

        function toastMessage() {
            var x = document.getElementById("snackbar");
            x.className = "show";
            setTimeout(function() {
                x.className = x.className.replace("show", "");
            }, 5000);
        }

        // ------------xác nhận trước khi xoá------------
        function confirmDeleteProduct(id) {
            const checkConfirm = confirm("Bạn chắc chắn xoá sản phẩm này chứ ?");
            if (checkConfirm) {
                window.location.href = `{{ URL::to('/delete-product/${id}') }}`;
            }
        }
    </script>
</x-layout-admin>
