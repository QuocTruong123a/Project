@extends('Admin.Main')
@section('content')
<div class="content-wrapper bg-secondary">
<p class="text23">Danh sách Dịch vụ</p>
<p class="text24">Trạng thái hoạt động</p>
<div class="btnhd">
    <button type="button" class="btn bg-white   buthd" data-toggle="dropdown" aria-haspopup="false" aria-expanded="false">
     Tất cả
    </button>
    <div class="dropdown-menu drop">
        <a class="dropdown-item" href="{{ route('service') }}">Tất cả</a>
      <a class="dropdown-item" href="">Hoạt động</a>
      <a class="dropdown-item" href="">Ngừng hoạt động</a>
    </div>
  </div>
  <img class="imgdrop1" src="img/fi_chevron-down.png" alt="">
<p class="text25">Chọn thời gian</p>
<div class="service_date_first">
    <input type="date" style="text-align: right;border: 0;" required pattern="dd-mm-yyyy" >
  </div>
  <div class="service_date_hindmost">
    <input type="date" style="text-align: right;border: 0;">
  </div>
  <p class="text26">Từ khóa</p>
  <input class="inputdevice" placeholder="Nhâp từ khóa">
  <img class="imgsearch_device" src="img/fi_search.png" alt="">
  <button class="btnaddevice" >
    <a href="{{ route('device.add') }} ">
        <img class="imgbtnaddevice" src="img/add-square.png" alt="">
    </a>
    <p class="text28">Thêm Dịch vụ</p>
  </button>
  <div class="girdevice">
    <table class="tabledevice w3-table-all " >
        <tr  class="th w3-light-grey">
          <th>Mã dịch vụ</th>
          <th>Tên dịch vụ</th>
          <th>Mổ tả</th>
          <th class="th"> Trạng thái hoạt động</th>
          <th> </th>
          <th> </th>
        </tr>
        <tr>
          <td>KIO_01</td>
          <td>Kiosk</td>
          <td style="width: 140px">Chuyen cac benh ly ve tim</td>
          @php
          $test ='Ngưng hoạt động';
          $test1 ='Hoạt động'
          @endphp
          @if($test == 'Ngưng hoạt động')
          <td>
            <li><span>Ngưng hoạt động</span></li>
         </td>
          @elseif ($test == 'Hoạt động')
          <td>
            <li class="li"><span class="span">Ngưng hoạt động</span></li>
         </td>
          @endif



          <td><a href="{{ route('device.detail') }}">Chi tiết</a></td>
          <td><a href="/">Cập nhật</a></td>
        </tr>

        <tr>
            <td>KIO_01</td>
            <td>Kiosk</td>
            <td>192.168.1.10</td>
            @php
            $test ='Ngưng hoạt động';
            $test1 ='Hoạt động'
            @endphp
            @if($test == 'Ngưng hoạt động')
            <td>
              <li><span>Ngưng hoạt động</span></li>
           </td>
            @elseif ($test == 'Hoạt động')
            <td>
              <li class="li"><span class="span">Ngưng hoạt động</span></li>
           </td>
            @endif



            <td><a href="{{ route('device.detail') }}">Chi tiết</a></td>
            <td><a href="/">Cập nhật</a></td>
          </tr>
          <tr>
            <td>KIO_01</td>
            <td>Kiosk</td>
            <td>192.168.1.10</td>
            @php
            $test ='Ngưng hoạt động';
            $test1 ='Hoạt động'
            @endphp
            @if($test == 'Ngưng hoạt động')
            <td>
              <li><span>Ngưng hoạt động</span></li>
           </td>
            @elseif ($test == 'Hoạt động')
            <td>
              <li class="li"><span class="span">Ngưng hoạt động</span></li>
           </td>
            @endif



            <td><a href="{{ route('device.detail') }}">Chi tiết</a></td>
            <td><a href="/">Cập nhật</a></td>
          </tr>
          <tr>
            <td>KIO_01</td>
            <td>Kiosk</td>
            <td>192.168.1.10</td>
            @php
            $test ='Ngưng hoạt động';
            $test1 ='Hoạt động'
            @endphp
            @if($test == 'Ngưng hoạt động')
            <td>
              <li><span>Ngưng hoạt động</span></li>
           </td>
            @elseif ($test == 'Hoạt động')
            <td>
              <li class="li"><span class="span">Ngưng hoạt động</span></li>
           </td>
            @endif



            <td><a href="{{ route('device.detail') }}">Chi tiết</a></td>
            <td><a href="/">Cập nhật</a></td>
          </tr>
          <tr>
            <td>KIO_01</td>
            <td>Kiosk</td>
            <td>192.168.1.10</td>
            @php
            $test ='Ngưng hoạt động';
            $test1 ='Hoạt động'
            @endphp
            @if($test == 'Ngưng hoạt động')
            <td>
              <li><span>Ngưng hoạt động</span></li>
           </td>
            @elseif ($test == 'Hoạt động')
            <td>
              <li class="li"><span class="span">Ngưng hoạt động</span></li>
           </td>
            @endif



            <td><a href="{{ route('device.detail') }}">Chi tiết</a></td>
            <td><a href="/">Cập nhật</a></td>
          </tr>
          <tr>
            <td>KIO_01</td>
            <td>Kiosk</td>
            <td>192.168.1.10</td>
            @php
            $test ='Ngưng hoạt động';
            $test1 ='Hoạt động'
            @endphp
            @if($test == 'Ngưng hoạt động')
            <td>
              <li><span>Ngưng hoạt động</span></li>
           </td>
            @elseif ($test == 'Hoạt động')
            <td>
              <li class="li"><span class="span">Ngưng hoạt động</span></li>
           </td>
            @endif



            <td><a href="{{ route('device.detail') }}">Chi tiết</a></td>
            <td><a href="/">Cập nhật</a></td>
          </tr>
          <tr>
            <td>KIO_01</td>
            <td>Kiosk</td>
            <td>Mo ta dich vu 1</td>
            @php
            $test ='Ngưng hoạt động';
            $test1 ='Hoạt động'
            @endphp
            @if($test == 'Ngưng hoạt động')
            <td>
              <li><span>Ngưng hoạt động</span></li>
           </td>
            @elseif ($test == 'Hoạt động')
            <td>
              <li class="li"><span class="span">Ngưng hoạt động</span></li>
           </td>
            @endif



            <td><a href="{{ route('device.detail') }}">Chi tiết</a></td>
            <td><a href="/">Cập nhật</a></td>
          </tr>


      </table>
  </div>
</div>


@endsection
