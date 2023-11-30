<?php
switch ($_GET['act']) {
   case 'dashboard':
      include_once "model/m_doashboard.php";
      $doanhsotrongtuan = doanhsotrongtuan();
      $luotnguoidung = luotnguoidung();
      $khachhangmoi = khachhangmoi();
      $tongdoanhso = tongdoanhso();
      $donhangtrongtuan = donhangtrongtuan();
      $donhangdabantrongtuan =  donhangdabantrongtuan();
      $tongtiencacngaytrongtuan = tongtiencacngaytrongtuan();
      $tongtiencacngaytrongtuanJson = json_encode($tongtiencacngaytrongtuan);
      $donhangdabantrongtuanJson = json_encode($donhangdabantrongtuan);
      $donhangtrongtuanJson = json_encode($donhangtrongtuan);
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
      $show_hoa_moi10 = sanphammoi10();
      $caodenthap = sanphamgiabancaodenthap();
      $thapdencao = sanphamgiabanthapdencao();
      $stt = 1;
      $lochoa = "";
      if (isset($_POST['btnlochoa']) && isset($_POST['lochoatheogia'])) {
         if ($_POST['lochoatheogia'] == "1") {
            $lochoa = "all";
         } elseif ($_POST['lochoatheogia'] == "2") {
            $lochoa = "10hoa";
         } elseif ($_POST['lochoatheogia'] == "3") {
            $lochoa = "giacaodenthap";
         } elseif ($_POST['lochoatheogia'] == "4") {
            $lochoa = "giathapdencao";
         }
      } elseif (isset($_POST['btnlochoadanhmuc']) && isset($_POST['hoahoatheodanhmuc'])) {
         foreach ($show_name_category as $lochoadanhmuc) {
            if ($lochoadanhmuc['id'] == $_POST['hoahoatheodanhmuc']) {
               $lochoa = $lochoadanhmuc['id'];
            }
         }
         $sanphamtheodanhmuc = sanphamtheodanhmuc($lochoa);
      } else {
         $lochoa = "all";
      }
      $view_name = "page_product";
      break;
   case 'order':
      include_once "model/m_order.php";
      $donhangtheokhach = soluongdonhangcuakhach();
      $showdonhang = showdonhang();
      $chuathanhtoan = chuathanhtoan();
      $dathanhtoan = dathanhtoan();
      $donhangmoi = donhangmoi();
      $option = "";
      if (isset($_POST['locdonhang'])) {
         if ($_POST['locdonhang'] == "1") {
            $option = "donhangmoi";
         } elseif ($_POST['locdonhang'] == "2") {
            $option = "chuathanhtoan";
         } elseif ($_POST['locdonhang'] == "3") {
            $option = "dathanhtoan";
         } elseif ($_POST['locdonhang'] == "4") {
         }
      }
      $view_name = "page_order";
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
