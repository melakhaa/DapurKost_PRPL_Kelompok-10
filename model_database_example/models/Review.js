const mongoose = require('mongoose');

const reviewSchema = new mongoose.Schema({
  user: { type: String, required: true },
  resepId: { type: mongoose.Schema.Types.ObjectId, ref: 'Menu', required: true },
  komentar: { type: String, required: true },
  rating: { type: Number, required: true, min: 1, max: 5 },
  tanggal: { type: Date, default: Date.now }
});

module.exports = mongoose.model('Review', reviewSchema);
