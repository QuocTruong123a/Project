@extends('Login.Main')
@section('Login.Content')
<div class="row g-0">
    <div class="col-lg-5 bg-light">
      <div class="card-body p-md-5 mx-md-4">

        <div class="text-center">
          <img class="img1" src="img/Logo alta.png"  >
          <h4 class="mt-1 mb-5 pb-1"> </h4>
        </div>

        <form>
          <p>Tên Đăng nhập *</p>

          <div class="form-outline mb-4">
            <input type="text" id="form2Example11" class="form-control"
              placeholder=" " />
          </div>
          <p>Mật khẩu *</p>
          <div class="form-outline mb-4">
            <input type="password" id="password" class="form-control " />

            <span class="show-btn"><i class="fas fa-eye-slash showspan " onclick="passwordShow()" id="showEye" ></i>
            <span class="show-btn "><i class="fas fa-eye showspan " onclick="passwordHide()" id="hideEye"></i>
              <a class="text-muted" href="{{ route('Reset_password') }}">Quên mật khẩu?</a>
          </div>

          <div class="d-flex align-items-center justify-content-center pb-4">
            <button type="button" class="btn btn-warning text-light" style="background:#FF9138">Đăng nhập</button>
          </div>

        </form>

      </div>

    </div>
    <div class="col-lg-6 d-flex align-items-center  ">
      <div class="text-white ">
         <img class="img2"  src="img/Group 341.png">
      </div>
      <p class="text1"> Hệ thống</p>
      <p class="text2"> QUẢN LÝ XẾP HÀNG</p>
    </div>
  </div>
@endsection
