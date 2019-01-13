<?php
  $conn = new mysqli('localhost', 'root', '', 'DatabaseTrangSucCuoi');
    // Kiểm tra kết nối
    if ($conn->connect_error) {
        die("Kết nối thất bại: " . $conn->connect_error);
    }
    $conn->set_charset("utf8");
  
    function get_product_by_id($connect){
      $sql = "SELECT * FROM products";
      $result = $connect->query($sql);

      if ($result->num_rows>0){
        $rowcount = 1;
        while($row = mysqli_fetch_assoc($result)){
          echo "<tr>";
            foreach ($row as $var => $value) {
             echo "<td>$value</td>";
            }
            echo "</tr>";
          ++$rowcount;
        }
        mysqli_free_result($result);
      }
    }
    header('Content-Type: text/html; charset=utf-8');
    
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Products</title>
  <link href = "css/bootstrap.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/content.css">
  <style type="text/css">
    .Cell{
      height: 40px;
      text-align: center;
    }
    .button{
      margin-left: 40px;
    }
  </style>
</head>
<body>
  <?php include ("header.php"); ?>
    <div class="container-fluid" >
      <div id="wrapper">
        <div  class="menu row">
          <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 hidden-xs">
            <ul class = "nav nav-tabs" id="myTab">
              <li class = "nav-item">
                <a class="nav-link" href="TrangSucVang.php">Trang sức vàng</a>
              </li>
              <li class = "nav-item">
                <a class="nav-link" href="TrangSucBac.php" >Trang sức bạc</a>
              </li>
              <li class = "nav-item">
                <a class="nav-link" href="TrangSucKimCuong.php" >Trang sức kim cương</a>
              </li>
              <li class = "nav-item">
                <a class="nav-link" href="BoSuuTap.php">Bộ sưu tập</a>
              </li>
              <li class = "nav-item">
                <a class="nav-link" href="#" >Quà tặng</a>
              </li>
            </ul>
          </div>
          <div class="col-xs-4" class="span3 mp-search-header search-box">
            <form class="search-form" action="http://hocwebgiare.com/"> 
              <a href="#"><input class="form-control" style="width: 300px; float: left;" placeholder="Search" type="text"><button style="height: 40px;" class="btn btn-light"><i class="icon-menu glyphicon glyphicon-search"></i></button></a>
            </form>
          </div>
        </div>
      </div>
    </div>
  <div class="row border" style="padding-bottom: 20px;text-align: center; padding-top: 10px;" >
    
    <div class="col-xs-12 col-sm-12 avr">
      
       <h1>Thông tin sản phẩm </h1>
       <div style="height: 50px; margin-bottom: 15px;">
        <a href="inforProduct.php"><input class="button" type="button" name="btnnc" value="Thêm"></a>
        <a href="#"><input class="button" type="button" name="btnnc" value="Sửa"></a>
        <a href="#"><input class="button" type="button" name="btnnc" value="Xóa"></a>
      </div>
       <table style="text-align: center;" border=”1px” cellspacing=”0″ cellpadding=”3″>
        <tr >
          <th style="width: 50px;" class="Cell">ID</th>
          <th style="width: 250px;" class="Cell">Tên sản phấm</th>
          <th style="width: 150px;" class="Cell">Giá nhập (đồng)</th>
          <th style="width: 150px;" class="Cell">Giá bán (đồng)</th>
          <th style="width: 150px;" class="Cell">Số lượng</th>
          <th style="width: 150px;" class="Cell">Loại sản phẩm</th>
          <th style="width: 250px;" class="Cell">link hình ảnh</th>
          <th style="width: 200px;" class="Cell">Thông tin khác</th>
        </tr>

       <?php
        get_product_by_id($conn);
       ?>
  </table>
    </div>
  </div>
  <?php include ("footer.php"); ?>
  <script src="js/jquery-3.3.1"></script>
  <script src = "js/bootstrap.js"></script>
</body>
</html>
