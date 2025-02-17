<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>CINEMATIX</title>
  <!-- Google Font Playfair Display -->
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&display=swap" rel="stylesheet" />
  <style>
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
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.5);
    }
    .logo img {
      width: 110px;
      height: auto;
    }
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
    /* Hero Section */
    .hero {
      display: flex;
      flex-wrap: wrap;
      gap: 20px;
      padding: 40px 50px;
      justify-content: center;
    }
    /* Partner Container (opsional) */
    .partner-container {
      flex: 1;
      min-width: 250px;
      text-align: center;
    }
    .partner-container h1 {
      font-size: 24px;
      margin-bottom: 20px;
    }
    .partner-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 10px;
    }
    .partner-grid img {
      width: 80px;
      height: auto;
      object-fit: contain;
      transition: transform 0.3s;
    }
    .partner-grid img:hover {
      transform: scale(1.05);
    }
    /* Trailer Container */
    .trailer-container {
      flex: 2;
      min-width: 320px;
      max-width: 500px;
      text-align: center;
    }
    .trailer-container h1 {
      font-size: 28px;
      margin-bottom: 20px;
    }
    .trailer-container video {
      width: 100%;
      max-width: 480px;
      height: auto;
      border-radius: 20px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.7);
      transition: transform 0.5s, box-shadow 0.3s;
    }
    .trailer-container video:hover {
      transform: scale(1.05);
      box-shadow: 0 6px 15px rgba(0,0,0,0.9);
    }
    .caption {
      margin-top: 10px;
      font-size: 16px;
      font-weight: normal;
    }
    .trailer-buttons {
      display: flex;
      margin-top: 20px;
      justify-content: center;
    }
    .trailer-buttons button {
      background: rgba(0,0,0,0.7);
      color: white;
      border: none;
      padding: 10px 15px;
      cursor: pointer;
      font-size: 16px;
      transition: background 0.3s;
      border-radius: 10px;
      margin: 0 10px;
    }
    .trailer-buttons button:hover {
      background: rgba(255,140,0,0.7);
    }
    /* Poster Container (Daftar Film) */
    .poster-container {
      flex: 1;
      min-width: 300px;
      max-width: 400px;
      text-align: center;
    }
    .poster-container h1 {
      font-size: 28px;
      margin-bottom: 20px;
    }
    .poster-image-container {
      position: relative;
    }
    .poster-image-container img {
      width: 300px;
      height: auto;
      border-radius: 20px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.7);
      transition: transform 0.5s, box-shadow 0.3s;
    }
    .poster-image-container img:hover {
      transform: scale(1.05);
      box-shadow: 0 6px 15px rgba(0,0,0,0.9);
    }
    .slider-buttons {
      display: flex;
      margin-top: 20px;
      justify-content: center;
    }
    .slider-buttons button {
      background: rgba(0,0,0,0.7);
      color: white;
      border: none;
      padding: 10px 15px;
      cursor: pointer;
      font-size: 16px;
      transition: background 0.3s;
      border-radius: 10px;
      margin: 0 10px;
    }
    .slider-buttons button:hover {
      background: rgba(255,140,0,0.7);
    }
    footer {
      text-align: center;
      padding: 15px;
      background: rgb(61, 71, 74);
      color: white;
    }
    .footer-divider {
      border: none;
      border-top: 1px solid white;
      margin: 20px auto;
      width: 90%;
    }
    .footer-content {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin: 20px auto;
      width: 90%;
    }
    .footer-left,
    .footer-right {
      flex: 1;
      text-align: center;
    }
    .footer-left img,
    .footer-right img {
      width: 200px;
      height: auto;
    }
    .footer-text {
      flex: 2;
      text-align: center;
      font-size: 14px;
      line-height: 1.6;
    }
  </style>
</head>
<body>
  <header>
    <!-- Logo -->
    <div class="logo">
      <img src="galeri/logo 2.png" alt="cinematix logo" />
    </div>
    <nav>
      <a href="dashboard.php">Home</a>
      <a href="cinematixnow.php">Cinematix Now</a>
      <a href="#">Events</a>
      <a href="#">Careers</a>
      <div class="search-bar">
        <!-- Input & button untuk search dengan ID -->
        <input id="main-search-input" type="text" placeholder="Search movies..." />
        <button id="main-search-btn">Search</button>
      </div>
    </nav>
    <!-- Tombol Download Cinematix mengarahkan ke APK TIX ID -->
    <a href="https://play.google.com/store/apps/details?id=id.tix.android" class="download-btn">Download Cinematix</a>
  </header>

  <section class="hero">
    <!-- Partner Container (opsional) -->
    <div class="partner-container">
      <h1>Our Partners</h1>
      <div class="partner-grid">
        <img src="galeri/cgv.png" alt="Partner 1" />
        <img src="galeri/gopay.png" alt="Partner 2" />
        <img src="galeri/dana.png" alt="Partner 3" />
        <img src="galeri/ovo.png" alt="Partner 4" />
        <img src="galeri/viu.png" alt="Partner 5" />
        <img src="galeri/vidio.png" alt="Partner 6" />
        <img src="galeri/bioskop online.png" alt="Partner 7" />
        <img src="galeri/netflix.png" alt="Partner 8" />
        <img src="galeri/vision.png" alt="Partner 9" />
      </div>
    </div>
    <!-- Trailer Container -->
    <div class="trailer-container">
      <h1>Video &amp; Trailers</h1>
      <video id="trailer-video" controls>
        <source src="trailer1.mp4" type="video/mp4" />
        Your browser does not support the video tag.
      </video>
      <p id="trailer-caption" class="caption"></p>
      <div class="trailer-buttons">
        <button id="trailer-prev-btn">&#8592; Prev</button>
        <button id="trailer-next-btn">Next &#8594;</button>
      </div>
    </div>
    <!-- Poster Container (Daftar Film) -->
    <div class="poster-container">
      <h1>Daftar Film</h1>
      <div class="poster-image-container">
        <img id="poster-image" src="film1.jpg" alt="Film Advertisement" />
        <p id="poster-caption" class="caption"></p>
        <div class="slider-buttons">
          <button id="poster-prev-btn">&#8592; Prev</button>
          <button id="poster-next-btn">Next &#8594;</button>
        </div>
      </div>
    </div>
  </section>

  <script>
    // Data slider poster (gambar & judul film)
    const posterImages = [
      "galeri/filmm1.jpg",
      "galeri/filmm2.jpg",
      "galeri/filmm3.jpg",
      "galeri/film4.jpg",
      "galeri/film5.jpg",
      "galeri/film6.jpg",
      "galeri/film7.jpg",
      "galeri/film8.jpg",
      "galerifilm9.jpg",
      "galeri/film10.jpg"
    ];
    const posterCaptions = [
      "Perayaan Mati Rasa",
      "Modal Nekat",
      "Captain Amerika",
      "Agak Laen",
      "Sekawan Limo",
      "Train To Busan 3",
      "Squid Game 2",
      "Wanita Ahli Neraka",
      "Pabrik Gula",
      "Petaka Gunung Gede"
    ];
    let posterIndex = 0;
    const posterImageEl = document.getElementById("poster-image");
    const posterCaptionEl = document.getElementById("poster-caption");
    const posterPrevBtn = document.getElementById("poster-prev-btn");
    const posterNextBtn = document.getElementById("poster-next-btn");

    function updatePoster() {
      posterImageEl.src = posterImages[posterIndex];
      posterCaptionEl.textContent = posterCaptions[posterIndex];
    }

    posterPrevBtn.addEventListener("click", () => {
      posterIndex = (posterIndex - 1 + posterImages.length) % posterImages.length;
      updatePoster();
    });

    posterNextBtn.addEventListener("click", () => {
      posterIndex = (posterIndex + 1) % posterImages.length;
      updatePoster();
    });

    updatePoster();

    // Skrip slider trailer (sederhana)
    const trailerVideos = [
      "galeri/trailer1.mp4",
      "galeri/trailer2.mp4",
      "galeri/trailer3.mp4",
      "galeri/trailer4.mp4",
      "galeri/trailer5.mp4",
      "galeri/trailer6.mp4",
      "galeri/trailer7.mp4",
      "galeri/trailer8.mp4",
      "galeri/trailer9.mp4",
      "galeri/trailer10.mp4"
    ];
    const trailerCaptions = [
      "Perayaan Mati Rasa",
      "Modal Nekat",
      "Captain Amerika",
      "Agak Laen",
      "Sekawan Limo",
      "Train To Busan 3",
      "Squid Game 2",
      "Wanita Ahli Neraka",
      "Pabrik Gula",
      "Petaka Gunung Gede"
    ];
    let trailerIndex = 0;
    const trailerVideoEl = document.getElementById("trailer-video");
    const trailerCaptionEl = document.getElementById("trailer-caption");
    const trailerPrevBtn = document.getElementById("trailer-prev-btn");
    const trailerNextBtn = document.getElementById("trailer-next-btn");

    function updateTrailer() {
      trailerVideoEl.src = trailerVideos[trailerIndex];
      trailerCaptionEl.textContent = trailerCaptions[trailerIndex];
      trailerVideoEl.load();
    }

    trailerPrevBtn.addEventListener("click", () => {
      trailerIndex = (trailerIndex - 1 + trailerVideos.length) % trailerVideos.length;
      updateTrailer();
    });

    trailerNextBtn.addEventListener("click", () => {
      trailerIndex = (trailerIndex + 1) % trailerVideos.length;
      updateTrailer();
    });

    updateTrailer();

    // Fungsi search di dashboard yang akan mengarahkan ke halaman gettiket.php jika film ditemukan
    document.getElementById("main-search-btn").addEventListener("click", function () {
      const query = document.getElementById("main-search-input").value.trim().toLowerCase();
      if (query) {
        // Gunakan perbandingan equality (ignoring case) agar harus sama persis
        const foundIndex = posterCaptions.findIndex(caption =>
          caption.toLowerCase() === query
        );
        if (foundIndex !== -1) {
          const filmFound = posterCaptions[foundIndex];
          window.location.href = "gettiket.php?movie=" + encodeURIComponent(filmFound);
        } else {
          alert("Film yang dicari tidak ditemukan.");
        }
      } else {
        alert("Please enter a movie name.");
      }
    });
  </script>

  <footer>
    <hr class="footer-divider" />
    <div class="footer-content">
      <div class="footer-left">
        <img src="galeri/logo.png" alt="Logo Left" />
      </div>
      <div class="footer-text">
        <p>Website ini dibuat oleh: Musyaffa Syauqi Ramdhani &amp; Muhammad Yazdan</p>
        <p>Email: cinematixx@gmail.com</p>
        <p>Alamat: Jl. Bhakti Suci No.100, Cimpaeun, Kec. Tapos, Kota Depok, Jawa Barat 16459</p>
        <h3>SMKN 1 DEPOK</h3>
      </div>
      <div class="footer-right">
        <img src="galeri/logo.png" alt="Logo Right" />
      </div>
    </div>
    <p>&copy; 2025 Cinematix. All rights reserved.</p>
  </footer>
</body>
</html>
