<!--<?//include("sistem/baglan.php");
//$sorgu=$baglan->query("SELECT * FROM kisiler"); 
?>-->
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


	<title>Kişi Listele</title>
</head>
<!-----------------------------------------NAVBAR-------------------------------->
<header>
	
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<a class="navbar-brand" href="#">
			<img src="logo.png" width="50" height="50" alt="">
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
			<div class="navbar-nav">
				<a class="nav-item nav-link active" href="kisiEkle.php">Kişi Ekle <span class="sr-only">(current)</span></a>
				<a class="nav-item nav-link" href="kisiListele.php">Kişi Listele</a>
				<a class="nav-item nav-link" href="index.php">Çıkış</a>
			</div>
		</div>
	</nav>
</header>



<body>
	<!-- Modal -->
	<div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Kişi Güncelle</h5>
				</div>

				<form action="guncelle.php" method="POST" >

					<!--popup taki form-->
					<div class="modal-body">

						<input type="hidden" name="g_id" id="g_id">

						<div class="form-group">
							<label>TC</label>
							<input maxlength="11" type="text" name="g_tc" id="g_tc" class="form-control">
						</div>

						<div class="form-group">
							<label>AD</label>
							<input type="text" name="g_adi" id="g_adi" class="form-control">
						</div>

						<div class="form-gruop">
							<label>SOYAD</label>
							<input type="text" name="g_soyadi" id="g_soyadi" class="form-control">
						</div>

						<div class="form-group">
							<label>MESLEK</label>
							<input type="text" name="g_meslek" id="g_meslek" class="form-control">
						</div>

						<div class="form-group">
							<label>MAİL</label>
							<input type="email" class="form-control" name="g_email" id="g_email">
						</div>

						<div class="form-group">
							<label>TEL NO</label>
							<input type="text" name="g_telno" id="g_telno" maxlength="11" class="form-control">

						</div>

						<div class="form-group">
							<label>CİNSİYET</label>
							<input type="text" name="g_cinsiyet" id="g_cinsiyet" class="form-control">
						</div>


						<div class="form-group">
							<label>Doğum Tarihi</label>
							<input type="text" name="g_dtarih" id="g_dtarih" class="form-control">
						</div>

						<div class="form-group">
							<label>ADRES</label> 	
							<textarea class="form-control" name="g_adres" id="g_adres" rows="2" cols="3"></textarea> 
						</div>

						<div class="form-group">
							<label>KİŞİ BİLGİSİ</label>
							<textarea name="g_kbilgisi" id="g_kbilgisi" class="form-control" rows="2" cols="3"></textarea> 
						</div>



					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-warning" data-dismiss="modal">İPTAL</button>
						<button type="submit" class="btn btn-primary" name="updatedata">GÜNCELLE</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!--############################################################################################################################################-->
	
	<!--Silinsin mi ?-->
	<div class="modal fade" id="deletemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Kişi Sil</h5>
				</div>

				<form action="veriSil.php" method="POST" >

					<!--popup taki form-->
					<div class="modal-body">

						<input type="hidden" name="s_id" id="s_id">
						<h4>SİLMEK İSTİYOR MUSUN ?</h4>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-dark" data-dismiss="modal">HAYIR</button>
						<button type="submit" class="btn btn-success" name="deletedata">EVET</button>
					</div>
				</form>
			</div>
		</div>
	</div>


	<!--############################################################################################################################################-->

	<!--Ana ekran Listesi-->
	<div class="jumbotron">

		<div align="center">
			<h3>Kişi Listesi</h3>
		</div>
	</div>

	<div class="card">


		<?php
		$connection = mysqli_connect("localhost","root","");
		$db = mysqli_select_db($connection,'int_prog_1_vize');

		$query = "SELECT * FROM kisiler";
		$query_run = mysqli_query($connection,$query);
		?>

		<!--Verilerin Yazılacağı Tablo ve Database deki verileri listeleme-->
		<table class="table table-dark">
			<thead>
				<tr>
					<th scope="col">ID</th>
					<th scope="col">TC</th>
					<th scope="col">AD</th>
					<th scope="col">SOYAD</th>
					<th scope="col">MESLEK</th>
					<th scope="col">MAİL</th>
					<th scope="col">TELEFON</th>
					<th scope="col">CİNSİYET</th>
					<th scope="col">DOĞUM TARİHİ</th>
					<th scope="col">KATILIM TARİHİ</th>
					<th scope="col">ADRES</th>
					<th scope="col">KİŞİ BİLGİSİ</th>
					<th scope="col">GÜNCELLE</th>
					<th scope="col">SİL</th>


				</tr>
			</thead>
			<?php

			if ($query_run) 
			{
				foreach ($query_run as $row) 
				{
					?>

					<tbody>
						<tr>

							<td> <?echo $row['id']; ?> </td>
							<td> <?echo $row['tc']; ?> </td>
							<td> <?echo $row['ad']; ?> </td>
							<td> <?echo $row['soyad']; ?> </td>
							<td> <?echo $row['meslek']; ?> </td>
							<td> <?echo $row['mail']; ?> </td>
							<td> <?echo $row['telefon']; ?> </td>
							<td> <?echo $row['cinsiyet']; ?> </td>
							<td> <?echo $row['dtarihi']; ?> </td>
							<td> <?echo $row['ktarihi']; ?> </td>
							<td> <?echo $row['adres']; ?> </td>
							<td> <?echo $row['kbilgisi']; ?> </td>



							<td>
								<button type="button" class="btn btn-primary editbtn">GÜNCELLE</button>
							</td>

							<td>
								<button type="button" class="btn btn-danger deletebtn">SİL</button>
							</td>

						</tr>


					</tbody>

					<?php
				}

			}
			else
			{
				echo "Veri Bulunamadı";
			}

			?>

		</table>


	</div>


	
	<script>	//Güncelle Butonu İçin
		$(document).ready(function() { 
			$('.editbtn').on('click',function(){
				$('#editmodal').modal('show');


				$tr = $(this).closest('tr');

				var data = $tr.children("td").map(function(){
					return $(this).text();

				}).get();

				console.log(data);

				$('#g_id').val(data[0]);
				$('#g_tc').val(data[1]);
				$('#g_adi').val(data[2]);
				$('#g_soyadi').val(data[3]);
				$('#g_meslek').val(data[4]);
				$('#g_email').val(data[5]);
				$('#g_telno').val(data[6]);
				$('#g_cinsiyet').val(data[7]);
				$('#g_dtarih').val(data[8]);
				$('#g_adres').val(data[10]);
				$('#g_kbilgisi').val(data[11]);

			});

		});
	</script>

	<script>	//SİL Butonu İçin
		$(document).ready(function() { 
			$('.deletebtn').on('click',function(){
				$('#deletemodal').modal('show');


				$tr = $(this).closest('tr');

				var data = $tr.children("td").map(function(){
					return $(this).text();

				}).get();

				console.log(data);

				$('#s_id').val(data[0]);
				

			});

		});
	</script>
</body>
</html>