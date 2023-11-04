<?php 
if(isset($_GET['act'])){
   switch ($_GET['act']) {
      case 'details':
         include_once "model/m_product.php";
         $details = details($_GET['id']);
         $sanphamlienquan = sanphamlienquan($_GET['id_danhmuc']);
         $view_name = "product_details";
         break;
      default:
         $_GET['act'] = "home";
         break;
   }
   include_once "view/layout.php";
}

?>