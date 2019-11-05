<?php
$password='a1bB123123';

    if(preg_match('/^(?![0-9]+$)(?![a-zA-Z]+$)[0-9A-Za-z]{6,}$/', $password)){
        echo "密码有效";
    }
    else {
        echo "无效密码";
    }
?>