<?php 
function guimail(){
   include "PHPMailer-master/PHPMailer-master/src/PHPMailer.php";
   include "PHPMailer-master/PHPMailer-master/src/SMTP.php";
   include "PHPMailer-master/PHPMailer-master/src/Exception.php";
   $mail = new PHPMailer\PHPMailer\PHPMailer(true);
   try{
      $mail->SMTPDebug = 2;
      $mail->isSMTP();
      $mail->CharSet = "utf-8";
      $mail->Host = 'smtp.gmail.com';
      $mail->SMTPAuth = true;
      $mail->Username = 'botchat549@gmail.com';
      $mail->Password = 'kimhung123';
      $mail->SMTPSecure ='ssl';
      $mail->Port = 465; // ssl = 465 || TLS = 587
      $mail->setFrom('botchat549@gmail.com', 'FlowerShop');
      $mail->addAddress('hungnkps34529@fpt.edu.vn' , 'tên nguời nhận');
      $mail->isHTML(true);
      $mail->Subject ='Thư gửi từ form lien hệ';
      $noidungthu  = 'Chào Bạn Chúc an lành';
      $mail->smtpConnect(array(
         "ssl" => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true,
         )
         ));
      $mail->send();
      echo "Đã gửi mail xong";
   }
   catch (Exception $e){
      echo 'Email Không gửi được Lỗi', $mail->ErrorInfo;
   }
}
guimail();
?>