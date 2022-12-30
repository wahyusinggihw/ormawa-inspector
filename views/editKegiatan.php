<div class="pagetitle">
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="#">Admin</a></li>
      <li class="breadcrumb-item active">Kegiatan</li>
    </ol>
  </nav>
</div>
<div class="row">
  <div class="card shadow py-4">
    <div class="col col-lg-5 mb-2">
      <form action="" method="POST" name="submit">
        <div class="mb-3">
          <label class="form-label" for="namaKegiatan">Nama kegiatan</label>
          <input type="text" class="form-control" id="namaKegiatan" name="namaKegiatan">
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
          <textarea class="form-control" id="deskripsiKegiatan" name="deskripsiKegiatan" rows="3"></textarea>
        </div>
        <button type="submit" name="submit" class="btn btn-primary" onclick="dateCheck()">Tambah</button>
      </form>
    </div>
  </div>
</div>