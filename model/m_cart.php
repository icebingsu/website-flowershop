<?php
include_once "model/m_connect.php";
 // checkcart
 function checkcartkhachhang($id_khachhang){
   return pdo_query_one("SELECT * FROM giohang where id_khachhang = ?", $id_khachhang);
}
// check cart soluong
function checkcarthoa($id_hoa,$id_khachhang){
  return pdo_query_one("SELECT * FROM giohang where id_hoa = ? AND id_khachhang = ?", $id_hoa,$id_khachhang);
}
// tạo cart
function addtocart($id_khachhang , $id_hoa, $tongtien, $soluong){
   pdo_execute("INSERT INTO giohang(id_khachhang, id_hoa, tongtien, soluong) value(?,?,?,?)",$id_khachhang,$id_hoa,$tongtien,$soluong);
}
// update
function update($soluong, $tongtien ,$id_hoa){
   pdo_execute(
      "UPDATE giohang
      SET soluong = ?, tongtien = ? 
      WHERE id_hoa = ?", $soluong, $tongtien ,$id_hoa
   );
}
// show cart
function showcart($id_khachhang){
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
function removecart($id_hoa,$id_khachhang){
  pdo_execute("DELETE FROM giohang WHERE id_hoa = ? and id_khachhang = ?",$id_hoa ,$id_khachhang);
}
// update so luong
function updatesl($sl,$tongtien , $id_hoa,$id_khachhang){
  pdo_execute("UPDATE giohang
  SET soluong = ?, tongtien = ?
  WHERE id_hoa = ? AND id_khachhang = ?", $sl,$tongtien , $id_hoa , $id_khachhang);
}
function updateslttdetails($soluong, $tongtien ,$id_hoa){
  pdo_execute('UPDATE giohang SET soluong = ?, tongtien =? WHERE id_hoa= ?',$soluong,$tongtien,$id_hoa);
}
function donhang($id_khachhang){
  return pdo_query("SELECT * FROM thanhtoan WHERE id_khachhang = ?",$id_khachhang);
}
?>