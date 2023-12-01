<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="header">
        <h1 id="judul">INVENTARIS JTI</h1>
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
            <h3>SISTEM INFORMASI MANAJEMEN INVENTARIS JTI</h3>
            
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr class="head">
                            <th scope="col">NIM/NIP</th>
                            <th scope="col">NAMA PEMINJAM</th>
                            <th scope="col">STATUS</th>
                            <th scope="col">NO. TELEPON</th>
                            <th scope="col">TGL PINJAM</th>
                            <th scope="col">TGL KEMBALI</th>
                            <th scope="col">BARANG</th>
                            <th scope="col">QTY</th>
                            <th scope="col">GAMBAR</th>
                            <th scope="col">AKSI</th>
                        </tr>
                    </thead>
                    <tbody class="isi">
                        <!-- Isi tabel akan diisi dengan data dari database atau sumber lain -->
                        <!-- Contoh baris data -->
                        <tr>
                            <td>123</td>
                            <td>John Doe</td>
                            <td>Mahasiswa</td>
                            <td>08123456789</td>
                            <td>2023-11-25</td>
                            <td>2023-11-28</td>
                            <td>Keyboard</td>
                            <td>5</td>
                            <td>
                                <img src="gambar1.jpg" alt="Gambar 1" width="50">
                            </td>
                            <td>
                                <button type="button" class="btn btn-primary btn-sm edit-data">Edit</button>
                                <button type="button" class="btn btn-success btn-sm kirim-data">Kirim</button>
                            </td>
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

    <script>
        var editButtons = document.querySelectorAll(".edit-data");
        var sendButtons = document.querySelectorAll(".kirim-data");

        editButtons.forEach(function(button) {
            button.addEventListener("click", function(event) {
                // Logika untuk edit data
                var row = event.target.parentNode.parentNode;
                var cells = row.getElementsByTagName("td");

                // Ambil data dari sel-sel
                var nimNip = cells[0].innerText;
                var namaPeminjam = cells[1].innerText;
                var status = cells[2].innerText;
                var noTelepon = cells[3].innerText;
                var tglPinjam = cells[4].innerText;
                var tglKembali = cells[5].innerText;

                // Lakukan hal yang diperlukan untuk proses edit
                // Misalnya, tampilkan data ini di formulir untuk diedit
                console.log("Data untuk diedit:", nimNip, namaPeminjam, status, noTelepon, tglPinjam, tglKembali);
            });
        });

        sendButtons.forEach(function(button) {
            button.addEventListener("click", function(event) {
                // Redirect ke halaman login.php saat tombol kirim ditekan
                window.location.href = "login.php";
            });
        });
    </script>
</body>
</html>