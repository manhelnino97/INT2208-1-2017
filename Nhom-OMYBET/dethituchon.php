<?php
$dethi = $_GET['dethi'] ;
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Đề thi tự chọn
  </title>
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
            <li><a href="thitheobode.php">Thi theo bộ đề</a></li>
            <li>
              <a href="" >
                <?php echo $dethi; ?>              
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="container">
      <form action="chamdiem.php" method="get">
        <input type="hidden" name="tieude" value="Thi theo bộ đề">
        <input type="hidden" name="dethi" value="<?php echo htmlentities($dethi); ?>">
        <div class="panel panel-primary">
         <div class="panel-heading">
          <h3 class="text-center"><strong>
            <?php echo $dethi; ?></strong></h3>
          </div>
          <div class="panel panel-default" style="margin-top: 20px">
            <div class="row">
              <div class="col-md-1"></div>
              <div class="col-md-11">
                <i>Câu 01 : "Vạch kẻ đường" được hiểu thế nào là đúng?</i>
              </div>
            </div>
            <div class="row">
             <div class="col-md-1"></div>
             <div class="col-md-11">
              <div>
               <input  id="A01" name="01"  type="radio"  value="A" />
               <label>A. Vạch kẻ đường là vạch chỉ sự phân chia làn đường, vị trí hoặc hướng đi, vị trí dừng lại.</label>
             </div>
             <div>
               <input  id="B01" name="01"  type="radio" value="B" />
               <label>B. Vạch kẻ đường là vạch chỉ sự phân biệt vị trí dừng, đổ trên đường.</label>
             </div>
             <div>
               <input  id="C01" name="01"  type="radio" value="C" />
               <label>C. Cả hai ý nêu trên.</label>
             </div>
           </div>
         </div>
       </div>
       <div class="panel panel-default" style="margin-top: 20px">
        <div class="row">
          <div class="col-md-1"></div>
          <div class="col-md-11">
            <i>Câu 02 : Khái niệm "làn đường" được hiểu như thế nào là đúng?</i>
          </div>
        </div>
        <div class="row">
         <div class="col-md-1"></div>
         <div class="col-md-11">
          <div>
           <input  id="A02" name="02"  type="radio" value="A"/>
           <label>A. Là một phần của đường được chia theo chiều ngang của đường, có bề rộng đủ cho xe đỗ an toàn.</label>
         </div>
         <div>
           <input  id="B02" name="02"  type="radio" value="B"/>
           <label>B. Là một phần của đường xe chạy được chia theo chiều dọc của đường, có bề rộng đủ cho xe chạy an toàn.</label>
         </div>
         <div>
           <input  id="C02" name="02"  type="radio" value="C"/>
           <label>C. Cả hai ý nêu trên.</label>
         </div>
       </div>
     </div>
   </div>
   <div class="panel panel-default" style="margin-top: 20px">
    <div class="row">
      <div class="col-md-1"></div>
      <div class="col-md-11">
        <i>Câu 03 : Khái niệm "đường phố: được hiểu như thế nào là đúng?</i>
      </div>
    </div>
    <div class="row">
     <div class="col-md-1"></div>
     <div class="col-md-11">
      <div>
       <input  id="A03" name="03"  type="radio" value="A"/>
       <label>A. Đường phố là đường đô thị, gồm lòng đường và hè phố.</label>
     </div>
     <div>
       <input  id="B03" name="03"  type="radio" value="B"/>
       <label>B. Đường phố là đường bộ ngoài đô thị có lòng đường đủ rộng cho các phương tiện giao thông qua lại.</label>
     </div>
     <div>
       <input  id="C03" name="03"  type="radio" value="C"/>
       <label>C. Cả hai ý nêu trên.</label>
     </div>
   </div>
 </div>
</div>
<div class="panel panel-default" style="margin-top: 20px">
  <div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-11">
      <i>Câu 04 : Khái niệm "dải phân cách" được hiểu như thế nào là đúng?</i>
    </div>
  </div>
  <div class="row">
   <div class="col-md-1"></div>
   <div class="col-md-11">
    <div>
     <input  id="A04" name="04"  type="radio" value="A"/>
     <label>A. Là bộ phận của đường để phân chia mặt đường thành hai chiều xe chạy riêng biệt hoặc để phân chia phần đường của xe cơ giới hoặc xe thô sơ.</label>
   </div>
   <div>
     <input  id="B04" name="04"  type="radio" value="B"/>
     <label>B. Là bộ phận của đường để xác định ranh giới của đất dành cho đường bộ theo chiều ngang của đường.</label>
   </div>
   <div>
     <input  id="C04" name="04"  type="radio" value="C"/>
     <label>C. Là bộ phận của đường để ngăn cách không cho các loại xe vào những nơi không được phép.</label>
   </div>
 </div>
</div>
</div>
<div class="panel panel-default" style="margin-top: 20px">
  <div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-11">
      <i>Câu 05 : "Phương tiện giao thông đường bộ" gồm những phương tiện nào?</i>
    </div>
  </div>
  <div class="row">
   <div class="col-md-1"></div>
   <div class="col-md-11">
    <div>
     <input  id="A05" name="05"  type="radio" value="A"/>
     <label>A. Phương tiện giao thông cơ giới đường bộ, phương tiện giao thông thô sơ đường bộ.</label>
   </div>
   <div>
     <input  id="B05" name="05"  type="radio" value="B"/>
     <label>B. Phương tiện giao thông thô sơ đường bộ, phương tiện giao thông cơ giới đường bộ và xe máy chuyên dùng.</label>
   </div>
   <div>
     <input  id="C05" name="05"  type="radio" value="C"/>
     <label>C. Cả hai ý nêu trên.</label>
   </div>
 </div>
</div>
</div>
<div class="panel panel-default" style="margin-top: 20px">
  <div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-11">
      <i>Câu 06 : Khái niệm "phương tiện giao thông cơ giới đường bộ"" được hiểu thế nào là đúng?</i>
    </div>
  </div>
  <div class="row">
   <div class="col-md-1"></div>
   <div class="col-md-11">
    <div>
     <input  id="A06" name="06"  type="radio" value="A"/>
     <label>A. Gồm xe ô tô; máy kéo; xe mô tô hai bánh; xe mô tô ba bánh; xe gắn máy; xe cơ giới dùng cho người khuyết tật và xe máy chuyên dùng.</label>
   </div>
   <div>
     <input  id="B06" name="06"  type="radio" value="B"/>
     <label>B. Gồm xe ô tô; máy kéo; rơ mooc được kéo bởi xe ô tô, máy kéo; xe mô tô hai bánh; xe mô tô ba bánh, xe gắn máy và các loại xe tương tự.</label>
   </div>
   <div>
     <input  id="C06" name="06"  type="radio" value="C"/>
     <label>C. Cả hai ý nêu trên.</label>
   </div>
 </div>
</div>
</div>
<div class="panel panel-default" style="margin-top: 20px">
  <div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-11">
      <i>Câu 07 : Tại nơi đường giao nhai, người lái xe đang đi trên đường không ưu tiên phải nhường đường như thế nào?</i>
    </div>
  </div>
  <div class="row">
   <div class="col-md-1"></div>
   <div class="col-md-11">
    <div>
     <input  id="A07" name="07"  type="radio" value="A"/>
     <label>A. Nhường đường cho xe đi ở bên phải mình tới.</label>
   </div>
   <div>
     <input  id="B07" name="07"  type="radio" value="B"/>
     <label>B. Nhường đường cho xe đi ở bên trái mình tới.</label>
   </div>
   <div>
     <input  id="C07" name="07"  type="radio" value="C"/>
     <label>C. Nhường đường cho xe đi trên đường ưu tiên hoặc đường chính từ bất kỳ hướng nào tới.</label>
   </div>
 </div>
</div>
</div>
<div class="panel panel-default" style="margin-top: 20px">
  <div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-11">
      <i>Câu 08 : Người điều khiển xe mô tô, xe gắn máy trên đường mà trong máu có nồng độ cồn vượt quá bao nhiêu thì bị cấm?</i>
    </div>
  </div>
  <div class="row">
   <div class="col-md-1"></div>
   <div class="col-md-11">
    <div>
     <input  id="A08" name="08"  type="radio" value="A"/>
     <label>A. Nồng độ cồn vượt quá 50 miligam/100 mililit máu.</label>
   </div>
   <div>
     <input  id="B08" name="08"  type="radio" value="B"/>
     <label>B. Nồng độ cồn vượt quá 40 miligam/100 mililit máu.</label>
   </div>
   <div>
     <input  id="C08" name="08"  type="radio" value="C"/>
     <label>C. Nồng độ cồn vượt quá 30 miligam/100 mililit máu.</label>
   </div>
 </div>
</div>
</div>
<div class="panel panel-default" style="margin-top: 20px">
  <div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-11">
      <i>Câu 09 : Người điều khiển xe mô tô, xe gắn máy trên đường mà trong khí thở có nồng độ cồn vượt quá bao nhiêu thì bị cấm?</i>
    </div>
  </div>
  <div class="row">
   <div class="col-md-1"></div>
   <div class="col-md-11">
    <div>
     <input  id="A09" name="09"  type="radio" value="A"/>
     <label>A. Nồng độ cồn vượt quá 0,25 miligam/100 lít máu.</label>
   </div>
   <div>
     <input  id="B09" name="09"  type="radio" value="B"/>
     <label>B. Nồng độ cồn vượt quá 0,20 miligam/100 lít máu.</label>
   </div>
   <div>
     <input  id="C09" name="09"  type="radio" value="C"/>
     <label>C. Nồng độ cồn vượt quá 0,15 miligam/100 lít máu..</label>
   </div>
 </div>
</div>
</div>
<div class="panel panel-default" style="margin-top: 20px">
  <div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-11">
      <i>Câu 10 : Hành vi giao xe cơ giới, xe máy chuyên dùng cho người không đủ điều kiện để điều khiển xe tham giao giao thông có bị nghiêm cấm hay không?</i>
    </div>
  </div>
  <div class="row">
   <div class="col-md-1"></div>
   <div class="col-md-11">
    <div>
     <input  id="A10" name="10"  type="radio" value="A"/>
     <label>A. Không bị nghiêm cấm.</label>
   </div>
   <div>
     <input  id="B10" name="10"  type="radio" value="B"/>
     <label>B. Bị nghiêm cấm.</label>
   </div>
   <div>
     <input  id="C10" name="10"  type="radio" value="C"/>
     <label>C. Nghiêm cấm tùy từng trường hợp.</label>
   </div>
 </div>
</div>
</div>
<div class="panel panel-default" style="margin-top: 20px">
  <div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-11">
      <i>Câu 11 : Hành vi điều khiển xe cơ giới chạy quá tốc độ quy định, giành đường, vượt ẩu có bị nghiêm cấm hay không?</i>
    </div>
  </div>
  <div class="row">
   <div class="col-md-1"></div>
   <div class="col-md-11">
    <div>
     <input  id="A11" name="11"  type="radio" value="A"/>
     <label>A. Bị nghiêm cấm.</label>
   </div>
   <div>
     <input  id="B11" name="11"  type="radio" value="B"/>
     <label>B. Bị nghiêm cấm tùy từng trường hợp.</label>
   </div>
   <div>
     <input  id="C11" name="11"  type="radio" value="C"/>
     <label>C. Không bị nghiêm cấm.</label>
   </div>
 </div>
</div>
</div>
<div class="panel panel-default" style="margin-top: 20px">
  <div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-11">
      <i>Câu 12 : Hành vi bỏ trốn sau khi gây tai nạn để trốn tránh trách nhiệm hoặc khi có điều kiện mà cố ý không giúp người bị tai nạn giao thông có bị nghiêm cấm hay không?</i>
    </div>
  </div>
  <div class="row">
   <div class="col-md-1"></div>
   <div class="col-md-11">
    <div>
     <input  id="A12" name="12"  type="radio" value="A"/>
     <label>A. Không bị nghiêm cấm.</label>
   </div>
   <div>
     <input  id="B12" name="12"  type="radio" value="B"/>
     <label>B. Bị nghiêm cấm tùy từng trường hợp cụ thể.</label>
   </div>
   <div>
     <input  id="C12" name="12"  type="radio" value="C"/>
     <label>C. Bị nghiêm cấm.</label>
   </div>
 </div>
</div>
</div>
<div class="panel panel-default" style="margin-top: 20px">
  <div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-11">
      <i>Câu 13 : Việc sản xuất, mua bán, sử dụng biển số xe cơ giới, xe máy chuyên dùng được quy định như thế nào trong Luật giao thông đường bô?</i>
    </div>
  </div>
  <div class="row">
   <div class="col-md-1"></div>
   <div class="col-md-11">
    <div>
     <input  id="A13" name="13"  type="radio" value="A"/>
     <label>A. Nghiêm cấm sản xuất, được phép sử dụng.</label>
   </div>
   <div>
     <input  id="B13" name="13"  type="radio" value="B"/>
     <label>B. Nghiêm cấm mua bán, cho phép sử dụng.</label>
   </div>
   <div>
     <input  id="C13" name="13"  type="radio" value="C"/>
     <label>C. Nghiêm cấm sản xuất, mua bán, sử dụng trái phép.</label>
   </div>
 </div>
</div>
</div>
<div class="panel panel-default" style="margin-top: 20px">
  <div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-11">
      <i>Câu 14 : Người điều khiển xe mô tô hai bánh, ba bánh, xe gắn máy có được phép sử dụng xe để kéo, đẩy các xe khác, vật khác khi tham gia giao thông không?</i>
    </div>
  </div>
  <div class="row">
   <div class="col-md-1"></div>
   <div class="col-md-11">
    <div>
     <input  id="A14" name="14"  type="radio" value="A"/>
     <label>A. Được phép.</label>
   </div>
   <div>
     <input  id="B14" name="14"  type="radio" value="B"/>
     <label>B. Tùy trường hợp.</label>
   </div>
   <div>
     <input  id="C14" name="14"  type="radio" value="C"/>
     <label>C. Không được phép.</label>
   </div>
 </div>
</div>
</div>
<div class="panel panel-default" style="margin-top: 20px">
  <div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-11">
      <i>Câu 15 : Người ngồi trên xe mô tô hai bánh, xe mô tô ba bánh, xe gắn máy khi tham gia giao thông có được mang, vác vật cồng kềnh hay không?</i>
    </div>
  </div>
  <div class="row">
   <div class="col-md-1"></div>
   <div class="col-md-11">
    <div>
     <input  id="A15" name="15"  type="radio" value="A"/>
     <label>A. Được mang, vác tùy trường hợp cụ thể.</label>
   </div>
   <div>
     <input  id="B15" name="15"  type="radio" value="B"/>
     <label>B. Không được mang, vác.</label>
   </div>
   <div>
     <input  id="C15" name="15"  type="radio" value="C"/>
     <label>C. Được mang vác nhưng phải đảm bảo an toàn.</label>
   </div>
 </div>
</div>
</div>
<div class="panel panel-default" style="margin-top: 20px">
  <div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-11">
      <i>Câu 16 : Bảo đảm trật tự, an toàn giao thông đường bộ là trách nhiệm của ai?</i>
    </div>
  </div>
  <div class="row">
   <div class="col-md-1"></div>
   <div class="col-md-11">
    <div>
     <input  id="A16" name="16"  type="radio" value="A"/>
     <label>A. Là trách nhiệm của ngành Giao thông vận tải và ngành Công an.</label>
   </div>
   <div>
     <input  id="B16" name="16"  type="radio" value="B"/>
     <label>B. Là trách nhiệm của cơ quan, tổ chức, cá nhân.</label>
   </div>
   <div>
     <input  id="C16" name="16"  type="radio" value="C"/>
     <label>C. Là trách nhiệm của cảnh sát giao thông.</label>
   </div>
 </div>
</div>
</div>
<div class="panel panel-default" style="margin-top: 20px">
  <div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-11">
      <i>Câu 17 : Trên đường giao thông, khi hiệu lệnh của người điều khiển giao thông trái với hiệu lệnh của đèn hoặc biển bán hiệu thì người tham gia giao thông phải chấp hành thep hiệu lệnh nào?</i>
    </div>
  </div>
  <div class="row">
   <div class="col-md-1"></div>
   <div class="col-md-11">
    <div>
     <input  id="A17" name="17"  type="radio" value="A"/>
     <label>A. Hiệu lệnh của người điều khiển giao thông.</label>
   </div>
   <div>
     <input  id="B17" name="17"  type="radio" value="B"/>
     <label>B. Hiệu lệnh của đèn điều khiển giao thông.</label>
   </div>
   <div>
     <input  id="C17" name="17"  type="radio" value="C"/>
     <label>C. Hiệu lệnh của biển báo hiệu đường bộ.</label>
   </div>
 </div>
</div>
</div>
<div class="panel panel-default" style="margin-top: 20px">
  <div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-11">
      <i>Câu 18 : Tại nơi có biển hiệu cố định lại có báo hiệu tạm thời thì người tham gia giao thông phải chấp hành hiệu lệnh của báo hiệu nào?</i>
    </div>
  </div>
  <div class="row">
   <div class="col-md-1"></div>
   <div class="col-md-11">
    <div>
     <input  id="A18" name="18"  type="radio" value="A"/>
     <label>A. Biển báo hiệu cố định.</label>
   </div>
   <div>
     <input  id="B18" name="18"  type="radio" value="B"/>
     <label>B. Báo hiệu tạm thời.</label>
   </div>
   <div>
     <input  id="C18" name="18"  type="radio" value="C"/>
     <label>C. Không cần chấp hành.</label>
   </div>
 </div>
</div>
</div>
<div class="panel panel-default" style="margin-top: 20px">
  <div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-11">
      <i>Câu 19 : Người lái xe phải làm gì khi quay đầu xe trên cầu, gầm cầu vượt, đường ngầm hay khu vực đường bộ giao nhau cùng mức với đường sắt?</i>
    </div>
  </div>
  <div class="row">
   <div class="col-md-1"></div>
   <div class="col-md-11">
    <div>
     <input  id="A19" name="19"  type="radio" value="A"/>
     <label>A. Không được quay đầu xe.</label>
   </div>
   <div>
     <input  id="B19" name="19"  type="radio" value="B"/>
     <label>B. Lợi dụng chỗ rộng và phải có người làm tín hiệu sau xe để đảm bảo an toàn.</label>
   </div>
   <div>
     <input  id="C19" name="19"  type="radio" value="C"/>
     <label>C.Lợi dụng chỗ rộng có thể quay đầu được để quay đầu xe cho an toàn.</label>
   </div>
 </div>
</div>
</div>
<div class="panel panel-default" style="margin-top: 20px">
  <div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-11">
      <i>Câu 20 : Tại nơi đường giao nhau có báo hiệu đi theo đường vòng xuyến, người điều khiển phương tiện phải nhường đường như thế nào?</i>
    </div>
  </div>
  <div class="row">
   <div class="col-md-1"></div>
   <div class="col-md-11">
    <div>
     <input  id="A20" name="20"  type="radio" value="A"/>
     <label>A. Phải nhường đường cho xe đi bên phải.</label>
   </div>
   <div>
     <input  id="B20" name="20"  type="radio" value="B"/>
     <label>B. Xe báo hiệu xin đường trước xe đó được đi trước.</label>
   </div>
   <div>
     <input  id="C20" name="20"  type="radio" value="C"/>
     <label>C. Phải nhường đường cho xe đi bên trái.</label>
   </div>
 </div>
</div>
</div>
<div class="panel">
 <div class="row">
   <div class="col-md-8"></div>
   <div class="col-md-4">
    <input class="btn btn-primary" type="submit" name="chamdiem" value="Chấm điểm" href="chamdiem.php">
  </div>
</div>
</div>
</div>
</form>
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