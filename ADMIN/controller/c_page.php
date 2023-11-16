<?php
   switch ($_GET['act']) {
      case 'dashboard':
         $view_name = "page_dashboard";
         break;
       case 'category':
        include_once "model/m_category.php";
        $show_category = show_category(); 
        $view_name = "page_category";
         break;
       case 'product':
        include_once "model/m_product.php";
         $show_product = show_product();
         $show_name_category = sp_show_category();
         $stt = 1;
         $view_name = "page_product";
        break;
       case 'user':
         $view_name = "page_user";
        break;
       case 'warning':
         $view_name = "page_warning";
        break;
          case 'persona':
         $view_name = "page_persona";
            break;
      default:
         break;
   }
   include_once "view/v_layout.php";
?>