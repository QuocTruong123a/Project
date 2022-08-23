@extends('Admin.Main')
@section('content')
<div class="content-wrapper bg-secondary">
<p class="text29">Quản lý thiết bị</p>
<div class="grideviceadd">
    <p class="text30">Thông tin thiết bị</p>
    <p class="text31">Mã thiết bị: <span> *</span></p>
    <input class="inputdeviceadd1" placeholder="Nhập mã thiết bị">
    <p class="text32">Tên thiết bị: <span> *</span></p>
    <input class="inputdeviceadd2" placeholder="Nhập tên thiết bị">
    <p class="text33">Địa chỉ IP: <span> *</span></p>
    <input class="inputdeviceadd3" placeholder="Nhập tên thiết bị">
    <p class="text34">Dịch vụ sử dung: <span> *</span></p>
<div class="selectdeviceadd form-group">
    <select name="tags[]" class=" tags_select_choose" multiple="multiple">
        <option class="formselect" value="0">Danh Mục Cha </option>
        <option value="1">test</option>
    </select>
</div>

    <p class="text35">Loại thiết bị: <span> *</span></p>
    <label class="custom-select1">
        <select name="sample" class="dropdown1" >
            <option class="" value="">Chọn loại thiết bị</option>
            <option class="" value="Kiosk">Kiosk</option>
            <option value="Display counter">Display counter</option>
        </select>
    </label>

    <p class="text36">Tên đăng nhập: <span> *</span></p>
    <input class="inputdeviceadd4" placeholder="Nhập tài khoản">
    <p class="text37">Mật khẩu: <span> *</span></p>
    <input class="inputdeviceadd5" placeholder="Nhập mật khẩu">
</div>
<a href="" class="canceldeviceadd"><span class="text38">Hủy bỏ</span></a>
<button class="buttondeviceadd">Thêm thiết bị</button>
</div>
@endsection
