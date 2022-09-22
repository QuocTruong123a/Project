@extends('Admin.Main')
@section('content')

  <div class="content-wrapper bg-secondary">
<p class="text23">Quản lý cấp số</p>
<div class="btnaddevice" >
    <a href="{{ route('number.add') }} ">
        <img class="imgbtnaddevice" src="img/add-square.png" alt="">
    </a>
    <p class="text28">Thêm thiêt bị</p>
</div>
<div class="content-add">
<label class="text90">Thông tin cấp số</label>
<p class="text91">Họ tên:</p>
<p class="text100">Nguyễn thị dung</p>

<p class="text92">Tên dịch vụ:</p>
<p class="text101">Nguyễn thị dung</p>

<p class="text93">Số thứ tự:</p>
<p class="text102">Nguyễn thị dung</p>

<p class="text94">Thời gian cấp:</p>
<p class="text103">Nguyễn thị dung</p>

<p class="text95">Hạn sử dụng:</p>
<p class="text104">Nguyễn thị dung</p>

<p class="text96">Nguồn cấp:</p>
<p class="text105">Nguyễn thị dung</p>

<p class="text97">Trạng thái:</p>
<p class="text106">Nguyễn thị dung</p>

<p class="text98">Số điện thoại:</p>
<p class="text107">Nguyễn thị dung</p>

<p class="text99">Địa chỉ Email:</p>
<p class="text108">Nguyễn thị dung</p>
</div>
</div>
@endsection
