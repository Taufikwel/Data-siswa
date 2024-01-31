<?php
include'config.php';
$id_pendaftaran = ' ';
$nama = ' ';
$alamat =  ' ';
$jenis_kelamin =  ' ';
$agama = ' ';
$sekolah_asal = ' ';
$tangga_lahir = ' ';
$desa =' ';
$kecamatan = ' ';
$kota =' ';
$provinsi = ' ';
$kode_pos =' ';
$no_tel = ' ';
$email =  ' ';


if (isset($_GET['edit'])){
  $id_pendaftaran = $_GET['edit'];
  $sql = "SELECT * FROM pendaftaran WHERE id_pendaftaran = '$id_pendaftaran';";
  $query = mysqli_query($db,$sql);
  $result = mysqli_fetch_assoc($query);
  $nama = $result ['nama'];
  $alamat = $result ['alamat'];
  $jenis_kelamin =  $result ['jenis_kelamin'];
  $agama =  $result ['agama'];
  $sekolah_asal = $result ['sekolah_asal'];
  $tangga_lahir = $result ['tangga_lahir'];
  $no_tel =  $result ['no_tel'];
  $email =  $result ['email'];
  $desa =  $result ['desa'];
  $kecamatan =  $result ['kecamatan'];
  $kota = $result ['kota'];
  $provinsi = $result ['provinsi'];
  $kode_pos =  $result ['kode_pos'];
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMK Negeri 1 Lagos</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">SMK Negeri 1 Lagos</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        <a class="nav-link" href="kelola.php">Pendaftaran</a>
      </div>
    </div>
  </div>
</nav>
<div class="container mt-4">
<h2>Formulir Pendaftaran Siswa SMK Negeri 1 Lagos</h2><br>
<form action="proses.php" method="POST">
<input type="hidden" value="<?php echo $id_pendaftaran;?>" name="id_pendaftaran">
<div class="mb-3">
  <label for="nama" class="form-label">Nama: </label>
  <input type="text" class ="form-control" name="nama" value ="<?php echo $nama;?>" placeholder="nama lengkap" />
</div>
<div class="mb-3">
<label for="tangga_lahir" class="form-label">Tanggal Lahir: </label>
  <input type="date" class ="form-control" name="tangga_lahir" value ="<?php echo $tangga_lahir;?>" />
</div>
<div class="mb-3">
<div class="form-check">
<label for="jenis_kelamin" class="form-label">Jenis Kelamin:</label><br>
  <input class="form-check-input" type="radio" name="jenis_kelamin" <?php if($jenis_kelamin == 'Laki-laki'){echo "checked";}?> value="Laki-laki">
  <label class="form-check-label" for="laki-laki">Laki-Laki</label><br>
  <input class="form-check-input" type="radio" name="jenis_kelamin" <?php if($jenis_kelamin == 'Perempuan'){echo "checked";}?> value="Perempuan">
  <label class="form-check-label" for="laki-laki">Perempuan</label>
</div>
</div>
<div class="mb-3">
    <label for="agama" class="form-label">Agama: </label>
            <select name="agama" class="form-control">
                <option <?php if($agama == 'Islam'){echo "selected";}?> value="Islam">Islam</option>
                <option <?php if($agama == 'Kristen'){echo "selected";}?> value="Kristen">Kristen</option>
                <option <?php if($agama == 'Hindu'){echo "selected";}?> value="Hindu">Hindu</option>
                <option <?php if($agama == 'Budha'){echo "selected";}?> value="Budha">Budha</option>
                <option <?php if($agama == 'Atheis'){echo "selected";}?> value="Atheis">Atheis</option>
            </select>
</div>
<div class="mb-3">
  <label for="alamat" class="form-label">Alamat</label>
  <textarea class="form-control" name="alamat"rows="3"> <?php echo $alamat;?> </textarea>
</div>
<div class="mb-3">
  <label for="desa" class="form-label">Desa:</label>
  <input type="text" class="form-control" name="desa"  value ="<?php echo $desa;?>"/>
</div>
<div class="mb-3">
  <label for="kecamatan" class="form-label">Kecamatan:</label>
  <input type="text" class="form-control" name="kecamatan"  value ="<?php echo $kecamatan;?>"/>
</div>
<div class="mb-3">
    <label for="kota" class="form-label">Kabupaten/Kota: </label>
            <select name="kota" class="form-control">
                <option <?php if($kota == 'Kt.Bandung'){echo "selected";}?> value="Kt.Bandung">Kt.Bandung</option>
                <option <?php if($kota == 'Bandung Barat'){echo "selected";}?> value="Bandung Barat">Bandung Barat</option>
                <option <?php if($kota == 'Cimahi'){echo "selected";}?> value="Cimahi">Cimahi</option>
                <option <?php if($kota == 'Sumedang'){echo "selected";}?> value="Sumedang">Sumedang</option>
                <option <?php if($kota == 'KAB.Bandung'){echo "selected";}?> value="KAB.Bandung">KAB.Bandung</option>
            </select>
</div>
<div class="mb-3">
    <label for="provinsi" class="form-label">Provinsi: </label>
            <select name="provinsi" class="form-control">
                <option <?php if($provinsi == 'Banten'){echo "selected";}?> value="Banten">Banten</option>
                <option <?php if($provinsi == 'Jawa Barat'){echo "selected";}?> value="Jawa Barat">Jawa Barat</option>
                <option <?php if($provinsi == 'DKI Jakarta'){echo "selected";}?> value="DKI Jakarta">DKI Jakarta</option>
                <option <?php if($provinsi == 'Jawa Tengah'){echo "selected";}?> value="Banten">Jawa Tengah</option>
                <option <?php if($provinsi == 'DI Yogyakarta'){echo "selected";}?> value="DI Yogyakarta">DI Yogyakarta</option>
                <option <?php if($provinsi == 'Jawa Timur'){echo "selected";}?> value="Jawa Timur">Jawa Timur</option>
            </select>
</div>
<div class="mb-3">
    <label for="kode_pos" class="form-label">Kode Pos: </label>
    <input type="text" class ="form-control" name="kode_pos"  value ="<?php echo $kode_pos;?>" placeholder="kode_pos" />
</div>
<div class="mb-3">
    <label for="no_tel" class="form-label">No Telepon: </label>
    <input type="text" class ="form-control" name="no_tel" value ="<?php echo $no_tel;?>" placeholder="no_tel" />
</div>
<div class="mb-3">
    <label for="email" class="form-label">Email: </label>
    <input type="email" class ="form-control" name="email" value ="<?php echo $email;?>" placeholder="email" />
</div>
<div class="mb-3">
    <label for="sekolah_asal" class="form-label">Sekolah Asal: </label>
    <input type="text" class ="form-control" name="sekolah_asal"  value ="<?php echo $sekolah_asal;?>" placeholder="nama sekolah" />
</div>
<div class="mb-3 row mt-4">
  <div class="col">
    <?php
    if (isset($_GET['edit'])){
        ?>
        <button type="submit" name="aksi" value="edit" class="btn btn-primary">
            Simpan perubahan
        </button>
    <?php
    }else{
?>
    <button type="submit" name="aksi" value="add" class="btn btn-primary">
            Daftar
        </button>
    <?php
    }
    ?>
    <a href ="index.php" type="button" class="btn btn-danger">Batal</a>
  </div>
</div>
    </form>
</div>
    </body>
</html>