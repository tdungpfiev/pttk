<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/TV_themthanhvien.css')}}">

    <title>trang mau</title>
</head>
<body>
@include('partials.header')

<div class="main container">
    <div class="navigator">
        <div class="row">
            <div class="col-md-10">
                <h5><a href="#">Trang chủ/</a><a href="#"> Nhóm/</a><a href="#"> ABC Team/</a><a href="#"> Duyệt thành viên</a></h5>
                <p>Tìm thành viên: </p>
                <div class="find-element" style="width: 25%; margin-left: 10px;"> 
                    <input type="text" name="keyword" placeholder="   Tìm kiếm" value="">
                    <button type="submit"></button>
                </div>
            </div>

        </div>
    </div>
    <h6>ABC Team</h6>
    <div class="row root-view" style="padding-left: 30px;">

    <div class="col-md-6 view-comics">
        <div class="row" style="margin-top: 20px;">

        <img src="images/anh1.png" onerror="this.src='{{asset('images/anh1.png')}}'">
        <div class="col-md-8">
        
        <ul>
        <li><b>Tên tài khoản: Tokyo97</b></li>
        <li>Ngày tham gia: 01/01/2019</li>
        <li>Trạng thái: Chưa thuộc nhóm nào.</li>
    </ul>
    <div class="row" style="margin-top: 20px;">
            <button>Thêm thành viên</button>
            <button>Xóa yêu cầu</button>
        </div>
        </div>
        </div>

    <div class="row" style="margin-top: 20px;">

        <img src="images/anh1.png">
        <div class="col-md-8">
        
        <ul>
        <li><b>Tên tài khoản: Tokyo97</b></li>
        <li>Ngày tham gia: 01/01/2019</li>
        <li>Trạng thái: Chưa thuộc nhóm nào.</li>
    </ul>
    <div class="row" style="margin-top: 20px;">
            <button>Thêm thành viên</button>
            <button>Xóa yêu cầu</button>
        </div>
        </div>
        </div>    

    </div>
        <div class="col-md-6 view-comics">
        <div class="row" style="margin-top: 20px;">

        <img src="images/anh1.png">
        <div class="col-md-8">
        
        <ul>
        <li><b>Tên tài khoản: Tokyo97</b></li>
        <li>Ngày tham gia: 01/01/2019</li>
        <li>Trạng thái: Chưa thuộc nhóm nào.</li>
    </ul>
    <div class="row" style="margin-top: 20px;">
            <button>Thêm thành viên</button>
            <button>Xóa yêu cầu</button>
        </div>
        </div>
        </div>

    <div class="row" style="margin-top: 20px;">

        <img src="images/anh1.png">
        <div class="col-md-8">
        
        <ul>
        <li><b>Tên tài khoản: Tokyo97</b></li>
        <li>Ngày tham gia: 01/01/2019</li>
        <li>Trạng thái: Chưa thuộc nhóm nào.</li>
    </ul>
    <div class="row" style="margin-top: 20px;">
            <button>Thêm thành viên</button>
            <button>Xóa yêu cầu</button>
        </div>
        </div>
        </div>    

    </div>
   

</div>

</div>



<footer class="main container" style="background-color: green">
    Copyright © 2019 by ANH_EM_AN_HAI_TEAM
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</footer>
</body>
</html>
<style media="screen">


</style>
