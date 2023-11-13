<?php
session_start();
// unset($_SESSION);
include_once "config.php";
if (isset($_GET['mod'])) {
   switch ($_GET['mod']) {
      case 'page':
         $ctrl_name = "page";
         break;
      case 'user':
         $ctrl_name = "user";
         break;
      case 'product':
         $ctrl_name = "product";
         break;
      case 'cart':
         if($_SESSION['quyen'] == "admin"){
            echo "Bạn là ADMIN Không được đặt hàng";
            $ctrl = "";
            // nào rảnh làm thêm phần Lỗi hiển thị cho admin nha
         }elseif($_SESSION['quyen'] == 'user'){
            $ctrl_name = "cart";
         }

         break;
      case 'blog':
         $ctrl_name = "blog";
         break;
      default:
         $ctrl_name = "page";
         $_GET['act'] = 'home';
         break;
   }
   include_once "controller/c_$ctrl_name.php";
} else {
   if ($_SESSION['quyen'] == 'admin') {
      header("location:ADMIN/index.php");
   } elseif ($_SESSION['quyen'] == 'user') {
      header("location:?mod=page&act=home");
   } else {
      header("location:?mod=page&act=home");
   }
}
?>
