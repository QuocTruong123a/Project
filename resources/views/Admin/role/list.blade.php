@extends('Admin.Main')
@section('content')
<p class="text23">Danh sách vai trò</p>
  <div class="content-wrapper bg-secondary">


  <button class="btnrole" >
    <a href="{{ route('number.add') }} ">
        <img class="imgbtnaddevice" src="img/add-square.png" alt="">
    </a>
    <p class="text28">Thêm vai trò</p>
  </button>
  <div class="girdrole">
    <table class="tabledevice w3-table-all">
        <tr  class="th w3-light-grey">
          <th class="th">Tên vai trò
          </th>
          <th class="th">Số người dùng</th>
          <th class="th"> Mô tả</th>
          <th class="th"> </th>

        </tr>
        <tr>

          <td>Kiosk</td>
          <td>192.168.1.10</td>


          <td>Hệ thống</td>
          <td>Hệ thống</td>

        </tr>
        <tr>

            <td>Kiosk</td>
            <td>192.168.1.10</td>


            <td>Hệ thống</td>
            <td>Hệ thống</td>

          </tr>
          <tr>

            <td>Kiosk</td>
            <td>192.168.1.10</td>


            <td>Hệ thống</td>
            <td>Hệ thống</td>

          </tr>
          <tr>

            <td>Kiosk</td>
            <td>192.168.1.10</td>


            <td>Hệ thống</td>
            <td>Hệ thống</td>

          </tr>
          <tr>

            <td>Kiosk</td>
            <td>192.168.1.10</td>


            <td>Hệ thống</td>
            <td>Hệ thống</td>

          </tr>




      </table>
  </div>
</div>
@endsection
