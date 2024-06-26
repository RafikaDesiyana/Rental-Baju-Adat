<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sewa adat</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/baru.css"> 
   
</head> 
<!-- //untuk header  -->
<body>

<?php
include 'header.php'
?>

    <!-- //untuk beranda -->
    <section class="main" id="main">
      <div class="content">
          <div class="content-header">
          <h1>SELAMAT DATANG DI <span>Arti KOSTUM</span></h1>
          <h5>"Jasa penyewaan baju adat tradisional yang ada di Indonesia"</h5>
          </div>
          <div class="image">
              <img src="img/tampilan awal.png">
          </div>
      </div>
 </section>

 <section class="item" id="item">
      <h1 class="judul">PROMO SPESIAL PELANGGAN BARU</h1>
      <div class="item-container">
          <div class="item-content" onclick="showPopup('Baju adat Jambi', 'Rp.280.000/PaketPromo')">
              <img src="img/16. Jambi.jpg">
              <h2>Baju adat Jambi</h2>
              <h1>Rp.280.000/Paket</h1>
              <h2>Paket : make up + foto studio + aksesoris </h2>
          </div>
          <div class="item-content" onclick="showPopup('Baju adat Papua', 'Rp.380.000/PaketPromo')">
              <img src="img/24. Papua.jpg">
              <h2>Baju adat Papua</h2>
              <h1>Rp.380.000/Paket</h1>
              <h2>Paket : make up + foto studio + aksesoris </h2>
          </div>
          <div class="item-content" onclick="showPopup('Baju adat Yogyakarta', 'Rp.350.000/PaketPromo')">
              <img src="img/10. DIY.jpg">
              <h2>Baju adat Yogyakarta</h2>
              <h1>Rp.350.000/Paket</h1>
              <h2>Paket : make up + foto studio + aksesoris </h2>
          </div>
          <div class="item-content" onclick="showPopup('Baju adat Jawa Tengah', 'Rp.300.000/PaketPromo')">
              <img src="img/6. Jawa Tengah.jpg">
              <h2>Baju adat Jawa Tengah</h2>
              <h1>Rp.300.000/Paket</h1>
              <h2>Paket : make up + foto studio + aksesoris </h2>
          </div>
          <div class="item-content" onclick="showPopup('Baju adat Kepulauan Riau', 'Rp.290.000/PaketPromo')">
              <img src="img/25. Kepulauan Riau.jpg">
              <h2>Baju adat Kepulauan Riau</h2>
              <h1>Rp.290.000/Paket</h1>
              <h2>Paket : make up + foto studio + aksesoris </h2>
          </div>
          <div class="item-content" onclick="showPopup('Baju adat Maluku', 'Rp.370.000/PaketPromo')">
              <img src="img/18. Maluku.jpg">
              <h2>Baju adat Maluku</h2>
              <h1>Rp.370.000/Paket</h1>
              <h2>Paket : make up + foto studio + aksesoris </h2>
          </div>
          <div class="item-content" onclick="showPopup('Baju adat Jakarta', 'Rp.250.000/PaketPromo')">
              <img src="img/11. Jakarta.jpg">
              <h2>Baju adat Jakarta</h2>
              <h1>Rp.250.000/Paket</h1>
              <h2>Paket : make up + foto studio + aksesoris </h2>
          </div>
          <div class="item-content" onclick="showPopup('Baju adat Lampung', 'Rp.330.000/PaketPromo')">
              <img src="img/17. Lampung.jpg">
              <h2>Baju adat Lampung</h2>
              <h1>Rp.330.000/Paket</h1>
              <h2>Paket : make up + foto studio + aksesoris </h2>
          </div>
          <div class="item-content" onclick="showPopup('Baju adat Jawa Timur', 'Rp.250.000/PaketPromo')">
              <img src="img/12. Jawa Timur.jpg">
              <h2>Baju adat Jawa Timur</h2>
              <h1>Rp.250.000/Paket</h1>
              <h2>Paket : make up + foto studio + aksesoris </h2>
          </div>
      </div>
  </section>
  
<!-- produk php -->

  <section class="product" id="product">
    <div class="judul">
      <h2>KAMI MENAWARKAN PRODUK BAJU ADAT TERLENGKAP</h2>
    </div>
    <div class="product-container">
    <div class="product-content" onclick="showPopup('Baju Adat Aceh', 'RP.550.000')">
      <img src="img/1. Aceh.jpg">
      <div class="product-layer">
        <h2>Baju adat Aceh</h2>
        <h3>Rp.550.000(make up + aksesoris)</p>
      </div>
    </div>
  
    <div class="product-content" onclick="showPopup('Baju Adat Bali', 'RP.420.000')">
      <img src="img/2. Bali.jpg">
      <div class="product-layer" >
        <h2>Baju adat Bali</h2>
        <h3>Rp.420.000(make up + aksesoris)</p>
      </div>
    </div>
  
    <div class="product-content" onclick="showPopup('Baju Adat Bangka Belitung', 'RP.320.000')">
      <img src="img/3. Bangka Belitung.jpg">
      <div class="product-layer">
        <h2>Baju adat Bangka Belitung</h2>
        <h3>Rp.320.000(make up + aksesoris)</p>
      </div>
    </div>
  
    <div class="product-content" onclick="showPopup('Baju Adat Banten', 'RP.440.000')">
      <img src="img/4. Banten.jpg">
      <div class="product-layer">
        <h2>Baju adat Banten</h2>
        <h3>Rp.400.000(make up + aksesoris)</p>
      </div>
    </div>
  
    <div class="product-content" onclick="showPopup('Baju Adat Bengkulu', 'RP.450.000')">
      <img src="img/5. Bengkulu.jpg">
      <div class="product-layer">
        <h2>Baju adat Bengkulu</h2>
        <h3>Rp.450.000(make up + aksesoris)</p>
      </div>
    </div>
  
    <div class="product-content" onclick="showPopup('Baju Adat Jawa Tengah', 'RP.500.000')">
      <img src="img/6. Jawa Tengah.jpg">
      <div class="product-layer">
        <h2>Baju adat Jawa Tengah</h2>
        <h3>Rp.500.000(make up + aksesoris)</p>
      </div>
    </div>
  
    <div class="product-content" onclick="showPopup('Baju Adat Kalimantan tengah', 'RP.410.000')">
      <img src="img/7. Kalimantan Tengah.jpg">
      <div class="product-layer">
        <h2>Baju adat Kalimantan Tengah</h2>
        <h3>Rp.410.000(make up + aksesoris)</p>
      </div>
    </div>
  
    <div class="product-content" onclick="showPopup('Baju Adat Papua Tengah', 'RP.480.000')">
      <img src="img/8. Papua Tengah.jpg">
      <div class="product-layer">
        <h2>Baju adat Papua Tengah</h2>
        <h3>Rp.480.000(make up + aksesoris)</p>
      </div>
    </div>
  
    <div class="product-content" onclick="showPopup('Baju Adat Sulawesi Tengah', 'RP.520.000')">
      <img src="img/9. Sulawesi Tengah.jpg">
      <div class="product-layer">
        <h2>Baju adat Sulawesi Tengah</h2>
        <h3>Rp.520.000(make up + aksesoris)</p>
      </div>
    </div>
  
    <div class="product-content" onclick="showPopup('Baju Adat DIY', 'RP.400.000')">
      <img src="img/10. DIY.jpg">
      <div class="product-layer">
        <h2>Baju adat DIY</h2>
        <h3>Rp.400.000(make up + aksesoris)</p>
      </div>
    </div>
  
    <div class="product-content" onclick="showPopup('Baju Adat Jakarta', 'RP.420.000')">
      <img src="img/11. Jakarta.jpg">
      <div class="product-layer">
        <h2>Baju adat Jakarta</h2>
        <h3>Rp.420.000(make up + aksesoris)</p>
      </div>
    </div>
  
    <div class="product-content" onclick="showPopup('Baju Adat Jawa Timur', 'RP.380.000')">
      <img src="img/12. Jawa Timur.jpg">
      <div class="product-layer">
        <h2>Baju adat Jawa Timur</h2>
        <h3>Rp.380.000(make up + aksesoris)</p>
      </div>
    </div>
  
    <div class="product-content" onclick="showPopup('Baju Adat Kalimantan Timur', 'RP.430.000')">
      <img src="img/13. Kalimantan East.jpg">
      <div class="product-layer">
        <h2>Baju adat Kalimantan Timur</h2>
        <h3>Rp.430.000(make up + aksesoris)</p>
      </div>
    </div>
  
    <div class="product-content" onclick="showPopup('Baju Adat NTT', 'RP.370.000')">
      <img src="img/14. Nusa Tenggara East.jpg">
      <div class="product-layer">
        <h2>Baju adat Nusa tengga Timur</h2>
        <h3>Rp.370.000(make up + aksesoris)</p>
      </div>
    </div>
  
    <div class="product-content" onclick="showPopup('Baju Adat Gorontalo', 'RP.350.000')">
      <img src="img/15. Gorontalo.jpg">
      <div class="product-layer">
        <h2>Baju adat Gorontalo</h2>
        <h3>Rp.350.000(make up + aksesoris)</p>
      </div>
    </div>
  
    <div class="product-content" onclick="showPopup('Baju Adat Jambi', 'RP.520.000')">
      <img src="img/16. Jambi.jpg">
      <div class="product-layer">
        <h2>Baju adat Jambi</h2>
        <h3>Rp.520.000(make up + aksesoris)</p>
      </div>
    </div>
  
    <div class="product-content" onclick="showPopup('Baju Adat Lampung', 'RP.340.000')">
      <img src="img/17. Lampung.jpg">
      <div class="product-layer">
        <h2>Baju adat Lampung</h2>
        <h3>Rp.340.000(make up + aksesoris)</p>
      </div>
    </div>
  
    <div class="product-content" onclick="showPopup('Baju Adat Maluku', 'RP.360.000')">
      <img src="img/18. Maluku.jpg">
      <div class="product-layer">
        <h2>Baju adat Maluku</h2>
        <h3>Rp.360.000(make up + aksesoris)</p>
      </div>
    </div>
  
    <div class="product-content" onclick="showPopup('Baju Adat Kalimantan Utara', 'RP.440.000')">
      <img src="img/19. Kalimantan Noeth.jpg">
      <div class="product-layer">
        <h2>Baju adat Kalimantan utara</h2>
        <h3>Rp.440.000(make up + aksesoris)</p>
      </div>
    </div>
  
    <div class="product-content" onclick="showPopup('Baju Adat Maluku Utara', 'RP.470.000')">
      <img src="img/20. Maluku North.jpg">
      <div class="product-layer">
        <h2>Baju Maluku utara</h2>
        <h3>Rp.470.000(make up + aksesoris)</p>
      </div>
    </div>
  
    <div class="product-content" onclick="showPopup('Baju Adat Sulawesi Utara', 'RP.500.000')">
      <img src="img/21. Sulawesi Noeth.jpg">
      <div class="product-layer">
        <h2>Baju adat Sulawesi Utara</h2>
        <h3>Rp.500.000(make up + aksesoris)</p>
      </div>
    </div>
  
    <div class="product-content" onclick="showPopup('Baju Adat Sumatra Utara', 'RP.520.000')">
      <img src="img/22. Sumatra North.jpg">
      <div class="product-layer">
        <h2>Baju adat Sumatra Utara</h2>
        <h3>Rp.520.000(make up + aksesoris)</p>
      </div>
    </div>
  
    <div class="product-content" onclick="showPopup('Baju Adat Papua Pengunungan', 'RP.470.000')">
      <img src="img/23. Papua Pegunungan.jpg">
      <div class="product-layer">
        <h2>Baju adat Papua Pegunungan</h2>
        <h3>Rp.470.000(make up + aksesoris)</p>
      </div>
    </div>
  
    <div class="product-content" onclick="showPopup('Baju Adat Papua', 'RP.390.000')">
      <img src="img/24. Papua.jpg">
      <div class="product-layer">
        <h2>Baju adat Papua</h2>
        <h3>Rp.390.000(make up + aksesoris)</p>
      </div>
    </div>
  
    <div class="product-content" onclick="showPopup('Baju Adat Kepulauan Riau', 'RP.410.000')">
      <img src="img/25. Kepulauan Riau.jpg">
      <div class="product-layer">
        <h2>Baju adat Kepulauan Riau</h2>
        <h3>Rp.410.000(make up + aksesoris)</p>
      </div>
    </div>
  
    <div class="product-content" onclick="showPopup('Baju Adat Riau', 'RP.510.000')">
      <img src="img/26. Riau.jpg">
      <div class="product-layer">
        <h2>Baju adat Riau</h2>
        <h3>Rp.510.000(make up + aksesoris)</p>
      </div>
    </div>
  
    <div class="product-content" onclick="showPopup('Baju Adat Kalimantan Selatan', 'RP.350.000')">
      <img src="img/27. South Kalimantan.jpg">
      <div class="product-layer">
        <h2>Baju adat Kalimantan Selatan</h2>
        <h3>Rp.350.000(make up + aksesoris)</p>
      </div>
    </div>
  
    <div class="product-content" onclick="showPopup('Baju Adat Papua Selatan', 'RP.420.000')">
      <img src="img/28. South Papua.jpg">
      <div class="product-layer">
        <h2>Baju adat Papua Selatan</h2>
        <h3>Rp.420.000(make up + aksesoris)</p>
      </div>
    </div>
  
    <div class="product-content" onclick="showPopup('Baju Adat Sulawesi Selatan', 'RP.400.000')">
      <img src="img/29. South Sulawesi.jpg">
      <div class="product-layer">
        <h2>Baju adat Sulawesi Selatan</h2>
        <h3>Rp.400.000(make up + aksesoris)</p>
      </div>
    </div>
  
    <div class="product-content" onclick="showPopup('Baju Adat Sumatra Selatan', 'RP.520.000')">
      <img src="img/30. South Sumatra.jpg">
      <div class="product-layer">
        <h2>Baju adat Sumatra Selatan</h2>
        <h3>Rp.520.000(make up + aksesoris)</p>
      </div>
    </div>
  
    <div class="product-content" onclick="showPopup('Baju Adat Sulawesi Tenggara', 'RP.360.000')">
      <img src="img/31. Southeast Sulawesi.jpg">
      <div class="product-layer">
        <h2>Baju adat Sulawesi Tenggara</h2>
        <h3>Rp.360.000(make up + aksesoris)</p>
      </div>
    </div>
  
    <div class="product-content" onclick="showPopup('Baju Adat Papua Tenggara', 'RP.390.000')">
      <img src="img/32. Southwest Papua.jpg">
      <div class="product-layer">
        <h2>Baju adat Papua Tenggara</h2>
        <h3>Rp.390.000(make up + aksesoris)</p>
      </div>
    </div>
  
    <div class="product-content" onclick="showPopup('Baju Adat Jawa Barat', 'RP.410.000')">
      <img src="img/33. Jawa Barat.jpg">
      <div class="product-layer">
        <h2>Baju adat Jawa Barat</h2>
        <h3>Rp.410.000(make up + aksesoris)</p>
      </div>
    </div>
  
    <div class="product-content" onclick="showPopup('Baju Adat Kaliamantan Barat', 'RP.450.000')">
      <img src="img/34. West Kalimantan.jpg">
      <div class="product-layer">
        <h2>Baju adat Kalimatan Barat</h2>
        <h3>Rp.450.000(make up + aksesoris)</p>
      </div>
    </div>
  
    <div class="product-content" onclick="showPopup('Baju Adat NTB', 'RP.470.000')">
      <img src="img/35. West Nusa Tenggara.jpg">
      <div class="product-layer">
        <h2>Baju adat Nusa Tenggara Barat</h2>
        <h3>Rp.470.000(make up + aksesoris)</p>
      </div>
    </div>
  
    <div class="product-content" onclick="showPopup('Baju Adat Papua Barat', 'RP.500.000')">
      <img src="img/36. West Papua.jpg">
      <div class="product-layer">
        <h2>Baju adat Papua Barat</h2>
        <h3>Rp.500.000(make up + aksesoris)</p>
      </div>
    </div>
  
    <div class="product-content" onclick="showPopup('Baju Adat Sulawesi Barat', 'RP.430.000')">
      <img src="img/37. West Sulawesi.jpg">
      <div class="product-layer">
        <h2>Baju adat Sulawesi Barat</h2>
        <h3>Rp.430.000(make up + aksesoris)</p>
      </div>
    </div>
  
    <div class="product-content" onclick="showPopup('Baju Adat Sumatra Barat', 'RP.380.000')">
      <img src="img/38. West Sumatra.jpg">
      <div class="product-layer">
        <h2>Baju adat Sumatra Barat</h2>
        <h3>Rp.380.000(make up + aksesoris)</p>
      </div>
     </div>
    </div>
  </section>


  
 <!-- Popup Form -->
<div id="popupOverlay"></div>
<div id="popupForm" class="popup-form">
  <div class="popup-content">
      <span class="close" onclick="closePopup()">&times;</span>
      <form id="orderForm" action="order.php" method="post">
          <h2 id="itemTitle" name="item"></h2>
          <input type="hidden" id="itemTitleHidden" name="itemTitle">
          <h3 id="itemPrice" name="price"></h3>
          <input type="hidden" id="itemPriceHidden" name="itemPrice">
          <label for="name">Nama:</label>
          <input type="text" id="name" name="name" required>
          <label for="phone">No HP:</label>
          <input type="text" id="phone" name="phone" required>
          <label for="address">Alamat:</label>
          <input type="text" id="address" name="address" required>
          <label for="duration">Berapa lama peminjaman (hari):</label>
          <input type="number" id="duration" name="duration" required>
          <label for="payment">Mau bayar pake apa:</label>
          <select id="payment" name="payment" required>
              <option value="TransferBRI">Transfer BRI</option>
              <option value="Dana">Dana</option>
              <option value="ShopeePay">ShopeePay</option>
          </select>
          <button type="submit">Submit</button>
      </form>
  </div>
</div>

<!-- tentang.php -->
<section id="about"> 
  <div class="judul-about"> 
    <h2>Tentang Kami</h2> 
  </div> 
  <div class="tentang"> 
    <div class="history"> 
      <h3>Sejarah</h3> 
      <p>Arti Kostum berdiri pada tahun 2000 dengan visi untuk melestarikan dan memperkenalkan kekayaan budaya Indonesia melalui baju adat tradisional. Ide untuk mendirikan toko ini bermula dari kecintaan pendiri kami, terhadap keanekaragaman budaya dan warisan tradisional Indonesia. Sebagai seorang kolektor baju adat dari berbagai daerah, beliau melihat adanya kebutuhan untuk mempermudah akses masyarakat dalam mengenal dan menggunakan pakaian tradisional, baik untuk acara formal, festival budaya, maupun upacara adat.</p> 
      <p>Pada awalnya, toko kami berlokasi di sebuah ruko kecil di pusat kota Jakarta. Dengan koleksi yang terbatas namun beragam, kami mulai menarik perhatian masyarakat yang ingin merasakan keindahan busana adat tanpa harus membeli secara permanen. Seiring berjalannya waktu, permintaan semakin meningkat, dan kami mulai memperluas koleksi kami mencakup berbagai jenis baju adat dari Sabang sampai Merauke.</p> 
      <p>Dalam dua dekade terakhir, Arti Kostum telah berkembang pesat. Kami kini memiliki beberapa cabang di berbagai kota besar di Indonesia dan bermitra dengan desainer lokal serta pengrajin tradisional untuk memastikan setiap baju yang kami sewakan tetap otentik dan berkualitas tinggi. Selain itu, kami juga aktif berpartisipasi dalam berbagai acara budaya dan pameran untuk lebih mengenalkan keindahan dan kekayaan baju adat Indonesia kepada generasi muda.</p> 
      <p>Komitmen kami adalah untuk terus menjaga dan melestarikan warisan budaya bangsa melalui penyewaan baju adat, serta memberikan layanan terbaik bagi pelanggan kami. Kami percaya bahwa dengan mengenakan baju adat, kita tidak hanya menunjukkan rasa cinta terhadap budaya, tetapi juga menjaga identitas dan kebanggaan sebagai bangsa Indonesia.</p> 
    </div> 
    <div class="sponsors"> 
      <h3>Sponsor</h3> 
      <ul class="list-unstyled sponsors">
        <li><a href="#"><img src="img/danaaa.jpg" alt="Facebook"></a></li>
        <li><a href="#"><img src="img/shopeepay.jpg" alt="Twitter"></a></li>
        <li><a href="#"><img src="img/bri.jpg" alt="Instagram"></a></li>
      </ul>
    </div> 
    <div class="partners"> 
      <h3>Partner Kerja</h3> 
      <ul class="list-unstyled partners">
        <li><a href="#"><img src="img/tiktok.jpg" alt="Facebook"></a></li>
        <li><a href="#"><img src="img/shopee.jpg" alt="Twitter"></a></li>
        <li><a href="#"><img src="img/tokopedia.jpg" alt="Twitter"></a></li>
      </ul>
    </div> 
  </div> 
</section>

<?php
include 'footer.php'
?>

<script>

     function openPopup() {
    document.getElementById("popupForm").style.display = "block";
    document.getElementById("popupOverlay").style.display = "block";
}

function closePopup() {
    document.getElementById("popupForm").style.display = "none";
    document.getElementById("popupOverlay").style.display = "none";
}

function showPopup(title, price) {
    document.getElementById("itemTitle").textContent = title;
    document.getElementById("itemPrice").textContent = price;
    document.getElementById("itemTitleHidden").value = title;
    document.getElementById("itemPriceHidden").value = price;
    openPopup();
}

  </script>

</body>
</html>

