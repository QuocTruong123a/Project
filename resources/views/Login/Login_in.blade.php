<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <base href="{{ asset('') }}">
    <link  href="Queuing/Css/Login.css" rel="stylesheet">
    <link  href="Queuing/Css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <script src="Queuing/js/showpass.js"></script>
</head>
<body>
    <section class="  gradient-form" style="background-color: #eee;  ">
        <div class="container py-5  ">
          <div class="row d-flex justify-content-center align-items-center h-160">
            <div class="col-xl-16">
              <div class="card rounded-3 text-black">
                <div class="row g-0">
                  <div class="col-lg-5 bg-light">
                    <div class="card-body p-md-5 mx-md-4">

                      <div class="text-center">
                        <img class="img1" src="img/Logo alta.png"
                            alt="logo">
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
                          <input type="password" id="myInput" class="form-control " />
                          <span class="show-btn"><i class="fas fa-eye showspan" onclick="myFunction()"></i>
                            <a class="text-muted" href="#!">Quên mật khẩu?</a>
                        </div>

                        <div class="d-flex align-items-center justify-content-center pb-4">
                          <button type="button" class="btn btn-warning">Đăng nhập</button>
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
              </div>
            </div>
          </div>
        </div>
      </section>
      <script>
        function myFunction() {
          var x = document.getElementById("myInput");
          if (x.type === "password") {
            x.type = "text";
          } else {
            x.type = "password";
          }
        }
        </script>
</body>
</html>
