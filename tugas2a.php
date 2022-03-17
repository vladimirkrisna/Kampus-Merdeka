<!DOCTYPE html>
<html>

    <head>
        <title>Data Nilai Mahasiswa</title>
        <link href="css/bootstrap.min.css" rel="stylesheet" />
    </head>

    <body>
        <div class="alert alert-primary" role="alert">
            <h3 style="text-align:center; text-transform:uppercase;">Nilai Checker</h3>
            <br/>
            <form method="POST" action="tugas2a.php">
                <div class=" form-group row">
                    <label class="col-3 col-form-label" for="nama">Nama Mahasiswa</label>
                    <div class="col-9">
                        <input id="nama" name="nama" placeholder="Masukkan Nama" type="text" required="required"
                            class="form-control">
                    </div>
                </div>
                <br/>
                <div class="form-group row">
                    <label for="matpel" class="col-3 col-form-label">Mata Pelajaran</label><div class="col-9">
                        <select id="matpel" name="matpel" required="required" class="form-select" aria-label="Default select example">
                            <option value="IPA">IPA</option>
                            <option value="IPS">IPS</option>
                            <option value="MTK">Matematika</option>
                            <option value="FISIKA">Fisika</option>
                        </select>
                    </div>
                </div>
                <br/>
                <div class="form-group row">
                    <label for="nilai" class="col-3 col-form-label">Nilai</label>
                    <div class="col-9">
                        <input id="nilai" name="nilai" placeholder="Masukkan Nilai" type="text" required="required"
                            class="form-control">
                    </div>
                </div>
                <br/>
                <div class="form-group row">
                    <div class="offset-3 col-9">
                        <input type="submit" name="simpan" value="Simpan" class="btn btn-primary" />
                    </div>
                </div>
                </div>
            </form>
        </div>
        <?php 
        
        //proses form dengan method POST
        $nama = $_POST['nama'];
        $matpel = $_POST['matpel'];
        $nilai = $_POST['nilai'];
        $tombol = $_POST['simpan'];

        //menentukan kelulusan
        $ket = ($nilai >=60) ? 'Lulus' : 'Tidak Lulus';

        //menentukan grade
        if($nilai >= 85 && $nilai <= 100) $grade = 'A';
        else if($nilai >= 75 && $nilai < 85) $grade = 'B'; 
        else if($nilai >= 60 && $nilai < 75) $grade = 'C';
        else if($nilai >= 30 && $nilai < 60) $grade = 'D'; 
        else if($nilai >= 0 && $nilai < 30) $grade = 'E';
        else $grade = '';

        //3. tentukan predikat (switch case)
        switch ($grade) {
            case 'A': $predikat = 'Memuaskan'; break;
            case 'B': $predikat = 'Bagus'; break;
            case 'C': $predikat = 'Cukup'; break;
            case 'D': $predikat = 'Kurang'; break;
            case 'E': $predikat = 'Buruk'; break;
            default: $predikat = '';
        }

        if (isset($tombol)) {
        ?>
        <div class="alert alert-success" role="alert">
            Nama Mahasiswa : <?= $nama; ?>
            <br />Mata Pelajaran : <?= $matpel; ?>
            <br />Nilai : <?= $nilai; ?>
            <br />Keterangan : <?= $ket; ?>
            <br />Grade : <?= $grade; ?>
            <br />Predikat : <?= $predikat; ?>
        </div>
        <?php } ?>
    </body>

    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

</html>

