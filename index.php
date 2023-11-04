<?php 
   session_start();
   // unset($_SESSION);
   include_once "config.php";
   if(isset($_GET['mod'])){
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
            $ctrl_name = "cart";
            break;
         default:
            $ctrl_name = "page";
            $_GET['act'] = 'home';
            break;
      }
      include_once "controller/c_$ctrl_name.php";
   }
   else{
      header("location:?mod=page&act=home");
   }
?>