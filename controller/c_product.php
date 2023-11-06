<?php 
if(isset($_GET['act'])){
   switch ($_GET['act']) {
      case 'details':
         include_once "model/m_product.php";
         $details = details($_GET['id']);
         $sanphamlienquan = sanphamlienquan($_GET['id_danhmuc']);
         $view_name = "product_details";
         break;
         case 'productAll':
         include_once "model/m_product.php";
         $nhomsanpham_product = danhmuc();
        if(isset($_GET['id_danhmuc'])){
         if($_GET['id_danhmuc']){
            // $sanphamlienquan = sanphamlienquan($_GET['id_danhmuc']);
            $tatcahoa = sanphamlienquan($_GET['id_danhmuc']);
         }
        }
        else{
         $tatcahoa = sanpham();
      }
         $view_name ="product_productAll";
         break;
         
      default:
         $_GET['act'] = "home";
         break;
   }
   include_once "view/layout.php";
}

?>