<nav class="bg-white sidebar sidebar-offcanvas" id="sidebar">
    <div class="user-info">

    </div>
    <ul class="nav">
      <li class="nav-item ">
        <a class="nav-link nav"  href="{{ route('dashboard') }}">
          <img src="img/element-4.png"   alt="">
          <span class="menu-title ">Dashboard</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link nav" href="{{ route('device') }}">
          <img src="img/monitor.png" alt="">
          <span class="menu-title">Thiêt bị</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('service') }}">
          <img src="img/Group 304.png" alt="">
          <span class="menu-title">Dịch vụ</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('number') }}">
          <img src="img/fi_layers.png" alt="">
          <span class="menu-title">Cấp số</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('report') }}">
          <img src="img/Frame1.png" alt="">
          <span class="menu-title">Báo cáo</span>
        </a>
      </li>
      {{-- <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#sample-pages" aria-expanded="false" aria-controls="sample-pages">
          <img src="img/setting.png" alt="">
          <span class="menu-title">Cài đặt hệ thống <i class="fa fa-sort-down"></i></span>

        </a>
      </li> --}}
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#sample-pages" aria-expanded="false" aria-controls="sample-pages">
            <img src="img/setting.png" alt="">
          <span class="menu-title">Cài đặt hệ thông<i class="fa fa-ellipsis-v" aria-hidden="true"></i></span>
        </a>
        <div class="collapse" id="sample-pages">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item">
              <a class="nav-link" href="{{ route('role') }}">
              Quản lý vai trò
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('account') }}">
               Quản lý tài khoản
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('user') }}">
                Nhât ký người dùng
              </a>
            </li>
          </ul>
        </div>
      </li>
      <button type="button" class="btn  button1 "><img style="width:15px; height:15px; position: absolute; top: 8px; left: 11px;"  src="img/fi_log-out.png"  >  Đăng xuất</button>
    </ul>
  </nav>
