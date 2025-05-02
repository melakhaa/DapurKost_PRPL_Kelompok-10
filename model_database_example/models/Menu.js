const mongoose = require('mongoose');

const menuSchema = new mongoose.Schema({
  nama: { type: String, required: true },
  harga: { type: Number, required: true },
  deskripsi: { type: String, required: false }
});

module.exports = mongoose.model('Menu', menuSchema);
