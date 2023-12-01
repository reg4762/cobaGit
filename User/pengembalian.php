<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="header">
        <h1 id="judul">Inventaris Alat JTI v1.0</h1>
    </div>

    <div class="main">
        <div class="kotakSamping">
            <div class="list-group">
            <a href="dashbord.php" class="list-group-item list-group-item-action list-group-item-peminjaman">Dashbord</a>
                <a href="peminjaman.php" class="list-group-item list-group-item-action list-group-item-peminjaman">Ajukan Peminjaman</a>
                <a href="pengembalian.php" class="list-group-item list-group-item-action">Pengembalian</a>
                <a href="histori.php" class="list-group-item list-group-item-action">Histori</a>
                <a href="#" class="list-group-item list-group-item-action">Akun</a>
            </div>
        </div>
        <div class="container">
            <h3>Selamat Datang, User!</h3>
            <p>Berikut ini adalah data pengembalian barang.</p>
            
            <br>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr class="head">
                            <th scope="col">Nama</th>
                            <th scope="col">NIM/NIP</th>
                            <th scope="col">Status</th>
                            <th scope="col">Tanggal Pinjam</th>
                            <th scope="col">Tanggal Kembali</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="isi">
                        <!-- Isi tabel akan diisi dengan data dari database atau sumber lain -->
                        <!-- Contoh baris data -->
                        <tr>
                            <td>Budi</td>
                            <td>2241720111</td>
                            <td>Mahasiswa</td>
                            <td>10 Desember 2023</td>
                            <td>17 Desember 2023</td>
                            <td><a class="btn btn-primary mt-3">Konfirmasi Pengembalian</a></td>
                        </tr>
                        <!-- Baris data lainnya -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>