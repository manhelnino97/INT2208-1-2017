<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Luyện thi</title>
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
  <style type="text/css">
    .header{
      background-image: url(image/03.jpg);
      width: 100%;
      height: 180px;
    }
    .content{
    }
    .footer{
      background-image: url(image/03.jpg);
      width: 100%;
      height: 150px;
    }
    .breadcrumb{
      font-size: 20px;
    }
  </style>
</head>
<body>
  <div class="header">
    <div class="container">
      <div class="row">
        <h2 class="text-center title-web" style="color: #FF0000; text-align: center; font-size: 40px">Luyện thi giấy phép lái xe</h2>
        <nav class="navbar navbar-inverse">
          <div class="navbar-header">
            <a href="trangchu.php" class="navbar-brand" style="color: #FFC338"><i class="glyphicon glyphicon-home"></i> OMYBET - Luyện thi lái xe </a>
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
          </div>
          <div class="navbar-collapse collapse" id="menu">
            <ul class="nav navbar-nav">
              <li class="active"><a href="luyenthi.php"><i class="glyphicon glyphicon-pencil"></i> Luyện thi </a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-ban-circle"></i> Biển báo giao thông<span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="bienbaocam.php">Biển báo cấm</a></li>
                  <li><a href="bienbaonguyhiem.php">Biển báo nguy hiểm</a></li>
                  <li><a href="bienhieulenh.php">Biển hiệu lệnh</a></li>
                  <li><a href="bienchidan.php">Biển chỉ dẫn</a></li>
                  <li><a href="bienphu.php">Biển phụ</a></li>
                  <li><a href="vachkeduong.php">Vạch kẻ đường</a></li>
                </ul>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-list-alt"></i> Luật giao thông<span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="quytacgiaothong.php">Quy tắc giao thông</a></li>
                  <li><a href="camnangantoangiaothong.php">Cẩm nang an toàn giao thông</a></li>
                </ul>
              </li>
              <li><a href="lienhe.php"><i class="glyphicon glyphicon-phone-alt"></i> Liên hệ</a></li>
            </ul>
            <form action="" class="navber-form navbar-right">
              <div class="form-group">
                <a href="dangki.php" style="submit" class="btn btn-primary navbar-btn">Đăng ký</a>
                <a href="dangnhap.php" style="submit" class="btn btn-success navbar-btn">Đăng nhập</a>
              </div>
            </form>
          </div>
        </nav>
      </div>
    </div>
  </div>
  <div class="content">
    <div class="container">
      <div class="row" style="margin-top: 10px">
        <div class="col-md-12">
          <ul class="breadcrumb"">
            <li><a href="trangchu.php">Trang chủ</a></li>
            <li><a href="">Luyện thi</a></li>
          </ul>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="thumbnail">
            <img src="image/06.jpg" style="width: 500px; height: 200px">
            <div class="caption">
              <h3>
                Thi đề ngẫu nhiên
              </h3>
              <div>
                Chọn đề thi ngẫu nhiên trong danh sách đề thi
              </div>
              <form action="dethingaunhien.php" method="get">
                <input class="btn btn-primary" type="submit" name="vaothi1" value="Vào thi">
              </form>
            </a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="thumbnail">
          <img src="image/05.jpg" style="width: 500px; height: 200px">
          <div class="caption">
            <h3>
              Thi theo bộ đề
            </h3>
            <div>
              Chọn đề thi xác định trong danh sách đề thi
            </div>
            <form action="thitheobode.php" method="get">
              <input class="btn btn-primary" type="submit" name="vaothi2" value="Vào thi">
            </form>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="thumbnail">
          <img src="image/04.png" style="width: 500px; height: 200px">
          <div class="caption">
            <h3>
              Mẹo thi
            </h3>
            <div>
              Cung cấp mẹo thi trắc nghiệm nhanh
            </div>
            <form action="meothitracnghiem.php" method="get">
              <input class="btn btn-primary" type="submit" name="xemmeo" value="Xem mẹo">
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<div class="footer">
  <div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-4">
      <div class="footer-info-single">
       <h2 class="title">Nhóm OMYBET</h2>
       <ul class="list-unstyled">
        <li><i class="glyphicon glyphicon-user"></i> Khoa Công nghệ thông tin - Đại học Công nghệ</li>
        <li><i class="glyphicon glyphicon-envelope"></i> Email : buibathanh97@gmail.com</li>
        <li>Copyright © 2017 LTLX_OMYBET. All rights reserved.</li>
      </ul>
    </div>
  </div>
  <div class="col-md-7"></div>
</div>
</div>
</div>
</body>
</html>