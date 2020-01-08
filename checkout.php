<?php
include_once('DbConnect.php');
$nama =$_POST['username'];
$total=$_POST['total'];
$metod=$_POST['metod'];



$insert = "INSERT INTO checkout(id_checkout,nama,total,metod,tgl) VALUES ('','$nama','$total','$metod',current_timestamp())";
$exeinsert = mysqli_query($conn,$insert);
$response = array();
if($exeinsert)
{
$response['code'] =1;
$response['message'] = "Success ! Data ditambahkan";
}
else
{
$response['code'] =0;
$response['message'] = "Failed ! Data Gagal ditambahkan";
}
echo json_encode($response);

?>