<?php 
if(isset($_GET['act'])){
   switch ($_GET['act']) {
      case 'cart': 
         include_once "model/m_cart.php";
         if($_SESSION['dangnhap'] == true){
             $checkcart = checkcartkhachhang($_SESSION['id_khachhang']);
             $checkcarthoa = checkcarthoa($_GET['id_hoa'],$_SESSION['id_khachhang']);
             if($checkcart){
                if($checkcarthoa['id_hoa'] == $_GET['id_hoa']){
                   $soluong = $checkcarthoa['soluong']+1;
                   $tongtien = $_GET['giaban'] *$soluong;
                  // tiến hành update soluong của gio hàng có id_hoa 
                  update($soluong, $tongtien ,$_GET['id_hoa']); 
                  header("location:?mod=page&act=home&addtocart=true");    
               }
               else{
                  addtocart($_SESSION['id_khachhang'] , $_GET['id_hoa'], $_GET['giaban'], 1);        
                  header("location:?mod=page&act=home&addtocart=true");    
               }
            }
             else{
               addtocart($_SESSION['id_khachhang'] , $_GET['id_hoa'], $_GET['giaban'], 1);
               header("location:?mod=page&act=home&addtocart=true");    
            }
         }
         else{
            header("location:?mod=page&act=home&addtocart=false"); 
         }
         // làm thêm css hiện toast
         break;
      case 'removecart': 
           include_once "model/m_cart.php";
           removecart($_GET['id_hoa'], $_GET['id_khachhang']);
           header("location:?mod=page&act=home");
         break;
         case 'cart-details':
            include_once "model/m_cart.php";
            if(isset($_SESSION['id_khachhang'])){
               $showgiohang = showcart($_SESSION['id_khachhang']);     
            }
            $tongtiengiohang = 0;   
            $view_name ="cart_cart-details"; 
            break;
         case 'updatecart':
            include_once "model/m_cart.php";
            $soluong = (int)$_POST['sl'];
            $giaban = (int)$_POST['giaban'];
            echo $soluong;
            echo $giaban;
            echo "tổng tiền = ".$soluong*$giaban;
            if($soluong <= 0){
               $soluong = 1;
               update($soluong,$giaban*$soluong,$_POST['id_hoa']);
               header("location:?mod=cart&act=cart-details");
            }else{
               update($soluong,$giaban*$soluong,$_POST['id_hoa']);
               header("location:?mod=cart&act=cart-details");
            }
            break;
         case 'updatecartdetails':
            include_once "model/m_cart.php";
            if($_SESSION['dangnhap'] == true){
               $checkcart = checkcartkhachhang($_SESSION['id_khachhang']);
               $checkcarthoa = checkcarthoa($_GET['id_hoa'],$_SESSION['id_khachhang']);
               $soluong = (int)$_POST['quantity']+$checkcarthoa['soluong'];
               $tongtien = $soluong * $_GET['giaban'];
               if($checkcarthoa){
                  echo "cart này đã có tiến hành update";
                  update($soluong,$tongtien,$_GET['id_hoa']);
                  header("location:?mod=product&act=details&id=".$_GET['id_hoa']."&id_danhmuc=".$_GET['id_danhmuc']."&addtocart=true"); 
               }
               else{
                  echo "cart này chưa có tiến hành tạo cart";
                  addtocart($_SESSION['id_khachhang'] , $_GET['id_hoa'], $tongtien, $soluong);
                  header("location:?mod=product&act=details&id=".$_GET['id_hoa']."&id_danhmuc=".$_GET['id_danhmuc']."&addtocart=true"); 
               }
              }
           else{
              header("location:?mod=page&act=home&addtocart=false"); 
           }
            // header("location:?mod=product&act=details&id=".$_GET['id_hoa']."&id_danhmuc=".$_GET['id_danhmuc'].""); 
            break;
      default:
         $_GET['act'] = "home";
         break;
   }
   include_once "view/layout.php";
}

?>