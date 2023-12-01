<!DOCTYPE html>
<html>
<head>
    <title>Ajukan pinjam</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
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
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="nomor">NIM/NIP:</label>
                        <input type="text" class="form-control" id="nomor">
                    </div>

                    <div class="form-group">
                        <label for="nama">NAMA PEMINJAM:</label>
                        <input type="text" class="form-control" id="nama">
                    </div>

                    <div class="form-group">
                        <label for="enum">STATUS:</label>
                        <select class="form-control" id="enum">
                            <option value="">Pilih Status</option>
                            <option value="mahasiswa">Mahasiswa</option>
                            <option value="dosen">Dosen</option>
                        </select>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="tel">NO. TELEPON:</label>
                        <input type="text" class="form-control" id="tel">
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="tgl_pinjam">TGL PINJAM:</label>
                                <input type="date" class="form-control" id="tgl_pinjam">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="tgl_kembali">TGL KEMBALI:</label>
                                <input type="date" class="form-control" id="tgl_kembali">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="aploud">UPLOAD IMAGE:</label>
                        <input type="file" class="form-control" id="aploud" accept="image/*">
                    </div>            
                    
                    <div class="form-group">
                        <a href="beritaAcara.php" class="btn btn-primary btn-lg">Tambah Data Peminjaman>></a>
                    </div>


                </div>

                <!-- Tabel untuk menampilkan data -->
                <div class="col-md-12 mt-5" id="tampilTabel" style="display: none;">
                    <h2>Data Peminjaman yang Akan Ditambahkan:</h2>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>NIM/NIP</th>
                                <th>Nama Peminjam</th>
                                <th>Status</th>
                                <th>No. Telepon</th>
                                <th>Tgl Pinjam</th>
                                <th>Tgl Kembali</th>
                                <th>Upload Image</th>
                            </tr>
                        </thead>
                        <tbody id="dataPeminjaman">
                            <!-- Data akan ditambahkan ke sini -->
                        </tbody>
                    </table>
                </div>


            </div>
        </div>

            <br>
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
        <script>
            // Saat tombol "Tambah Data Peminjaman" ditekan
            document.getElementById("tambahData").addEventListener("click", function() {
                // Mendapatkan nilai dari formulir
                var nimNip = document.getElementById("nomor").value;
                var namaPeminjam = document.getElementById("nama").value;
                var status = document.getElementById("enum").value;
                var noTelepon = document.getElementById("tel").value;
                var tglPinjam = document.getElementById("tgl_pinjam").value;
                var tglKembali = document.getElementById("tgl_kembali").value;
                var uploadImage = document.getElementById("aploud").value;

                // Menyiapkan data untuk ditampilkan dalam tabel
                var newRow = "<tr><td>" + nimNip + "</td><td>" + namaPeminjam + "</td><td>" + status + "</td><td>" + noTelepon + "</td><td>" + tglPinjam + "</td><td>" + tglKembali + "</td><td>" + uploadImage + "</td></tr>";

                // Menambahkan data ke dalam tabel
                var table = document.getElementById("dataPeminjaman");
                table.innerHTML += newRow;

                // Menampilkan tabel setelah data ditambahkan
                document.getElementById("tampilTabel").style.display = "block";
            });
        </script>
</body>
</html>