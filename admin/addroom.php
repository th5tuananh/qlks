<?php
include_once 'include/class.user.php'; 
$user=new User(); 
 

if(isset($_REQUEST[ 'submit'])) 
{ 
    extract($_REQUEST); 
    $result=$user->add_room($roomname, $room_qnty, $no_bed, $bedtype,$facility,$price);
    if($result)
    {
        echo "<script type='text/javascript'>
              alert('Room Added Succesfully');
         </script>";
    }
    else
    {
         echo $result;
    }
   
} 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin Panel</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/reg.css" type="text/css">
    
</head>

<body>
    <div class="container">
        <div class="well">
            <h2>Thêm Danh Mục Phòng</h2>
            <hr>
            <form action="" method="post" name="room_category">
                <div class="form-group">
                    <label for="roomname">Tên Loại Phòng:</label>
                    <input type="text" class="form-control" name="roomname" placeholder="super delux" required>
                </div>
                 <div class="form-group">
                    <label for="qty">Số lượng phòng:</label>&nbsp;
                    <select name="room_qnty">
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                       <option value="5">5</option>
                      <option value="6">6</option>
                      <option value="7">7</option>
                      <option value="8">8</option>
                      <option value="9">9</option>
                      <option value="10">10</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="bed">Số lượng giường:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <select name="no_bed">
                      <option value="1">1</option>
                      <option value="2">2</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="bedtype">Loại Giường:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                   <select name="bedtype">
                      <option value="single">Đơn</option>
                      <option value="double">Đôi</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="Facility">Trang thiết bị</label>
                    <textarea class="form-control" rows="5" name="facility"></textarea>
                </div>
               <div class="form-group">
                    <label for="price">Gía mỗi đêm:</label>
                    <input type="text" class="form-control" name="price" required>
                </div>
                <button type="submit" class="btn btn-lg btn-primary button" name="submit" value="Add Room">Thêm</button>

               <br>
                <div id="click_here">
                    <a href="../admin.php">Trờ về Trang chủ</a>
                </div>


            </form>
        </div>
    </div>

</body>

</html>