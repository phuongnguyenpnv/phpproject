<?php
  $conn = new mysqli('localhost', 'root', '', 'DatabaseTrangSucCuoi');
    // Kiểm tra kết nối
    if ($conn->connect_error) {
        die("Kết nối thất bại: " . $conn->connect_error);
    }
    $conn->set_charset("utf8");
    function get_product_by_id($connect, $id){
      $sql = "SELECT * FROM Products WHERE id = '".$id."'";
      $result = $connect->query($sql);
      if ($result->num_rows > 0) {
        while($row = mysqli_fetch_array($result)){
          $product[] = $row;
        }
        mysqli_free_result($result);
        return $product[0];
      }
    }
    
    ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Trang sức cưới Kim Cương</title>

    <link href = "css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/content.css">
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
      <div class="container-fluid border">
        <div class="row">
          <div class="col-md-7 col-sm-7 col-xs-12">
            <div class="box-index">
              <h2>Nhẫn cưới</h2>
              <div class="row">
                <?php
                  for ($i=22; $i <= 27 ; $i++) { 
                    $product = get_product_by_id($conn, $i);
                    echo"
                    <div class='col-lg-4 col-md-4 col-sm-6 col-xs-12 images'>
                      <div class='hovereffect'>
                        <img class='img-responsive' src='$product[6]' alt=''>
                        <p>$product[1]<br><strong>$product[3]</strong></p>
                        <div class='overlay'>
                          <a class='info' href='chitietsp.php''>Chi tiết</a>
                        </div>
                      </div>
                    </div>";
                  }
                ?>
              </div> 
            </div>
            <div class="box-index">
              <h2><br>Nhẫn cầu hôn</h2>
              <div class="row">
                <?php
                  for ($i=29; $i <= 34 ; $i++) { 
                    $product = get_product_by_id($conn, $i);
                    echo"
                    <div class='col-lg-4 col-md-4 images'>
                      <div class='hovereffect'>
                        <img class='img-responsive' src='$product[6]' alt=''>
                        <p>$product[1]<br><strong>$product[3]</strong></p>
                        <div class='overlay'>
                          <a class='info' href='chitietsp.php''>Chi tiết</a>
                        </div>
                      </div>
                    </div>";
                  }
                ?>
              </div>
            </div>
          </div>
          <div class="sidebar col-md-5 col-sm-5 col-xs-12">
            <div class="sidebar-item ">
              <img class="img" src="Image/NhanCuoiKC/pic7.png">
              <p>Đôi nhẫn cưới vàng 24K P&G 924568.000 <br><strong>15.802.000 VNĐ</strong></p>
              <button type="button" class="btn btn-info" style="width: 200px"><strong>Đặt hàng</strong></button>
            </div>
            <div class="sidebar-item ">
              <img class="img" src="Image/NhanCauHon/pic7.png">
              <p>Lắc tay cưới nữ vàng 24K P&G 924568.000 <br><strong>5.802.000 VNĐ</strong></p>
              <button type="button" class="btn btn-info" style="width: 200px"><strong>Đặt hàng</strong></button>
            </div>
          </div>
        </div>
      </div>

   
    <?php include ("footer.php"); ?>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  </body>
</html>