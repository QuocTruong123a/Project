@extends('Admin.Main')
@section('content')
<div class="content-wrapper bg-secondary">
 <p class="text9"> Biểu đồ cấp số</p>

 <div class="gird6">
 <div class="row1">
    <p class="text11">Số thứ tự đã cấp</p>
    <p class="text12">4.221</p>
    <img class="img6" src="img/Frame 624758.png" alt="">
    <img class="img7" src="img/Group 625214.png" alt="">
 </div>
 <div class="row2">
    <p class="text11">Số thứ tự đã sử dụng</p>
    <p class="text12">3.721</p>
    <img class="img6" src="img/Frame 624759 (1).png" alt="">
    <img class="img7" src="img/Group 625213.png" alt="">
 </div>
 <div class="row3">
    <p class="text11">Số thứ tự đang chờ</p>
    <p class="text12">468</p>
    <img class="img6" src="img/Frame 624759 (2).png" alt="">
    <img class="img7" src="img/Group 625214.png" alt="">
 </div>
 <div class="row4">
    <p class="text11">Số thứ tự đã bỏ qua</p>
        <p class="text12">32</p>
    <img class="img6" src="img/Frame 624759 (3).png" alt="">
    <img class="img7" src="img/Group 625213.png" alt="">
 </div>
 </div>
 <div class="gird7">
    <p class="text13" id="show_message">Bảng thống kê theo ngày</p>
    <p class="text14" id="show_dates">{{ $date }}</p>
    <p class="text15" id="show_date"></p>

    <div class="gird9">
        <canvas id="myChart" style="width:100px;height:35px"></canvas></div>
        <label class="custom-select">
            <select name="sample" class="dropdown "  onchange="updateMoth(this)">
                <option  class="date" value="date">Ngày</option>
                <option value="week">tuần</option>
                <option value="Year">Tháng</option>
            </select>
        </label>
        <img class="imgselect" src="img/fi_chevron-down.png" alt="">
    </div>

 <div class="gird8"></div>
 <p class="text10"> Tổng quan</p>
 <div class="row5">
    <img class="img4" src="img/Frame 625210.png" alt="">
    <img class="img5" src="img/monitor1.png" alt="">
    <div class="row8"><p class="text16">Đang hoạt động</p><p class="text18">3.799</p></div>
    <div class="row9" ><p class="text17">Ngưng hoạt động</p><p class="text19">422</p></div>
 </div>
 <div class="row6">
    <img class="img4" src="img/Frame 625210 (1).png" alt="">
    <img class="img5" src="img/Frame 332.png" alt="">
    <div class="row10" ></div>
    <div class="row11" ></div>
    <div class="row8"><p class="text16">Đang hoạt động</p><p class="text20">210</p></div>
    <div class="row9" ><p class="text17">Ngưng hoạt động</p><p class="text20">66</p></div>
</div>
<div class="row7">
    <img class="img4" src="img/Frame 625210 (2).png" alt="">
    <img class="img5" src="img/icon dasboard03.png" alt="">
    <div class="row12">  <p class="text16">Đang chờ</p><p class="text21">3.721</p> </div>
    <div class="row13"><p class="text16">Đã sử dụng</p><p class="text21">486</p></div>
    <div class="row14"><p class="text16">Bỏ qua</p><p class="text21">32</p></div>
</div>
 <div id="container" class="calendar-container">
</div>
@endsection
