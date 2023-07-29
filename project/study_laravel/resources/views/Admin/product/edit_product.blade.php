<x-layout-admin title="Edit">
    <div class="main-add-product">
        <h5 class="mt-2">
            <a href="{{ URL::to('/show_product') }}">
                <i class="fa-solid fa-circle-left"></i>
                Quay lại
            </a>
        </h5>
        <h3 class="my-1" style="text-align: center; font-weight: bold;">SỬA SẢN PHẨM</h3>
        @foreach ($edit_product as $key => $pro)
            {{-- @if (is_object($pro) && property_exists($pro, 'id')) --}}
            <form action="{{ URL::to('/edit-product/'.$pro->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" value="{{ $pro->id }}" name="IdProduct" />
                <div class="form-group row mt-3">
                    <label class="col-sm-2 col-form-label">Tên sản phẩm</label>
                    <div class="col-sm-10">
                        <input name="Name_product" class="form-control" value="{{ $pro->name_product }}">
                    </div>
                </div>

                <div class="form-group row mt-3">
                    <label class="col-sm-2 col-form-label">Chọn ảnh mới </label>
                    <div class="col-sm-10">
                        <input class="form-control file-input allow-null" type="file" name="Image" />
                        <img class="img-preview" src="./img.jpg" style="width: 100px" />
                        <br />
                    </div>
                    <label class="col-sm-2 col-form-label">Ảnh cũ</label>
                    <div class="col-sm-10">
                        <img src="{{ URL::to('/frontend/'.$pro->image) }}" alt="Image" style="width: 100px" />
                    </div>
                </div>
                <div class="form-group row mt-3">
                    <label class="col-sm-2 col-form-label">Giá cũ</label>
                    <div class="col-sm-10">
                        <input name="Discount" class="form-control" type="number" value="{{ $pro->discount }}">
                    </div>
                </div>
                <div class="form-group row mt-3">
                    <label class="col-sm-2 col-form-label">Giá mới</label>
                    <div class="col-sm-10">
                        <input name="Price" class="form-control" type="number" value="{{ $pro->price }}">
                    </div>
                </div>
                <div class="form-group row mt-3">
                    <label class="col-sm-2 col-form-label">Mô tả</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" name="Discription" style="height: 100px">
                        {{ $pro->description }}
                    </textarea>
                    </div>
                </div>
                <div class="form-group row mt-3">
                    <label class="col-sm-2 col-form-label">Chọn ảnh mô tả mới</label>
                    <div class="col-sm-10">
                        <input class="form-control file-input allow-null" type="file" name="Image_description" />
                        <img class="img-preview" src="./img.jpg" style="width: 100px" />
                    </div>
                    <label class="col-sm-2 col-form-label">Ảnh mô tả cũ</label>
                    <div class="col-sm-10">
                        <img src="{{ URL::to('/frontend/'.$pro->image2) }}" alt="Image" style="width: 100px" />
                    </div>
                </div>
                <div class="form-group row mt-3">
                    <label class="col-sm-2 col-form-label">Mô tả 2</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" name="Discription2" style="height: 100px">
                        {{ $pro->description2 }}
                    </textarea>
                    </div>
                </div>
                <div class="form-group row mt-3">
                    <label class="col-sm-2 col-form-label">Chọn ảnh mô tả 2 mới</label>
                    <div class="col-sm-10">
                        <input class="form-control file-input allow-null" type="file" name="Image_description2" />
                        <img class="img-preview" src="./img.jpg" style="width: 100px" />
                    </div>
                    <label class="col-sm-2 col-form-label">Ảnh mô tả 2 cũ</label>
                    <div class="col-sm-10">
                        <img src="{{ URL::to('/frontend/'.$pro->image3) }}" alt="Image" style="width: 100px" />
                    </div>
                </div>
                <div class="form-group row mt-3">
                    <label class="col-sm-2 col-form-label">Dòng</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="IdCategory">
                            @foreach ($id_category as $key => $pro_category)
                                <option value="{{ $pro_category->id }}">{{ $pro_category->name_category }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group row mt-3">
                    <button type="button" onclick="validation()" class="btn btn-success btnSubmit">Sửa</button>
                </div>
            </form>
            {{-- @endif --}}
        @endforeach
    </div>

    <script>
        //-----------preview ảnh khi upload-----------
        const input = document.querySelectorAll('.file-input');
        const image = document.querySelectorAll('.img-preview');
        for (var pro of image) {
            pro.style.display = "none"; // khi chưa upload ảnh thì ẩn thẻ img
        }

        for (let i = 0; i < input.length; i++) {
            input[i].addEventListener('change', (e) => {
                console.log(e.target.files[0]);
                if (e.target.files.length) {
                    const src = URL.createObjectURL(e.target.files[0]);
                    image[i].src = src;
                    image[i].style.margin = " 10px 0 ";
                    image[i].style.display = "block"; // khi upload xong thì hiện lên
                }
            });
        }

        //-----------validation các input và textarea có bị rỗng trước khi được submit-----------
        const checkAllInput = document.querySelectorAll(
            'input:not(.allow-null)'
            ); // lấy hết input ngoại trừ ô input có class="allow-null" là không lấy, vì khi sửa sản phẩm có thể dùng lại ảnh cũ, không cần upload ảnh mới
        const checkAllTextarea = document.querySelectorAll('textarea');
        const btnSubmit = document.querySelector('.btnSubmit');

        console.log(checkAllInput);

        function validation() {
            let check = true;
            for (let i = 0; i < checkAllInput.length; i++) {
                if (checkAllInput[i].value.trim().length === 0)
                    check = false;
            }

            for (let i = 0; i < checkAllTextarea.length; i++) {
                if (checkAllTextarea[i].value.trim().length === 0)
                    check = false;
            }

            if (!check) {
                alert("Bạn chưa nhập đủ thông tin để sửa sản phẩm !")
            }

            if (check) {
                btnSubmit.setAttribute('type', 'submit');
            }

        }
    </script>
</x-layout-admin>
