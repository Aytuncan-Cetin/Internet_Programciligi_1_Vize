<?
session_start();

$username = $_POST['username'];
$password = $_POST['password'];

if (isset($_POST['giris'])) {


	if ($username == "aytuncan" && $password == "12345") {

		header("refresh:0.5;url=kisiEkle.php");
		echo '<script> alert(" GİRİŞ BAŞARILI"); </script>';
	} else {
		header("refresh:0.5;url=index.php");
		echo '<script> alert(" GİRİŞ BAŞARISIZ "); </script>';
	}
}
