<?php include "connect.php" ?>

<?php
$stmt = $pdo->prepare("SELECT * FROM member WHERE username = ?");
$stmt->bindParam(1, $_GET["username"]);
$stmt->execute();
$row = $stmt->fetch();
?>
<html>
<head><meta charset="utf-8"></head>
<body>
<form action="edit-member.php" method="post">
username: <input type="text" name="username" value="<?=$row["username"]?>"><br>
password: <input type="password" name="password" value="<?=$row["password"]?>"><br>
ชื่อ: <input type="text" name="name" value="<?=$row["name"]?>"><br>
address:<br>
<textarea name="address" rows="3" cols="40"><?=$row["address"]?></textarea><br>
เบอร์: <input type="text" name="mobile" value="<?=$row["mobile"]?>"><br>
อีเมล์: <input type="text" name="email" value="<?=$row["email"]?>"><br>
<input type="submit" value="แก้ไขสินค้า ">
</form>
</body>
</html>