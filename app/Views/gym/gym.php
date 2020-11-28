<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<p class="h1">Be Healthy With Us!!!</p>
<div class="card-group">
  <div class="card">
    <img class="card-img-top" src="emas.png" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Gold Member</h5>
      <p class="card-text">Bebas GYM selama 1 tahun, dengan waktu yang bisa ditentukan sendiri.</p>
      <p><strong>Rp.1.000.0000</strong></p>
      <a href="http://localhost:8080/notif" class="btn btn-dark">Daftar</a>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="perak.png" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Silver Member</h5>
      <p class="card-text">Bebas GYM selama 1 bulan, dengan waktu yang bisa ditentukan sendiri.</p>
      <p><strong>Rp.100.000</strong></p>
      <a href="#" class="btn btn-dark">Daftar</a>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="perunggu.png" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Bronze Member</h5>
      <p class="card-text">Bebas GYM hanya 1 hari, dengan waktu yang bisa ditentukan sendiri.</p>
      <p><strong>Rp.15.000</strong></p>
      <a href="" class="btn btn-dark">Daftar</a>
    </div>
  </div>
</div>
<?= $this->endSection(); ?>