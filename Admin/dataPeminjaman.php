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
                <a href="dataItem.php" class="list-group-item list-group-item-action ">Data Item</a>
                <a href="/Admin" class="list-group-item list-group-item-action">Inventaris</a>
                <a href="dataPeminjaman.php" class="list-group-item list-group-item-action">Data Peminjaman</a>
                <a href="#" class="list-group-item list-group-item-action">Akun</a>
            </div>
        </div>
        <div class="container">
            <h3>Data Peminjaman</h3>
            <div class="searching">
                <form action="#" method="get" class="form-inline">
            <!-- Dropdown untuk Tanggal -->
            <select id="tanggal" class="form-control mr-sm-2">
                <option value="">Tanggal</option>
                <script>
                    for (let i = 1; i <= 31; i++) {
                        document.write(<option value="${i}">${i}</option>);
                    }
                </script>
            </select>

            <!-- Dropdown untuk Bulan -->
            <select id="bulan" class="form-control mr-sm-2">
            <option value="">Bulan</option>
                <option value="1">Januari</option>
                <option value="2">Februari</option>
                <option value="3">Maret</option>
                <option value="4">April</option>
                <option value="5">Mei</option>
                <option value="6">Juni</option>
                <option value="7">July</option>
                <option value="8">Agustus</option>
                <option value="9">September</option>
                <option value="10">Oktober</option>
                <option value="11">November</option>
                <option value="12">Desember</option>
            </select>

            <!-- Dropdown untuk Tahun -->
            <select id="tahun" class="form-control mr-sm-2">
                <option value="">Tahun</option>
                <script>
                    const currentYear = new Date().getFullYear();
                    for (let year = currentYear; year >= currentYear - 10; year--) {
                        document.write(<option value="${year}">${year}</option>);
                    }
                </script>
            </select>

            
                    <button type="button" class="btn btn-primary" onclick="filterData()">Cari</button>
                </form>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered" id="dataPeminjaman">
                    <thead  class="head">
                    
                        <tr>
                            <br><br>
                            <th scope="col">No</th>
                            <th scope="col">Id Pinjam</th>
                            <th scope="col">Id Barang</th>
                            <th scope="col">Nama Peminjam</th>
                            <th scope="col">Nama Barang</th>
                            <th scope="col">Qty</th>
                            <th scope="col">Tanggal Pinjam</th>
                            <th scope="col">Tanggal Pengembalian</th>
                        </tr>
                    </thead>
                    <tbody class="isi">
                        <!-- Baris data contoh -->

    <tr>
        <td>1</td>
        <td>123</td>
        <td>Dosen</td>
        <td>Ropik</td>
        <td>Ac</td>
        <td>5</td>
        <td>2023-11-15</td>
        <td>2023-11-20</td>
    </tr>
    <tr>
        <td>2</td>
        <td>456</td>
        <td>Mahasiswa</td>
        <td>Cahyo</td>
        <td>Mobil</td>
        <td>3</td>
        <td>2023-10-10</td>
        <td>2023-10-15</td>
    </tr>
    <tr>
        <td>2</td>
        <td>456</td>
        <td>Mahasiswa</td>
        <td>Regita</td>
        <td>Sepeda</td>
        <td>3</td>
        <td>2023-10-10</td>
        <td>2023-10-15</td>
    </tr>
    <tr>
        <td>2</td>
        <td>456</td>
        <td>Mahasiswa</td>
        <td>Sopi</td>
        <td>Spidol</td>
        <td>3</td>
        <td>2023-10-10</td>
        <td>2023-10-15</td>
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
        function filterData() {
            const selectedTanggal = document.getElementById('tanggal').value;
            const selectedBulan = document.getElementById('bulan').value;
            const selectedTahun = document.getElementById('tahun').value;

            const table = document.getElementById('dataPeminjaman').getElementsByTagName('tbody')[0];
            const rows = table.getElementsByTagName('tr');

            for (let i = 0; i < rows.length; i++) {
                const cols = rows[i].getElementsByTagName('td');
                const tanggalPinjam = new Date(cols[6].innerText);
                
                const dataTanggal = tanggalPinjam.getDate().toString();
                const dataBulan = (tanggalPinjam.getMonth() + 1).toString();
                const dataTahun = tanggalPinjam.getFullYear().toString();

                if (
                    (selectedTanggal === '' || selectedTanggal === dataTanggal) &&
                    (selectedBulan === '' || selectedBulan === dataBulan) &&
                    (selectedTahun === '' || selectedTahun === dataTahun)
                ) {
                    rows[i].style.display = '';
                } else {
                    rows[i].style.display = 'none';
                }
            }
        }
    </script>
</body>
</html>