<x-layout-admin title="Order">
        <h5 class="mt-2 mx-2">
            <a href="{{URL::to('/order-admin')}}">
                <i class="fa-solid fa-circle-left"></i>
                Quay lại
            </a>
        </h5>
        <table class="table table-hover mx-2" style="text-align: center; vertical-align: baseline;">
            <thead>
                <tr>
                    <th>Tên sản phẩm</th>
                    <th>Ảnh</th>
                    <th>Giá</th>
                    <th>Số lượng</th>
                    <th>Tổng tiền</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($order_details as $key => $item)
                    <tr>
                        @foreach ($info_product as $item_pro)
                            <td style="width: 20%;">
                                <span>{{$item_pro->name_product}}</span>
                            </td>
                            <td>
                                <img src="{{URl::to('/frontend/'.$item_pro->image)}}" alt="img-order-detail" style="width: 120px">
                            </td>
                        @endforeach
                        <td>
                            <span> {{ number_format($item->price_sale, 0, ',', '.') . ' ' . '' }}₫ </span>
                        </td>
                        <td>
                            <span>{{$item->quantity_number}}</span>
                        </td>
                        <td>
                            <span style="font-weight: 500; color: #0066CC"> {{ number_format($item->price_sale * $item->quantity_number, 0, ',', '.') . ' ' . '' }}₫ </span>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        @foreach ($info_order as $key => $item_cus)
            <h3 class="mx-2">Tổng đơn: <span style="color: #0066CC; font-weight:700">{{ number_format($item_cus->total_money, 0, ',', '.') . ' ' . '' }}₫</span> </h3>
            <h5 class="mx-2 mt-5" >Tên Khách Hàng: <span style="color: #018576; font-size:20px; font-weight:700">{{$item_cus->name_customer}}</span> </h5>
            <h5 class="mx-2 mt-2">Số điện thoại: <span style="color: #018576; font-size:20px; font-weight:700">{{$item_cus->phone}}</span></h5>
            <h5 class="mx-2 mt-2">Email:<span style="color: #018576; font-size:20px; font-weight:700">{{$item_cus->email}}</span> </h5>
            <h5 class="mx-2 mt-2">Địa chỉ: <span style="color: #018576; font-size:20px; font-weight:700">{{$item_cus->address}}</span></h5>
        @endforeach
    

        


</x-layout-admin>