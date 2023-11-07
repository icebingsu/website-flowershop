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
                  $_SESSION['email'] = $result['email'];
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
               header('location:?mod=page&act=home&login='.$register.'');
               }
            else{
               register($_POST['hoten'], $_POST['email'], $_POST['pass']);
               $_SESSION['dangki'] = true;
               $register= 'true';
               header('location:?mod=page&act=home&login='.$register.'');
            }
         }
         header('location:?mod=page&act=home&register='.$register.'');
         break;
      case 'logout':
         if($_SESSION['dangnhap']){
            $_SESSION['dangnhap'] = false;
            unset($_SESSION['tenkhachhang']);
            unset($_SESSION['id_khachhang']);
            unset( $_SESSION['email'] );
         }
         header('location:?mod=page&act=home');
         break;
      case 'lostpass':
         // chưa làm 
         $view_name = "user-lostpassword";
         break;
      case 'profile':
         // chưa làm
         $view_name = "user_profile";
         break;
      case 'dathang':
         if(isset($_POST['dathang'])){
            if($_POST['hoten'] == "" || $_POST['diachi'] == "" ||  $_POST['sodienthoai'] == "" || $_POST['email'] == ""){
               header('location:?mod=cart&act=thanhtoan&tongtiengiohang='.$_POST['tongtien'].'&dathang=false');
            }
            else{
               include_once "model/m_user.php";
               $showcart_thanhtoan = showcartthanhtoan($_SESSION['id_khachhang']);
               foreach($showcart_thanhtoan as $thanhtoan){
                  dulieuthanhtoan($thanhtoan['tenhoa'],$_SESSION['tenkhachhang'], $thanhtoan['soluong'] , $thanhtoan['giaban'] , date('Y-m-d'), $_GET['tongtiengiohang'], $_SESSION['id_khachhang'], $_POST['diachi'], $_POST['sodienthoai'] , $_POST['email']);
               }
               deleteAllgiohang($_SESSION['id_khachhang']);
               $showthanhtoan = showthanhtoan($_SESSION['id_khachhang']);
               $showthanhtoan1 = showthanhtoan($_SESSION['id_khachhang']);
               $thanhtoan = array_shift($showthanhtoan1);
               $tongtien = 0;
               $view_name = "cart_thanhcong";
            }
         }
         break;
      default:
         $_GET['act'] = "home";
         break;
   }
   include_once "view/layout.php";
}
