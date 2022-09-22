@extends('Admin.Main')
@section('content')

  <div class="content-wrapper bg-secondary">
<p class="text23">Quản lý cấp số</p>
<p class="text24">Tên dịch vụ</p>
<div class=" ">
    <label class="custom-select2"style=" left: 390px; top:26.5% ">
        <select name="sample" class="dropdown1" style=" left: -148px; top:0px; width:148px">
            <option class="" value="">Tất cả</option>
            <option class="" value="Kiosk">Kiosk</option>
            <option value="Display counter">Display counter</option>
        </select>
    </label>
  </div>
  <img class="imgnumber1" src="img/fi_chevron-down.png" alt="">
<p class="text84">Tình trạng</p>
<label class="custom-select2"style=" left: 564px; top:26.5%">
    <select name="sample" class="dropdown1" style=" left: -148px; top:0px; width:148px">
        <option class="" value="">Tất cả</option>
        <option class="" value="Kiosk">Kiosk</option>
        <option value="Display counter">Display counter</option>
    </select>
</label>
<p class="text85">Nguồn cấp</p>
<label class="custom-select2"style=" left: 739px; top:26.5%">
    <select name="sample" class="dropdown1" style=" left: -148px; top:0px; width:148px">
        <option class="" value="">Tất cả</option>
        <option class="" value="Kiosk">Kiosk</option>
        <option value="Display counter">Display counter</option>
    </select>
</label>
  <img class="imgnumber2" src="img/fi_chevron-down.png" alt="">
  <img class="imgnumber3" src="img/fi_chevron-down.png" alt="">
  <p class="text86">Chọn thời gian</p>
  <div class="date_number">
    <div class="service_date_first">
        <input type="date" style="text-align: right;border: 0;" required pattern="dd-mm-yyyy" >
      </div>
      <div class="service_date_hindmost1">
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
    <p class="text28">Thêm thiêt bị</p>
  </button>
  <div class="girdevice">
    <table class="tabledevice w3-table-all " >
        <tr  class="th w3-light-grey">
          <th>STT</th>
          <th class="th">Tên Khách hàng</th>
          <th class="th">Tên dịch vụ</th>
          <th class="th"> Thời gian câp</th>
          <th class="th"> Hạn sử dụng</th>
          <th class="th">Trạng thái  </th>
          <th class="th">Nguồn cấp</th>
          <th> </th>
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
          <td><a href="{{ route('number.information') }}">Chi tiết</a></td>
          <td><a href="/">Cập nhật</a></td>
        </tr>
        <tr>
            <td>KIO_01</td>
          <td>Kiosk</td>
          <td>192.168.1.10</td>
          <td> <h4 class="text29"></h4>Ngưng hoạt động</td>
          <td>Mất kết nối</td>

          <td class=""><div class="td">khách tim mạch khám mắt ssssssssssssssssssssssssssssss</div><a href="/">Xem thêm</a> </td>
          <td><a href="{{ route('number.information') }}">Chi tiết</a></td>
          <td><a href="/">Cập nhật</a></td>
        </tr>
        <tr>
            <td>KIO_01</td>
          <td>Kiosk</td>
          <td>192.168.1.10</td>
          <td>Ngưng hoạt động</td>
          <td>Mất kết nối</td>

          <td class=""><div class="td">khách tim mạch khám mắt ssssssssssssssssssssssssssssss</div><a href="/">Xem thêm</a> </td>
          <td><a href="/">Chi tiết</a></td>
          <td><a href="/">Cập nhật</a></td>
        </tr>
        <tr>
            <td>KIO_01</td>
          <td>Kiosk</td>
          <td>192.168.1.10</td>
          <td>Ngưng hoạt động</td>
          <td>Mất kết nối</td>

          <td class=""><div class="td">khách tim mạch khám mắt ssssssssssssssssssssssssssssss</div><a href="/">Xem thêm</a> </td>
          <td><a href="/">Chi tiết</a></td>
          <td><a href="/">Cập nhật</a></td>
          </tr>
          <tr>
            <td>KIO_01</td>
          <td>Kiosk</td>
          <td>192.168.1.10</td>
          <td>Ngưng hoạt động</td>
          <td>Mất kết nối</td>

          <td class=""><div class="td">khách tim mạch khám mắt ssssssssssssssssssssssssssssss</div><a href="/">Xem thêm</a> </td>
          <td><a href="/">Chi tiết</a></td>
          <td><a href="/">Cập nhật</a></td>
          </tr>
          <tr>
            <td>KIO_01</td>
          <td>Kiosk</td>
          <td>192.168.1.10</td>
          <td>Ngưng hoạt động</td>
          <td>Mất kết nối</td>

          <td class=""><div class="td">khách tim mạch khám mắt ssssssssssssssssssssssssssssss</div><a href="/">Xem thêm</a> </td>
          <td><a href="/">Chi tiết</a></td>
          <td><a href="/">Cập nhật</a></td>
          </tr>
          <tr>
            <td>KIO_01</td>
          <td>Kiosk</td>
          <td>192.168.1.10</td>
          <td>Ngưng hoạt động</td>
          <td>Mất kết nối</td>

          <td class=""><div class="td">khách tim mạch khám mắt ssssssssssssssssssssssssssssss</div><a href="/">Xem thêm</a> </td>
          <td><a href="/">Chi tiết</a></td>
          <td><a href="/">Cập nhật</a></td>
          </tr>
          <tr>
            <td>KIO_01</td>
          <td>Kiosk</td>
          <td>192.168.1.10</td>
          <td>Ngưng hoạt động</td>
          <td>Mất kết nối</td>

          <td class=""><div class="td">khách tim mạch khám mắt ssssssssssssssssssssssssssssss</div><a href="/">Xem thêm</a> </td>
          <td><a href="/">Chi tiết</a></td>
          <td><a href="/">Cập nhật</a></td>
          </tr>

      </table>
  </div>
</div>
@endsection
