<?php include('koneksi.php'); 
     if(isset($_POST['submit'])) {
     $nama_produk = $_POST['nama_produk'];
     $deskripsi = $_POST['deskripsi'];
     $harga_beli = $_POST['harga_beli'];
     $harga_jual = $_POST['harga_jual'];
     $gambar_produk = $_FILES['gambar_produk']['name'];
 
     if($gambar_produk != "") {
         $ekstensi_diperbolehkan = array('png', 'jpg');
         $x = explode('.', $gambar_produk);
         $ekstensi = strtolower(end($x));
         $file_temp = $_FILES['gambar_produk']['tmp_name'];
         $angka_acak = rand(1, 999);
         $nama_gambar_baru = $angka_acak.'-'.$gambar_produk;
 
         if(in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
             move_uploaded_file($file_temp, 'images/'.$nama_gambar_baru);
 
             $query = "INSERT INTO produk (nama_produk, deskripsi, harga_beli, harga_jual, gambar_produk) VALUES ('$nama_produk', '$deskripsi', '$harga_beli', '$harga_jual', '$nama_gambar_baru')";
             $result = mysqli_query($koneksi, $query);
 
             if(!$result) {
                 die("Querry Error : ".mysqli_errno($koneksi)." - ".mysqli_error($koneksi));
                 echo"<script>document.location.href='data.php'</script>";
 
             } else {
                 echo "<script>alert('Data berhasil ditambahkan!);window.location='data.php';</script>";
                 echo"<script>document.location.href='data.php'</script>";
             }
     } else {
         echo "<script>alert('Ekstensi gambar hanya bisa jpg dan png!');window.location='tambah_produk.php;</script>";
     }
 }
}
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tambah_produk</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="responsive.css">
    <link rel="stylesheet" href="style2.css">

</head>
<body>

    <header>
        <nav class="navbar">
            <div class="navbar-container">
                <input type="checkbox" name="" id="">
                <div class="headphone-lines">
                    <span class="line line1"></span>
                    <span class="line line2"></span>
                    <span class="line line3"></span>
                </div>
                <h1 class="logo">BoxSound</h1>
                <ul class="menu-items">
                    <div class="moon">
                        <img src="switch photo/moon.png" id="icon">
                    </div>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="A_2209106044_NadifaSalsabilaPurnomo/">About</a></li>
                    <li><a href="index.php #bottom">Contact</a></li>
                    <li><a href="data.php">Data</a></li>
                    <a href="https://api.whatsapp.com/send?phone=6282267672123&text=Hello%20BoxSound,%20I%20wanna%20order%20" class="btn">BUY</a>
                </ul>
            </div>
        </nav>
    </header>

    <center><h1>Tambah Produk</h1></center>
    <form method="POST" action="" enctype="multipart/form-data">
    <section class="base">
        <div>
            <label>Nama Produk</label>
            <input type="text" name="nama_produk" autofocus="" required="" /> 
        </div>
        <div>
            <label>Deskripsi</label>
            <input type="text" name="deskripsi" />
        </div>
        <div>
            <label>Harga Beli</label>
            <input type="text" name="harga_beli" required="" />
        </div>
        <div>
            <label>Harga Jual</label>
            <input type="text" name="harga_jual" required="" />
        </div>
        <div>
            <label>Gambar Produk</label>
            <input type="file" name="gambar_produk" required="" />
        </div>
        <div>
            <button type="submit" name="submit">Simpan Produk</button>
        </div>
    </section>
    </form>

    <script>
            const icon = document.getElementById("icon");
            icon.addEventListener("click", function () {
                document.body.classList.toggle("dark-theme");
                    if (document.body.classList.contains("dark-theme")) {
                            icon.src = "images/sun.png";
                    } else {
                            icon.src = "switch photo/moon.png";
                    }
            });
    </script>
</body>
</html>