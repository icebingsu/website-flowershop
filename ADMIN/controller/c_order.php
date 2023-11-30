<?php
switch ($_GET['act']) {
   case 'donhang':

      break;
   case 'xemdonhang':
      include_once "model/m_order.php";
      $tenkhachhang = hienthitenkhachhang($_GET['id_khachhang']);
      $hienthithanhtoan =  showthanhtoancuakhachhang($_GET['id_khachhang'], $_GET['id_donhang']);
      $tongtien = 0;
      $_GET['act'] = "order";
      $view_name = "order_donhang";
      break;
   default:
      break;
}
include_once "view/v_layout.php";
