// DATA ADMIN
db.users.insertMany([
  {
    _id: "admin",
    name: "Admin",
    email: "admin@gmail.com",
    password: "admin",
    role: "admin",
  },
  {
    _id: "bem",
    name: "bem",
    email: "bem@gmail.com",
    password: "bem",
    role: "bem",
  },
  {
    _id: "pokja",
    name: "pokja",
    email: "pokja@gmail.com",
    password: "pokja",
    role: "pokja",
  },
  {
    _id: "hmjti",
    name: "hmjti",
    email: "hmjti@gmail.com",
    password: "hmjti",
    role: "hmjti",
  },
  {
    _id: "hmjtekin",
    name: "hmjtekin",
    email: "hmjtekin@gmail.com",
    password: "hmjtekin",
    role: "hmjtekin",
  },
]);

// DATA DOSEN UNTUK REGISTER
db.dosen_pembimbing.insertMany([
  {
    name: "Dosen BEM",
    email: "bem_dosen@gmail.com",
    password: "password",
  },
  {
    name: "Dosen POKJA",
    email: "pokja@gmail.com",
    password: "password",
  },
  {
    name: "Dosen HMJ TI",
    email: "hmjti@gmail.com",
    password: "password",
  },
  {
    name: "Dosen HMJ TEKIN",
    email: "tekin@gmail.com",
    password: "password",
  },
]);

// DATA KEGIATAN
db.kegiatans.insertMany([
  {
    role: "bem",
    namaOrmawa: "Badan Eksekutif Mahasiswa FTK",
    kegiatan: [
      {
        nama: "Kegiatan BEM 1",
        pelaksanaan: "2021-01-01",
        status: "pending",
        deskripsi:
          "Kegiatan 1 adalah Lorem ipsum dolor sit amet, consectetur adipiscing elit.",
      },
      {
        nama: "Kegiatan BEM 2",
        pelaksanaan: "2021-01-01",
        status: "pending",
        deskripsi:
          "Kegiatan 2 adalah Lorem ipsum dolor sit amet, consectetur adipiscing elit.",
      },
      {
        nama: "Kegiatan BEM 3",
        pelaksanaan: "2021-01-01",
        status: "pending",
        deskripsi:
          "Kegiatan 3 adalah Lorem ipsum dolor sit amet, consectetur adipiscing elit.",
      },
    ],
  },
  {
    role: "pokja",
    namaOrmawa: "Kelompok Kerja dan Penalaran",
    kegiatan: [
      {
        nama: "Kegiatan pokja 1",
        pelaksanaan: "2021-01-01",
        status: "pending",
        deskripsi:
          "Kegiatan 1 adalah Lorem ipsum dolor sit amet, consectetur adipiscing elit.",
      },
      {
        nama: "Kegiatan pokja 2",
        pelaksanaan: "2021-01-01",
        status: "pending",
        deskripsi:
          "Kegiatan 2 adalah Lorem ipsum dolor sit amet, consectetur adipiscing elit.",
      },
      {
        nama: "Kegiatan pokja 3",
        pelaksanaan: "2021-01-01",
        status: "pending",
        deskripsi:
          "Kegiatan 3 adalah Lorem ipsum dolor sit amet, consectetur adipiscing elit.",
      },
    ],
  },
  {
    role: "hmjti",
    namaOrmawa: "Himpunan Mahasiswa Jurusan Teknik Informatika",
    kegiatan: [
      {
        nama: "Kegiatan hmjti 1",
        pelaksanaan: "2021-01-01",
        status: "pending",
        deskripsi:
          "Kegiatan 1 adalah Lorem ipsum dolor sit amet, consectetur adipiscing elit.",
      },
      {
        nama: "Kegiatan hmjti 2",
        pelaksanaan: "2021-01-01",
        status: "pending",
        deskripsi:
          "Kegiatan 2 adalah Lorem ipsum dolor sit amet, consectetur adipiscing elit.",
      },
      {
        nama: "Kegiatan hmjti 3",
        pelaksanaan: "2021-01-01",
        status: "pending",
        deskripsi:
          "Kegiatan 3 adalah Lorem ipsum dolor sit amet, consectetur adipiscing elit.",
      },
    ],
  },
  {
    role: "hmjtekin",
    namaOrmawa: "Himpunan Mahasiswa Jurusan Teknologi Industri",
    kegiatan: [
      {
        nama: "Kegiatan hmjtekin 1",
        pelaksanaan: "2021-01-01",
        status: "pending",
        deskripsi:
          "Kegiatan 1 adalah Lorem ipsum dolor sit amet, consectetur adipiscing elit.",
      },
      {
        nama: "Kegiatan hmjtekin 2",
        pelaksanaan: "2021-01-01",
        status: "pending",
        deskripsi:
          "Kegiatan 2 adalah Lorem ipsum dolor sit amet, consectetur adipiscing elit.",
      },
      {
        nama: "Kegiatan hmjtekin 3",
        pelaksanaan: "2021-01-01",
        status: "pending",
        deskripsi:
          "Kegiatan 3 adalah Lorem ipsum dolor sit amet, consectetur adipiscing elit.",
      },
    ],
  },
]);

// DATA MAHASISWA
db.users.insertMany([
  {
    role: "mahasiswa",
    name: "Mahasiswa 1",
    Prodi: "Computer Science",
    email: "mahasiswa1@gmail.com",
    password: "mahasiswa",
  },
  {
    role: "mahasiswa",
    name: "Mahasiswa 2",
    Prodi: "Computer Science",
    email: "mahasiswa2@gmail.com",
    password: "mahasiswa",
  },
  {
    role: "mahasiswa",
    name: "Mahasiswa 3",
    Prodi: "Computer Science",
    email: "mahasiswa3@gmail.com",
    password: "mahasiswa",
  },
  {
    role: "mahasiswa",
    name: "Mahasiswa 4",
    Prodi: "Computer Science",
    email: "mahasiswa3@gmail.com",
    password: "mahasiswa",
  },
]);
