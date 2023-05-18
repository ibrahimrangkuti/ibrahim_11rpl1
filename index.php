<!DOCTYPE html>
<html>

<head>
    <title>Form Biodata Siswa</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <h1>Form Biodata Siswa</h1>

    <div class="container">
        <form action="/action_page.php">
            <div class="row">
                <div class="col-25">
                    <label for="nama">Nama</label>
                </div>
                <div class="col-75">
                    <input type="text" id="nama" name="nama" placeholder="Masukkan nama anda.">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="kelas">Kelas</label>
                </div>
                <div class="col-75">
                    <select id="kelas" name="kelas">
                        <option value="11 RPL 1">11 RPL 1</option>
                        <option value="11 RPL 2">11 RPL 2</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="alamat">Alamat</label>
                </div>
                <div class="col-75">
                    <textarea id="alamat" name="alamat" placeholder="Masukkan alamat anda" style="height:200px"></textarea>
                </div>
            </div>
            <br>
            <div class="row">
                <input type="submit" value="Submit">
            </div>
        </form>
    </div>

</body>

</html>