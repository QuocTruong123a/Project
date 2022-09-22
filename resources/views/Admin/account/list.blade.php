@extends('Admin.Main')
@section('content')
<div class="content-wrapper bg-secondary">
<p class="text23">Danh sách tài khoản</p>
<p class="text24">Tên vài trò</p>
<label class="custom-select2"style=" left: 534px; top:26.5%">
    <select name="sample" class="dropdown1" style=" left: -294px; top:0px; width:295px">
        <option class="" value="">Tất cả</option>
        <option class="" value="Kiosk">Kiosk</option>
        <option value="Display counter">Display counter</option>
    </select>
</label>
  <img class="imgdrop1" src="img/fi_chevron-down.png" alt="">


  <p class="text26">Từ khóa</p>
  <input class="inputdevice" placeholder="Nhâp từ khóa">
  <img class="imgsearch_device" src="img/fi_search.png" alt="">
  <button class="btnaddevice" >
    <a href="{{ route('device.add') }} ">
        <img class="imgbtnaddevice" src="img/add-square.png" alt="">
    </a>
    <p class="text28">Thêm tài khoản</p>
  </button>
  <div class="girdevice">
    <table class="tabledevice w3-table-all " >
        <tr  class="th w3-light-grey">
          <th>Tên đăng nhập</th>
          <th>Họ tên</th>
          <th>Số điện thoại</th>
          <th class="">Email</th>
          <th class="">Vai trò</th>
          <th>Trâng thái</th>
          <th> </th>
        </tr>

        <tr>
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
            <li><span>Mất kết nối</span></li>
         </td>
          @elseif ($test == 'Hoạt động')
          <td>
            <li class="li"><span class="span">Ngưng hoạt động</span></li>
         </td>
          @endif

          @if($test == 'Ngưng hoạt động')
          <td>
            <li><span>Mất kết nối</span></li>
         </td>
          @elseif ($test == 'Hoạt động')
          <td>
            <li class="li"><span class="span">Mất kết nối</span></li>
         </td>
          @endif

          <td class=""><div class="td">khách tim mạch khám mắt ssssssssssssssssssssssssssssss</div><a href="/">Xem thêm</a> </td>
          <td><a href="{{ route('device.detail') }}">Chi tiết</a></td>

        </tr>
        <tr>
            <td>KIO_01</td>
          <td>Kiosk</td>
          <td>192.168.1.10</td>
          <td> <h4 class="text29"></h4>Ngưng hoạt động</td>
          <td>Mất kết nối</td>

          <td class=""><div class="td">khách tim mạch khám mắt ssssssssssssssssssssssssssssss</div><a href="/">Xem thêm</a> </td>
          <td><a href="/">Chi tiết</a></td>

        </tr>
        <tr>
            <td>KIO_01</td>
          <td>Kiosk</td>
          <td>192.168.1.10</td>
          <td>Ngưng hoạt động</td>
          <td>Mất kết nối</td>

          <td class=""><div class="td">khách tim mạch khám mắt ssssssssssssssssssssssssssssss</div><a href="/">Xem thêm</a> </td>
          <td><a href="/">Chi tiết</a></td>

        </tr>
        <tr>
            <td>KIO_01</td>
          <td>Kiosk</td>
          <td>192.168.1.10</td>
          <td>Ngưng hoạt động</td>
          <td>Mất kết nối</td>

          <td class=""><div class="td">khách tim mạch khám mắt ssssssssssssssssssssssssssssss</div><a href="/">Xem thêm</a> </td>
          <td><a href="/">Chi tiết</a></td>

          </tr>
          <tr>
            <td>KIO_01</td>
          <td>Kiosk</td>
          <td>192.168.1.10</td>
          <td>Ngưng hoạt động</td>
          <td>Mất kết nối</td>

          <td class=""><div class="td">khách tim mạch khám mắt ssssssssssssssssssssssssssssss</div><a href="/">Xem thêm</a> </td>
          <td><a href="/">Chi tiết</a></td>

          </tr>
          <tr>
            <td>KIO_01</td>
          <td>Kiosk</td>
          <td>192.168.1.10</td>
          <td>Ngưng hoạt động</td>
          <td>Mất kết nối</td>

          <td class=""><div class="td">khách tim mạch khám mắt ssssssssssssssssssssssssssssss</div><a href="/">Xem thêm</a> </td>
          <td><a href="/">Chi tiết</a></td>

          </tr>
          <tr>
            <td>KIO_01</td>
          <td>Kiosk</td>
          <td>192.168.1.10</td>
          <td>Ngưng hoạt động</td>
          <td>Mất kết nối</td>

          <td class=""><div class="td">khách tim mạch khám mắt ssssssssssssssssssssssssssssss</div><a href="/">Xem thêm</a> </td>
          <td><a href="/">Chi tiết</a></td>

          </tr>
          <tr>
            <td>KIO_01</td>
          <td>Kiosk</td>
          <td>192.168.1.10</td>
          <td>Ngưng hoạt động</td>
          <td>Mất kết nối</td>

          <td class=""><div class="td">khách tim mạch khám mắt ssssssssssssssssssssssssssssss</div><a href="/">Xem thêm</a> </td>
          <td><a href="/">Chi tiết</a></td>

          </tr>

      </table>
  </div>
</div>


@endsection
