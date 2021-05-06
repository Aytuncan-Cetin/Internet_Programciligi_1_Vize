<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection,'int_prog_1_vize');

if (isset($_POST['updatedata'])) {
	
	$g_id = $_POST["g_id"];
	$g_tc = $_POST["g_tc"];
	$g_adi = $_POST["g_adi"];
	$g_soyadi = $_POST["g_soyadi"];
	$g_meslek = $_POST["g_meslek"];
	$g_email = $_POST["g_email"];
	$g_telno = $_POST["g_telno"];
	$g_cinsiyet = $_POST["g_cinsiyet"];
	$g_dtarih = $_POST["g_dtarih"];
	$g_adres = $_POST["g_adres"];
	$g_kbilgisi = $_POST["g_kbilgisi"];

	$query = "UPDATE kisiler SET tc='$g_tc', ad='$g_adi', soyad='$g_soyadi', meslek='$g_meslek', mail='$g_email', telefon='$g_telno', cinsiyet='$g_cinsiyet', dtarihi='$g_dtarih', adres='$g_adres', kbilgisi='$g_kbilgisi' WHERE id='$g_id' ";

	$query_run=mysqli_query($connection,$query);

	if ($query_run) 
	{
		echo '<script> alert(" Veri Güncellendi "); </script>';
		header("Location:kisiListele.php");
		
	}
	else
	{
		echo '<script> alert(" Güncelleme Sorunu ! "); </script>';
		header("refresh:0;url=kisiListele.php");
	}



	
}

?>