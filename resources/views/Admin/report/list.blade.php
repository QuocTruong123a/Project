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

  <button class="btnaddevice" >
    <a href="{{ route('number.add') }} ">
        <img class="imgbtnaddevice" src="img/add-square.png" alt="">
    </a>
    <p class="text28">Tải về</p>
  </button>
  <div class="girdevice">
    <table class="tabledevice w3-table-all">
        <tr  class="th w3-light-grey">

          <th class="th">Số thứ tự
            
          </th>
          <th class="th">Tên dịch vụ</th>
          <th class="th"> Thời gian câp</th>
          <th class="th"> Tình trạng</th>
          <th class="th">Nguồn cấp</th>

        </tr>
        <tr>

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

          <td>Hệ thống</td>

        </tr>
        <tr>

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

            <td>Hệ thống</td>

          </tr>
          <tr>

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

            <td>Hệ thống</td>

          </tr>
          <tr>

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

            <td>Hệ thống</td>

          </tr>
          <tr>

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

            <td>Hệ thống</td>

          </tr>
          <tr>

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

            <td>Hệ thống</td>

          </tr>
          <tr>

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

            <td>Hệ thống</td>

          </tr>


      </table>
  </div>
</div>
@endsection
