<?php 
if(isset($_GET['act'])){
   switch ($_GET['act']) {
      case 'danhmuc':
     echo"đây là danh muc";
         break;
      case 'layout_search':
         break;
      default:
         $_GET['act'] = "home";
         break;
   }
   include_once "view/layout.php";
}

?>