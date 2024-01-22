
<?= $this->extend($config->viewLayout) ?>

<?= $this->section('main') ?>
<style>
.page-loaded{
    background: linear-gradient(161deg, #26282b 0%, #26282b 49%, #9f8054 100%);
}
.register-container{
	padding-top: 15%;
	padding-bottom: 10%;
}
.footer{
	width:100% !important;
}

	</style>
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
<?= $this->include('frontwebsite/partials/header') ?>
<?= $this->include('frontwebsite/partials/sidenavigation') ?>

<!-- end side-navigation -->
<div class="register-container">
    <div class="row">
        <div class="col-sm-6 offset-sm-3">

            <div class="card">
                <h2 class="card-header"><?=lang('Auth.register')?></h2>
                <div class="card-body">

                    <?= view('App\Views\Auth\_message_block') ?>

                    <form action="<?= url_to('register') ?>" method="post">
                        <?= csrf_field() ?>

                        <div class="form-group">
                            <label for="email"><?=lang('Auth.email')?></label>
                            <input type="email" class="form-control <?php if (session('errors.email')) : ?>is-invalid<?php endif ?>"
                                   name="email" aria-describedby="emailHelp" placeholder="<?=lang('Auth.email')?>" value="<?= old('email') ?>">
                            <small id="emailHelp" class="form-text text-muted"><?=lang('Auth.weNeverShare')?></small>
                        </div>

                        <div class="form-group">
                            <label for="username"><?=lang('Auth.agencyName')?></label>
                            <input type="text" class="form-control <?php if (session('errors.agencyName')) : ?>is-invalid<?php endif ?>" name="agencyName" placeholder="<?=lang('Auth.agencyName')?>" value="<?= old('agencyName') ?>">
                        </div>

                        <div class="form-group">
                            <label for="username"><?=lang('Auth.propertiesAvailable')?></label>
                            <input type="number" class="form-control <?php if (session('errors.propertiesAvailable')) : ?>is-invalid<?php endif ?>" name="propertiesAvailable" placeholder="<?=lang('Auth.propertiesAvailable')?>" value="<?= old('propertiesAvailable') ?>">
                        </div>

                        <div class="form-group">
                            <label for="username"><?=lang('Auth.locationCity')?></label>
                            <input type="text" class="form-control <?php if (session('errors.locationCity')) : ?>is-invalid<?php endif ?>" name="locationCity" placeholder="<?=lang('Auth.locationCity')?>" value="<?= old('locationCity') ?>">
                        </div>

                        <div class="form-group">
                            <label for="username"><?=lang('Auth.username')?></label>
                            <input type="text" class="form-control <?php if (session('errors.username')) : ?>is-invalid<?php endif ?>" name="username" placeholder="<?=lang('Auth.username')?>" value="<?= old('username') ?>">
                        </div>

                        <div class="form-group">
                            <label for="password"><?=lang('Auth.password')?></label>
                            <input type="password" name="password" class="form-control <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" placeholder="<?=lang('Auth.password')?>" autocomplete="off">
                        </div>

                        <div class="form-group">
                            <label for="pass_confirm"><?=lang('Auth.repeatPassword')?></label>
                            <input type="password" name="pass_confirm" class="form-control <?php if (session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>" placeholder="<?=lang('Auth.repeatPassword')?>" autocomplete="off">
                        </div>

                        <br>

                        <button type="submit" class="btn btn-dark btn-block"><?=lang('Auth.register')?></button>
                    </form>


                    <hr>

                    <p><?=lang('Auth.alreadyRegistered')?> <a href="<?= url_to('login') ?>"><?=lang('Auth.signIn')?></a></p>
                </div>
            </div>

        </div>
    </div>
</div>
<?= $this->include('frontwebsite/partials/footer_bar') ?>

<?= $this->include('frontwebsite/partials/footer') ?>
<?= $this->endSection() ?>

