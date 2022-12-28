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
    _id: "admin2",
    name: "Admin2",
    email: "admin22@gmail.com",
    password: "admin2",
    role: "admin",
  },
  {
    _id: "bem",
    name: "bem",
    email: "bem@gmail.com",
    password: "bem",
    role: "bem",
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
    nama: "bem",
    kegiatan: [
      {
        nama: "Kegiatan BEM",
        pelaksanaan: "2021-01-01",
        status: "pending",
      },
      {
        nama: "Kegiatan BEM",
        pelaksanaan: "2021-01-01",
        status: "pending",
      },
      {
        nama: "Kegiatan BEM",
        pelaksanaan: "2021-01-01",
        status: "pending",
      },
    ],
  },
  {
    nama: "pokja",
    kegiatan: [
      {
        nama: "Kegiatan pokja",
        pelaksanaan: "2021-01-01",
        status: "pending",
      },
      {
        nama: "Kegiatan pokja",
        pelaksanaan: "2021-01-01",
        status: "pending",
      },
      {
        nama: "Kegiatan pokja",
        pelaksanaan: "2021-01-01",
        status: "pending",
      },
    ],
  },
  {
    nama: "hmjti",
    kegiatan: [
      {
        nama: "Kegiatan hmjti",
        pelaksanaan: "2021-01-01",
        status: "pending",
      },
      {
        nama: "Kegiatan hmjti",
        pelaksanaan: "2021-01-01",
        status: "pending",
      },
      {
        nama: "Kegiatan hmjti",
        pelaksanaan: "2021-01-01",
        status: "pending",
      },
    ],
  },
  {
    nama: "hmjtekin",
    kegiatan: [
      {
        nama: "Kegiatan hmjtekin",
        pelaksanaan: "2021-01-01",
        status: "pending",
      },
      {
        nama: "Kegiatan hmjtekin",
        pelaksanaan: "2021-01-01",
        status: "pending",
      },
      {
        nama: "Kegiatan hmjtekin",
        pelaksanaan: "2021-01-01",
        status: "pending",
      },
    ],
  },
]);
