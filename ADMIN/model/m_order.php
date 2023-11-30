<?php
include_once "m_connect.php";
// lọc đon hàng theo mới nhất
function donhangmoi()
{
  return pdo_query("SELECT *
  FROM donhang
  ORDER BY ngaydathang DESC
  LIMIT 5");
}
// id khách hàng đã đặt đơn hàng
function soluongdonhangcuakhach()
{
  return pdo_query("SELECT DISTINCT d.id_khachhang, d.trangthai, d.id_donhang, t.tenkhachhang, subquery.sodonhang
  FROM (
    SELECT id_khachhang, MAX(id_donhang) AS id_donhang, MAX(trangthai) AS trangthai
    FROM donhang
    GROUP BY id_khachhang
  ) AS d
  JOIN thanhtoan t ON d.id_donhang = t.id_donhang
  JOIN (
    SELECT id_khachhang, COUNT(*) AS sodonhang
    FROM donhang
    GROUP BY id_khachhang
  ) AS subquery ON d.id_khachhang = subquery.id_khachhang
  ORDER BY d.id_khachhang;");
}

// đơn hàng theo id_khachhang
function showdonhang()
{
  return pdo_query("SELECT * FROM donhang");
}
// show đơn hàng theo id_khachhang và id_donhang
function showthanhtoancuakhachhang($id_khachhang, $id_donhang)
{
  return pdo_query("SELECT * FROM thanhtoan WHERE id_khachhang = ? AND id_donhang=?", $id_khachhang, $id_donhang);
}
// show tên khác hàng 
function hienthitenkhachhang($id_khachhang)
{
  return pdo_query_one("SELECT tenkhachhang FROM thanhtoan WHERE id_khachhang = ?", $id_khachhang);
}
function chuathanhtoan()
{
  return pdo_query("SELECT * FROM donhang WHERE trangthai = 'dangsuly'");
}
function dathanhtoan()
{
  return pdo_query("SELECT * FROM donhang WHERE trangthai = 'thanhcong'");
}
