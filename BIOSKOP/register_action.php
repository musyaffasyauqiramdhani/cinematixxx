<?php

include('connect.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Ambil data dari form
    $nama     = trim($_POST['nama']);
    $email    = trim($_POST['email']);
    $password = $_POST['password'];
    $no_hp    = trim($_POST['no_hp']);
    
    // Set default role ke 'user'
    $role = 'user';

    // Validasi dasar: pastikan semua field terisi
    if (empty($nama) || empty($email) || empty($password) || empty($no_hp)) {
        echo "Semua field harus diisi.";
        exit;
    }

    // Cek apakah email sudah terdaftar
    $stmt = $conn->prepare("SELECT id FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();
    if ($stmt->num_rows > 0) {
        echo "Email sudah terdaftar.";
        $stmt->close();
        exit;
    }
    $stmt->close();

    // Hash password untuk keamanan
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Siapkan query insert
    $stmt = $conn->prepare("INSERT INTO users (nama, email, password, no_hp, role) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $nama, $email, $hashedPassword, $no_hp, $role);

    if ($stmt->execute()) {
        echo "Registrasi berhasil!";
    } else {
        echo "Error: " . $stmt->error;
    }
    $stmt->close();
}
?>
