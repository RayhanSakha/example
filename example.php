<?php
// Konfigurasi database
$servername = "localhost";  // Atau alamat IP server MySQL Anda
$username = "root";         // Ganti dengan username MySQL Anda
$password = "";             // Ganti dengan password MySQL Anda
$dbname = "example_db";     // Nama database yang telah dibuat

// Membuat koneksi ke database
$conn = new mysqli($servername, $username, $password, $dbname);

// Mengecek koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query untuk mengambil data dari tabel 'users'
$sql = "SELECT id, name, email, created_at FROM users";
$result = $conn->query($sql);

// Menampilkan data jika ada hasilnya
if ($result->num_rows > 0) {
    echo "<table border='1'><tr><th>ID</th><th>Name</th><th>Email</th><th>Created At</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["id"]. "</td><td>" . $row["name"]. "</td><td>" . $row["email"]. "</td><td>" . $row["created_at"]. "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

// Menutup koneksi
$conn->close();
?>
