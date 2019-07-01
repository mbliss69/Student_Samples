<?php
session_start();
    if(isset($_POST['login-submit'])) {
        include 'db.inc.php';
        $uid = mysqli_real_escape_string($conn, $_POST['mailuid']);
        $pwd = mysqli_real_escape_string($conn, $_POST['pwd']);
        
        if(empty($uid) || empty($pwd)){
            header("Location: ../index.php?login=empty");
                exit();
        } else {
            $sql = "SELECT * FROM users WHERE uidUsers='$uid'";
            $result = mysqli_query($conn, $sql);
            $resultCheck = mysqli_num_rows($result);
            if($resultCheck < 1){
                header("Location: ../index.php?login=error1");
                exit();
            } else {
                if($row = mysqli_fetch_assoc($result)) {
                    //dehash
                    //$hashedPwdCheck = password_verify($pwd, $row['pwdUsers']);
                    if($pwd != $row['pwdUsers']){
                        header("Location: ../index.php?login=error2");
                        exit();
                    } else if ($pwd == $row['pwdUsers']){
                        //log in the user here
                        $_SESSION['u_id'] = $row['idUsers'];
                        $_SESSION['u_uid'] = $row['uidUsers'];
                        header("Location: ../index.php?login=success");
                        exit();
                    }
                }
            }
        }

    } else {
            header("Location: ../index.php?login=error3");
            exit();
    }
