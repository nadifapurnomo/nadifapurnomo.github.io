
<?php include('koneksi.php');
    $id = $_GET['id'];
    $query = "DELETE FROM `order` where `id` ='$id'";
    $result = mysqli_query($koneksi, $query);

    if(!$result) {
        die("Querry Error : ".mysqli_errno($koneksi)." - ".mysqli_error($koneksi));
        echo"<script>document.location.href='data_order.php'</script>";

    } else {
        echo "<script>alert('Data berhasil dihapus!);window.location='data_order.php';</script>";
        echo"<script>document.location.href='data_order.php'</script>";
    }

?>