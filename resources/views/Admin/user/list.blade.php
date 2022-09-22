@extends('Admin.Main')
@section('content')

  <div class="content-wrapper bg-secondary">
  <p class="text109">Chọn thời gian</p>
  <div class="date_number">
    <div class="report_date_first">
        <input type="date" style="text-align: right;border: 0;" required pattern="dd-mm-yyyy" >
      </div>
      <div class="report_date_first1">
        <input type="date" style="text-align: right;border: 0;">
      </div>
  </div>
  <p class="text26">Từ khóa</p>
  <input class="inputdevice" placeholder="Nhâp từ khóa">
  <img class="imgsearch_device" src="img/fi_search.png" alt="">
  <button class="btnaddevice" >
    <a href="{{ route('number.add') }} ">
        <img class="imgbtnaddevice" src="img/add-square.png" alt="">
    </a>
    <p class="text28">Tải về</p>
  </button>
  <div class="girdevice">
    <table class="tabledevice w3-table-all">
        <tr  class="th w3-light-grey">

          <th class="th">Tên đăng nhập

          </th>
          <th class="th">Thời gian tác động</th>
          <th class="th"> IP thực hiện</th>
          <th class="th"> Thao tác thực hiện</th>
        </tr>

        <tr>
            <td>Kiosk</td>
            <td>192.168.1.10</td>

            <td>
              <li><span>Mất kết nối</span></li>
           </td>
            <td>Hệ thống</td>

          </tr>
          <tr>
            <td>Kiosk</td>
            <td>192.168.1.10</td>

            <td>
              <li><span>Mất kết nối</span></li>
           </td>
            <td>Hệ thống</td>

          </tr>
          <tr>
            <td>Kiosk</td>
            <td>192.168.1.10</td>

            <td>
              <li><span>Mất kết nối</span></li>
           </td>
            <td>Hệ thống</td>

          </tr>
          <tr>
            <td>Kiosk</td>
            <td>192.168.1.10</td>

            <td>
              <li><span>Mất kết nối</span></li>
           </td>
            <td>Hệ thống</td>

          </tr>
          <tr>
            <td>Kiosk</td>
            <td>192.168.1.10</td>

            <td>
              <li><span>Mất kết nối</span></li>
           </td>
            <td>Hệ thống</td>

          </tr>
          <tr>
            <td>Kiosk</td>
            <td>192.168.1.10</td>

            <td>
              <li><span>Mất kết nối</span></li>
           </td>
            <td>Hệ thống</td>

          </tr>
          <tr>
            <td>Kiosk</td>
            <td>192.168.1.10</td>

            <td>
              <li><span>Mất kết nối</span></li>
           </td>
            <td>Hệ thống</td>

          </tr>


      </table>
  </div>
</div>
@endsection
