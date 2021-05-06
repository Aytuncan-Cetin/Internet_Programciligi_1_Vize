<?php
include("sistem/baglan.php");

$tc = $_POST["tc"];
$adi = $_POST["adi"];
$soyadi = $_POST["soyadi"];
$meslek = $_POST["meslek"];
$email = $_POST["email"];
$telno = $_POST["telno"];
$cinsiyet = $_POST["cinsiyet"];
$dtarih = $_POST["dtarih"];
$adres = $_POST["adres"];
$kbilgisi = $_POST["kbilgisi"];




if (isset($_POST["gonder"])) 
{
	$sql = "insert into kisiler(tc,ad,soyad,meslek,mail,telefon,cinsiyet,dtarihi,adres,kbilgisi)values('$tc','$adi','$soyadi','$meslek','$email','$telno','$cinsiyet','$dtarih','$adres','$kbilgisi')";
	$sonuc = mysqli_query($baglan,$sql);
	if ($sonuc) 
	{
		header("refresh:0.5;url=kisiEkle.php");
		echo '<script> alert("Kişi Başarıyla Eklendi..."); </script>';
			
	}
	else
	{
		header("refresh:0.5;url=kisiEkle.php");
		echo '<script> alert("Kişi Kaydedilemedi !!!"); </script>';
		
	}
}
?>