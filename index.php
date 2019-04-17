<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Hotel Booking</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
   
    
    <style>
        .well
        {
            background: rgba(0,0,0,0.7);
            border: none;
    
        }
        .wellfix
        {
            background: rgba(0,0,0,0.7);
            border: none;
            height: 150px;
        }
		body
		{
			background-image: url('images/home_bg.jpg');
			background-repeat: no-repeat;
			background-attachment: fixed;
		}
		p
		{
			font-size: 13px;
		}
        .pro_pic
        {
            border-radius: 50%;
            height: 50px;
            width: 50px;
            margin-bottom: 15px;
            margin-right: 15px;
        }
		
    </style>
    
    
</head>

<body>
    <div class="container">
      
      
       <img class="img-responsive" src="images/home_banner.jpg" style="width:100%; height:180px;">      
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="index.php">TRANG CHỦ</a></li>
                    <li><a href="room.php">Room &amp; Facilities</a></li>
                    <li><a href="reservation.php">Online Reservation</a></li>
                    <li><a href="admin.php">Admin</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="http://www.facebook.com"><img src="images/facebook.png"></a></li>
                    <li><a href="http://www.twitter.com"><img src="images/twitter.png"></a></li>                    
                </ul>
            </div>
        </nav>

     
        <div class="jumbotron">
        <div class="w3-content w3-section">
            <img class="mySlides w3-animate-fading" src="images/home_gallary/1.jpg" style="width:100%; height:450px;">
            <img class="mySlides w3-animate-fading" src="images/home_gallary/2.jpg" style="width:100%; height:450px;">
            <img class="mySlides w3-animate-fading" src="images/home_gallary/3.jpg" style="width:100%; height:450px;">
            <img class="mySlides w3-animate-fading" src="images/home_gallary/4.jpg" style="width:100%; height:450px;">
            <img class="mySlides w3-animate-fading" src="images/home_gallary/5.jpg" style="width:100%; height:450px;">
            <img class="mySlides w3-animate-fading" src="images/home_gallary/6.jpg" style="width:100%; height:450px;">
        </div>    
        </div>
        <hr>
        <div class="row" style="color: #ed9e21">
            <div class="col-md-12 well" >
              <h4><strong style="color: #ffbb2b">GIỚI THIỆU TỔNG QUAN</strong></h4><br>
              <p>Khách sạn Luxury Cần Thơ là khách sạn 5 sao đẳng cấp quốc tế, toaj lạc tại trung tâm Thành Phố Cần Thơ. Với 230 phòng tiêu chuẩn hạng sang thiết kế đẹp mắt và trang nhã đem lại sự tiện nghi và thoải mái dù là thời gian nghỉ ngơi thư giãn hay trong chuyến công tác.</p>
              <br>
              <p>Khách sạn có các tầng riêng biệt với 6 địa điểm phục vụ nhu cầu và ẩm thực của quý khách. Đặc biệt là nhà hàng Lux & Bar phục vụ các món ăn miền tây và quầy Bar phục vụ quý khách vui chơi vào buổi tối. Quán Coffee sân thượng với view hướng về phía sông đón gió cho quý khách gốc nhìn toàn cảnh về Cần Thơ. Ngoài ra còn có hồ bơi với view vô cực và các dịch vụ thể hình, spa và massage.</p>
              <br>
              <p>Khách sạn Luxury Cần Thơ với cơ sở vật chất và dịch vụ đẳng cấp thế giới là sự lựa chọn cho quý khách trong những chuyến công tác và kỳ nghỉ khi ghé thăm thành phố trung tâm của Đồng Bằng Sông Cửu Long này.</p>
              
            </div>  
        </div>
        <div class="row" style="color: #ffbb2b">
            <div class="col-md-4 wellfix">
              <h4><strong>Liên Hệ Chúng Tôi</strong></h4><hr>
              Địa chỉ : Cái Khế, Ninh Kiều, Cần Thơ.<br>
              Mail : th5tuananh@gmail.com <br>
            </div>
            <div class="col-md-4"></div>
            <div class="col-md-4 wellfix">
                <h4><strong>Được Phát Triển Bởi</strong></h4><hr>
                <a href="#"><img src="images/us/mamun.png" class="pro_pic">Mường Thanh Luxury Cần Thơ</a>

            </div>
        </div>
        



    </div>
    
    
    
    
    




    <script src="my_js/slide.js"></script>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>

</html>