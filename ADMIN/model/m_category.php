<?php 
include_once "m_connect.php";
// show danh muc 
function show_category(){
   return pdo_query("SELECT
   danhmuc.tendanhmuc,
   MAX(danhmuc.gimtrangchu) AS gimtrangchu,
   MAX(danhmuc.id) AS id,
   COUNT(*) AS sohoa
 FROM
   flowershop.hoa
 INNER JOIN
   flowershop.danhmuc
 ON
   hoa.id_danhmuc = danhmuc.id
 GROUP BY
   danhmuc.tendanhmuc
 LIMIT 0, 25;");
}
// check danh mục
function check_category($id_danhmuc){
  return pdo_query_one(" SELECT
   danhmuc.tendanhmuc,
   MAX(danhmuc.gimtrangchu) AS gimtrangchu,
   MAX(danhmuc.id) AS id,
   COUNT(*) AS sohoa
 FROM
   flowershop.hoa
 INNER JOIN
   flowershop.danhmuc
 ON
   hoa.id_danhmuc = danhmuc.id
 WHERE danhmuc.id = ?
 GROUP BY
   danhmuc.tendanhmuc
 LIMIT 0, 25;
  ", $id_danhmuc);
}
// gimdanhmuc 
function gim($id_danhmuc){
  pdo_execute("UPDATE danhmuc
  SET gimtrangchu = 'co'
  WHERE id = ?
  ", $id_danhmuc);
}
// không gym 
function khonggim($id_danhmuc){
  pdo_execute("UPDATE danhmuc
  SET gimtrangchu = 'khong'
  WHERE id = ?
  ", $id_danhmuc);
}

?>