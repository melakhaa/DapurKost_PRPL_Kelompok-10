# DapurKost Backend (MongoDB + Express.js)

## Setup
```bash
cd backend
npm install
```
Buat file `.env` berdasarkan `.env.example`

## Menjalankan Server
```bash
node server.js
```

## Koleksi MongoDB
- menu: { nama: String, harga: Number, deskripsi: String }


## Koleksi Tambahan

- review: {
    user: String,
    resepId: ObjectId (refer ke Menu),
    komentar: String,
    rating: Number,
    tanggal: Date
  }

- user: {
    email: String,
    password: String,
    role: 'admin' | 'user'
  }
