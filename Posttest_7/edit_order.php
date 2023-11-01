<?php
include('koneksi.php');
$id = $_GET['id'];

// Mengambil data produk berdasarkan id
$query = "SELECT * FROM `order` WHERE `id` = $id";
$result = mysqli_query($koneksi, $query);
$data = mysqli_fetch_assoc($result);

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $number_phone = $_POST['number_phone'];
    $address = $_POST['address'];
    $product = $_POST['product'];
    $qty = $_POST['qty'];

    $query = "UPDATE `order` SET `name`='$name', `number_phone`='$number_phone', `address`='$address', `qty`='$qty', `product`='$product' WHERE `id`=$id";
    $result = mysqli_query($koneksi, $query);

    if (!$result) {
        die("Query Error : " . mysqli_errno($koneksi) . " - " . mysqli_error($koneksi));
        echo "<script>document.location.href='data_order.php'</script>";
    } else {
        echo "<script>alert('Data berhasil diperbarui!');window.location='data_order.php';</script>";
    }
        
    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit_produk</title>
    <link rel="stylesheet" href="styles.css">
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
                    <li><a class="nav_teks" href="index.php">Home</a></li>
                    <li><a class="nav_teks" href="A_2209106044_NadifaSalsabilaPurnomo/">About</a></li>
                    <li><a class="nav_teks" href="index.php #bottom">Contact</a></li>
                    <li><a class="nav_teks" href="logout.php">Logout</a></li>
                </ul>
            </div>
        </nav>
    </header>

<center><h1>Edit Produk</h1></center>
<form method="POST" action="" enctype="multipart/form-data">
<section class="base">
        <div>
            <label>Name</label>
            <input type="text" name="name" value="<?php echo $data['name']  ?>" autofocus="" required="" /> 
        </div>
        <div>
            <label>Number Phone</label>
            <input type="text" name="number_phone" value="<?php echo $data['number_phone']  ?>" />
        </div>
        <div>
            <label>Address</label>
            <input type="text" name="address" value="<?php echo $data['address']  ?>" required="" />
        </div>
        <div>
            <label>Product</label>
            <input type="text" name="product" value="<?php echo $data['product']  ?>" required="" />
        </div>
        <div>
            <label>Qty</label>
            <input type="number" name="qty"  value="<?php echo $data['qty']  ?>"required="" />
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

