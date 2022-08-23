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
                <p class="fw-bold" href="Backend/#!">Đặt lại mật khẩu</p>
                <p class="" href="Backend/#!">Vui lòng nhập email để đặt lại mật khẩu của bạn *</p>
              </div>
          <div class="form-outline mb-4">
            <input type="text" id="form2Example11" class="form-control"
              placeholder=" " />
          </div>
          <div class="d-flex align-items-center justify-content-center pb-6">
            <div class="container px-4">
                <div class="row gx-4">
                  <div class="col">
                    <a type="button"n href="{{ route('Login') }}" class="btn btn-outline-warning col-8 ">Hủy</a>
                  </div>
                  <div class="col">
                    <button type="button" class="btn btn-warning col-8 text-light" style="background:#FF9138">Tiếp tục</button>
                  </div>
                  <div class="form-outline mb-4">
                    <h4 class="mt-1 mb-5 pb-1"> </h4>
                </div>
                </div>
                <div class="form-outline mb-4">
                </div>
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
