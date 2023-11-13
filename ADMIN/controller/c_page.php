<?php
   switch ($_GET['act']) {
      case 'dashboard':
         $view_name = "page_dashboard";
         break;
       case 'category':
         $view_name = "page_category";
       case 'product':
         $view_name = "page_category";
       case 'user':
         $view_name = "page_category";
      default:
         break;
   }
   include_once "view/v_layout.php";
?>