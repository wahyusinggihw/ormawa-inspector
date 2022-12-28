// DATA ADMIN
db.users.insertMany([
  {
    _id: "admin",
    name: "Admin",
    email: "admin@gmail.com",
    password: "wahyu",
  },
  {
    _id: "admin2",
    name: "Admin2",
    email: "admin22@gmail.com",
    password: "admin2",
  },
  {
    _id: {
      $oid: "63abc7287325000085007065",
    },
    email: "123",
  },
]);
// DATA DOSEN UNTUK REGISTER
db.dosen_pembimbing.insertMany([
  {
    name: "Dosen BEM",
    email: "bem@gmail.com",
    password: "password",
    isLogin: false,
  },
  {
    name: "Dosen POKJA",
    email: "pokja@gmail.com",
    password: "password",
    isLogin: false,
  },
  {
    name: "Dosen HMJ TI",
    email: "hmjti@gmail.com",
    password: "password",
    isLogin: false,
  },
  {
    name: "Dosen HMJ TEKIN",
    email: "tekin@gmail.com",
    password: "password",
    isLogin: false,
  },
]);
