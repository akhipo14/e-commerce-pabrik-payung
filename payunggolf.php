<?php
$filename = 'list_pengunjung.txt';	//mendefinisikan nama file yang di gunakan untuk menyimpan data jumlah pengunjung

function lihat(){		//function lihat
	global $filename;	//set variabel $filename yang bersifat global

	if(file_exists($filename)){		//jika file list_pengunjung.txt ada
		$value = file_get_contents($filename);	//set nilai di notepad
	}else{		//jika file list_pengunjung.txt tidak ada maka akan membuat file list_pengunjung.txt
		$value = 0;		//kemudian set value menjadi 0
	}

	file_put_contents($filename, $value);		//menuliskan kedalam file list_pengunjung.txt value di tambah 1
}

lihat();	//menjalankan function lihat
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style_payung.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <title>Payung Berkat Family</title>
  </head>
  <body>
    <div class="navbar">

      <div class="logo">
        <h3>Payung Berkat Family</h3>
      </div>
    </div>
    <!-- tombol-whatsapp -->
    <div class="tombol-whatsapp">
      <a href="https://wa.me/6281389832063"><i class="fa-brands fa-whatsapp"></i></a>
    </div>
    <!-- end-tombol-whatsapp -->
    <!-- jenis payung -->
    <div class="content" id="jenis_payung" style="padding-top:100px;">
      <div class="title">
        <h2>Galeri Produk</h2>
      </div>

      <!-- <div class="pembungkus-dp">
        <div class="gambar">
          <img src="img/golf/golf3.jpg" alt="">
        </div>
        <div class="text-dp">
          <h3>Payung Golf</h3>
          <hr>
          <div class="text-dp-flex">
            <div class="text-dp-a">
              <p>Type =></p>
              <p>Bahan =></p>
              <p>Rangka =></p>
              <p>Panjang =></p>
              <p>Lebar =></p>
              <p>Deskripsi Tambahan =></p>
            </div>
            <div class="text-dp-b">
              <p>Jumbo type 015</p>
              <p>Bahan lapis filter anti UV</p>
              <p>Rangka fiber anti patah</p>
              <p>100 cm</p>
              <p>150 cm</p>
              <p>Payung buka otomatis</p>
            </div>
          </div>
          <div class="button-pesan">
            <a href="https://wa.me/628129367662">Pesan Sekarang</a>
          </div>
        </div>
      </div> -->

      <div class="gallery">
        <h3>Payung Golf</h3>
        <div class="row">
          <div class="col">
            <img src="img/golf/golf1.jpg" alt="" class="center">
          </div>
          <div class="col">
            <img src="img/golf/golf2.jpg" alt="">
          </div>
          <div class="col">
            <img src="img/golf/golf3.jpg" alt="">
          </div>
          <div class="col">
            <img src="img/golf/golf4.jpg" alt="">
          </div>
          <div class="col">
            <img src="img/golf/golf5.jpg" alt="" class="center">
          </div>
          <div class="col">
            <img src="img/golf/golf6.jpg" alt="">
          </div>
          <div class="col">
            <img src="img/golf/golf7.jpg" alt="">
          </div>
          <div class="col">
            <img src="img/golf/golf8.jpg" alt="">
          </div>
          <div class="col">
            <img src="img/golf/golf9.jpg" alt="">
          </div>
          <div class="col">
            <img src="img/golf/golf10.jpg" alt="">
          </div>
          <div class="col">
            <img src="img/golf/golf11.jpg" alt="">
          </div>
          <div class="col">
            <img src="img/golf/golf12.jpg" alt="">
          </div>
        </div>
        <div class="button-pesan">
            <a href="https://wa.me/6281389832063">Pesan Sekarang</a>
          </div>
      </div>

      <div class="keluar">
        <a href="index.php"><i class="fa-solid fa-circle-left"></i> Kembali</a>
      </div>
    </div>

    <!-- footer -->
    <div class="footer">
			<div class="kopirek">
      <a href="#"><i class="fa-solid fa-copyright"></i> CopyRight | Pabrikpayungjakarta</a>
      <p style="color:white">~</p>
      <a href="#"><i class="fa-solid fa-eye"></i><?php echo ' Total Pengunjung: '.file_get_contents($filename);	//menampilkan jumlah pengunjung di website
 			?></a>
			</div>
    </div>
		<script src="https://unpkg.com/scrollreveal"></script>

		<script type="text/javascript">
				ScrollReveal({
					reset: true,
					distance: '60px',
					duration: 2000,
					delay: 500
				});
				ScrollReveal().reveal('.col-1, .col-2, .col-3, .col-4, .googlemap',{delay:50, origin:'bottom'});


		</script>
  </body>
</html>
