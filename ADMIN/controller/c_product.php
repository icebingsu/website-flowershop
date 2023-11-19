<?php
switch ($_GET['act']) {
   case "xoasp":
      include_once "model/m_product.php";
      xoasanpham($_GET['id']);
      $file_path = '../wp-content/uploads/2021/05/' . $_GET['anhhoa'] . '';
      if (unlink($file_path)) {
         echo 'Xóa tệp tin thành công.';
      } else {
         echo 'Không thể xóa tệp tin.';
      }
      header("location:?admin=page&act=product&xoa=thanhcong");
      break;
   case "themsp":
      include_once "model/m_product.php";
      if (isset($_POST['themsp'])) {
         $loi = [];
         var_dump($_POST);
         if ($_POST['tenhoa'] == "") {
            $loi[] = "ten";
         } elseif ($_POST['giaban'] == "") {
            $loi[] = "gia";
         } elseif ($_POST['giakm'] == "") {
            $loi[] = "km";
         } else {
            $loi = [];
            $name_img = $_FILES['anh'];
            $vitri = $name_img['tmp_name'];
            $name_img = explode(".", $name_img['name']);
            $ext = end($name_img);
            $new_name = uniqid();
            $format = ['jpg', 'jpeg', 'pdf', 'GIF', 'PNG', "SVG"];
            if (in_array($ext, $format)) {
               move_uploaded_file($vitri, "../wp-content/uploads/2021/05/$new_name" . "." . "$ext");
               themsanpham($_POST['tenhoa'], $new_name . '.' . $ext, $_POST['giaban'], $_POST['giakm'], $_POST['danhmuc']);
               header("location:?admin=page&act=product&themsp=thanhcong");
            } else {
               header("location:?admin=page&act=product&themsp=thatbai");
            }
         }
      }
      break;
   default:
      break;
}
include_once "view/v_layout.php";
