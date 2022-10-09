<?php include "connect.php" ?>
<html>
<head><meta charset="utf-8"></head>
<body>
<?php
    $stmt = $pdo->prepare("SELECT * FROM member");
    $stmt->execute();
?>

<?php while ($row = $stmt->fetch()): ?>
    username: <?=$row["username"]?><br>
    password: <?=$row["password"]?><br>
    ชื่อ : <?=$row["name"]?><br>
    ที่อยู่ : <?=$row["address"]?><br>
    เบอร์: <?=$row["mobile"]?><br>
    อีเมล์: <?=$row["email"]?><br>
    <a href="editform.php?username=<?=$row["username"]?>">แก้ไข</a>
    <hr><br>
<?php endwhile; ?>    
</body>
</html>