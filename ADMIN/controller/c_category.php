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
       case 'themdanhmuc':
         include_once "model/m_category.php";
         if($_POST['tendanhmuc'] == !"" && $_POST['gim'][0] == !""){
            themdanhmuc($_POST['tendanhmuc'],$_POST['gim'][0]);
            header("location:?admin=page&act=category&them=thanhcong");
         }
         else{
            header("location:?admin=page&act=category&them=thatbai");
         }
         break;
       case"xoasuadm":
         include_once "model/m_category.php";
         if(isset($_POST['xoa'])){
           xoadanhmuc($_GET['id']);
           header("location:?admin=page&act=category&xoa=thanhcong");
         }elseif(isset($_POST['sua'])){
            echo "sửa ở đây";
            suadanhmuc($_POST['tendanhmuc'], $_GET['id']);
            header("location:?admin=page&act=category&sua=thanhcong");
         }
         break;
      default:
         break;
   }
   include_once "view/v_layout.php";
?>