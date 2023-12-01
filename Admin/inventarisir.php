<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="header">
        <h1 id="judul">Inventaris JTI POLTEX</h1>
    </div>

    <div class="main">
        <div class="kotakSamping">
            <div class="list-group">
                <a href="dataItem.php" class="list-group-item list-group-item-action ">Data Item</a>
                <a href="inventarisir.php" class="list-group-item list-group-item-action">Inventaris</a>
                <a href="dataPeminjaman.php" class="list-group-item list-group-item-action">Data Peminjaman</a>
                <a href="#" class="list-group-item list-group-item-action">Akun</a>
            </div>
        </div>

        <div class="container">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h3 mb-2 text-black-800">Inventarisir</h1>
                <p class="mb-4">Isikan data barang yang akan disimpan ke sistem</p>
            </div>

            <!-- Formulir Inventaris -->
            <form action="#" method="post">
                <div class="form-group">
                    <label for="kode_barang">Kode Barang:</label>
                    <input type="text" name="kode_barang" id="kode_barang" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="nama_barang">Nama Barang:</label>
                    <input type="text" name="nama_barang" id="nama_barang" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="qty">Qty:</label>
                    <input type="text" name="qty" id="qty" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="level">Level:</label>
                    <select name="level" id="level" class="form-control" required>
                        <option value="Hibah">Hibah</option>
                        <option value="user">Pinjam</option>
                        <option value="admin">Beli</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="keterangan">Keterangan:</label>
                    <textarea class="form-control" name="keterangan" id="keterangan"></textarea>
                </div>

                <button type="submit" class="btn btn-primary">Simpan!</button>
            </form>
        </div>
    </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>