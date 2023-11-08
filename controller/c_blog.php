<?php 
if(isset($_GET['act'])){
   switch ($_GET['act']) {
      case 'tintuc':
         $view_name = "blog_tintuc";
         break;
      case 'lienhe':
         $view_name = "blog_lienhe";
         break;
      default:
         $_GET['act'] = "home";
         break;
   }
   include_once "view/layout.php";
}

?>