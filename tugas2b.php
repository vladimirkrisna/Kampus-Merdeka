<!DOCTYPE html>
<html lang="en">
<head>
    <title>Data Pegawai</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" />
</head>

<body>
<div class="row konten">
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-4">
          <div class="alert alert-secondary" role="alert">
          <form method="POST" action="tugas2b.php">
              <h3 style="text-align:center; text-transform:uppercase;">Input Data</h3>
              <div class="mb-3">
                <label for="nama">Nama</label> 
                <input id="nama" name="nama" placeholder="Nama lengkap" type="text" required="required" class="form-control">
              </div>
              <div class="form-group">
                <label for="pekerjaan">Pekerjaan</label> 
                <div>
                  <select id="pekerjaan" name="pekerjaan" required="required" class="form-select" aria-label="Default select example">
                    <?php 
                    for ($i=1; $i <= 10 ; $i++) { 
                    ?>
                    <option value="pekerjaan <?= $i ?>"> Pekerjaan <?= $i ?></option>
                    <?php } ?>
                  </select>
                </div>
              </div>
              <div class="form-group">
               <label for="hobi">Hobby: </label> 
                <div>
                    <?php 
                    $h=1;
                    while($h <= 10) { 
                    ?>
                    <input type="radio" name= "hobi" value="Hobby <?= $h ?>">Hobby  <?= $h ?>
			<br>
                    <?php $h++; } ?>
                  </select>
                </div>
              </div> 
              <div class="form-group">
                <input name="simpan" type="submit" class="btn btn-primary" value="Simpan">
              </div>
            </form>
				</div>
        </div>
        <?php 
        $nama = $_POST['nama'];
        $pekerjaan = $_POST['pekerjaan'];
        $hobi = $_POST['hobi'];
        $simpan = $_POST['simpan'];    
        ?>
        <?php if (!empty($simpan)) { ?>
				<div class="col-md-8">
          <div class="alert alert-info" role="alert">
            <h3 style="text-align:center; text-transform:uppercase;">Data Pegawai</h3>
          <table class="table table-dark table-hover">
              <thead>
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Nama</th>
                  <th scope="col">Pekerjaan</th>
                  <th scope="col">Hobby</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td><?= $nama; ?></td>
                  <td><?= $pekerjaan; ?></td>
                  <td><?= $hobi; ?></td>
                </tr>
              </tbody>

            </table>
            </div>
				</div>
        <?php } ?>
			</div>
		</div>
	</div>
</div>
</body>
</html>
</body>

</html>