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
            <li><a href="luyenthi.php">Luyện thi</a></li>
            <li><a href="">Thi theo bộ đề</a></li>
          </ul>
        </div>
      </div>     
    </div>
    <div class="container">
      <div class="panel panel-primary">
        <div class="panel-heading">
          <h3 class=" text-center"><strong>Thi theo bộ đề</strong></h3>
        </div>
        <div class="panel panel-default" style="margin-top: 20px; text-align: center">
          <div class="row">
            <div class="col-md-4">
              <form action="dethituchon.php" method="get">
                <input class="btn btn-link" type="submit" name="dethi" value="Đề thi 01">
              </form>
            </div>
            <div class="col-md-4">
              <form action="dethituchon.php" method="get">
                <input class="btn btn-link" type="submit" name="dethi" value="Đề thi 02">
              </form>
            </div>
            <div class="col-md-4">
              <form action="dethituchon.php" method="get">
                <input class="btn btn-link" type="submit" name="dethi" value="Đề thi 03">
              </form>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4">
              <form action="dethituchon.php" method="get">
                <input class="btn btn-link" type="submit" name="dethi" value="Đề thi 04">
              </form>
            </div>
            <div class="col-md-4">
              <form action="dethituchon.php" method="get">
                <input class="btn btn-link" type="submit" name="dethi" value="Đề thi 05">
              </form>
            </div>
            <div class="col-md-4">
              <form action="dethituchon.php" method="get">
                <input class="btn btn-link" type="submit" name="dethi" value="Đề thi 06">
              </form>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4">
              <form action="dethituchon.php" method="get">
                <input class="btn btn-link" type="submit" name="dethi" value="Đề thi 07">
              </form>
            </div>
            <div class="col-md-4">
              <form action="dethituchon.php" method="get">
                <input class="btn btn-link" type="submit" name="dethi" value="Đề thi 08">
              </form>
            </div>
            <div class="col-md-4">
              <form action="dethituchon.php" method="get">
                <input class="btn btn-link" type="submit" name="dethi" value="Đề thi 09">
              </form>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4">
              <form action="dethituchon.php" method="get">
                <input class="btn btn-link" type="submit" name="dethi" value="Đề thi 10">
              </form>
            </div>
            <div class="col-md-4">
              <form action="dethituchon.php" method="get">
                <input class="btn btn-link" type="submit" name="dethi" value="Đề thi 11">
              </form>
            </div>
            <div class="col-md-4">
              <form action="dethituchon.php" method="get">
                <input class="btn btn-link" type="submit" name="dethi" value="Đề thi 12">
              </form>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4">
              <form action="dethituchon.php" method="get">
                <input class="btn btn-link" type="submit" name="dethi" value="Đề thi 13">
              </form>
            </div>
            <div class="col-md-4">
              <form action="dethituchon.php" method="get">
                <input class="btn btn-link" type="submit" name="dethi" value="Đề thi 14">
              </form>
            </div>
            <div class="col-md-4">
              <form action="dethituchon.php" method="get">
                <input class="btn btn-link" type="submit" name="dethi" value="Đề thi 15">
              </form>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4">
              <form action="dethituchon.php" method="get">
                <input class="btn btn-link" type="submit" name="dethi" value="Đề thi 16">
              </form>
            </div>
            <div class="col-md-4">
              <form action="dethituchon.php" method="get">
                <input class="btn btn-link" type="submit" name="dethi" value="Đề thi 17">
              </form>
            </div>
            <div class="col-md-4">
              <form action="dethituchon.php" method="get">
                <input class="btn btn-link" type="submit" name="dethi" value="Đề thi 18">
              </form>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4">
              <form action="dethituchon.php" method="get">
                <input class="btn btn-link" type="submit" name="dethi" value="Đề thi 19">
              </form>
            </div>
            <div class="col-md-4">
              <form action="dethituchon.php" method="get">
                <input class="btn btn-link" type="submit" name="dethi" value="Đề thi 20">
              </form>
            </div>
            <div class="col-md-4">
              <form action="dethituchon.php" method="get">
                <input class="btn btn-link" type="submit" name="dethi" value="Đề thi 21">
              </form>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4">
              <form action="dethituchon.php" method="get">
                <input class="btn btn-link" type="submit" name="dethi" value="Đề thi 22">
              </form>
            </div>
            <div class="col-md-4">
              <form action="dethituchon.php" method="get">
                <input class="btn btn-link" type="submit" name="dethi" value="Đề thi 23">
              </form>
            </div>
            <div class="col-md-4">
              <form action="dethituchon.php" method="get">
                <input class="btn btn-link" type="submit" name="dethi" value="Đề thi 24">
              </form>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4">
              <form action="dethituchon.php" method="get">
                <input class="btn btn-link" type="submit" name="dethi" value="Đề thi 25">
              </form>
            </div>
            <div class="col-md-4">
              <form action="dethituchon.php" method="get">
                <input class="btn btn-link" type="submit" name="dethi" value="Đề thi 26">
              </form>
            </div>
            <div class="col-md-4">
              <form action="dethituchon.php" method="get">
                <input class="btn btn-link" type="submit" name="dethi" value="Đề thi 27">
              </form>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4">
              <form action="dethituchon.php" method="get">
                <input class="btn btn-link" type="submit" name="dethi" value="Đề thi 28">
              </form>
            </div>
            <div class="col-md-4">
              <form action="dethituchon.php" method="get">
                <input class="btn btn-link" type="submit" name="dethi" value="Đề thi 29">
              </form>
            </div>
            <div class="col-md-4">
              <form action="dethituchon.php" method="get">
                <input class="btn btn-link" type="submit" name="dethi" value="Đề thi 30">
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