<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../login.php");
  }
?>
<?php include "header.php"; ?>
<!-- Awal script Slider/ Carousel -->
<div id="contoh-carousel" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#contoh-carousel" data-slide-to="0" class="active"></li>
      </ol>

      <div class="carousel-inner" role="listbox">
			<!-- Awal script Slider pertama -->
        <div class="item active">
     <img src="images/mieee.jpg" alt="Berisi keterangan gambar">
          <div class="carousel-caption">
            <h1>Noodles Fitria </h1>
            <h4>Silahkan Pesan Menu Sesuai Keinginan Anda</h4>
            <p>Enjoy The Food</p>
</div>
</div>
		
      </div>
		</div>
		</div>
		<div class="container">
		<div class="row">
		<div class="col-md-12">
			<h1><strong><center><i>*****Binjai*****</i></center></strong></h1>
			<h4><strong><center><i>*****Buka Jam 14:00 - 22:00*****</i></center></strong></h4>

  
      <div class="item active">
      <div class="col-md-4 d-flex justify-content-end">
            <div class="card bg-dark text-white border-light">
            <div class="container">
		<div class="row">
		<div class="col-md-12">
            <h4><strong><center><i><img src="images/miee.jpg" alt="Berisi keterangan gambar"></i></center></strong></h4>
          <div class="carousel-caption">
            <a href="about.php" class="btn btn-primary">LIHAT MENU PEMBELI</a>
              </div>
            </div>
          </div>
				
			

<?php include "footer.php";?>