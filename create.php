<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>jurnal</title>
</head>

<body>

    <div class="container" style="margin-top: 80px">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                        JURNAL HARIAN
                    </div>
                    <div class="card-body">
                        <form action="simpan.php" method="POST" enctype="multipart/form-data">
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="jam" class="form-label"> Waktu</label>
                                    <input type="time" id="jam" name="jam" required placeholder="YYYY-MM-DDTHH:MM"
                                        class="form-control">
                                </div>

                                <div class="col-md-6">
                                    <label for="instruksor" class="form-label">Instruksi</label>
                                    <input type="text" id="instruksor" name="instruksor" required placeholder=""
                                        class="form-control">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="kategori" class="form-label">Kategori</label>
                                    <select id="kategori" name="kategori" required class="form-control">
                                        <option value="" disabled selected>Pilih Kategori</option>
                                        <option value="Webinar">Webinar</option>
                                        <option value="Penilaian">Penilaian</option>
                                        <option value="Website">Website</option>
                                        <option value="Desain">Desain</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="deskripsi" class="form-label">Deskripsi</label>
                                    <input type="text" id="deskripsi" name="deskripsi" placeholder=""
                                        class="form-control">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="target" class="form-label">Target</label>
                                    <input type="text" id="target" name="target" placeholder="" class="form-control">

                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <label for="status" class="form-label">Status</label>
                                        <select id="status" name="status" required class="form-control">
                                            <option value="" disabled selected>Pilih</option>
                                            <option value="Tercapai">Tercapai</option>
                                            <option value="Tidak Tercapai">Tidak Tercapai</option>
                                        </select>
                                    </div>
                                    <div>
                                        <form>
                                            <button type="submit" class="btn btn-success">SIMPAN</button>
                                            <button type="reset" class="btn btn-warning">RESET</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>

                <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
                    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
                    crossorigin="anonymous"></script>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
                    integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
                    crossorigin="anonymous"></script>
</body>

</html>