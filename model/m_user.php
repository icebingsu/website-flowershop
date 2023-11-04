<?php 
   include_once "m_connect.php";
   // đăng nhập
   function login($email, $matkhau){
      return pdo_query_one("SELECT * FROM khachhang WHERE email = ? and matkhau = ?", $email , $matkhau);
   }
   // check đia chi email 
   function checkMail($email){
      return pdo_query_one("SELECT email FROM khachhang WHERE email = ?", $email);
   }
   // đang kí
   function register($hoten , $email, $matkhau){
      pdo_execute("INSERT INTO khachhang (hoten,email,matkhau) VALUES (?,?,?) ",$hoten, $email , $matkhau );
   }
 
?>