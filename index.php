<?php
$filename = 'list_pengunjung.txt';	//mendefinisikan nama file yang di gunakan untuk menyimpan data jumlah pengunjung

function lihat(){		//function lihat
	global $filename;	//set variabel $filename yang bersifat global

	if(file_exists($filename)){		//jika file list_pengunjung.txt ada
		$value = file_get_contents($filename);	//set nilai di notepad
	}else{		//jika file list_pengunjung.txt tidak ada maka akan membuat file list_pengunjung.txt
		$value = 0;		//kemudian set value menjadi 0
	}

	file_put_contents($filename, ++$value);		//menuliskan kedalam file list_pengunjung.txt value di tambah 1
}

lihat();	//menjalankan function lihat
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
		<script src="https://unpkg.com/scrollreveal"></script>
		<link rel="icon" href="img/logo.png">
    <title>Payung Berkat Family</title>
  </head>
  <body>
    <div class="navbar">
      <input type="checkbox" name="" value="" id="check">
      <label for="check">
        <i class="fa-solid fa-bars batas-kanan"  id="dehaze"></i>
        <i class="fa-solid fa-xmark batas-kanan" id="close"></i>
      </label>

      <div class="logo batas-kiri">
        <h3>Payung Berkat Family</h3>
      </div>
      <div class="nav batas-kanan">
        <ul>
          <li> <a href="#header"><i class="fa-solid fa-house"></i> Home</a> </li>
          <li> <a href="#alamat"><i class="fa-solid fa-user"></i> Tentang Kami</a> </li>
          <li> <a href="#jenis_payung"><i class="fa-solid fa-umbrella"></i> Jenis Payung</a> </li>
          <li> <a href="https://wa.me/6281389832063"class="active"><i class="fa-solid fa-phone"></i> Hubungi Kami</a> </li>
        </ul>
      </div>
    </div>
    <div class="header" id="header">
        <div class="cover-header" >
          <div class="text batas-kiri">
            <p class="t-1">Selamat Datang di website Payung Berkat Family</p>
            <h1>Berbagai Jenis Payung</h1>
            <h1>Dengan Kualitas Terbaik</h1>
            <p><i class="fa-solid fa-location-dot"></i> Jl. Galur sari III, No. 173F Kel. Utan Kayu Selatan, Jakarta Timur</p>
            <p><i class="fa-brands fa-whatsapp"></i>  081389832063</p>
            <p><i class="fa-regular fa-envelope"></i> berkat.family@gmail.com</p>
            <div class="button-pesan">
              <a href="https://wa.me/6281389832063" > Pesan Sekarang</a>
            </div>
            </div>
            <div class="float">
              <div class="gambar-header">
                <img src="img/b.png" alt="">
              </div>
            </div>
      </div>
      <!-- tombol-whatsapp -->
      <div class="tombol-whatsapp" style="z-index:2;">
        <a href="https://wa.me/6281389832063"><i class="fa-brands fa-whatsapp"></i></a>
      </div>
      <!-- end-tombol-whatsapp -->
    </div>
    <!-- end-header -->


    <!-- tentang-kami -->
    <div class="tk batas-kanan batas-kiri">
      <div class="tk-gambar">
        <img src="img/a.png" alt="">
      </div>
      <div class="tk-teks">
        <p class="tk-teks-title">Payung Berkat Family Adalah</p>
        <p>Home industri yang menyediakan segala jenis payung dengan kualitas produk payung terbaik
          yang telah membuat payung untuk berbagai macam event dan customer terkenal seperti
          BkkbN, Indosat Oredoo, Bintang Solusi, Mandiri , TMII, Bangka Pos, PT. Ria Indo Agri, 
          Festival Merah Putih, dll.
        </p>
      </div>
    </div>
    <!-- end-tentang-kami -->
  
    <!-- jenis payung -->
    <div class="content" id="jenis_payung">
      <div class="title">
        <h2>Jenis Payung</h2>
      </div>
      <div class="row">

        <div class="col">
          <img src="img/pygglf.jpg" alt="" class="center">
          <h3>Payung Golf</h3>
					<a href="payunggolf.php" >Lihat galeri produk <i class="fa-solid fa-circle-right"></i></a>
        </div>
        <div class="col">
          <img src="img/golf_lipat_2/lipatdua2.jpg" alt="">
          <h3>Payung Golf Lipat dua</h3>
					<a href="payunggolflipatdua.php" >Lihat galeri produk <i class="fa-solid fa-circle-right"></i></a>
        </div>

        <div class="col">
          <img src="img/lipat_tiga/lipattiga4-01.jpg" alt="">
          <h3>Payung Lipat Tiga</h3>
					<a href="payunglipattiga.php" >Lihat galeri produk <i class="fa-solid fa-circle-right"></i></a>
        </div>
				<div class="col">
          <img src="img/lipat_dua/payunglipatdua1.jpg" alt="">
          <h3>Payung Lipat Dua</h3>
					<a href="payunglipatdua.php" >Lihat galeri produk <i class="fa-solid fa-circle-right"></i></a>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <img src="img/standar/payungstandar1.jpg" alt="" class="center">
          <h3>Payung Standar</h3>
					<a href="payungstandar.php"	>Lihat galeri produk <i class="fa-solid fa-circle-right"></i></a>
        </div>
        <div class="col">
          <img src="img/payung_terbalik/payung_terbalik5.jpg" alt="">
          <h3>Payung Terbalik</h3>
					<a href="payungterbalik.php">Lihat galeri produk <i class="fa-solid fa-circle-right"></i></a>
        </div>
        <div class="col">
          <img src="img/payungbotol.jfif" alt="">
          <h3>Payung Botol Botol</h3>
					<a href="payungbotol.php">Lihat galeri produk <i class="fa-solid fa-circle-right"></i></a>
        </div>
				<div class="col">
          <img src="img/print_digital/payungprintgidital1.jpg" alt="">
          <h3>Payung Print Digital</h3>
					<a href="payungprintdigital.php" >Lihat galeri produk <i class="fa-solid fa-circle-right"></i></a>
        </div>
      </div>
    </div>
    <!-- kelebihan-product -->
      <div class="kel-produk batas-kanan batas-kiri">
        <div class="kel-produk-text">
        <h1>Kenapa Anda Harus Membeli Payung Dengan Payung Berkat Family?</h1>
          <p><i class="fa-solid fa-check"></i> Telah dipercaya oleh banyak perusahaan</p>
          <p><i class="fa-solid fa-check"></i> Produk berkualitas dan pengiriman yang cepat</p>
          <p><i class="fa-solid fa-check"></i> Dapat custom desain sendiri</p>
          <p><i class="fa-solid fa-check"></i> Garansi apabila ada produk yang rusak</p>
          <p><i class="fa-solid fa-check"></i> Admin yang fast respon</p>
        </div>
        <div class="kel-produk-gambar">
          <img src="img/jempol.png" alt="">
        </div>
      </div>
    <!-- end-kelebihan-product -->
    <!-- lokasi -->
      <div class="lokasi batas-kanan batas-kiri" >
        <div class="title">
        <h2 id="alamat">Silahkan Hubungi Kami</h2>
        </div>
        <div class="isi">
          <div class="text">
            <p><i class="fa-solid fa-location-dot"></i> Jl. Galur sari III, No. 173F Kel. Utan Kayu Selatan, Jakarta Timur</p>
            <p><i class="fa-brands fa-whatsapp"></i> 081389832063</p>
            <p><i class="fa-regular fa-envelope"></i> berkat.family@gmail.com</p>

         </div>
          <div class="googlemap">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d991.6205401346431!2d106.86716449213773!3d-6.19994265113997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f48a3a64579f%3A0xce8319fe0ac16ae1!2s173f%2C%20Jl.%20Galur%20Sari%20III%20Blok%20K%20No.174A%2C%20RT.11%2FRW.1%2C%20Utan%20Kayu%20Sel.%2C%20Kec.%20Matraman%2C%20Kota%20Jakarta%20Timur%2C%20Daerah%20Khusus%20Ibukota%20Jakarta%2013120!5e0!3m2!1sid!2sid!4v1663496887329!5m2!1sid!2sid" width="100%" height="450" style="" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>
      </div>
      <!-- end-lokasi -->
    <!-- footer -->
    <div class="footer">
			<div class="kopirek">
      <a href="#"><i class="fa-solid fa-copyright"></i> CopyRight | Pabrikpayungjakarta</a>
      <p style="color:white">~</p>
      <a href="#"><i class="fa-solid fa-eye"></i><?php echo ' Total Pengunjung: '.file_get_contents($filename);	//menampilkan jumlah pengunjung di website
 			?></a>
			</div>
    </div>
		<script type="text/javascript">
        ScrollReveal({
          reset: false,
          distance: '60px',
          duration: 1600,
          delay: 0
        });
        ScrollReveal().reveal(' .kel-produk, .cover-header, .tk, .title, .row, .lokasi',{delay:50, origin:'bottom'});


    </script>
  </body>
</html>
