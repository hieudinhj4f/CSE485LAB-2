<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trường Đại Học Thủy Lợi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    <div class="header">
        <div class="logo">
            <img src="img/logo.png" alt="">
        </div>
        <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Tìm kiếm" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Tìm </button>
      </form>
    </div>
    <div class="header">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">GIỚI THIỆU</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">TIN TỨC & THÔNG BÁO</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">TUYỂN SINH</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">ĐÀO TẠO</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">NGHIÊN CỨU</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">SINH VIÊN</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">LIÊN HỆ</a>
        </li>
      </ul>
      
    </div>
  </div>
</nav>

            <div class="baiviet">
            <?php 
    require_once ("models/News.php")
  ?>

  <?php foreach ($baiviet as $baiviet): ?>
                        <tr>
                            <h3><?= $baiviet['danhmuc']?></h3>
                            <p><?= $baiviet['mota']?></p>
                            <img src=" <?= $baiviet['img']?>" alt="" >
                        </tr>
                    <?php endforeach; ?>
            </div>
            
           
            <div>
                <div style="background-color: rgb(88, 88, 183); display:flex">
                    <br>
                    <h3 style="text-align: left; color:aliceblue">2024 TRƯỜNG ĐẠI HỌC THỦY LỢI</h3>


                </div>
                <div style="background-color: rgb(62, 62, 165); display:flex">
                    <br>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.63279872338!2d105.82215547599823!3d21.007351588512165!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ac8109765ba5%3A0xd84740ece05680ee!2zVHLGsOG7nW5nIMSQ4bqhaSBo4buNYyBUaOG7p3kgbOG7o2k!5e0!3m2!1svi!2s!4v1717637627949!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <ul>
                        <li>TRƯỜNG ĐẠI HỌC THỦY LỢI</li>
                        <LI>
                            Địa chỉ:175 Tây Sơn, Đống Đa ,Hà Nội
                        </LI>
                        <li>Điện thoại: 0586869797</li>
                        <li>Email: dndffgf@gmail.com</li>
                    </ul>
                </div>
            </div>
</body>
</html>