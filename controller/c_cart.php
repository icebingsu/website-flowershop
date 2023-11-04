<?php 
if(isset($_GET['act'])){
   switch ($_GET['act']) {
      case 'cart': 
         include_once "model/m_cart.php";
         if($_SESSION['dangnhap'] == true){
             $checkcart = checkcartkhachhang($_SESSION['id_khachhang']);
             $checkcarthoa = checkcarthoa($_GET['id_hoa'],$_SESSION['id_khachhang']);
             if($checkcart){
               $tongtien = $_GET['giaban'];
               $soluong = $checkcarthoa['soluong'];
               if($checkcarthoa['id_hoa'] == $_GET['id_hoa']){
                  // tiến hành update soluong của gio hàng có id_hoa 
                  updatesltt($soluong, $tongtien ,$_GET['id_hoa']); 
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
            var_dump($_POST['id_hoa']);
            updatesl($_POST['sl'], $_POST['id_hoa'] , $_SESSION['id_khachhang']);
            header("location:?mod=cart&act=cart-details");
            break;
         case 'updatecartdetails':
            include_once "model/m_cart.php";
            if($_SESSION['dangnhap'] == true){      
               $checkcart = checkcartkhachhang($_SESSION['id_khachhang']);
               $checkcarthoa = checkcarthoa($_GET['id_hoa'],$_SESSION['id_khachhang']);
               $themsoluong = intval($_POST['quantity']);
               $tongtien = $checkcart['tongtien'] * $soluong;
               $soluong = $themsoluong + $checkcart['soluong'];
               if($checkcart){
               if($checkcart['id_hoa'] == $_GET['id_hoa']){
                  updateslttdetails($soluong, $tongtien,$_GET['id_hoa']);
                  $tongtien = 0;
                  // header("location:?mod=product&act=details&id=".$_GET['id_hoa']."&id_danhmuc=".$_GET['id_danhmuc']."&addtocart=true"); 
               }     
               else{
                  addtocart($_SESSION['id_khachhang'] , $_GET['id_hoa'],$_GET['giaban'],$themsoluong);        
                  // header("location:?mod=product&act=details&id=".$_GET['id_hoa']."&id_danhmuc=".$_GET['id_danhmuc']."&addtocart=true"); 
               }
              }
               else{
                  echo $_GET['giaban']+$tongtien;
                 addtocart($_SESSION['id_khachhang'] , $_GET['id_hoa'], $_GET['giaban']+$tongtien, $themsoluong);
                 header("location:?mod=product&act=details&id=".$_GET['id_hoa']."&id_danhmuc=".$_GET['id_danhmuc'].""); 
               // header("location:?mod=product&act=details&id=".$_GET['id_hoa']."&id_danhmuc=".$_GET['id_danhmuc']."&addtocart=true"); 

              }
            }
            else{
               header("location:?mod=page&act=home&addtocart=false"); 
            }
            
            // updatesl($_POST['quantity']+$soluong, $_GET['id_hoa'] , $_SESSION['id_khachhang']);
            // header("location:?mod=product&act=details&id=".$_GET['id_hoa']."&id_danhmuc=".$_GET['id_danhmuc'].""); 
            break;
      default:
         $_GET['act'] = "home";
         break;
   }
   include_once "view/layout.php";
}

?>