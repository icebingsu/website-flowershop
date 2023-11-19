<?php
include_once "m_connect.php";
function show_product()
{
   return pdo_query("SELECT hoa.*, danhmuc.tendanhmuc
   FROM hoa
   INNER JOIN danhmuc ON hoa.id_danhmuc = danhmuc.id;");
};
// show sản phẩm 
function sp_show_category()
{
   return pdo_query("SELECT * FROM danhmuc");
}
// thêm sản phẩm 
function themsanpham($tenhoa, $anhhoa, $giaban, $giakm, $id_danhmuc)
{
   pdo_execute("INSERT INTO hoa(tenhoa, anhhoa, giaban,giakm,id_danhmuc)
   VALUES (?,?,?,?,?);", $tenhoa, $anhhoa, $giaban, $giakm, $id_danhmuc);
}
// xóa sản phẩm
function xoasanpham($id_hoa)
{
   pdo_execute("DELETE  FROM hoa
   WHERE id=?", $id_hoa);
}
