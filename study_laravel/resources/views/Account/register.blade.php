<x-layout title="Register | Study Laravel">
    <section class="main" id="sign-up">
        <article class="grid registration-page">
            <div class="page-body">
                <div class="customer">
                    <div class="wrapper">
                        <img class="wrapper-img" src="frontend/img/Form/img_dangky.jpeg" alt="wrapper sign up">
                    </div>
                    <form class="form-signup" action="{{ URL::to('/register') }}" method="POST">
                        @csrf
                        <div class="form-signup__item">
                            <h1 class="form-signup__item-title">Đăng ký</h1>
                            <div class="form-signup__item-name">
                                <label class="label-signup">Họ và tên</label>
                                <input required class="input-singup" type="text" name="full_name">
                            </div>
                            <div class="form-signup__item-phone mb-15">
                                <label class="label-signup" for="your phone">Điện thoại</label>
                                <input required class="input-singup" type="tel" name="phone">
                            </div>
                            <div class="form-signup__item-username mb-15">
                                <label class="label-signup">Username</label>
                                <input required class="input-singup" type="text" name="user_name">
                            </div>
                            <div class="form-signup__item-password mb-15">
                                <label class="label-signup">Mật khẩu</label>
                                <input required class="input-singup" type="password" name="password">
                            </div>
                            <div class="form-signup__item-confirm-pass mb-15">
                                <label class="label-signup">Xác nhận mật khẩu</label>
                                <input required class="input-singup" type="password" name="cf_password">
                            </div>
                            <div class="form-signup__item-btn">
                                <button type="submit">Đăng ký</button>
                            </div>
                            <div class="buttons-forgot">
                                <label> Bạn đã có tài khoản? </label> <a href="{{url('login')}}" class="link_access">Đăng nhập ngay</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </article>
    </section>
</x-layout>