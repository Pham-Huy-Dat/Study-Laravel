<x-layout-admin title="Order">
    <table class="table table-hover mx-2" style="text-align: center; vertical-align: baseline;">
        <thead>
            <tr>
                <th>Thời gian đặt</th>
                <th>Tên người nhận</th>
                <th>Số điện thoại</th>
                <th>Địa chỉ</th>
                <th>Email</th>
                <th>Trạng thái</th>
                <th>Tổng đơn</th>
                <th>Chi tiết đơn hàng</th>
                <th>Duyệt đơn</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($all_order as $key => $item)
                <tr>
                    <td>
                        <span> {{$item->date_time}}</span>
                    </td>
                    <td>
                        <span>{{$item->name_customer}}</span>
                    </td>
                    <td>    
                        <span>{{$item->phone}}</span>
                    </td>
                    <td>
                        <span>{{$item->address}}</span>
                    </td>
                    <td>
                        <span>{{$item->email}}</span>
                    </td>
                    <td>
                        {{-- @* check Idstatus *@ --}}
                        @if ($item->id_status == 1)
                        
                            <span>Mới đặt</span>
                        
                        @elseif ($item->id_status == 2)
                        
                            <span>Đã duyệt</span>
                        
                        @elseif ($item->id_status == 5)
                        
                            <span>Đã hủy</span>
                        
                        @endif
                    </td>
                    <td>
                        <span>
                            {{ number_format($item->total_money, 0, ',', '.') . ' ' . '' }}₫ 
                        </span>
                    </td>
                    <td>
                        <a href="{{URL::to('/order-detail-admin/'.$item->id)}}" class="btn btn-info">Xem</a>
                    </td>
                    <td >
                        {{-- @* check Idstatus *@ --}}
                        @if ($item->id_status == 1) 
                            <a href="{{URL::to('/order-browsing/'.$item->id)}}" class="btn btn-primary" style="font-size: 10px">Duyệt</a>
                            <a href="{{URL::to('/cancel_order/'.$item->id)}}" class="btn btn-danger"style="font-size: 10px" >Huỷ</a>
                        @elseif ($item->id_status == 5) 
                            <a href="{{URL::to('/delete-order/'.$item->id)}}" class="btn btn-danger">Xoá</a>
                        @else
                            <p>Xong</p>
                        @endif
                    </td>
                </tr>
            
            @endforeach
        </tbody>
    </table>

    <div class="product-full-item-detail__number-page">
        @if ($all_order->lastPage() > 1)
            <ul class="number-page__list">
                {{-- <li class="number-page__list{{ $data->currentPage() == 1 ? ' disabled' : '' }}">
                    <a href="{{ $data->url(1) }}">Previous</a>
                </li> --}}
                @for ($i = 1; $i <= $all_order->lastPage(); $i++)
                    <li class="number-page__item">
                        <a href="{{ $all_order->url($i) }}"
                            class="number-page__item-link {{ $i ?? 'number-page__item-link--active' }} ">{{ $i }}</a>
                    </li>
                @endfor
                {{-- <li class="number-page__list{{ $data->currentPage() == $data->lastPage() ? ' disabled' : '' }}">
                    <a href="{{ $data->url($data->currentPage() + 1) }}">Next</a>
                </li> --}}
            </ul>
        @endif
    </div>


    <input class="actionProduct" type="hidden" value="@ViewBag.actionOrder" />
    <div id="snackbar"> @ViewBag.message <img src="~/@ViewBag.actionOrder" style="width: 80px" /> </div>

    <script>
        //------------Thông báo sau khi hủy đơn-------------
        let actionProduct = document.querySelector('.actionOrder').value;
        if (actionProduct.length > 0) {
            toastMessage();
        }

        function toastMessage() {
            var x = document.getElementById("#snackbar");
            x.className = "show";
            setTimeout(function () { x.className = x.className.replace("show", ""); }, 5000);
        }

        //------------xác nhận hủy đơn------------
        function btnCancalOrder(id) {
            const checkConfirm = confirm("Xác nhận hủy đơn hàng có id là: " + id + ".");
            if (checkConfirm) {
                window.location.href = `/Admin/SecureOrder/CancalOrder?id=${id}`;
            }
        }
    </script>
</x-layout-admin>