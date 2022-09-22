@extends('Admin.Main')
@section('content')
<div class="content-wrapper bg-secondary">
    <p class="text23">Quản lý Dịch vụ</p>
    <div class="grideviceadd">
        <p class="text30">Thông tin dịch vụ</p>
        <p  class="text56">Mã dịch vụ:<span>*</span></p>
      <input pattern="Nhập mã dịch vụ" class="serinputadd">
      <p  class="text57">Tên dịch vụ:<span>*</span></p>
      <input pattern="Nhập mã dịch vụ" class="serinputadd1">
      <p  class="text58">Mô tả: </p>
      <textarea  class="serinputadd2"   ></textarea>
      <p class="text59">Quy tắc cấp số</p>
      <label class="labeladdsrv"></label>
      <input type="checkbox"  class="sercheckadd" value=" ">
      <p class="text60">Tăng tự động từ: <span>Đến</span></p>
      <label class="text61"><span>0001</span></label>
      <label class="text62"><span>9999</span></label>
      <label class="labeladdsrv1"></label>
      <input type="checkbox"  class="sercheckadd1" value=" ">
      <p class="text63">Prefix: </p>
      <label class="text64"><span>0001</span></label>
      <label class="labeladdsrv2"></label>
      <input type="checkbox"  class="sercheckadd2" value="Tăng tự động từ">
      <p class="text65">Surfix: </p>
      <label class="text66"><span>0001</span></label>
      <label class="labeladdsrv3"></label>
      <input type="checkbox"  class="sercheckadd3" value=" ">
      <p class="text67">Reset mỗi ngày </p>
    </div>
    <a href="" class="canceldeviceadd"><span class="text38">Hủy bỏ</span></a>
<button class="buttondeviceadd">Thêm dịch vụ</button>
</div>

@endsection
