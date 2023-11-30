<?php
include_once "m_connect.php";
function show_product()
{
   return pdo_query("SELECT hoa.*, danhmuc.tendanhmuc
   FROM hoa
   INNER JOIN danhmuc ON hoa.id_danhmuc = danhmuc.id");
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
// sửa sản phẩm
function suasanpham($anhhoa, $tenhoa, $giaban, $giakm, $id_danhmuc, $id_hoa)
{
   return pdo_execute("UPDATE hoa
   SET anhhoa = ?, tenhoa=? , giaban = ? , giakm =? ,id_danhmuc = ?
   WHERE id = ?
   ", $anhhoa, $tenhoa, $giaban, $giakm, $id_danhmuc, $id_hoa);
}
// show sản phẩm
function showsp($id_hoa)
{
   return pdo_query_one("SELECT * FROM hoa where id = ?", $id_hoa);
}
// show 10 sản phẩm mới nhất 
function sanphammoi10()
{
   return pdo_query("SELECT hoa.*, danhmuc.tendanhmuc
   FROM hoa
   INNER JOIN danhmuc ON hoa.id_danhmuc = danhmuc.id
   ORDER BY hoa.id DESC
   LIMIT 10;");
}
function sanphamgiabancaodenthap()
{
   return pdo_query("SELECT hoa.*, danhmuc.tendanhmuc
   FROM hoa
   INNER JOIN danhmuc ON hoa.id_danhmuc = danhmuc.id
   ORDER BY hoa.giaban DESC");
}
function sanphamgiabanthapdencao()
{
   return pdo_query("SELECT hoa.*, danhmuc.tendanhmuc
   FROM hoa
   INNER JOIN danhmuc ON hoa.id_danhmuc = danhmuc.id
   ORDER BY hoa.giaban");
}
function sanphamtheodanhmuc($danhmuc)
{
   return pdo_query("SELECT hoa.*, danhmuc.tendanhmuc
   FROM hoa
   INNER JOIN danhmuc ON hoa.id_danhmuc = danhmuc.id
   WHERE hoa.id_danhmuc = ?", $danhmuc);
}
