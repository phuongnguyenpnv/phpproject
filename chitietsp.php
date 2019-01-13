<?php
  $conn = new mysqli('localhost', 'root', '', 'DatabaseTrangSucCuoi');
    // Kiểm tra kết nối
    if ($conn->connect_error) {
        die("Kết nối thất bại: " . $conn->connect_error);
    }
    $conn->set_charset("utf8");

    $id=$_GET['id'];
      function get_info_product_detail($connect, $id) {
        $sql = "SELECT * FROM products WHERE id = '".$id."'";
      $result = $connect->query($sql);
      if ($result->num_rows > 0) {
        while($row = mysqli_fetch_array($result)){
          $product[] = $row;
        }

        
        mysqli_free_result($result);
        return $product[0];
      }
      }

      $info = get_info_product_detail($conn, $id);
    
    ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Thông tin sản phẩm</title>

    <link href = "css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/content.css">
    <style type="text/css">
      .type{
        font-size: 20px;

      }
      .img{
        height: 400px;
        width: 400px;
        border: solid 1px black;
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
      <div class="container-fluid border" style="height: 500px;">
        <div  class="col-lg-5 col-md-5" style="float: left;">
          <img class="img" src=<?php echo $info[6]; ?>>
        </div>
        <div class="col-lg-7 col-md-7 type">
          <h1>Thông tin sản phẩm</h1>
          <?php 
              echo "<strong>Tên sản phẩm:</strong>".$info[1]."<br>";
              echo "Giá sản phẩm: ".number_format($info[3])." VNĐ <br>";
              echo "Số lượng sản phẩm: ".$info[4]."<br>";
              echo "Loại: ".$info[5]."<br>";

           ?>
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