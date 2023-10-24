<?php
include('koneksi.php');
$id = $_GET['id'];

// Mengambil data produk berdasarkan id
$query = "SELECT * FROM produk WHERE id = $id";
$result = mysqli_query($koneksi, $query);
$data = mysqli_fetch_assoc($result);

if (isset($_POST['submit'])) {
    $nama_produk = $_POST['nama_produk'];
    $deskripsi = $_POST['deskripsi'];
    $harga_beli = $_POST['harga_beli'];
    $harga_jual = $_POST['harga_jual'];
    $gambar_produk = $_FILES['gambar_produk']['name'];
    
    // Hapus gambar kalau kotak centang "Hapus Gambar" diklik
    if (isset($_POST['hapus_gambar']) && $_POST['hapus_gambar'] == 1) {
        $file_gambar_lama = 'images/gambar_crud/' . $data['gambar_produk'];
        if (file_exists($file_gambar_lama)) {
            unlink($file_gambar_lama);
        }
        // Hapus nama gambar produk dari database setelah dipencet submit
        $query_hapus_gambar = "UPDATE produk SET gambar_produk = NULL WHERE id = $id";
        $result_hapus_gambar = mysqli_query($koneksi, $query_hapus_gambar);
    }

    if ($gambar_produk != "") {
        $ekstensi_diperbolehkan = array('png', 'jpg');
        $x = explode('.', $gambar_produk);
        $ekstensi = strtolower(end($x));
        $file_temp = $_FILES['gambar_produk']['tmp_name'];
        $nama_gambar_baru = date('Y-m-d') . '-' . $gambar_produk;

        if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
            move_uploaded_file($file_temp, 'images/gambar_crud/' . $nama_gambar_baru);

            $query = "UPDATE produk SET nama_produk='$nama_produk', deskripsi='$deskripsi', harga_beli='$harga_beli', harga_jual='$harga_jual', gambar_produk='$nama_gambar_baru' WHERE id=$id";
            $result = mysqli_query($koneksi, $query);

            if (!$result) {
                die("Query Error : " . mysqli_errno($koneksi) . " - " . mysqli_error($koneksi));
                echo "<script>document.location.href='data.php'</script>";
            } else {
                echo "<script>alert('Data berhasil diperbarui!');window.location='data.php';</script>";
                echo "<script>document.location.href='data.php'</script>";
            }
        } else {
            echo "<script>alert('Ekstensi gambar hanya bisa jpg dan png!');window.location='edit_produk.php?id=$id';</script>";
        }
    } else {
        $query = "UPDATE produk SET nama_produk='$nama_produk', deskripsi='$deskripsi', harga_beli='$harga_beli', harga_jual='$harga_jual' WHERE id=$id";
        $result = mysqli_query($koneksi, $query);

        if (!$result) {
            die("Query Error : " . mysqli_errno($koneksi) . " - " . mysqli_error($koneksi));
            echo "<script>document.location.href='data.php'</script>";
        } else {
            echo "<script>alert('Data berhasil diperbarui!');window.location='data.php';</script>";
            echo "<script>document.location.href='data.php'</script>";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit_produk</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="responsive.css">
    <link rel="stylesheet" href="style2.css">
    <style>
            .hapus-gambar-checkbox {
        display: inline-block;
        align-items: left;
        width:30px;
    }
    </style>
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
                <ul class="menu-item">
                    <div class="moon">
                        <img src="switch photo/moon.png" id="icon">
                    </div>
                    <li><a class="nav_teks"  href="index.php">Home</a></li>
                    <li><a class="nav_teks" href="A_2209106044_NadifaSalsabilaPurnomo/">About</a></li>
                    <li><a class="nav_teks" href="index.php #bottom">Contact</a></li>
                    <li><a class="nav_teks" href="#">Data</a></li>
                    <a href="https://api.whatsapp.com/send?phone=6282267672123&text=Hello%20BoxSound,%20I%20wanna%20order%20" class="btn">BUY</a>
                </ul>
            </div>
        </nav>
    </header>

<center><h1>Edit Produk</h1></center>
<form method="POST" action="" enctype="multipart/form-data">
    <section class="base">
        <div>
            <label>Nama Produk Baru </label>
            <input type="text" name="nama_produk" autofocus="" required="" value="<?php echo $data['nama_produk']; ?>" /> 
        </div>
        <div>
            <label>Deskripsi Baru </label>
            <input type="text" name="deskripsi" value="<?php echo $data['deskripsi']; ?>" />
        </div>
        <div>
            <label>Harga Beli Baru</label>
            <input type="text" name="harga_beli" required="" value="<?php echo $data['harga_beli']; ?>" />
        </div>
        <div>
            <label>Harga Jual Baru</label>
            <input type="text" name="harga_jual" required="" value="<?php echo $data['harga_jual']; ?>" />
        </div>
        <div>
    <label>Gambar Produk Baru</label>
    <input type="file" name="gambar_produk" />
    <label>Gambar Lama</label>
    <?php if ($data['gambar_produk'] != ""): ?>
    <img src="images/gambar_crud/<?php echo $data['gambar_produk']; ?>" alt="Gambar Produk" width="100" height="100"> 
    <br><input class="hapus-gambar-checkbox" type="checkbox" name="hapus_gambar" value="1"/>Klik Untuk Setuju Hapus Gambar.
    <?php endif; ?>

    </div>
        <div>
            <button type="submit" name="submit">Simpan Perubahan</button>
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

