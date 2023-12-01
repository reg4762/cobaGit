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
            <h3>Selamat Datang, pada halaman Histori</h3>
            <p> </p>
            
            <div class="searching">
                <!-- <form class="form-inline">
                    <input type="text" id="searchInput" class="form-control mr-sm-2" placeholder="Cari...">
                    <button type="button" class="btn btn-primary" id="btnCari">Cari</button>
                </form> -->
            </div>
            <br>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                    <tr class="head">
                            <th scope="col">Id Peminjaman</th>
                            <th scope="col">Kode Barang</th>
                            <th scope="col">Nama Barang</th>
                            <th scope="col">Jumlah Barang</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Tanggal Pinjaman</th>
                            <th scope="col">Status</th>
                        </tr>
                    </thead>
                    <tbody class="isi">
                        <!-- Isi tabel akan diisi dengan data dari database atau sumber lain -->
                        <!-- Contoh baris data -->
                        <tr>
                            <td>1</td>
                            <td>123</td>
                            <td>Spidol</td>
                            <td>2</td>
                            <td>Regita</td>
                            <td>25 - 27 agustus 2023</td>
                            <td>Done</td>
                        </tr>
                </table>
            </div>

            <!-- Tombol "Selanjutnya" -->
            <div class="text-center">
                <a href="berita.php" class="btn btn-primary mt-3">Next>></a>
            </div>

        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- <script>
        document.getElementById("btnCari").addEventListener("click", function() {
            // Mendapatkan nilai input
            var input = document.getElementById("searchInput").value.toLowerCase();

            // Mendapatkan semua baris data
            var rows = document.querySelectorAll("table tbody tr");

            // Loop melalui setiap baris data
            for (var i = 0; i < rows.length; i++) {
                var kode = rows[i].getElementsByTagName("td")[0].innerText.toLowerCase();
                var nama = rows[i].getElementsByTagName("td")[1].innerText.toLowerCase();
                var maintener = rows[i].getElementsByTagName("td")[2].innerText.toLowerCase();

                // Menyembunyikan atau menampilkan baris berdasarkan pencarian
                if (kode.includes(input) || nama.includes(input) || maintener.includes(input)) {
                    rows[i].style.display = "";
                } else {
                    rows[i].style.display = "none";
                }
            }
        });
    </script> -->
</body>
</html>