@extends('Admin.Main')
@section('content')
<div class="content-wrapper bg-secondary">
    <label class="text87">Quản lý cấp số</label>
    <div class="content-add">
        <label class="text88">CẤP SỐ MỚI</label>
        <label class="text89">Dịch vụ khách hàng lựa chọn</label>
        <label class="custom-select2"style=" left: 790px; top:29.5% ">
            <select name="sample" class="dropdown1" style=" left: -398px; top:0px; width:400px">
                <option class="" value="">Chọn dịch vụ</option>
                <option class="" value="Kiosk">Kiosk</option>
                <option value="Display counter">Display counter</option>
            </select>
        </label>
        <a href="" class="numberadd"><span class="text38">Hủy bỏ</span></a>
        <button class="numberadd1">Thêm thiết bị</button>
    </div>
</div>
@endsection
