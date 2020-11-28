<?= $this->include('layout/header'); ?>
<link rel="stylesheet" href="bootstrap/css/global.css">
    <section class="container-fluid bg">
      <section class="row justify-content-center">
        <section class="col-12 col-sm-6 col-md-3">
            <form class="form-container">
                <div class="form-group">
                <h5 class="text-center">
                <span class="font-weight-bold text-dark">REGISTRASI</span></h5>
                </div>
                    <div class="form-group">
                        <input type="email" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="EnterEmail">
                    </div>
                    <div class="form-group">
                        <input type="username" class="form-control" id="exampleInputUsername1" placeholder="EnterUsername">
                    </div>
                    <div class="form-group">
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" id="exampleInputPassword2" placeholder="ConfirmPassword">
                </div>
                    <div class="form-group form-check">
                         <input type="checkbox" class="form-check-input" id="exampleCheck1">
                         <label class="form-check-label" for="exampleCheck1">I Accept All Terms and Permisions</label>
                    </div>
                         <a href="Dashboard" class="btn btn-dark btn-block">Registrasi</a>
                         <h12 class="text-justified">
                         <a href="Login" class="text-dark">Already Have Account</h12></a>
            </form>
        </section>
      </section>
    </section>
<?= $this->include('layout/footer'); ?>

