<?php include('koneksi.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>data</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="responsive.css">
    <link rel="stylesheet" href="style2.css">
    <style>
        .tanggal {
            padding-top : 15px;
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


    <center><h1>Data Produk</h1></center>
    <br>
<?php
// Menentukan ZONA WITA
date_default_timezone_set('Asia/Makassar');
?>

    <center><a class="tambah_teks" href="tambah_produk.php">+ &nbsp; Tambah Produk</a></center>
    <div class="tanggal">
        <center>
            <p>Tanggal: <?php echo date('l, d F Y'); ?></p>
            <p>Waktu: <?php echo date('H:i:s'); ?></p>
        </center>
    </div>
    <br>
    <table>
        <thead>
            <tr>
                <th>No.</th>
                <th>Nama Produk</th>
                <th>Deskripsi</th>
                <th>Harga Beli</th>
                <th>Harga Jual</th>
                <th>Gambar Produk</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
                <?php 
                $query = "SELECT * FROM produk ORDER BY id ASC";
                $result = mysqli_query($koneksi, $query);

                if (!$result) {
                    die("Query Error : " . mysqli_errno($koneksi) . " - " . mysqli_error($koneksi));
                }
                $no = 1;

                while ($row = mysqli_fetch_assoc($result)) {
                ?>
                <tr>
                    <td><?php echo $no; ?></td>
                    <td><?php echo $row['nama_produk']; ?></td>
                    <td><?php echo substr($row['deskripsi'], 0, 50); ?>...</td>
                    <td>Rp <?php echo number_format($row['harga_beli'], 0, ',', '.'); ?></td>
                    <td>Rp <?php echo number_format($row['harga_jual'], 0, ',', '.'); ?></td>
                    <td><img src="images/gambar_crud/<?php echo $row['gambar_produk']; ?>" alt="<?php echo $row['nama_produk']; ?>" width="100"></td>
                    <td>
                        <a href="edit_produk.php?id=<?php echo $row['id']; ?>">Edit &nbsp;&nbsp;&nbsp;&nbsp;</a>
                        &nbsp;
                        <a href="hapus_produk.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Anda yakin ingin hapus data ini?')">Hapus</a>
                    </td>
                </tr>
                <?php
                    $no++;
                }
                ?>
            </tbody>
                </table>
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


