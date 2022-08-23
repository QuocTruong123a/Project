<!DOCTYPE html>
<html lang="en">
@include('Login.Head')
<body>
    <section class="  gradient-form" style="background-color: #eee;  ">
        <div class="container py-5  ">
          <div class="row d-flex justify-content-center align-items-center  ">
            <div class="col-xl-16">
              <div class="card rounded-3 text-black">

                @yield('Login.Content')
              </div>
            </div>
          </div>
        </div>
      </section>
     @include('Login.Script')
     
</body>
</html>
