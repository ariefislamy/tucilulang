<?= $this->include('Admin/layouts/head'); ?>
    <?= $this->include('Admin/layouts/header'); ?>
    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-6">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Visitor</h5>

                <p class="card-text">
                 Trafic visitor this month
                </p>

                <a href="#" class="card-link">show</a>
              </div>
            </div>

            <div class="card card-primary card-outline">
              <div class="card-body">
                <h5 class="card-title">Tools</h5>

                <p class="card-text">
                  Report tools this month
                </p>
                <a href="#" class="card-link">show</a>
              </div>
            </div><!-- /.card -->
          </div>
          <!-- /.col-md-6 -->
          <div class="col-lg-6">
            <div class="card">
              <div class="card-header">
                <h5 class="m-0">Member</h5>
              </div>
              <div class="card-body">
                <h6 class="card-title">Platinum GYM Members</h6>

                <p class="card-text"></p>
                <a href="#" class="btn btn-dark">show</a>
              </div>
            </div>

            <div class="card card-primary card-outline">
              <div class="card-header">
                <h5 class="m-0">Program</h5>
              </div>
              <div class="card-body">
                <h6 class="card-title">Platinum GYM Treatments</h6>

                <p class="card-text"></p>
                <a href="#" class="btn btn-dark">show</a>
              </div>
            </div>
          </div>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
    <?= $this->include('Admin/layouts/footer'); ?>
  