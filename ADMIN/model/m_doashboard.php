<?php
include_once "model/m_connect.php";

// lấy ra doanh só trong tuần này 
function doanhsotrongtuan()
{
   return pdo_query_one("SELECT SUM(t.soluong * t.giaban) AS doanhso
   FROM thanhtoan t
   INNER JOIN donhang d ON t.id_donhang = d.id_donhang
   WHERE d.trangthai = 'thanhcong'
     AND WEEK(d.ngaydathang) = WEEK(CURDATE())
     AND YEAR(d.ngaydathang) = YEAR(CURDATE());");
}
function luotnguoidung()
{
   return pdo_query_one("SELECT COUNT(*) AS luotnguoidung
   FROM khachhang
   WHERE quyen = 'user';");
}
function khachhangmoi()
{
   return pdo_query_one("SELECT *
   FROM khachhang
   ORDER BY id DESC
   LIMIT 1;");
}
function tongdoanhso()
{
   return pdo_query_one("SELECT SUM(t.soluong * t.giaban) AS tongdoanhso
   FROM thanhtoan t
   INNER JOIN donhang d ON t.id_donhang = d.id_donhang
   WHERE d.trangthai = 'thanhcong';");
}
function donhangtrongtuan()
{
   return pdo_query_one("SELECT
   COUNT(CASE WHEN DAYOFWEEK(d.ngaydathang) = 2 THEN t.id_donhang END) AS T2,
   COUNT(CASE WHEN DAYOFWEEK(d.ngaydathang) = 3 THEN t.id_donhang END) AS T3,
   COUNT(CASE WHEN DAYOFWEEK(d.ngaydathang) = 4 THEN t.id_donhang END) AS T4,
   COUNT(CASE WHEN DAYOFWEEK(d.ngaydathang) = 5 THEN t.id_donhang END) AS T5,
   COUNT(CASE WHEN DAYOFWEEK(d.ngaydathang) = 6 THEN t.id_donhang END) AS T6,
   COUNT(CASE WHEN DAYOFWEEK(d.ngaydathang) = 7 THEN t.id_donhang END) AS T7,
   COUNT(CASE WHEN DAYOFWEEK(d.ngaydathang) = 1 THEN t.id_donhang END) AS CN
FROM thanhtoan t
INNER JOIN donhang d ON t.id_donhang = d.id_donhang;");
}
function donhangdabantrongtuan()
{
   return pdo_query_one("SELECT
   COUNT(CASE WHEN DAYOFWEEK(d.ngaydathang) = 2 THEN t.id_donhang END) AS T2,
   COUNT(CASE WHEN DAYOFWEEK(d.ngaydathang) = 3 THEN t.id_donhang END) AS T3,
   COUNT(CASE WHEN DAYOFWEEK(d.ngaydathang) = 4 THEN t.id_donhang END) AS T4,
   COUNT(CASE WHEN DAYOFWEEK(d.ngaydathang) = 5 THEN t.id_donhang END) AS T5,
   COUNT(CASE WHEN DAYOFWEEK(d.ngaydathang) = 6 THEN t.id_donhang END) AS T6,
   COUNT(CASE WHEN DAYOFWEEK(d.ngaydathang) = 7 THEN t.id_donhang END) AS T7,
   COUNT(CASE WHEN DAYOFWEEK(d.ngaydathang) = 1 THEN t.id_donhang END) AS CN
FROM thanhtoan t
INNER JOIN donhang d ON t.id_donhang = d.id_donhang
WHERE d.trangthai = 'thanhcong';");
}
function tongtiencacngaytrongtuan()
{
   return pdo_query_one("SELECT
   SUM(CASE WHEN DAYOFWEEK(d.ngaydathang) = 2 THEN t.giaban END) AS T2,
   SUM(CASE WHEN DAYOFWEEK(d.ngaydathang) = 3 THEN t.giaban END) AS T3,
   SUM(CASE WHEN DAYOFWEEK(d.ngaydathang) = 4 THEN t.giaban END) AS T4,
   SUM(CASE WHEN DAYOFWEEK(d.ngaydathang) = 5 THEN t.giaban END) AS T5,
   SUM(CASE WHEN DAYOFWEEK(d.ngaydathang) = 6 THEN t.giaban END) AS T6,
   SUM(CASE WHEN DAYOFWEEK(d.ngaydathang) = 7 THEN t.giaban END) AS T7,
   SUM(CASE WHEN DAYOFWEEK(d.ngaydathang) = 1 THEN t.giaban END) AS CN
FROM thanhtoan t
INNER JOIN donhang d ON t.id_donhang = d.id_donhang
WHERE d.trangthai = 'thanhcong';");
}
