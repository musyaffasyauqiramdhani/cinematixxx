    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Register - Pemesanan Tiket Bioskop</title>
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

    .register-container {
        background: rgba(255, 255, 255, 0.15);
        backdrop-filter: blur(10px);
        padding: 40px;
        border-radius: 12px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
        width: 350px;
        text-align: center;
        animation: slideUp 1.5s ease-in-out;
    }
    .register-container h1 {
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
        transform: scale(1.02);
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
    .footer {
        margin-top: 15px;
        color: #fff;
        font-size: 14px;
    }
    .footer a {
        color: #ffcc00;
        text-decoration: none;
        font-weight: 600;
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
        <script>
            function handleRegister(event) {
                event.preventDefault();

                const fullname = document.getElementById('fullname').value;
                const email = document.getElementById('email').value;
                const username = document.getElementById('username').value;
                const password = document.getElementById('password').value;

                if (fullname === "" || email === "" || username === "" || password === "") {
                    alert("Semua kolom harus diisi!");
                } else {
                    alert('Pendaftaran berhasil! Anda akan diarahkan ke halaman login.');
                    window.location.href = 'login.php';
                }
            }

            function focusInput(input) {
                input.style.border = "2px solid blue";
            }

            function blurInput(input) {
                let errorMessage = document.getElementById(input.id + "-error");

                if (input.value.trim() === "") {
                    input.classList.add("error");
                    errorMessage.style.display = "block";
                } else {
                    input.classList.remove("error");
                    errorMessage.style.display = "none";
                }
            }

            function buttonClick() {
                alert("Lengkapi data formulir!");
            }
        </script>
    </head>
    <body>
    <div class="container">
        <div class="logo">
        <img src="galeri/logo.png" alt="Cinema Booking Logo">
        </div>
        <div class="register-container">
            <h1>Register</h1>
            <form onsubmit="handleRegister(event)">
                <div class="form-group">
                    <label for="fullname">Nama Lengkap</label>
                    <input type="text" id="fullname" name="fullname" placeholder="Masukkan nama lengkap" required
                        onfocus="focusInput(this)" onblur="blurInput(this)">
                    <p id="fullname-error" class="error-message">Nama lengkap tidak boleh kosong!</p>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="Masukkan email" required
                        onfocus="focusInput(this)" onblur="blurInput(this)">
                    <p id="email-error" class="error-message">Email tidak boleh kosong!</p>
                </div>
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username" placeholder="Masukkan username" required
                        onfocus="focusInput(this)" onblur="blurInput(this)">
                    <p id="username-error" class="error-message">Username tidak boleh kosong!</p>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="Masukkan password" required
                        onfocus="focusInput(this)" onblur="blurInput(this)">
                    <p id="password-error" class="error-message">Password tidak boleh kosong!</p>
                </div>
                <button type="submit" class="btn" onclick="buttonClick()">Register</button>
            </form>
            <div class="footer">
                Sudah punya akun? <a href="login.php">Login sekarang</a>
            </div>
        </div>
    </body>
    </html>
