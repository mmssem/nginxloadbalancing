<?php
    session_start();

    if ( !isset($_POST['user_id']) || !isset($_POST['user_pw']) ) {
        echo "<script>alert('아이디, 패스를 입력하세요.');";
        echo "window.location.replace('login.php');</script>";
        exit;
    }
    $user_id = $_POST['user_id'];
    $user_pw = $_POST['user_pw'];
    $members = array(
        'user' => array('password' => '1111', 'name' => '유저'),
        'khs' => array('password' => '2222', 'name' => '멍멍쌤')
    );
 
    if( !isset($members[$user_id]) || $members[$user_id]['password'] != $user_pw ) {
        echo "<script>alert('아이디, 비밀번호를 확인하세요.');";
        echo "window.location.replace('login.php');</script>";
        exit;
    }

    $_SESSION['user_id'] = $user_id;
    $_SESSION['user_name'] = $members[$user_id]['name'];

?>
<meta http-equiv="refresh" content="0;url=index.php" />


