<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Study Laravel' }} | Study Laravel</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('frontend/icon/themify-icons/themify-icons.css') }}">

    <link rel="stylesheet" href="{{ asset('frontend/css/base.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
    <link rel="icon" type="image/x-icon" href="" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <header>
        @include('includes/header')
    </header>

    <main>
        {{ $slot }}
    </main>

    <footer>
        @include('includes/footer')
    </footer>

    <script src="{{ asset('frontend/js/main.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>

    {{-- <script type="text/javascript">
    //     $(document).ready(function() {
    //         $('.add-to-cart').click(function() {

    //             var _token = $('input[name="_token"]').val();

    //             var product_id = document.getElementById("IdProduct");
    //             var product_qty = document.getElementById("qty");

    //             $.ajax({
    //                 url: '{{ url('/add-cart-ajax') }}',
    //                 method: 'POST',
    //                 data: {
    //                     product_id: product_id,
    //                     product_qty: product_qty,
    //                     _token: _token
    //                 },
    //                 success: function() {
    //                     swal({
    //                             title: "Đã thêm sản phẩm vào giỏ hàng",
    //                             text: "Bạn có thể mua hàng tiếp hoặc tới giỏ hàng để tiến hành thanh toán",
    //                             showCancelButton: true,
    //                             cancelButtonText: "Xem tiếp",
    //                             confirmButtonClass: "btn-success",
    //                             confirmButtonText: "Đi đến giỏ hàng",
    //                             closeOnConfirm: false
    //                         },
    //                         function() {
    //                             window.location.href = "{{url('/gio-hang')}}";
    //                         });
    //                 }

    //             });
    //         });
    //     });
    // </script> --}}
</body>

</html>
