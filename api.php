<?php
    include "connect.php";
    switch($_GET["r"]){
        case "add":
            $check = select("m_acc='".$_POST['m_acc']."' and m_del=0 ");
            if($check!= null){
                echo "帳號重複";
            }else{
                insert($_POST);
                echo "註冊成功";
            }
        break;
        case "del":
            delete($_POST);
            header("location:index.php");
        break;
       
    }

?>