<?php 
$dem = 0; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Chấm điểm</title>
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
            <li><a href="<?php
             if($_GET['tieude']=="Đề thi ngẫu nhiên") echo htmlentities('dethingaunhien.php');
             if($_GET['tieude']=="Thi theo bộ đề") echo htmlentities('thitheobode.php');
             ?>">
             <?php echo $_GET['tieude']; ?>
           </a></li>
         </a></li>
         <li><a href="">Chấm điểm</a></li>
       </ul>
     </div>
   </div>
 </div>
 <div class="container">
   <div class="panel panel-primary">
     <div class="panel-heading">
       <h3 class=" text-center"><strong>Kết quả : <?php echo $_GET['dethi']; ?></strong></h3>
     </div>
     <div class="panel" style="text-align: center; margin-top: 15px">
      <div class="row" style="border: 1">
        <div class="col-md-3"><b>Câu hỏi</b></div>
        <div class="col-md-3"><b>Đáp án của bạn</b></div>
        <div class="col-md-3"><b>Đáp án đúng</b></div>
        <div class="col-md-3"><b>Đánh giá</b></div>
      </div>
    </div>
    <div class="panel panel-default" style="text-align: center">
      <div class="row">
        <div class="col-md-3">Câu 01</div>
        <div class="col-md-3">
          <?php if(isset($_GET['01']))
          echo $_GET['01'];
          else echo "Không lựa chọn";
          ?>
        </div>
        <div class="col-md-3">A</div>
        <div class="col-md-3">
          <?php if(isset($_GET['01'])){
            if($_GET['01']=='A') {
              echo "Đúng";
              $dem++;
            }
            else echo "Sai";
          }
          else echo "Sai";
          ?>
        </div>
      </div>
      <div class="row">
        <div class="col-md-3">Câu 02</div>
        <div class="col-md-3">
          <?php if(isset($_GET['02']))
          echo $_GET['02'];
          else echo "Không lựa chọn";
          ?>
        </div>
        <div class="col-md-3">B</div>
        <div class="col-md-3">
          <?php if(isset($_GET['02'])){
            if($_GET['02']=='B') {
              echo "Đúng";
              $dem++;
            }
            else echo "Sai";
          }
          else echo "Sai";
          ?>
        </div>
      </div>
      <div class="row">
        <div class="col-md-3">Câu 03</div>
        <div class="col-md-3">
          <?php if(isset($_GET['03']))
          echo $_GET['03'];
          else echo "Không lựa chọn";
          ?>
        </div>
        <div class="col-md-3">A</div>
        <div class="col-md-3">
          <?php if(isset($_GET['03'])){
            if($_GET['03']=='A') {
              echo "Đúng";
              $dem++;
            }
            else echo "Sai";
          }
          else echo "Sai";
          ?>
        </div>
      </div>
      <div class="row">
        <div class="col-md-3">Câu 04</div>
        <div class="col-md-3">
          <?php if(isset($_GET['04']))
          echo $_GET['04'];
          else echo "Không lựa chọn";
          ?>
        </div>
        <div class="col-md-3">A</div>
        <div class="col-md-3">
          <?php 
          if(isset($_GET['04'])){
            if($_GET['04']=='A') {
              echo "Đúng";
              $dem++;
            }
            else echo "Sai";
          }
          else echo "Sai";
          ?>
        </div>
      </div>
      <div class="row">
        <div class="col-md-3">Câu 05</div>
        <div class="col-md-3">
          <?php if(isset($_GET['05']))
          echo $_GET['05'];
          else echo "Không lựa chọn";
          ?>
        </div>
        <div class="col-md-3">A</div>
        <div class="col-md-3">
          <?php if(isset($_GET['05'])){
            if($_GET['05']=='A') {
              echo "Đúng";
              $dem++;
            }
            else echo "Sai";
          }
          else echo "Sai";
          ?>
        </div>
      </div>
      <div class="row">
        <div class="col-md-3">Câu 06</div>
        <div class="col-md-3">
          <?php if(isset($_GET['06']))
          echo $_GET['06'];
          else echo "Không lựa chọn";
          ?>
        </div>
        <div class="col-md-3">B</div>
        <div class="col-md-3">
          <?php if(isset($_GET['06'])){
            if($_GET['06']=='B') {
              echo "Đúng";
              $dem++;
            }
            else echo "Sai";
          }
          else echo "Sai";
          ?>
        </div>
      </div>
      <div class="row">
        <div class="col-md-3">Câu 07</div>
        <div class="col-md-3">
          <?php if(isset($_GET['07']))
          echo $_GET['07'];
          else echo "Không lựa chọn";
          ?>
        </div>
        <div class="col-md-3">C</div>
        <div class="col-md-3">
          <?php if(isset($_GET['07'])){
            if($_GET['07']=='C') {
              echo "Đúng";
              $dem++;
            }
            else echo "Sai";
          }
          else echo "Sai";
          ?>
        </div>
      </div>
      <div class="row">
        <div class="col-md-3">Câu 08</div>
        <div class="col-md-3">
          <?php if(isset($_GET['08']))
          echo $_GET['08'];
          else echo "Không lựa chọn";
          ?>
        </div>
        <div class="col-md-3">A</div>
        <div class="col-md-3">
          <?php if(isset($_GET['08'])){
            if($_GET['08']=='A') {
              echo "Đúng";
              $dem++;
            }
            else echo "Sai";
          }
          else echo "Sai";
          ?>
        </div>
      </div>
      <div class="row">
        <div class="col-md-3">Câu 09</div>
        <div class="col-md-3">
          <?php if(isset($_GET['09']))
          echo $_GET['09'];
          else echo "Không lựa chọn";
          ?>
        </div>
        <div class="col-md-3">A</div>
        <div class="col-md-3">
          <?php if(isset($_GET['09'])){
            if($_GET['09']=='A') {
              echo "Đúng";
              $dem++;
            }
            else echo "Sai";
          }
          else echo "Sai";
          ?>
        </div>
      </div>
      <div class="row">
        <div class="col-md-3">Câu 10</div>
        <div class="col-md-3">
          <?php if(isset($_GET['10']))
          echo $_GET['10'];
          else echo "Không lựa chọn";
          ?>
        </div>
        <div class="col-md-3">B</div>
        <div class="col-md-3">
          <?php if(isset($_GET['10'])){
            if($_GET['10']=='B') {
              echo "Đúng";
              $dem++;
            }
            else echo "Sai";
          }
          else echo "Sai";
          ?>
        </div>
      </div>
      <div class="row">
        <div class="col-md-3">Câu 11</div>
        <div class="col-md-3">
          <?php if(isset($_GET['11']))
          echo $_GET['11'];
          else echo "Không lựa chọn";
          ?>
        </div>
        <div class="col-md-3">A</div>
        <div class="col-md-3">
          <?php if(isset($_GET['11'])){
            if($_GET['11']=='A') {
              echo "Đúng";
              $dem++;
            }
            else echo "Sai";
          }
          else echo "Sai";
          ?>
        </div>
      </div>
      <div class="row">
        <div class="col-md-3">Câu 12</div>
        <div class="col-md-3">
          <?php if(isset($_GET['12']))
          echo $_GET['12'];
          else echo "Không lựa chọn";
          ?>
        </div>
        <div class="col-md-3">C</div>
        <div class="col-md-3">
          <?php if(isset($_GET['12'])){
            if($_GET['12']=='C') {
              echo "Đúng";
              $dem++;
            }
            else echo "Sai";
          }
          else echo "Sai";
          ?>
        </div>
      </div>
      <div class="row">
        <div class="col-md-3">Câu 13</div>
        <div class="col-md-3">
          <?php if(isset($_GET['13']))
          echo $_GET['13'];
          else echo "Không lựa chọn";
          ?>
        </div>
        <div class="col-md-3">C</div>
        <div class="col-md-3">
          <?php if(isset($_GET['13'])){
            if($_GET['13']=='C') {
              echo "Đúng";
              $dem++;
            }
            else echo "Sai";
          }
          else echo "Sai";
          ?>
        </div>
      </div>
      <div class="row">
        <div class="col-md-3">Câu 14</div>
        <div class="col-md-3">
          <?php if(isset($_GET['14']))
          echo $_GET['14'];
          else echo "Không lựa chọn";
          ?>
        </div>
        <div class="col-md-3">C</div>
        <div class="col-md-3">
          <?php if(isset($_GET['14'])){
            if($_GET['14']=='C') {
              echo "Đúng";
              $dem++;
            }
            else echo "Sai";
          }
          else echo "Sai";
          ?>
        </div>
      </div>
      <div class="row">
        <div class="col-md-3">Câu 15</div>
        <div class="col-md-3">
          <?php if(isset($_GET['15']))
          echo $_GET['15'];
          else echo "Không lựa chọn";
          ?>
        </div>
        <div class="col-md-3">B</div>
        <div class="col-md-3">
          <?php if(isset($_GET['15'])){
            if($_GET['15']=='B') {
              echo "Đúng";
              $dem++;
            }
            else echo "Sai";
          }
          else echo "Sai";
          ?>
        </div>
      </div>
      <div class="row">
        <div class="col-md-3">Câu 16</div>
        <div class="col-md-3">
          <?php if(isset($_GET['16']))
          echo $_GET['16'];
          else echo "Không lựa chọn";
          ?>
        </div>
        <div class="col-md-3">B</div>
        <div class="col-md-3">
          <?php if(isset($_GET['16'])){
            if($_GET['16']=='B') {
              echo "Đúng";
              $dem++;
            }
            else echo "Sai";
          }
          else echo "Sai";
          ?>
        </div>
      </div>
      <div class="row">
        <div class="col-md-3">Câu 17</div>
        <div class="col-md-3">
          <?php if(isset($_GET['17']))
          echo $_GET['17'];
          else echo "Không lựa chọn";
          ?>
        </div>
        <div class="col-md-3">A</div>
        <div class="col-md-3">
          <?php if(isset($_GET['17'])){
            if($_GET['17']=='A') {
              echo "Đúng";
              $dem++;
            }
            else echo "Sai";
          }
          else echo "Sai";
          ?>
        </div>
      </div>
      <div class="row">
        <div class="col-md-3">Câu 18</div>
        <div class="col-md-3">
          <?php if(isset($_GET['18']))
          echo $_GET['18'];
          else echo "Không lựa chọn";
          ?>
        </div>
        <div class="col-md-3">B</div>
        <div class="col-md-3">
          <?php if(isset($_GET['18'])){
            if($_GET['18']=='B') {
              echo "Đúng";
              $dem++;
            }
            else echo "Sai";
          }
          else echo "Sai";
          ?>
        </div>
      </div>
      <div class="row">
        <div class="col-md-3">Câu 19</div>
        <div class="col-md-3">
          <?php if(isset($_GET['19']))
          echo $_GET['19'];
          else echo "Không lựa chọn";
          ?>
        </div>
        <div class="col-md-3">A</div>
        <div class="col-md-3">
          <?php if(isset($_GET['19'])){
            if($_GET['19']=='A') {
              echo "Đúng";
              $dem++;
            }
            else echo "Sai";
          }
          else echo "Sai";
          ?>
        </div>
      </div>
      <div class="row">
        <div class="col-md-3">Câu 20</div>
        <div class="col-md-3">
          <?php if(isset($_GET['20']))
          echo $_GET['20'];
          else echo "Không lựa chọn";
          ?>
        </div>
        <div class="col-md-3">C</div>
        <div class="col-md-3">
          <?php if(isset($_GET['20'])){
            if($_GET['20']=='C') {
              echo "Đúng";
              $dem++;
            }
            else echo "Sai";
          }
          else echo "Sai";
          ?>
        </div>
      </div>
    </div>
    <div class="panel" style="text-align: center">
      <div class="row">
        <div class="col-md-6"><strong>Điểm : <?php echo $dem ?>/20</strong></div>
        <div class="col-md-6"><strong>Đánh giá : <?php 
          if($dem>=15)
            echo "Đạt";
          else
            echo "Không đạt";
          ?><strong></div>
        </div>
      </div>
      <div class="panel">
        <div class="row">
          <div class="col-md-9"></div>
          <div class="col-md-3">
            <a href="trangchu.php" type="button" class="btn btn-primary">Xác nhận</a>
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
          <li> Copyright © 2017 LTLX_OMYBET. All rights reserved.</li>
        </ul>
      </div>
    </div>
    <div class="col-md-7"></div>
  </div>
</div>
</div>
</body>
</html>