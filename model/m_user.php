<?php
include_once "m_connect.php";

// Đăng nhập
function login($email, $matkhau)
{
   return pdo_query_one("SELECT * FROM khachhang WHERE email = ? and matkhau = ?", $email, $matkhau);
}

// Kiểm tra địa chỉ email
function checkMail($email)
{
   return pdo_query_one("SELECT email FROM khachhang WHERE email = ?", $email);
}

// Đăng kí
function register($hoten, $email, $matkhau)
{
   pdo_execute("INSERT INTO khachhang (hoten, email, matkhau) VALUES (?, ?, ?)", $hoten, $email, $matkhau);
}

function showcartthanhtoan($id_khachhang)
{
   return pdo_query(
      "SELECT hoa.*, giohang.*
      FROM giohang
      INNER JOIN hoa
      ON hoa.id = giohang.id_hoa
      WHERE giohang.id_khachhang = ?",
      $id_khachhang
   );
}

function deleteAllgiohang($id_khachhang)
{
   pdo_execute("DELETE FROM giohang WHERE id_khachhang = ?", $id_khachhang);
}

function dulieuthanhtoan($tenhoa, $tenkhachhang, $soluong, $giaban, $ngaydathang, $id_khachhang, $diachi, $sodienthoai, $email, $id_donhang)
{
   pdo_execute("INSERT INTO thanhtoan(tenhoa, tenkhachhang, soluong, giaban, ngaydathang, id_khachhang, diachi, sodienthoai, email, id_donhang) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)", $tenhoa, $tenkhachhang, $soluong, $giaban, $ngaydathang, $id_khachhang, $diachi, $sodienthoai, $email, $id_donhang);
}

// Hiển thị thông tin thanh toán
function showthanhtoan_user($id_khachhang)
{
   return pdo_query("SELECT * FROM thanhtoan WHERE id_khachhang = ?", $id_khachhang);
}

function thaydoithongtin($hoten, $email, $pass, $id_khachhang)
{
   pdo_execute("UPDATE khachhang SET hoten = ?, email = ?, matkhau = ? WHERE id = ?", $hoten, $email, $pass, $id_khachhang);
}

function showkhachhang($id_khachhang)
{
   return pdo_query("SELECT * FROM khachhang WHERE id = ?", $id_khachhang);
}

// Thêm đơn hàng
function themdonhang($id_khachhang, $ngaydathang)
{
   pdo_execute("INSERT INTO donhang(id_khachhang,ngaydathang) VALUES (?,?)", $id_khachhang, $ngaydathang);
}

function iddonhangmoi()
{
   return pdo_query_one("SELECT MAX(id_donhang) AS id_donhang FROM donhang");
}
