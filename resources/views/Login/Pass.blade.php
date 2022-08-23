@extends('Login.Main')
@section('Login.Content')
<div class="row g-0 container">
    <div class="col-lg-5 bg-light">
      <div class="card-body p-md-4 mx-md-5">

        <div class="text-center">
          <img class="img1" src=" img/Logo alta.png"
              alt="logo">
          <h4 class="mt-1 mb-5 pb-1"> </h4>
        </div>

        <form>
            <div class="text-center  ">
                <p class="fw-bold" href="Backend/#!">Đặt lại mật khẩu mới</p>
              </div>
              <p>Mật khẩu</p>
          <div class="form-outline mb-4">
            <input type="password"  id="password" class="form-control"
              placeholder=" " />
              <span class="show-btn"><i class="fas fa-eye-slash showspan1" onclick="passwordShow()" id="showEye" ></i>
              <span class="show-btn"><i class="fas fa-eye showspan1  " onclick="passwordHide()" id="hideEye"></i>
          </div>
          <p>Nhập lại mật khẩu</p>
          <div class="form-outline mb-4">
            <input type="password"  id="password1" class="form-control"
              placeholder=" " />
              <span class="show-btn"><i class="fas fa-eye-slash showspan2" onclick="passwordShow1()" id="showEye1" ></i>
              <span class="show-btn"><i class="fas fa-eye showspan2  " onclick="passwordHide1()" id="hideEye1"></i>
          </div>
          <div class="d-flex align-items-center justify-content-center pb-4">
            <button type="button" class="btn btn-warning text-light col-5"style="background:#FF9138">Xác nhận</button>
          </div>
              <div class="form-outline mb-4">
            </div>
          </div>
          <div class="form-outline mb-4">
        </div>
        </form>

      </div>
      <div class="form-outline mb-4">
    </div>
    </div>
    <div class="col-lg-6 d-flex align-items-center  ">
      <div class="text-white ">
         <img class="img3"  src="img/Frame.png">
      </div>

    </div>
  </div>
@endsection
