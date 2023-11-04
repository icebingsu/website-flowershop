<?php
if (isset($_GET['act'])) {
   switch ($_GET['act']) {
      case 'login':
         include_once "model/m_user.php";
         if (isset($_POST['login'])) {
            $result = login($_POST['username'], $_POST['password']);
            if ($result) {
               if (isset($_SESSION)) {
                  $_SESSION['tenkhachhang'] = $result['hoten'];
                  $_SESSION['id_khachhang'] = $result['id'];
                  $_SESSION['dangnhap'] = true;
                  $login = "true";
               }
            } else {
               unset($_SESSION['tenkhachhang']);
               $_SESSION['dangnhap'] = false;
               $login= "false";
              
            }

            header('location:?mod=page&act=home&login='.$login.'');
         }
         break;
      case 'register':
         include_once "model/m_user.php";
         if (isset($_POST['register'])) {
            $checkMail = checkMail($_POST['email']);
            if($checkMail){
                $_SESSION['dangki'] = false;
               $register = 'false';
               }
            else{
               register($_POST['hoten'], $_POST['email'], $_POST['pass']);
               $_SESSION['dangki'] = true;
               $register= 'true';
               
            }
         }
         header('location:?mod=page&act=home&register='.$register.'');
         break;
      case 'logout':
         if($_SESSION['dangnhap']){
            $_SESSION['dangnhap'] = false;
            unset($_SESSION['tenkhachhang']);
            unset($_SESSION['id_khachhang']);
         }
         header('location:?mod=page&act=home');
         break;
      case 'lostpass':
         
         break;
      default:
         $_GET['act'] = "home";
         break;
   }
   include_once "view/layout.php";
}
