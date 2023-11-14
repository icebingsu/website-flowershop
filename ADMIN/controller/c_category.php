<?php
   switch ($_GET['act']) {
      case 'gim':
         include_once "model/m_category.php";
         $check_category = check_category($_GET['id']);      
         if($check_category['gimtrangchu'] == "khong"){
            gim($_GET['id']); 
            header("location:?admin=page&act=category&gim=thanhcong");
         }else{
            header("location:?admin=page&act=category&gim=thatbai");
         }
         break;
       case 'khonggim':
         include_once "model/m_category.php";
         $check_category = check_category($_GET['id']);      
         if($check_category['gimtrangchu'] == "co"){
            khonggim($_GET['id']);
            header("location:?admin=page&act=category&khonggim=thanhcong");
         }else{
            header("location:?admin=page&act=category&khonggim=thatbai");
         }
         break;
      default:
         break;
   }
   include_once "view/v_layout.php";
?>