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
                <a href="#" class="list-group-item list-group-item-action list-group-item-peminjaman">Ajukan Peminjaman</a>
                <a href="#" class="list-group-item list-group-item-action">Ajukan Pengembalian</a>
                <a href="#" class="list-group-item list-group-item-action">Histori</a>
                <a href="#" class="list-group-item list-group-item-action">Akun</a>
            </div>
        </div>
        <div class="container">
            <h3>Selamat Datang, Mahasiswa!</h3>
            <p>Cari item yang ingin Anda pinjam, pilih yang Anda perlukan lalu klik Button Selanjutnya.</p>
            
            <div class="searching">
                <form class="form-inline">
                    <input type="text" id="searchInput" class="form-control mr-sm-2" placeholder="Cari...">
                    <button type="button" class="btn btn-primary" id="btnCari">Cari</button>
                </form>
            </div>
            <br>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">Kode</th>
                            <th scope="col">Nama item</th>
                            <th scope="col">Maintener</th>
                            <th scope="col">Qty Tersedia</th>
                            <th scope="col">Pilih</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Isi tabel akan diisi dengan data dari database atau sumber lain -->
                        <!-- Contoh baris data -->
                        <tr>
                            <td>1</td>
                            <td>Remote AC</td>
                            <td>John Doe</td>
                            <td>10/20</td>
                            <td><input type="checkbox"></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Spidol</td>
                            <td>Maria</td>
                            <td>20/25</td>
                            <td><input type="checkbox"></td>
                        </tr>
                        <!-- Baris data lainnya -->
                    </tbody>
                </table>
            </div>

            <!-- Tombol "Selanjutnya" -->
            <div class="text-center">
                <a class="btn btn-primary mt-3">Next>></a>
            </div>

        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
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
    </script>
</body>
</html>
