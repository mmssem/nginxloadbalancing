<?php 
session_start(); 
$server_num = 1;
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title><?=$server_num?>번째 서버</title>
    </head>
    <body>
        <h1><?=$server_num?>번째 서버</h1>
        <?php 
        if(!isset($_SESSION['user_id']) || !isset($_SESSION['user_name'])) {
            echo "<form method='post' action='login_ok.php'>";
            echo "    <p>아이디: <input type='text' name='user_id'></p>";
            echo "    <p>패스워드: <input type='password' name='user_pw'></p>";
            echo "    <p><input type='submit' value='로그인'></p>";
            echo "</form>";
        } else {
            $user_id = $_SESSION['user_id'];
            $user_name = $_SESSION['user_name'];
            echo "<p>$user_name($user_id)님이 로그인 중입니다.";
            echo "<a href='logout.php'>[로그아웃]</a></p>";
        } 
        ?>
    </body>
</html>

