<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cinema Booking - Login</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(135deg, #1e1e2f, #3b3b98);
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      overflow: hidden;
    }
    .container {    
      text-align: center;
      position: relative;
    }
    .logo img {
      width: 250px;
      animation: fadeIn 1.5s ease-in-out;
    }
    .login-box {
      background: rgba(255, 255, 255, 0.15);
      backdrop-filter: blur(10px);
      padding: 40px;
      border-radius: 12px;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
      width: 350px;
      animation: slideUp 1s ease-in-out;
    }
    .login-box h1 {
      color: #ffcc00;
      font-weight: 700;
      font-size: 28px;
    }
    .form-group {
      margin-bottom: 20px;
      text-align: left;
    }
    .form-group label {
      color: #fff;
      font-size: 14px;
      font-weight: 500;
    }
    .form-group input {
      width: 100%;
      padding: 12px;
      border-radius: 6px;
      border: 2px solid transparent;
      background: rgba(255, 255, 255, 0.2);
      color: #fff;
      font-size: 16px;
      transition: all 0.3s;
    }
    .form-group input:focus {
      outline: none;
      border-color: #ffcc00;
      background: rgba(255, 255, 255, 0.3);
    }
    .error-message {
      color: red;
      font-size: 12px;
      display: none;
      margin-top: 5px;
    }
    .btn {
      width: 100%;
      padding: 12px;
      font-size: 16px;
      font-weight: 600;
      border: none;
      border-radius: 6px;
      background: linear-gradient(135deg, #ffcc00, #ff9900);
      color: #1e1e2f;
      cursor: pointer;
      transition: all 0.3s;
    }
    .btn:hover {
      transform: translateY(-3px);
      box-shadow: 0 5px 15px rgba(255, 153, 0, 0.5);
    }
    .register-link {
      margin-top: 15px;
      color: #fff;
      font-size: 14px;
    }
    .register-link a {
      color: #ffcc00;
      text-decoration: none;
      font-weight: 600;
    }
    footer {
      position: absolute;
      bottom: 10px;
      color: #fff;
      font-size: 14px;
    }
    @keyframes fadeIn {
      from { opacity: 0; }
      to { opacity: 1; }
    }
    @keyframes slideUp {
      from { transform: translateY(50px); opacity: 0; }
      to { transform: translateY(0); opacity: 1; }
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="logo">
      <img src="galeri/logo.png" alt="Cinema Booking Logo">
    </div>
    <div class="login-box">
      <h1>Login</h1>
      <form id="login-form">
        <div class="form-group">
          <label for="username">Username</label>
          <input type="text" id="username" name="username" placeholder="Enter your username" required onfocus="handleFocus(this)" onblur="validateInput(this, 'username-error')">
          <p id="username-error" class="error-message">Username tidak boleh kosong!</p>
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" id="password" name="password" placeholder="Enter your password" required onfocus="handleFocus(this)" onblur="validateInput(this, 'password-error')">
          <p id="password-error" class="error-message">Password tidak boleh kosong!</p>
        </div>
        <button type="submit" class="btn">Login</button>
      </form>
      <p class="register-link">Don't have an account? <a href="register.php">Sign up now</a></p>
    </div>
  </div>
  <footer>
    <p>&copy; 2025 Cinema Booking. All rights reserved.</p>
  </footer>
  <script>
    document.getElementById('login-form').addEventListener('submit', function(event) {
      event.preventDefault();
      const username = document.getElementById('username').value;
      const password = document.getElementById('password').value;
      
      // Ambil query parameter 'movie' jika ada
      const urlParams = new URLSearchParams(window.location.search);
      const movie = urlParams.get('movie');

      // Contoh validasi sederhana (ganti dengan logika autentikasi nyata)
      if (username === "admin" && password === "admin123") {
        // Jika terdapat parameter 'movie', alihkan ke halaman pemesanan dengan judul film
        if (movie) {
          window.location.replace('pemesanan.php?movie=' + encodeURIComponent(movie));
        } else {
          window.location.replace('dashboard.php');
        }
      } else {
        alert('Invalid username or password!');
      }
    });
    
    function handleFocus(input) {
      input.style.border = "2px solid yellow";
    }
    function validateInput(input, errorId) {
      let errorMessage = document.getElementById(errorId);
      if (input.value.trim() === "") {
        errorMessage.style.display = "block";
      } else {
        errorMessage.style.display = "none";
      }
      input.style.border = "2px solid white";
    }
  </script>
</body>
</html>
