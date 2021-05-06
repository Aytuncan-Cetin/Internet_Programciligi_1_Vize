<?include("sistem/baglan.php");?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  <title>Kişi Ekle</title>
  <style>
    label
    {
     font-weight: bold;

   }


 </style>
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
<!---------------------------------------------------------------------------------->
<body>
	<form method="post" action="kaydet.php">
    <div class="form-row">
      <div class="form-group col-md-2">
        <br><label>TC</label>

        <input autofocus="autofocus" maxlength="11" type="text" class="form-control" name="tc"  placeholder="TC Kimlik Numaranızı Giriniz...">

      </div>
    </div>

    <div class="form-row">
      <div class="form-group col-md-2">
        <label>AD</label>

        <input type="text" class="form-control" name="adi" placeholder="Adınızı Giriniz...">

      </div><br>
      <div class="form-group col-md-2">
        <label>SOYAD</label>

        <input type="text" class="form-control" name="soyadi" placeholder="Soyadınızı Giriniz...">

      </div>
    </div>

    <div class="form-row">
     <div class = "form-group col-md-2">
      <label>MESLEK</label>

      <input type="text" class="form-control" name="meslek"  placeholder="Mesleğinizi Giriniz...">

    </div>
  </div>

  <div class="form-row">
  	<div class="form-group col-md-3">
      <label>MAİL ADRESİ</label>

      <input type="email" class="form-control" name="email" placeholder="Mail Adresinizi Giriniz...">

    </div>
  </div>

  <div class="form-row">
  	<div class="form-group col-md-2">
      <label>TELEFON NO</label>

      <input maxlength="11" type="tel" class="form-control" name="telno" placeholder="0 ile Başlayan TelNo'su Giriniz...">

    </div>
  </div>


  <div class="form-row">
  	<div class="form-group col-md-2">
      <label>CİNSİYET</label><br>

      <input type="radio" id="erkek" name="cinsiyet" value="Erkek">
      <label>Erkek</label>
      <input type="radio" id="kadın" name="cinsiyet" value="Kadın">
      <label >Kadın</label><br>


    </div>
  </div>
  <div class="form-row">
  	<div class="form-group col-md-2">
      <label>DOĞUM TARİHİ</label>

      <input type="date" name="dtarih" class="form-control">

    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">ADRES</label>

      <textarea class="form-control" name="adres" rows="2" cols="3"></textarea> 

    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">KİŞİ BİLGİSİ</label>

      <textarea name="kbilgisi" class="form-control" rows="3" cols="3"></textarea> 

    </div>
  </div>



  
  <input type="submit" name="gonder" value="Kayıt Ekle" class="btn btn-success">
</form>





</body>
</html>


