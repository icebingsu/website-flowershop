<?php
include_once "m_connect.php";
// show danh muc 
function show_category()
{
  return pdo_query("SELECT
   danhmuc.tendanhmuc,
   MAX(danhmuc.gimtrangchu) AS gimtrangchu,
   MAX(danhmuc.id) AS id,
   COUNT(hoa.id) AS sohoa
FROM
   flowershop.danhmuc
LEFT JOIN
   flowershop.hoa ON hoa.id_danhmuc = danhmuc.id
GROUP BY
   danhmuc.tendanhmuc
LIMIT 25;");
}
// check danh mục
function check_category($id_danhmuc)
{
  return pdo_query_one("SELECT gimtrangchu FROM danhmuc WHERE id = ?", $id_danhmuc);
}
// gimdanhmuc 
function gim($id_danhmuc)
{
  pdo_execute("UPDATE danhmuc
  SET gimtrangchu = 'co'
  WHERE id = ?
  ", $id_danhmuc);
}
// không gym 
function khonggim($id_danhmuc)
{
  pdo_execute("UPDATE danhmuc
  SET gimtrangchu = 'khong'
  WHERE id = ?
  ", $id_danhmuc);
}
// thêm danh mục
function themdanhmuc($tendanhmuc, $gimtrangchu)
{
  pdo_execute("INSERT INTO danhmuc(tendanhmuc,gimtrangchu) VALUE(?,?)", $tendanhmuc, $gimtrangchu);
}
// xóa danh mục 
function xoadanhmuc($id_danhmuc)
{
  pdo_execute("DELETE FROM danhmuc
  WHERE id = ?", $id_danhmuc);
}
// xửa danh mục
function suadanhmuc($tendanhmuc, $id)
{
  pdo_execute("UPDATE danhmuc 
  SET tendanhmuc = ?
  WHERE id = ?", $tendanhmuc, $id);
}
