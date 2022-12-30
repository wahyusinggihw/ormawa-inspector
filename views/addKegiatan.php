<?php
require_once 'db/kegiatan.php';
require_once 'db/services.php';

if (isset($_POST['submit'])) {
  $roleCatcher = new Services();
  $kegiatan = new Kegiatan();
  $role = $roleCatcher->roleCatcher();

  $post_namaKegiatan = $_POST['namaKegiatan'];
  // $post_tanggalPelaksanaan = $_POST['tanggalPelaksanaan'];
  $post_statusKegiatan = $_POST['statusKegiatan'];
  $post_deskripsiKegiatan = $_POST['deskripsiKegiatan'];

  $status = $kegiatan->insertOne([
    'idOrmawa' => $role,
    'details' => [
      'nama' => $post_namaKegiatan,
      'pelaksanaan' => '10-10-2021',
      'status' => $post_statusKegiatan,
      'deskripsi' => 'dari add Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod.',
    ],
  ]);

  if ($status->getInsertedId()) {
    echo ("<script>alert('Data berhasil di tambahkan');</script>");
    echo ("<script>location.href = '" . 'http://localhost/ormawa-inspector/?page=kegiatan' . "';</script>");
  }
}

?>

<div class="pagetitle">
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="#">Admin</a></li>
      <li class="breadcrumb-item"><a href="#">Kegiatan</a></li>
      <li class="breadcrumb-item active">Tambah Kegiatan</li>
    </ol>
  </nav>
</div>
<div class="row">
  <div class="card shadow py-4">
    <div class="col col-lg-5 mb-2">
      <form action="" method="POST" name="submit">
        <div class="mb-3">
          <label class="form-label" for="namaKegiatan">Nama kegiatan</label>
          <input type="text" class="form-control" id="namaKegiatan" name="namaKegiatan" required>
        </div>
        <div class="mb-3">
          <label class="form-label" for="tanggalPelaksanann">Tanggal pelaksanaan</label>
          <input type="date" class="form-control" id="tanggalPelaksanann" name="tanggalPelaksanann">
        </div>
        <div class="mb-3">
          <!-- label -->
          <label class="form-label" for="statusKegiatan">Status</label>
          <input type="text" class="form-control" id="statusKegiatan" value="pending" name="statusKegiatan" readonly>
        </div>
        <div class="mb-3">
          <label class="form-label" for="deskripsiKegiatan">Deskripsi kegiatan</label>
          <textarea class="form-control" id="deskripsiKegiatan" name="deskripsiKegiatan" rows="3" required></textarea>
        </div>
        <button type="submit" name="submit" class="btn btn-primary form-button" onclick="dateCheck()">Tambah</button>
      </form>
    </div>
  </div>
</div>