<?php
if (isset($_GET['act'])) {
   switch ($_GET['act']) {
      case 'login':
         include_once "model/m_user.php";
         if (isset($_POST['login'])) {
            $result = login($_POST['username'], $_POST['password']);
            if ($result) {
               if (isset($_SESSION)) {
                  $_SESSION['tenkhachhang'] = $result['hoten'];
                  $_SESSION['id_khachhang'] = $result['id'];
                  $_SESSION['email'] = $result['email'];
                  $_SESSION['quyen'] = $result['quyen'];
                  $_SESSION['dangnhap'] = true;
                  $login = "true";
                  if ($_SESSION['quyen'] == 'user') {
                     header('location:?mod=page&act=home&login=' . $login . '');
                  } elseif ($_SESSION['quyen'] == 'admin') {
                     header('location:ADMIN/?admin=page&act=dashboard&' . $_SESSION . '');
                     exit();
                  }
               }
            } else {
               unset($_SESSION['tenkhachhang']);
               $_SESSION['dangnhap'] = false;
               $login = "false";
               header('location:?mod=page&act=home&login=' . $login . '');
            }
         }
         break;
      case 'register':
         include_once "model/m_user.php";
         if (isset($_POST['register'])) {
            $checkMail = checkMail($_POST['email']);
            if ($checkMail) {
               $_SESSION['dangki'] = false;
               $register = 'false';
               header('location:?mod=page&act=home&login=' . $register . '');
            } else {
               register($_POST['hoten'], $_POST['email'], $_POST['pass']);
               $_SESSION['dangki'] = true;
               $register = 'true';
               header('location:?mod=page&act=home&login=' . $register . '');
            }
         }
         header('location:?mod=page&act=home&register=' . $register . '');
         break;
      case 'logout':
         if ($_SESSION['dangnhap']) {
            $_SESSION['dangnhap'] = false;
            unset($_SESSION['tenkhachhang']);
            unset($_SESSION['id_khachhang']);
            unset($_SESSION['email']);
            unset($_SESSION['quyen']);
         }
         header('location:?mod=page&act=home');
         break;
      case 'lostpass':
         // chưa làm 
         $view_name = "user-lostpassword";
         break;
      case 'profile':
         // chưa làm
         $view_name = "user_profile";
         break;
      case 'dathang':
         if (isset($_POST['payUrl'])) {
            date_default_timezone_set('Asia/Ho_Chi_Minh');
            $now = date('Y-m-d H:i:s');
            if ($_POST['hoten'] == "" || $_POST['diachi'] == "" ||  $_POST['sodienthoai'] == "" || $_POST['email'] == "") {
               header('location:?mod=cart&act=thanhtoan&tongtiengiohang=' . $_POST['tongtien'] . '&dathang=false');
            } else {
               if ($_POST['payment_method'] == "bacs") {
                  function execPostRequest($url, $data)
                  {
                     $ch = curl_init($url);
                     curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
                     curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
                     curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                     curl_setopt(
                        $ch,
                        CURLOPT_HTTPHEADER,
                        array(
                           'Content-Type: application/json',
                           'Content-Length: ' . strlen($data)
                        )
                     );
                     curl_setopt($ch, CURLOPT_TIMEOUT, 5);
                     curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
                     //execute post
                     $result = curl_exec($ch);
                     //close connection
                     curl_close($ch);
                     return $result;
                  }
                  $endpoint = "https://test-payment.momo.vn/v2/gateway/api/create";
                  $partnerCode = 'MOMOBKUN20180529';
                  $accessKey = 'klm05TvNBzhg7h7j';
                  $secretKey = 'at67qH6mk8w5Y1nAyMoYKMWACiEi2bsa';
                  $orderInfo = "Thanh toán qua MoMo";
                  $amount = "10000";
                  $orderId = time() . "";
                  $redirectUrl = "?mod=page&act=home";
                  $ipnUrl = "?mod=page&act=home";
                  $extraData = "";
                  $partnerCode = $partnerCode;
                  $accessKey = $accessKey;
                  $serectkey = $secretKey;
                  $orderId = $orderId;
                  $orderInfo = $orderInfo;
                  $amount = $amount;
                  $ipnUrl = $ipnUrl;
                  $redirectUrl = $redirectUrl;
                  $extraData = "";
                  $requestId = time() . "";
                  $requestType = "payWithATM";
                  $rawHash = "accessKey=" . $accessKey . "&amount=" . $amount . "&extraData=" . $extraData . "&ipnUrl=" . $ipnUrl . "&orderId=" . $orderId . "&orderInfo=" . $orderInfo . "&partnerCode=" . $partnerCode . "&redirectUrl=" . $redirectUrl . "&requestId=" . $requestId . "&requestType=" . $requestType;
                  $signature = hash_hmac("sha256", $rawHash, $serectkey);
                  $data = array(
                     'partnerCode' => $partnerCode,
                     'partnerName' => "Test",
                     "storeId" => "MomoTestStore",
                     'requestId' => $requestId,
                     'amount' => $amount,
                     'orderId' => $orderId,
                     'orderInfo' => $orderInfo,
                     'redirectUrl' => $redirectUrl,
                     'ipnUrl' => $ipnUrl,
                     'lang' => 'vi',
                     'extraData' => $extraData,
                     'requestType' => $requestType,
                     'signature' => $signature
                  );
                  $result = execPostRequest($endpoint, json_encode($data));
                  $jsonResult = json_decode($result, true);
                  header('Location: ' . $jsonResult['payUrl']);
               } elseif ($_POST['payment_method'] == "cod") {
                  require_once "model/m_user.php";
                  $showcart_thanhtoan = showcartthanhtoan($_SESSION['id_khachhang']);
                  themdonhang($_SESSION['id_khachhang'], $now);
                  $iddonhangmoi = iddonhangmoi();
                  foreach ($showcart_thanhtoan as $thanhtoan) {
                     dulieuthanhtoan($thanhtoan['tenhoa'], $_SESSION['tenkhachhang'], $thanhtoan['soluong'], $thanhtoan['giaban'], $now, $_SESSION['id_khachhang'], $_POST['diachi'], $_POST['sodienthoai'], $_POST['email'], $iddonhangmoi['id_donhang']);
                  }
                  deleteAllgiohang($_SESSION['id_khachhang']);
                  $showthanhtoan = showthanhtoan_user($_SESSION['id_khachhang']);
                  $showthanhtoan1 = showthanhtoan_user($_SESSION['id_khachhang']);
                  $thanhtoan = array_shift($showthanhtoan1);
                  $tongtien = 0;
                  $view_name = "cart_thanhcong";
               }
            }
         }
         break;
      case 'account':
         include_once "model/m_user.php";
         $hienthithongtinkhachhang = showkhachhang($_SESSION['id_khachhang']);
         $view_name = "user_account";
         break;
      case 'thaydoithongtin':
         include_once "model/m_user.php";
         $showkhachhang = showkhachhang($_SESSION['id_khachhang']);
         var_dump($_POST);
         if (isset($_POST['doithongtin'])) {
            if ($_POST['pass_hientai'] == $showkhachhang[0]['matkhau']) {
               if ($_POST['passnew'] == $_POST['sosanhpassnew']) {
                  thaydoithongtin($_POST['hoten'], $_POST['email'], $_POST['passnew'], (int)$_SESSION['id_khachhang']);
                  header("location:?mod=user&act=account&passhientai=true");
               } else {
                  header("location:?mod=user&act=account&sosanh=true");
               }
            } else {
               header("location:?mod=user&act=account&passhientai=false");
            }
         }
         break;
      default:
         $_GET['act'] = "home";
         break;
   }
   include_once "view/layout.php";
}
