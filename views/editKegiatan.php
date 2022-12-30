<?php
if ($_SESSION['role'] == "mahasiswa" || $_SESSION['role'] == "guest") {
  echo ("<script>location.href = '" . 'http://localhost/ormawa-inspector/?page=index' . "';</script>");
  exit;
}

require_once 'db/kegiatan.php';
require_once 'db/users.php';

$kegiatan = new Kegiatan();
// var_dump($_GET['id']);
// die;
// $kegiatan->getKegiatan($_GET['id']);
$id = $_GET['id'];

// ambil data dari database
$kegiatanCollection = $kegiatan->getKegiatan($id);
foreach ($kegiatanCollection as $item) {
  $nama = $item['details']['nama'];
  $status = $item['details']['status'];
  $deskripsi = $item['details']['deskripsi'];
}
// die;

if (isset($_POST['update'])) {
  $status = $kegiatan->updateData($id, [
    'details.nama' => $_POST['namaKegiatan'],
    'details.tanggalPelaksanaan' => $_POST['tanggalPelaksanann'],
    'details.status' => $_POST['statusOption'],
    'details.deskripsi' => $_POST['deskripsiKegiatan'],
  ]);


  if ($status->getModifiedCount()) {
    echo ("<script>alert('Data berhasil di update');</script>");
    echo ("<script>location.href = '" . 'http://localhost/ormawa-inspector/?page=kegiatan' . "';</script>");
    // echo ("<script>location.href = '" . '#' . "';</script>");
  }
}

?>

<script>
  $('form-select').on('change', function() {
    alert(this.value);
  });
</script>

<div class="pagetitle">
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="#">Admin</a></li>
      <li class="breadcrumb-item"><a href="#">Kegiatan</a></li>
      <li class="breadcrumb-item active">Update Kegiatan</li>
    </ol>
  </nav>
</div>
<div class="row">
  <div class="card shadow py-4">
    <div class="col col-lg-5 mb-2">
      <form action="" method="POST" name="update">
        <div class="mb-3">
          <label class="form-label" for="namaKegiatan">Nama kegiatan</label>
          <input type="text" class="form-control" id="namaKegiatan" name="namaKegiatan" value="<?= $nama ?>">
        </div>
        <div class="mb-3">
          <label class="form-label" for="tanggalPelaksanann">Tanggal pelaksanaan</label>
          <input type="date" class="form-control" id="tanggalPelaksanann" name="tanggalPelaksanann">
        </div>
        <div class="mb-3">
          <label class="form-label" for="statusOption">Status</label>
          <?php if ($_SESSION['role'] == "admin" && ($status != 'selesai')) : ?>
            <select class="form-select" aria-label="statusOption" name="statusOption" id="statusOption" onchange="optionState(statusOption)">
              <option class=" form-option" selected><?= $status ?></option>
              <option class="form-option" value="selesai">selesai</option>
            </select>
          <?php else : ?>
            <input type="text" class="form-control" id="statusKegiatan" value="<?= $status ?>" name="statusKegiatan" readonly>
          <?php endif; ?>

        </div>
        <div class="mb-3">
          <label class="form-label" for="deskripsiKegiatan">Deskripsi kegiatan</label>
          <textarea class="form-control" id="deskripsiKegiatan" name="deskripsiKegiatan" rows="3"><?= $deskripsi ?></textarea>
        </div>
        <button type="update" name="update" class="btn btn-primary form-button" onclick="buttonState()">Update</button>
      </form>
    </div>
  </div>
</div>