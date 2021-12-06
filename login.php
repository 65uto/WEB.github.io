<?php
session_start();
include('server.php');

?> 

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>เข้าสู่ระบบ | Anapatch_WebSite</title>

    <link rel="stylesheet" href="style.css">
    <link href='https://fonts.googleapis.com/css?family=Kanit:400,300&subset=thai,latin' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://kit-pro.fontawesome.com/releases/v5.13.0/css/pro.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>

    <div class="header">
        <h2>Login | Anapatch_WebSite</h2>
    </div>

    <form action="login_db.php" method="post">
        <?php if (isset($_SESSION['error'])) : ?>
            <div class="error">
                <h3>
                    <?php
                    echo $_SESSION['error'];
                    unset($_SESSION['error']); 
                    ?>
                </h3>
            </div>
        <?php endif ?>
        <div class="input-group">
            <label for="username"><i class="fad fa-user"></i> Username | ชื่อผู้ใช้งาน</label>
            <input type="text" name="username">
        </div>
        <div class="input-group">
            <label for="password"><i class="fad fa-lock"></i> Password | รหัสผ่าน</label>
            <input type="password" name="password">
        </div>
        <center>
            <div class="">
                <button type="submit" name="login_user" class="btn btn-success">เข้าสู่ระบบ</button>
            </div>
        </center>
        <p>ยังไม่มีบัญชีงั้นหรอ <a href="register.php">สมัครสมาชิกได้ตลงนี้!</a></p>
    </form>

</body>

</html>