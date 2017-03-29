<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Trang chủ</title>
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
      background-image: url(image/02.jpg);
      background-size: 1600px;
      width: 100%;
      height: 800px;
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
              <li><a href="luyenthi.php"><i class="glyphicon glyphicon-pencil"></i> Luyện thi </a></li>
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
    <div class="container-fluid">
      <div class="row" style="margin-top: 15px">
        <div class="col-md-8 col-md-offset-2">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title" ><b style="font-size: 20px; color: #2988BF">Chào mừng bạn đến với trang web</b></h3>
            </div>
            <div class="panel-body" style="font-size: 18px">
              <p>Đây là trang web học luyện thi lái xe giúp các bạn đang chuẩn bị thi bằng lái xe có thêm kinh nghiệm thi. Trang web này hỗ trợ rất hiệu quả khi bạn cần ôn luyện câu hỏi trắc nghiệm về luật giao thông đường bộ và cung cấp cho bạn kiến thức về các loại biển báo giao thông và cẩm nang an toàn giao thông. Ngoài ra bạn có thể tham khảo thêm mẹo thi nếu muốn học nhanh (tuy nhiên chúng tôi không khuyến khích vì nó không giúp bạn thực sự nắm vững luật giao thông).</p>
              <p>Xin trân trọng cảm ơn và chúc các bạn ôn luyện tốt, nắm vững luật và đạt kết quả cao khi đi thi!</p>
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