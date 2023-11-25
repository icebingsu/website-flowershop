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
            $format = ['jpg', 'jpeg', 'pdf', 'gif', 'png', "svg"];
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
   case 'suasp':
      include_once "model/m_product.php";

      if (isset($_POST['luusp'])) {
         $id_hoa = $_POST['id_hoa'];
         $name_img = $_FILES['images' . $id_hoa];
         $vitri = $name_img['tmp_name'];
         $name_img = explode(".", $name_img['name']);
         $ext = end($name_img);
         $new_name = uniqid();
         $format = ['jpg', 'jpeg', 'pdf', 'gif', 'png', 'svg'];
         $hoa = showsp($_POST['id_hoa']);
         $id_danhmuc = ((int)$_POST['tendanhmuc']);
         $id_hoa  = ((int)$_POST['id_hoa']);
         if ($_FILES['images' . $id_hoa]['error'] === UPLOAD_ERR_OK) {
            echo "đã có hình ";
            var_dump($_FILES);
            if (in_array($ext, $format)) {
               $file_path = '../wp-content/uploads/2021/05/' . $hoa['anhhoa'];
               if (unlink($file_path)) {
                  echo 'Xóa tệp tin thành công.';
               } else {
                  echo 'Không thể xóa tệp tin.';
               }
               suasanpham($new_name . "." . $ext, $_POST['tenhoa'], $_POST['giaban'], $_POST['giakm'], $id_danhmuc, $id_hoa);
               move_uploaded_file($vitri, "../wp-content/uploads/2021/05/$new_name" . "." . "$ext");

               header("location:?admin=page&act=product&suasp=thanhcong");
            } else {
               header("location:?admin=page&act=product&suasp=thatbaiformart");
            }
         } else {
            // Cập nhật thông tin sản phẩm khi không có hình ảnh mới
            suasanpham($hoa['anhhoa'], $_POST['tenhoa'], $_POST['giaban'], $_POST['giakm'], $id_danhmuc, $id_hoa);
            echo "chưa có hình";
            header("location:?admin=page&act=product&suasp=thanhcong");
         }
      }
      break;
   default:
      break;
}
include_once "view/v_layout.php";
