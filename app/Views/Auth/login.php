
<?= $this->extend($config->viewLayout) ?>

<?= $this->section('main') ?>
<style>
.page-loaded{
    background: linear-gradient(161deg, #26282b 0%, #26282b 49%, #9f8054 100%);
}
.login-container{
	padding-top: 15%;
	padding-bottom: 10%;
}
.footer{
	width:100% !important;
}

	</style>
<?= $this->include('frontwebsite/partials/header') ?>
<style>
.services_content{
    background: linear-gradient(161deg, #26282b 0%, #26282b 49%, #9f8054 100%);
    min-height: 450px !important;
}
.facilities{
    color:white;
    margin-top: 15px !important;
}
    </style>
<body>
<div class="preloader">
  <div class="layer"></div>
  <!-- end layer -->
  <div class="inner">
    <figure><img src="<?php echo base_url()?>public/<?php echo base_url()?>public/assets/images/preloader.gif" alt="Image"></figure>
    <p><span class="text-rotater" data-text="Homepark | Elements | Loading">Loading</span></p>
  </div>
  <!-- end inner --> 
</div>
<!-- end prelaoder -->
<div class="transition-overlay">
  <div class="layer"></div>
</div>
<!-- end transition-overlay -->
<?= $this->include('frontwebsite/partials/sidenavigation') ?>


<div class="login-container">
	<div class="row">
		<div class="col-sm-6 offset-sm-3">

			<div class="card">
				<h2 class="card-header"><?=lang('Auth.loginTitle')?></h2>
				<div class="card-body">

					<?= view('App\Views\Auth\_message_block') ?>

					<form action="/login" method="post">
						<?= csrf_field() ?>

<?php if ($config->validFields === ['email']): ?>
						<div class="form-group">
							<label for="login"><?=lang('Auth.email')?></label>
							<input type="email" class="form-control <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>"
								   name="login" placeholder="<?=lang('Auth.email')?>">
							<div class="invalid-feedback">
								<?= session('errors.login') ?>
							</div>
						</div>
<?php else: ?>
						<div class="form-group">
							<label for="login"><?=lang('Auth.emailOrUsername')?></label>
							<input type="text" class="form-control <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>"
								   name="login" placeholder="<?=lang('Auth.emailOrUsername')?>">
							<div class="invalid-feedback">
								<?= session('errors.login') ?>
							</div>
						</div>
<?php endif; ?>

						<div class="form-group">
							<label for="password"><?=lang('Auth.password')?></label>
							<input type="password" name="password" class="form-control  <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" placeholder="<?=lang('Auth.password')?>">
							<div class="invalid-feedback">
								<?= session('errors.password') ?>
							</div>
						</div>

<?php if ($config->allowRemembering): ?>
						<div class="form-check">
							<label class="form-check-label">
								<input type="checkbox" name="remember" class="form-check-input" <?php if (old('remember')) : ?> checked <?php endif ?>>
								<?=lang('Auth.rememberMe')?>
							</label>
						</div>
<?php endif; ?>

						<br>

						<button type="submit" class="btn btn-primary btn-block"><?=lang('Auth.loginAction')?></button>
					</form>

					<hr>

<?php if ($config->allowRegistration) : ?>
					<p><a href="<?= url_to('register') ?>"><u><?=lang('Auth.needAnAccount')?></u></a></p>
<?php endif; ?>
<?php if ($config->activeResetter): ?>
					<p><a href="<?= url_to('forgot') ?>"><u><?=lang('Auth.forgotYourPassword')?></u></a></p>
<?php endif; ?>
				</div>
			</div>

		</div>
	</div>
</div>
  


<?= $this->endSection() ?>
<!-- end our locations -->
<?= $this->include('frontwebsite/partials/footer_bar') ?>

<?= $this->include('frontwebsite/partials/footer') ?>

</body>
</html>