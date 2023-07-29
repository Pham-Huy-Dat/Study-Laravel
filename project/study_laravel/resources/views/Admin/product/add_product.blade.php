<x-layout-admin title="ADD prodcut">
{{-- <main> --}}
    <div class="main-add-product">
        <h5 class="mt-2">
            <a href="{{URL::to('/show_product')}}">
                <i class="fa-solid fa-circle-left"></i>
                Quay lại
            </a>
        </h5>
        <h3 class="my-1" style="text-align: center; font-weight: bold;">THÊM MỚI SẢN PHẨM</h3>

        <form action="{{URL::to('/add-product')}}" method="POST" role="form" enctype="multipart/form-data">
            @csrf
            <div class="form-group row mt-3">
                <label class="col-sm-2 col-form-label">Tên sản phẩm</label>
                <div class="col-sm-10">
                    <input name="Name_product" class="form-control" data-validation-error-msg="Hãy nhập tên sản phẩm" >
                </div>
            </div>
            <div class="form-group row mt-3">
                <label class="col-sm-2 col-form-label">Ảnh</label>
                <div class="col-sm-10">
                    <input class="form-control file-input" type="file" name="Image" data-validation-error-msg="Hãy thêm hình ảnh sản phẩm"/>
                    <img class="img-preview" src="./img.jpg" style="width: 100px" />
                </div>
            </div>

            <div class="form-group row mt-3">
                <label class="col-sm-2 col-form-label">Giá cũ</label>
                <div class="col-sm-10">
                    <input name="Discount" class="form-control" type="number" data-validation="number" data-validation-error-msg="Hãy nhập giá tiền cũ" >
                </div>
            </div>

            <div class="form-group row mt-3">
                <label class="col-sm-2 col-form-label">Giá mới</label>
                <div class="col-sm-10">
                    <input name="Price" class="form-control" type="number" data-validation="number" data-validation-error-msg="Hãy nhập giá tiền mới" >
                </div>
            </div>

            <div class="form-group row mt-3">
                <label class="col-sm-2 col-form-label">Mô tả</label>
                <div class="col-sm-10">
                    <textarea class="form-control" name="Discription" style="height: 100px"> </textarea>
                </div>
            </div>
            <div class="form-group row mt-3">
                <label class="col-sm-2 col-form-label">Ảnh mô tả</label>
                <div class="col-sm-10">
                    <input class="form-control file-input" type="file" name="Image_description" />
                    <img class="img-preview" src="./img.jpg" style="width: 100px" />
                </div>
            </div>
            <div class="form-group row mt-3">
                <label class="col-sm-2 col-form-label">Mô tả 2</label>
                <div class="col-sm-10">
                    <textarea class="form-control" name="Discription2" style="height: 100px"> </textarea>
                </div>
            </div>
            <div class="form-group row mt-3">
                <label class="col-sm-2 col-form-label">Ảnh mô tả 2</label>
                <div class="col-sm-10">
                    <input class="form-control file-input" type="file" name="Image_description2" />
                    <img class="img-preview" src="./img.jpg" style="width: 100px" />
                </div>
            </div>
            <div class="form-group row mt-3">
                <label class="col-sm-2 col-form-label">Dòng</label>
                <div class="col-sm-10">
                    <select class="form-control" name="IdCategory">
                        @foreach ($id_category as $key => $item)
                            <option value="{{$item->id}}">{{$item->name_category}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group row mt-3">
                <button type="button" onclick="validation()" class="btn btn-success btnSubmit">Thêm</button>
            </div>
        </form>

    </div>
{{-- </main> --}}

    <script>
        //-----------preview ảnh khi upload-----------
        const input = document.querySelectorAll('.file-input');
        const image = document.querySelectorAll('.img-preview');
        for (var item of image) {
            item.style.display = "none"; // khi chưa upload ảnh thì ẩn thẻ img
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
        const checkAllInput = document.querySelectorAll('input');
        const checkAllTextarea = document.querySelectorAll('textarea');
        const btnSubmit = document.querySelector('.btnSubmit');

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
                alert("Bạn chưa nhập đủ thông tin để thêm sản phẩm !")
            }

            if (check) {
                btnSubmit.setAttribute('type', 'submit');
            }
        }

    </script>
</x-layout-admin >
