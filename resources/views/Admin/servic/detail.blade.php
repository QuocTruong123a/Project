@extends('Admin.Main')
@section('content')
<div class="content-wrapper bg-secondary">
<p class="text23">Quản lý Dịch vụ</p>
<div class="service_group">
    <p class="text70">Thông tin dịch vụ</p>
    <p class="text71">Mã dịch vụ:<span>201</span></p>
    <p class="text72">Tên dịch vụ:<span>Khám tim mạch</span></p>
    <p class="text73">Mô tả:<span>Chuyên các bệnh lý về tim</span></p>
    <p class="text74">Quy tắc cấp số</p>
    <p class="text75">Tăng tự động:
        <span>đến</span>
        <label class="text76"><div  class="text77">0001</div></label>
        <label class="text78"><div  class="text79">9999</div></label>
    </p>
    <p class="text80">Prefix:
        <label class="text76"><div  class="text81">0001</div></label>
    </p>
    <p class="text82">Reset mỗi ngày
    </p>
</div>

<div class="service_group1">
    <div class="service_group2">
        <p class="text24">Trạng thái  </p>
    <div class="ser_btnhd">
    <button type="button" class="btn bg-white   ser_buthd" data-toggle="dropdown" aria-haspopup="false" aria-expanded="false">
     Tất cả
    </button>
    @php
        $test;
        $test1 ='Hoat dong';
    @endphp
    <div class="dropdown-menu drop">
        <a class="dropdown-item" href="{{ route('service') }}">Tất cả</a>
      <a class="dropdown-item" href="" >Hoạt động</a>
      <a class="dropdown-item" href="">Ngừng hoạt động</a>
    </div>
  </div>
  <img class="imgdrop1_ser" src="img/fi_chevron-down.png" alt="">
<p class="text68">Chọn thời gian</p>
<div class="service_date_first1">
    <input type="date" style="text-align: right;border: 0;" required pattern="dd-mm-yyyy" >
  </div>
  <div class="service_date_hindmost1">
    <input type="date" style="text-align: right;border: 0;">
  </div>
  <p class="text69">Từ khóa</p>
  <input class="inputser1" placeholder="Nhâp từ khóa">
  <img class="imgsearch_ser" src="img/fi_search.png" alt="">
  <button class="btnaddevice" >
    <a href="{{ route('service.add') }} ">
        <img class="imgbtnaddevice" src="img/add-square.png" alt="">
    </a>
    <p class="text28">Thêm Dịch vụ</p>
  </button>
  <div class="girdevice">
    <table class="tabledevice w3-table-all " style="width:670px;height:50px" >
        <tr  class="th w3-light-grey">
          <th>Số thứ tự</th>
          <th class="th"> Trạng thái </th>
        </tr>
        <tr>
          <td>000001</td>
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
        </tr>
        <tr>
            <td>000001</td>
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
          </tr>
          <tr>
            <td>000001</td>
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
          </tr>
          <tr>
            <td>000001</td>
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
          </tr>
          <tr>
            <td>000001</td>
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
          </tr>
          <tr>
            <td>000001</td>
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
          </tr>

      </table>
  </div>
    </div>
</div>
<div class="ser_update">
    <p class="text83">Cập nhật danh sách</p>
</div>
<a href="/"> <img class="img_ser_update" src="img/Edit Square.png"></a>
<div class="ser_turn">
    <p class="text83">Quay lại</p>
</div>
<a href="/"> <img class="img_ser_turn" src="img/back-square.png"></a>
</div>


@endsection
