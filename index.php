<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BaiTap</title>
</head>
<body>

    <form method="get"action="info.php">
  <div>
    <h1>Nhập thông tin sinh viên</h1>
        MSSV: <input type="text" name="mssv" ><br><br>
        Họ tên: <input type="text" name="hoten" ><br><br>
        Giới tính: <input type="radio" name="gt" value="gt">Nam, <input type="radio" name="gt" value="gt">Nữ<br><br>
        Ngôn ngữ lập trình: <input type="checkbox" name="c" value="c">C++,<input type="checkbox" name="php" value="php">PHP <br><br>
        Thành phố: <select name="tp">
            <option value="hn">Hà Nội</option>
            <option value="hcm">Hồ Chí Minh</option>
            <option value="bt">Bến Tre</option>
        </select><br><br>
        Tin nhắn:<br>
        <textarea name="tn" id="" value="tn" rows="7" cols="40"></textarea><br><br>
        <button type="submit">Gửi</button>

  </div>
</form>    

</body>
</html>