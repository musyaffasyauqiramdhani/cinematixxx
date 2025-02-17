<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Navbar Cinematix</title>
  <!-- Google Font (optional) -->
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
  <style>
    /* --- Styling Navbar & Grid Film --- */
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
    /* Menu pencarian (search movies) telah dihilangkan */
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
    /* Grid Film */
    .movies-grid {
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      gap: 20px;
      padding: 20px;
    }
    .movie-card {
      position: relative;
      background-size: cover;
      background-position: center;
      height: 300px;
      border-radius: 10px;
      overflow: hidden;
      display: flex;
      align-items: center;
      justify-content: center;
      transition: filter 0.3s;
    }
    /* Efek untuk kartu film yang tidak sesuai pencarian */
    .movie-card.dimmed {
      filter: brightness(0.5);
    }
    /* Overlay konten film */
    .movie-content {
      display: flex;
      background: rgba(0, 0, 0, 0.6);
      padding: 10px;
      border-radius: 10px;
      width: 90%;
    }
    .poster-container {
      flex: 0 0 auto;
      position: relative;
    }
    .poster-container img {
      width: 100px;
      height: auto;
      border-radius: 5px;
    }
    .poster-container .rating {
      position: absolute;
      bottom: -20px;
      left: 0;
      width: 100%;
      text-align: center;
      background: rgba(0, 0, 0, 0.8);
      padding: 5px;
      border-radius: 0 0 5px 5px;
      font-size: 14px;
    }
    .movie-details {
      margin-left: 15px;
      text-align: left;
      font-size: 14px;
    }
    .movie-details h3 {
      margin-bottom: 5px;
      font-size: 18px;
    }
    .movie-details p {
      margin: 3px 0;
    }
    .buy-btn {
      display: inline-block;
      background: #222;
      color: white;
      padding: 8px 15px;
      text-decoration: none;
      margin-top: 10px;
      border-radius: 5px;
      font-size: 14px;
      transition: background 0.3s;
      cursor: pointer;
    }
    .buy-btn:hover {
      background: #444;
    }
    /* Styling untuk tombol yang dinonaktifkan */
    .buy-btn.disabled {
      pointer-events: none;
      opacity: 0.5;
      cursor: default;
    }
  </style>
</head>
<body>
  <!-- Navbar -->
  <header>
    <div class="logo">
      <img src="galeri/logo 2.png" alt="Cinematix Logo">
    </div>
    <nav>
      <a href="dashboard.php">Home</a>
      <a href="cinematixnow.php">Cinematix Now</a>
      <a href="#">Events</a>
      <a href="#">Careers</a>
      <!-- Menu search telah dihilangkan -->
    </nav>
    <a href="#" class="download-btn">Download Cinematix</a>
  </header>

  <!-- Grid Film -->
  <main>
    <div class="movies-grid">
      <!-- Movie Card 1 -->
      <div class="movie-card" style="background-image: url('galeri/foto1.jpg');">
        <div class="movie-content">
          <div class="poster-container">
            <img src="galeri/filmm1.jpg" alt="Poster Film 1">
            <div class="rating">Rating: 9.5</div>
          </div>
          <div class="movie-details">
            <h3>Perayaan Mati Rasa</h3>
            <p>Genre: Drama</p>
            <p>Durasi: 125 min</p>
            <p>Sutradara: Umay Shahab</p>
            <p>Rating Usia: 13+</p>
            <a href="pemesanan.php" class="buy-btn">Buy</a>
          </div>
        </div>
      </div>
      <!-- Movie Card 2 -->
      <div class="movie-card" style="background-image: url('galeri/foto2.jpeg');">
        <div class="movie-content">
          <div class="poster-container">
            <img src="galeri/filmm2.jpg" alt="Poster Film 2">
            <div class="rating">Rating: 8.8</div>
          </div>
          <div class="movie-details">
            <h3>Modal Nekat</h3>
            <p>Genre: Drama Comedy</p>
            <p>Durasi: 154 min</p>
            <p>Sutradara: Imam Darto</p>
            <p>Rating Usia: 13+</p>
            <a href="#" class="buy-btn">Buy</a>
          </div>
        </div>
      </div>
      <!-- Movie Card 3 -->
      <div class="movie-card" style="background-image: url('galeri/foto3.jpg');">
        <div class="movie-content">
          <div class="poster-container">
            <img src="galeri/filmm3.jpg" alt="Poster Film 3">
            <div class="rating">Rating: 9.0</div>
          </div>
          <div class="movie-details">
            <h3>Captain America Brave New World</h3>
            <p>Genre: Pahlawan</p>
            <p>Durasi: 118 min</p>
            <p>Sutradara: Julius Onah</p>
            <p>Rating Usia: 13+</p>
            <a href="#" class="buy-btn">Buy</a>
          </div>
        </div>
      </div>
      <!-- Movie Card 4 -->
      <div class="movie-card" style="background-image: url('galeri/foto4.webp');">
        <div class="movie-content">
          <div class="poster-container">
            <img src="galeri/film4.jpg" alt="Poster Film 4">
            <div class="rating">Rating: 9.2</div>
          </div>
          <div class="movie-details">
            <h3>Agak Laen</h3>
            <p>Genre: Horor Comedy</p>
            <p>Durasi: 119 min</p>
            <p>Sutradara: Muhadkly Acho</p>
            <p>Rating Usia: 13+</p>
            <a href="#" class="buy-btn">Buy</a>
          </div>
        </div>
      </div>
      <!-- Movie Card 5 -->
      <div class="movie-card" style="background-image: url('galeri/foto5.webp');">
        <div class="movie-content">
          <div class="poster-container">
            <img src="galeri/film5.jpg" alt="Poster Film 5">
            <div class="rating">Rating: 9.0</div>
          </div>
          <div class="movie-details">
            <h3>Sekawan Limo</h3>
            <p>Genre: Horor Comedy</p>
            <p>Durasi: 112 min</p>
            <p>Sutradara: Bayu Skak</p>
            <p>Rating Usia: 13+</p>
            <a href="#" class="buy-btn">Buy</a>
          </div>
        </div>
      </div>
      <!-- Movie Card 6 -->
      <div class="movie-card" style="background-image: url('galeri/foto6.jpg');">
        <div class="movie-content">
          <div class="poster-container">
            <img src="fgaleri/ilm6.jpg" alt="Poster Film 6">
            <div class="rating">Rating: 9.3</div>
          </div>
          <div class="movie-details">
            <h3>Train To Busan 3</h3>
            <p>Genre: Horor Zombie</p>
            <p>Durasi: 135 min</p>
            <p>Sutradara: Yeon Sang-ho</p>
            <p>Rating Usia: 16+</p>
            <a href="#" class="buy-btn">Buy</a>
          </div>
        </div>
      </div>
      <!-- Movie Card 7 -->
      <div class="movie-card" style="background-image: url('galeri/foto7.webp');">
        <div class="movie-content">
          <div class="poster-container">
            <img src="galeri/film7.jpg" alt="Poster Film 7">
            <div class="rating">Rating: 9.7</div>
          </div>
          <div class="movie-details">
            <h3>Squid Game 2</h3>
            <p>Genre: Drama</p>
            <p>Durasi: 125 min</p>
            <p>Sutradara: Hwang Dong-hyuk</p>
            <p>Rating Usia: 15+</p>
            <a href="#" class="buy-btn">Buy</a>
          </div>
        </div>
      </div>
      <!-- Movie Card 8 -->
      <div class="movie-card" style="background-image: url('galeri/foto8.webp');">
        <div class="movie-content">
          <div class="poster-container">
            <img src="galeri/film8.jpg" alt="Poster Film 8">
            <div class="rating">Rating: 8.9</div>
          </div>
          <div class="movie-details">
            <h3>Wanita Ahli Neraka</h3>
            <p>Genre: Horor Psikologin</p>
            <p>Durasi: 95 min</p>
            <p>Sutradara: Farishad Latjuba</p>
            <p>Rating Usia: 17+</p>
            <a href="#" class="buy-btn">Buy</a>
          </div>
        </div>
      </div>
      <!-- Movie Card 9 -->
      <div class="movie-card" style="background-image: url('galeri/foto9.jpg');">
        <div class="movie-content">
          <div class="poster-container">
            <img src="galeri/film9.jpg" alt="Poster Film 9">
            <div class="rating">Rating: 8.3</div>
          </div>
          <div class="movie-details">
            <h3>Pabrik Gula</h3>
            <p>Genre: Horor</p>
            <p>Durasi: 121 min</p>
            <p>Sutradara: Awi Suryadi</p>
            <p>Rating Usia: 18+</p>
            <a href="pemesanan.php" class="buy-btn">Buy</a>
          </div>
        </div>
      </div>
      <!-- Movie Card 10 -->
      <div class="movie-card" style="background-image: url('galeri/foto10.jpeg');">
        <div class="movie-content">
          <div class="poster-container">
            <img src="galeri/film10.jpg" alt="Poster Film 10">
            <div class="rating">Rating: 9.1</div>
          </div>
          <div class="movie-details">
            <h3>Petaka Gunung Gede</h3>
            <p>Genre: Horor</p>
            <p>Durasi: 101 min</p>
            <p>Sutradara: Azhar Kinoi Lubis</p>
            <p>Rating Usia: 16+</p>
            <a href="#" class="buy-btn">Buy</a>
          </div>
        </div>
      </div>
    </div>
  </main>

  <!-- JavaScript: Alihkan ke halaman transaksi dengan mengoper judul film via query string dan mengatur tampilan kecerahan kartu -->
  <script>
  // Event listener untuk semua tombol Buy
  document.querySelectorAll('.buy-btn').forEach(btn => {
    btn.addEventListener('click', function(e) {
      e.preventDefault();
      const movieTitle = this.closest('.movie-details').querySelector('h3').innerText;
      // Alihkan ke halaman login dan sertakan judul film sebagai query parameter
      window.location.href = "login.php?movie=" + encodeURIComponent(movieTitle);
    });
  });

  // Jika halaman dimuat dengan parameter "movie", misalnya dari hasil pencarian,
  // maka efek pencahayaan (dimmed) tetap dijalankan.
  const urlParams = new URLSearchParams(window.location.search);
  const searchMovie = urlParams.get('movie');

  if (searchMovie) {
    const normalizedSearch = searchMovie.trim().toLowerCase();
    document.querySelectorAll('.movie-card').forEach(card => {
      const titleElement = card.querySelector('.movie-details h3');
      if (titleElement) {
        const title = titleElement.textContent.trim().toLowerCase();
        const buyBtn = card.querySelector('.buy-btn');
        if (title !== normalizedSearch) {
          buyBtn.classList.add('disabled');
          buyBtn.style.pointerEvents = "none";
          buyBtn.style.opacity = "0.5";
          card.classList.add('dimmed');
        } else {
          buyBtn.classList.remove('disabled');
          buyBtn.style.pointerEvents = "auto";
          buyBtn.style.opacity = "1";
          card.classList.remove('dimmed');
        }
      }
    });
  }
</script>

</body>
</html>
