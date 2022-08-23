
<!DOCTYPE html>
<html lang="en">

@include('Admin.Detach.Head')

<body>
  <div class=" container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar navbar-light .bg-light col-lg-12 col-12 p-0   d-flex flex-row">
      <div class="bg-white text-center navbar-brand-wrapper">
        <a class="navbar-brand brand-logo" href="Backend/index.html"><img style="width:100px" src="img/Logo alta.png" /></a>
      </div>

      <div class="navbar-menu-wrapper d-flex align-items-center">

       <p class="text1" >{{ $titles }}<p class="text22">{{ $title }}</p></p>
        <ul class="navbar-nav ml-lg-auto d-flex align-items-center flex-row">
            <li class="nav-item">
                <img class="img3" src="img/Frame 271.png" />

              </li>
          <li class="nav-item">
            <a class="nav-link profile-pic" href="{{ route   ('personal_information') }}"><img class="rounded-circle" src="img/unsplash_Fyl8sMC2j2Q.png" alt=""> </a>
          </li>
          <li class="nav-item">
            Xin chào<br>
            <h6>Lê Quỳnh Ái Vân</h6>
          </li>
        </ul>
      </div>

    </nav>

    <!-- partial -->
    <div class="container-fluid">
      <div class="row row-offcanvas row-offcanvas-right">
        <!-- partial:partials/_sidebar.html -->
@include('Admin.Detach.Nav')

        <!-- partial -->
       @yield('content')
        <!-- partial:partials/_footer.html -->


        <!-- partial -->
      </div>
    </div>

  </div>

@include('Admin.Detach.Script')
</body>

</html>
