<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Data Barang</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css">
    <style>
        body {
            font-family: Inknut Antiqua;
            background-color: #101010;
        }
        #navbar-container {
            background-color: rgb(85, 6, 6);
            margin-bottom: 20px;
        }
        .navbar-brand {
            color: white !important;
            display: flex;
            align-items: center;
        }
        .navbar-brand i {
            margin-right: 10px; /* Adjust spacing between the icon and text */
        }
        /* Adjust label width and text alignment */
        form label {
            width: 150px; /* Adjust as needed */
            text-align: left;
            color: white;
        }
        .form-group {
            margin-bottom: 1rem;
        }
    </style>
</head>
<body>
    <div class="container-fluid" id="navbar-container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="#">
                <i class="fas fa-home"></i>
                <i class="bi bi-folder-fill"></i>
                CREATE Data Barang
            </a>
        </nav>
    </div>
    <div class="container">
        <form method="POST" action="create_databarang_action.php">
        <div class="form-group row">
                <label for="barang_id" class="col-sm-2 col-form-label">Barang id:</label>
                <div class="col-sm-10">
                    <input type="number" name="barang_id" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="nama-barang" class="col-sm-2 col-form-label">Nama Barang:</label>
                <div class="col-sm-10">
                    <input type="text" name="nama_barang" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="kategori" class="col-sm-2 col-form-label">Kategori:</label>
                <div class="col-sm-10">
                    <select class="form-control" id="kategori" name="kategori" required>
                        <option value="Visual Equipment">Visual Equipment</option>
                        <option value="Lighting Equipment">Lighting Equipment</option>
                        <option value="Production Equipment">Production Equipment</option>
                        <option value="Audio Equipment">Audio Equipment</option>
                        <option value="Camera Equipment">Camera Equipment</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="stok" class="col-sm-2 col-form-label">Stok:</label>
                <div class="col-sm-10">
                    <input type="number" step="0.01" name="stok" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="harga-sewa" class="col-sm-2 col-form-label">Harga Sewa:</label>
                <div class="col-sm-10">
                    <input type="number" step="0.01" name="harga_sewa" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="supplier-id" class="col-sm-2 col-form-label">Supplier Id:</label>
                <div class="col-sm-10">
                    <input type="number" name="supplier_id" required>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-10">
                    <input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
                    <button type="button" class="btn btn-secondary" onclick="window.location.href='databarang.php'">Batal</button>
                </div>
            </div>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>