<?php 
if(isset($_GET['act'])){
   switch ($_GET['act']) {
      case 'home':
         include_once "model/m_product.php";
         $listdanhmuc = listdanhmuc();
         $listsanphamindanhmuc = listsanphamindanhmuc();
         $flowerKM = flowerKM();
         $view_name = "page_home";
         $danhmuc = danhmuc();
         break;
      case 'layout_search':
        var_dump($_POST);
         break;
      default:
         $_GET['act'] = "home";
         break;
   }
   include_once "view/layout.php";
}

?>