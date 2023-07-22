@extends('layout_admin')
@section('admin_content')
<main>
    <div class="float-right m-2 filter-search">
        <div class="filter">
            <article class="product-sort">
                <ul class="product-list" style="overflow-x: unset; overflow-y: unset;">
                    <li class="product-list__item product-item--active">
                        <a href="~/Admin/HomeAdmin/Index" class="product-list__link @Html.Raw(ViewBag.type == null ? "product-item__link--active" : "")">Tất cả</a>
                    </li>
                    <li class="product-list__item">
                        <a href="~/Admin/HomeAdmin/Index?type=1" class="product-list__link @Html.Raw(ViewBag.type == 1 ? "product-item__link--active" : "")">Iphone</a>
                    </li>
                    <li class="product-list__item">
                        <a href="~/Admin/HomeAdmin/Index?type=2" class="product-list__link @Html.Raw(ViewBag.type == 2 ? "product-item__link--active" : "")">Ipad</a>
                    </li>
                    <li class="product-list__item">
                        <a href="~/Admin/HomeAdmin/Index?type=3" class="product-list__link @Html.Raw(ViewBag.type == 3 ? "product-item__link--active" : "")">Mac</a>
                    </li>
                    <li class="product-list__item">
                        <a href="~/Admin/HomeAdmin/Index?type=4" class="product-list__link @Html.Raw(ViewBag.type == 4 ? "product-item__link--active" : "")">Watch</a>
                    </li>
                    <li class="product-list__item">
                        <a href="~/Admin/HomeAdmin/Index?type=5" class="product-list__link @Html.Raw(ViewBag.type == 5 ? "product-item__link--active" : "")">Âm Thanh</a>
                    </li>
                </ul>
            </article>
        </div>
        <div class="search">
            <a href="{{URL::to('/add-product')}}" class="btn btn-success">Thêm mới sản phẩm</a>
        </div>
    </div>

    <form action="~/Admin/HomeAdmin/">
        <div class="input-group rounded m-2">
            <input type="search" class="form-control rounded" name="search" placeholder="Tìm kiếm sản phẩm..." value="" />
            <button type="submit" class="input-group-text border-0 mx-2">
                <i class="fas fa-search"></i>
            </button>
        </div>
    </form>


    {{-- @if ()
    {
        <div style="text-align-last: center; margin-top: 50px;">
            <h3>Không tìm thấy sản phẩm nào khớp với tìm kiếm của bạn !</h3>
        </div>
    } --}}
    
    
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
                            <img src="{{URL::to('/frontend/'. $item->image)}}" style="width:100px">
                        </td>
                        <td>    {{ number_format($item->price, 0, ',', '.') . ' ' . '' }}₫   </td>
                        <td>    {{ number_format($item->discount, 0, ',', '.') . ' ' . '' }}₫   </td>
                        <td>
                            @switch ($item->id_category)
                                case 1:<span>Iphone</span> break;
                                case 2:<span>Ipad</span> break;
                                case 3:<span>Mac</span> break;
                                case 4:<span>Watch</span>break;
                                case 5:<span>Sound</span>break;
                            @endswitch
                        </td>
                        <td>
                            <a href="{{URL::to('/edit_prodcut/'.$item->id)}}" class="btn btn-primary">Sửa</a>
                            <a class="btn btn-danger" onclick="confirmDeleteProduct($item->id)">Xoá</a>
                        </td>
                    </tr>
                </tbody>
            @endforeach
        </table>
    

    <div class="product-full-item-detail__number-page">
        <ul class="number-page__list">
            <li class="number-page__item">
                {{$data->links()}}
            </li>
        </ul>
    </div>

    <input class="actionProduct" type="hidden" value="@ViewBag.actionProduct" />
    <div id="snackbar">@ViewBag.message <img src="~/@ViewBag.actionProduct" style="width: 80px" /> </div>
</main>

    <script>
        //------------sau khi thêm 1 sản phẩm thành công thì sẽ hiện toast message này lên-------------
        let actionProduct = document.querySelector('.actionProduct').value;
        if (actionProduct.length > 0) {
            toastMessage();
        }

        function toastMessage() {
            var x = document.getElementById("snackbar");
            x.className = "show";
            setTimeout(function () { x.className = x.className.replace("show", ""); }, 5000);
        }

        //------------xác nhận trước khi xoá------------
        function confirmDeleteProduct(id) {
            const checkConfirm = confirm("Bạn chắc chắn xoá sản phẩm này chứ ?");
            if (checkConfirm) {
                window.location.href = `{{URL::to('/admin_delete_prodcut/'. ${id})}}`;
            }
        }
    </script>

@endsection