<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Navbar Cinematix with Gallery</title>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&display=swap" rel="stylesheet">
  <!-- Jika Anda sudah memiliki file navbar.css, pastikan sudah tersambung -->
  <link rel="stylesheet" href="navbar.css">
  <style>
    /* === Global & Navbar Styles === */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Playfair Display', serif;
    }
    
    body {
      background: linear-gradient(to right, rgb(25, 143, 176), rgb(237, 71, 11));
      color: white;
    }
    
    header {
      background: linear-gradient(to right, rgb(25, 143, 176), rgb(237, 71, 11));
      padding: 10px 20px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      box-shadow: 0 4px 10px rgba(0,0,0,0.5);
    }
    
    /* Logo */
    .logo img {
      width: 110px;
      height: auto;
    }
    
    /* Navbar */
    nav {
      display: flex;
      align-items: center;
    }
    
    nav a {
      color: white;
      text-decoration: none;
      margin: 0 20px;
      font-weight: bold;
      font-size: 18px;
      transition: color 0.3s;
    }
    
    nav a:hover {
      color: #222;
    }
    
    /* Search Bar */
    .search-bar {
      display: flex;
      align-items: center;
      margin-left: 20px;
    }
    
    .search-bar input {
      padding: 10px;
      border-radius: 5px;
      border: none;
      outline: none;
      font-size: 16px;
    }
    
    .search-bar button {
      padding: 10px 15px;
      margin-left: 5px;
      border: none;
      background: #222;
      color: white;
      border-radius: 5px;
      cursor: pointer;
      transition: background 0.3s;
    }
    
    .search-bar button:hover {
      background: white;
      color: #222;
    }
    
    /* Download Button */
    .download-btn {
      background-color: #222;
      color: white;
      padding: 12px 25px;
      border-radius: 5px;
      text-decoration: none;
      font-weight: bold;
      font-size: 18px;
      transition: background 0.3s;
    }
    
    .download-btn:hover {
      background: white;
      color: #222;
    }
    
    /* === Gallery Styles === */
    .gallery {
      padding: 20px;
      /* Jika ingin membatasi tinggi galeri dan membuat area scroll vertical */
      max-height: 80vh;
      overflow-y: auto;
    }
    
    .gallery-container {
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      gap: 20px;
    }
    
    .gallery-item {
      background: rgba(255, 255, 255, 0.1);
      padding: 10px;
      border-radius: 10px;
      text-align: center;
    }
    
    .gallery-item img {
      width: 100%;
      height: auto;
      max-height: 400px;  /* Menjadikan foto tampil besar */
      object-fit: cover;
      border-radius: 10px;
      transition: transform 0.3s;
      cursor: pointer;
    }
    
    .gallery-item img:hover {
      transform: scale(1.05);
    }
    
    .photo-info {
      margin-top: 10px;
    }
    
    .photo-info .brand {
      font-size: 16px;
      font-weight: bold;
    }
    
    .photo-info h3 {
      font-size: 20px;
      margin: 5px 0;
    }
    
    .photo-info p {
      font-size: 14px;
      line-height: 1.5;
    }
  </style>
</head>
<body>
  <!-- Navbar -->
  <header>
    <!-- Logo -->
    <div class="logo">
      <img src="galeri/logo 2.png" alt="Cinematix Logo">
    </div>
    <nav>
      <a href="dashboard.php">Home</a>
      <a href="cinematixnow.php">Cinematix Now</a>
      <a href="#">Events</a>
      <a href="#">Careers</a>
      <div class="search-bar">
        <input type="text" placeholder="Search movies...">
        <button>Search</button>
      </div>
    </nav>
    <a href="#" class="download-btn">Download Cinematix</a>
  </header>
  
  <!-- Gallery Section -->
  <section class="gallery">
    <div class="gallery-container">
      <!-- Photo 1 -->
      <div class="gallery-item">
        <img src="galeri/foto1.jpg" alt="Photo 1">
        <div class="photo-info">
          <p class="brand">CinemaTixx</p>
          <h3>Perayaan Mati Rasa</h3>
          <p>Di masa depan yang tidak terlalu jauh, masyarakat telah kehilangan kemampuan untuk merasakan emosi. Sebuah perayaan tahunan yang disebut "Perayaan Mati Rasa" dijadikan sebagai ritual wajib, di mana setiap orang berkumpul untuk merayakan ketiadaan perasaan—sebuah simbol dari kepatuhan dan kontrol negara. Namun, di balik ketiadaan emosi itu tersimpan rahasia gelap yang perlahan-lahan mulai terungkap ketika seorang pemuda mulai merasakan kembali denyut kehidupan yang telah lama hilang.</p>
        </div>
      </div>
      <!-- Photo 2 -->
      <div class="gallery-item">
        <img src="galeri/foto2.jpeg" alt="Photo 2">
        <div class="photo-info">
          <p class="brand">CinemaTixx</p>
          <h3>Modal Nekat</h3>
          <p>"Modal Nekat" mengisahkan perjalanan seorang pemuda bernama Raka yang terjebak dalam lingkaran kemiskinan dan ketidakadilan sistemik. Di tengah tekanan ekonomi dan kehidupan yang penuh keterbatasan, Raka memutuskan untuk mengambil risiko besar—sebuah lompatan keyakinan yang disebut “modal nekat”—dengan harapan mengubah nasibnya dan mengangkat martabat dirinya serta orang-orang di sekitarnya. Dalam perjalanannya, ia harus menghadapi berbagai rintangan, konflik moral, dan pertarungan sengit dengan kekuatan yang berusaha mempertahankan status quo.</p>
        </div>
      </div>
      <!-- Photo 3 -->
      <div class="gallery-item">
        <img src="galeri/foto3.jpg" alt="Photo 3">
        <div class="photo-info">
          <p class="brand">CinemaTixx</p>
          <h3>Captain America Brave New World</h3>
          <p>Di tengah era pasca-konflik global, dunia telah berevolusi ke dalam tatanan baru yang tampak stabil dan makmur. Namun, di balik kemewahan dan keteraturan itu tersembunyi sistem pengawasan total dan pengendalian yang mengikis kebebasan individu. Captain America, simbol perjuangan dan nilai-nilai kemanusiaan, dihadapkan pada kenyataan pahit: apakah stabilitas sejati layak jika harus mengorbankan jiwa dan kebebasan manusia? Dalam film ini, Captain America harus memimpin perlawanan melawan kekuatan tersembunyi yang telah mengubah dunia menjadi “Brave New World”—sebuah dunia yang pada akhirnya justru mengasingkan rasa kemanusiaan.</p>
        </div>
      </div>
      <!-- Photo 4 -->
      <div class="gallery-item">
        <img src="galeri/foto4.webp" alt="Photo 4">
        <div class="photo-info">
          <p class="brand">CinemaTixx</p>
          <h3>Agak Laen</h3>
          <p>"Agak Laen" mengisahkan perjalanan seorang pemuda (atau pemudi) yang merasa berbeda di tengah masyarakat yang menuntut keseragaman. Di dunia yang cepat berubah dan penuh tekanan untuk menyesuaikan diri, tokoh utama harus menemukan dan menerima keunikan dirinya. Dalam proses itu, ia belajar bahwa menjadi "agak laen" bukanlah kelemahan, melainkan sumber kekuatan dan kreativitas yang mampu menginspirasi banyak orang.</p>
        </div>
      </div>
      <!-- Photo 5 -->
      <div class="gallery-item">
        <img src="galeri/foto5.webp" alt="Photo 5">
        <div class="photo-info">
          <p class="brand">CinemaTixx</p>
          <h3>Sekawan Limo</h3>
          <p>"Sekawan Limo" menceritakan petualangan lima sahabat yang memiliki keunikan dan keahlian berbeda. Di tengah kehidupan perkotaan yang sarat dengan intrik, korupsi, dan konflik sosial, mereka bersatu untuk mengungkap konspirasi besar yang mengancam kesejahteraan masyarakat. Dengan keberanian, kecerdasan, dan kekompakan persahabatan, kelima tokoh ini berjuang melawan kekuatan jahat yang mencoba menindas kebenaran dan keadilan.</p>
        </div>
      </div>
      <!-- Photo 6 -->
      <div class="gallery-item">
        <img src="galeri/foto6.jpg" alt="Photo 6">
        <div class="photo-info">
          <p class="brand">CinemaTixx</p>
          <h3>Train To Busan 3</h3>
          <p>Lima tahun setelah peristiwa yang mengguncang di "Train to Busan" dan konflik di Semenanjung Korea, dunia telah mencoba bangkit dan membangun kembali kehidupan dalam “zona aman” di Busan. Namun, ketenangan itu mulai terusik ketika sebuah varian baru virus—lebih lambat namun lebih licik—mulai menyebar di antara populasi yang hidup dalam kendali ketat pemerintah. Dalam upaya untuk mengangkut para penyintas dan ilmuwan ke fasilitas penelitian rahasia guna menemukan solusi, sebuah kereta berkecepatan tinggi pun diubah menjadi “zona bergerak” yang diharapkan dapat mengatasi ancaman tersebut. Namun, di tengah perjalanan, konflik internal, pengkhianatan, dan serangan mendadak dari para terinfeksi membuka babak baru perjuangan untuk bertahan hidup.</p>
        </div>
      </div>
      <!-- Photo 7 -->
      <div class="gallery-item">
        <img src="galeri/foto7.webp" alt="Photo 7">
        <div class="photo-info">
          <p class="brand">CinemaTixx</p>
          <h3>Squid Game 2</h3>
          <p>Setelah peristiwa mengerikan dalam Squid Game pertama, dunia mulai berguncang dengan pengungkapan bahwa permainan mematikan itu hanyalah sebagian kecil dari operasi rahasia yang jauh lebih besar. Para penyintas yang selamat kini harus menghadapi bayang-bayang masa lalu mereka sekaligus mencoba menghentikan siklus permainan kejam yang terus berkembang. Di balik layar, kekuatan korporat dan elit global menyembunyikan rahasia gelap yang menghidupkan kembali tradisi brutal tersebut dengan variasi aturan dan tantangan yang lebih sadis. "Squid Game 2" mengisahkan perjuangan seorang mantan peserta yang terpaksa kembali ke arena, kali ini bukan hanya untuk bertahan hidup, tetapi juga untuk mengungkap dan menggulingkan sistem yang telah mengubah kemiskinan dan keputusasaan menjadi komoditas hiburan.</p>
        </div>
      </div>
      <!-- Photo 8 -->
      <div class="gallery-item">
        <img src="galeri/foto8.webp" alt="Photo 8">
        <div class="photo-info">
          <p class="brand">CinemaTixx</p>
          <h3>Wanita Ahli Neraka</h3>
          <p>"Wanita Ahli Neraka" mengisahkan tentang Ayu, seorang wanita muda yang memiliki kemampuan luar biasa untuk melihat dan berkomunikasi dengan dunia gaib. Julukan "Ahli Neraka" muncul karena kemampuannya yang unik dalam menghadapi dan mengatasi kekuatan gelap. Ketika kekuatan supranatural yang selama ini tersegel mulai bangkit dan mengancam keseimbangan antara dunia manusia dan dunia neraka, Ayu harus menyelami masa lalunya yang kelam dan warisan keluarganya untuk melawan kekuatan jahat yang berusaha menghancurkan kehidupan di bumi.</p>
        </div>
      </div>
      <!-- Photo 9 -->
      <div class="gallery-item">
        <img src="galeri/foto9.jpg" alt="Photo 9">
        <div class="photo-info">
          <p class="brand">CinemaTixx</p>
          <h3>Pabrik Gula</h3>
          <p>"Petaka Gunung Gede" adalah film bencana yang menggambarkan kehancuran dan kebangkitan yang terjadi akibat letusan dahsyat Gunung Gede. Di balik keindahan alam yang menakjubkan, tersembunyi kekuatan alam yang mampu mengubah segalanya dalam sekejap. Saat tanda-tanda letusan mulai muncul, sekelompok ilmuwan, warga setempat, dan pejabat harus berjuang untuk menyelamatkan nyawa dan menghadapi akibat dari kelalaian manusia terhadap peringatan alam.</p>
        </div>
      </div>
      <!-- Photo 10 -->
      <div class="gallery-item">
        <img src="galeri/foto10.jpeg" alt="Photo 10">
        <div class="photo-info">
          <p class="brand">CinemaTixx</p>
          <h3>Petaka Gunung Gede</h3>
          <p>"Pabrik Gula" adalah sebuah drama sosial yang mengisahkan kehidupan dan pergolakan di sebuah pabrik gula tua yang menjadi nadi ekonomi sebuah kota kecil. Di balik aroma manis gula, tersimpan pahitnya kisah perjuangan para pekerja melawan praktik korupsi dan eksploitasi. Film ini menggambarkan konflik antar generasi, perlawanan kolektif, dan harapan untuk perubahan yang lebih adil serta kehidupan yang bermartabat bagi semua.</p>
        </div>
      </div>
    </div>
  </section>
  
</body>
</html>
