<?php 
if(isset($_GET['act'])){
   switch ($_GET['act']) {
      case 'home':
         include_once "model/m_product.php";
         $listdanhmuc = listdanhmuc();
         $listsanphamindanhmuc = listsanphamindanhmuc();
         $flowerKM = flowerKM();
         $view_name = "page_home";
         break;
      
      default:
         $_GET['act'] = "home";
         break;
   }
   include_once "view/layout.php";
}

?>