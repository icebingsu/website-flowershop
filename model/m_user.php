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
   function showcartthanhtoan($id_khachhang){
      return pdo_query("SELECT
      hoa.*,
      giohang.*
    FROM
      giohang
    INNER JOIN
      hoa
    ON
      hoa.id = giohang.id_hoa
    WHERE
      giohang.id_khachhang = ?"
   , $id_khachhang);
   }
   function deleteAllgiohang($id_khachhang){
      pdo_execute("DELETE FROM giohang WHERE id_khachhang = ?", $id_khachhang);
   }
   function dulieuthanhtoan($tenhoa,$tenkhachhang, $soluong , $giaban , $ngaydathang, $tongtiengiohang, $id_khachhang, $diachi, $sodienthoai , $email){
      pdo_execute("INSERT INTO thanhtoan(tenhoa,tenkhachhang,soluong,giaban,ngaydathang,tongtiengiohang,id_khachhang,diachi,sodienthoai,email) value 
      (?,?,?,?,?,?,?,?,?,?)
      ",$tenhoa,$tenkhachhang , $soluong , $giaban, $ngaydathang, $tongtiengiohang,$id_khachhang, $diachi , $sodienthoai,$email);
   }
   // show thanh toan
   function showthanhtoan($id_khachhang){
      return pdo_query("SELECT * FROM thanhtoan WHERE id_khachhang = ?",$id_khachhang);
   }
   function thaydoithongtin($hoten,$email,$pass,$id_khachhang){
      pdo_execute("UPDATE khachhang
      SET hoten = ?,
          email = ?,
          matkhau = ?
      WHERE id = ?",$hoten,$email,$pass,$id_khachhang);
   }
   function showkhachhang($id_khachhang){
      return pdo_query("SELECT * FROM khachhang WHERE id = ?",$id_khachhang);
   }
?>