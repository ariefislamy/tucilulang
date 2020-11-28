<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="row justify-content-center mt-5">
    <div class="card" style="width: 18rem;">
     <img class="card-img-top" src="gym.jpg" alt="Card image cap">
     <div class="card-body">
       <h5 class="card-title">Platynum Gym</h5>
       <p class="card-text">Mari Bergabung Bersama Kami!!!</p>
       <a href="https://maps.app.goo.gl/pRMkTNMwut56uJHp6" class="btn btn-dark btn-sm">Location</a>
     </div>
    </div>
</div>
<?= $this->endSection(); ?>
