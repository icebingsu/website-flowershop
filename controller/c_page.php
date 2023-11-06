<?php 
if(isset($_GET['act'])){
   switch ($_GET['act']) {
      case 'home':
         include_once "model/m_product.php";
         $listdanhmuc = listdanhmuc();
         $listsanphamindanhmuc = listsanphamindanhmuc();
         $flowerKM = flowerKM();
         $danhmuc = danhmuc();
         $nhomsanpham = $danhmuc;
         $view_name = "page_home";
         break;
      case 'layout_search':
         include_once "model/m_product.php";
         $danhmucsearch = danhmuc();
         $danhmuc = danhmuc();
         $noidung = $_POST['search'];
         $search_danhmuc = (int)$_POST['product_cat'];
         if($noidung == ""){
           if($search_danhmuc == 0){
            header("location:?mod=page&act=home&search=false");
           }
           else{
            $search_noidung = search_danhmuc($search_danhmuc);
           }
         }
         else{
            $search_noidung = search($noidung);
         }
         $search = search($noidung);
         $view_name = "product_search";
         break;
      default:
         $_GET['act'] = "home";
         break;
   }
   include_once "view/layout.php";
}

?>