<html>

<head>
    <title>Order Status</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
</head>

<body>
    <?php
    include "connection.php";

    session_start();

    $id_paket = $_POST['id_paket'];
    $nama_booking = $_POST['nama_booking'];
    $alamat_email = $_POST['alamat_email'];
    $tanggal_wedding = $_POST['tanggal_wedding'];
    $tanggal_booking = date("d/m/y");
    $sqlInsert = "insert into transaksi_booking (id_paket,nama_booking,alamat_email,tanggal_wedding,tanggal_booking) values ('$id_paket','$nama_booking','$alamat_email','$tanggal_wedding','$tanggal_booking')";
    if (mysqli_query($connect, $sqlInsert)) {
    ?>
        <script>
            alert('Success');
            window.location = 'formbooking.php?id_paket=1';
        </script>
    <?php
    } else {
    ?>
        <script>
            alert('Failed');
            window.location = 'index.php';
        </script>
    <?php
    }

    ?>
</body>
<!-- $sqlInsert = "insert into transaksi_booking (id_paket,nama_booking,alamat_email,tanggal_wedding,tanggal_booking) values ('$id_paket','$nama_booking','$alamat_email','$tanggal_wedding','$tanggal_booking')"; -->

</html>