@extends('layouts.master_nhom')

@section('head.title')
    <?php
    $nhom = Auth::guard('thanhvien')->user()->getNhom;
    ?>
    {{$nhom->tenNhom}}
@endsection
@section('head.css')
    <link rel="stylesheet" href="{{asset('css/TV_xemttnhom.css')}}">
@stop
@section('head.content')
    <div class="main container">
        <div class="navigator">
            <div class="row">
                <div class="col-md-7">
                    <h5><a href="{{route('trangchu')}}">Trang chủ/</a><a href="{{route('trangchunhom')}}"> Nhóm/</a><a style="color: mediumblue"> Thông tin nhóm</a></h5>
                </div>

            </div>
        </div>
        <div class="row root-view">

            <div class="col-md-1">

            </div>
            <div class="col-md-10 view-comics" style="margin-top: 30px;">
                <div class="row">

                    <img src="{{asset($nhom->tenNhom)}}" onerror="this.src='{{asset('images/x.png')}}'">
                    <div class="col-md-9">
                        <h6>{{$nhom->tenNhom}}</h6>
                        <ul>
                            <li>Trưởng nhóm: {{$nhom->getTruongNhom->name}}</li>
                            <li>Ngày thành lập: {{$nhom->getNgayLap()}}</li>
                            <li>Số lượng thành viên: {{$nhom->getSoLuongThanhVien()}}</li>
                            <li>Số lượng truyện đã dịch: {{$nhom->getSoLuongTruyen()}}</li>
                            <li>Giới thiệu về nhóm: {{$nhom->gioiThieu}}</li>
                        </ul>
                    </div>
                </div>

                <div class="row" style="margin-top: 50px;">
                    <button onclick="window.location='{{route("thanhviennhom")}}'">Danh sách thành viên</button>
                    @if(Auth::guard('thanhvien')->user()->maTK ==$nhom->maTruongNhom)
                        <button onclick="window.location='{{route("suathongtinnhom",['maTK'=>$nhom->maTruongNhom])}}'">Sửa thông tin nhóm</button>
                    @endif
                </div>

            </div>
            <div class="col-md-1">

            </div>


        </div>

    </div>
@endsection
