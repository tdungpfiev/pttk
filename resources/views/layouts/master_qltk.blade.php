<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <title></title>
</head>

<body>
	<header>
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <a href="#" title="Trang chủ"><img src="images/logo1.png" alt="Logo"></a>
        </div>
        <div class="col-md-4 find">
          <div class="find-element">
            <input type="text" name="keyword" placeholder="   Tìm kiếm" value="">
            <button type="submit"></button>
          </div>
          <div class="filter-element">
            <select name="mostLike" class="select">
              <option disabled selected value>Tìm theo tên truyện</option>
              <option value="tác giả">Tìm theo tên tác giả</option>
              <option value="thể loại">Tìm theo thể loại truyện</option>
            </select>
          </div>
        </div>
        <div class="col-md-4 user">
          <div class="dropdown " style="float:right;margin-left: 20px;">
            <div class="dropdown-toggle text-danger" data-toggle="dropdown">
              <strong>Tung_tokyo</strong>
            </div>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="#">Thông tin tài khoản</a>
              <a class="dropdown-item" href="#">Đăng xuất</a>
            </div>
          </div>
          <div class="dropdown " style="float:right;">
            <div class="dropdown-toggle text-danger" data-toggle="dropdown">
              <strong>Thông báo (2)</strong>
            </div>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="#">Báo cáo 1</a>
              <a class="dropdown-item" href="#">Báo cáo 2</a>
            </div>
          </div>
        </div>
      </div>
      <div class="row direct">
        <ul>
          <li><a href="#">Truyện mới</a></li>
          <li><a href="#">Thể loại</a></li>
          <li><a href="#">Nhóm dịch</a></li>
          <li><a href="#">Tác giả</a></li>
          <li><a href="#">Năm</a></li>
        </ul>
      </div>
      <div class="row direct-manager">
        <ul>
          <li><div class="dropdown">
            <div class="dropdown-toggle" data-toggle="dropdown">
              <strong>Quản lý tài khoản</strong>
            </div>
            <div class="dropdown-menu" style="text-align: center;width: 100%;">
              <a class="dropdown-item text-dark" href="#">Xem thông tin tài khoản</a>
              <a class="dropdown-item text-dark" href="#">Xóa tài khoản</a>
            </div>
          </div></li>
          <li><a href="#">Quản lý tài khoản cá nhân</a></li>
          <li><a href='{{route('nhom')}}'>Quản lý nhóm</a></li>
        </ul>
      </div>
    </div>
  </header>
  <div id="content">
  	@yield('noidung')
  </div>
  <footer>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  </footer>
</body>

</html>
<style media="screen">
  .menu-manager {
    background: #fff;
  }

  .menu-manager ul {}

  .menu-manager ul li {}

  .menu-manager a {}
</style>