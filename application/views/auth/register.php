<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $titlePage; ?></title>
  <link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap.css">

  <link rel="shortcut icon" href="<?= base_url(config_item('favicon')); ?>" type="image/x-icon">
  <link rel="stylesheet" href="<?= base_url(); ?>assets/css/app.css">

</head>

<body>
  <nav class="navbar navbar-expand navbar-dark d-none d-md-block d-lg-block d-xl-block fixed-top desktop">
    <div class="container" data-aos="zoom-out">
      <a class="navbar-brand" href="#">
        <img src="<?= base_url(config_item('logo')); ?>" width="35" height="35" alt="AkbrTemplate" title="Logo AkbrTemplate" />
      </a>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url(); ?>" title="AkbrTemplate"><?= $titleWeb; ?></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- <section class="pattern"> -->
  <div id="auth">
    <div class="container">
      <div class="row">
        <div class="mx-auto col-md-7 col-sm-12">
          <div class="pt-4 card">
            <div class="card-body">
              <div class="mb-5 text-center">
                <img src="<?= base_url(config_item('logo')); ?>" height="48" class='mb-4'>
                <h3>Registration</h3>
                <p>Please fill the form to register.</p>
              </div>
              <form action="<?= base_url('auth/register'); ?>" method="POST">

                <div class="row">
                  <div class="col-md-6 col-12">
                    <div class="form-group">
                      <label for="first-name-column">Name</label>
                      <input type="text" id="name" class="form-control" name="name" value="<?= set_value('name'); ?>">
                      <?= form_error('name', '<small class="text-danger">', '</small>'); ?>
                    </div>
                  </div>
                  <div class="col-md-6 col-12">
                    <div class="form-group">
                      <label for="email-id-column">Email</label>
                      <input type="email" id="email-id-column" class="form-control" name="email" value="<?= set_value('email'); ?>">
                      <?= form_error('email', '<small class="text-danger">', '</small>'); ?>
                    </div>
                  </div>
                  <div class=" col-md-6 col-12">
                    <div class="form-group">
                      <label for="password-id-column">password</label>
                      <input type="password" id="password-id-column" class="form-control" name="password">
                      <?= form_error('password', '<small class="text-danger">', '</small>'); ?>
                    </div>
                  </div>
                  <div class="col-md-6 col-12">
                    <div class="form-group">
                      <label for="confirm_password-id-column">confirm password</label>
                      <input type="password" id="confirm_password-id-column" class="form-control" name="confirm_password">
                      <?= form_error('confirm_password', '<small class="text-danger">', '</small>'); ?>
                    </div>
                  </div>
                </diV>

                <a href="<?= base_url('auth'); ?>">Have an account? Login</a>
                <div class="clearfix">
                  <button class="btn btn-primary float-end">Register</button>
                </div>
              </form>

            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
  <!-- </section> -->
  <script src="<?= base_url(); ?>assets/js/feather-icons/feather.min.js"></script>
  <script src="<?= base_url(); ?>assets/js/app.js"></script>

  <script src="<?= base_url(); ?>assets/js/main.js"></script>
</body>

</html>