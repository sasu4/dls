<?php
$username = array(
    'name' => 'username',
    'id' => 'username',
    'size' => 30,
    'value' => set_value('username')
);

$password = array(
    'name' => 'password',
    'id' => 'password',
    'size' => 30
);

$remember = array(
    'name' => 'remember',
    'id' => 'remember',
    'value' => 1,
    'checked' => set_value('remember'),
    'style' => 'margin:0;padding:0'
);

$confirmation_code = array(
    'name' => 'captcha',
    'id' => 'captcha',
    'maxlength' => 8
);
?>
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Prihlásenie</h3>
                </div>
                <div class="panel-body">
                    <?php echo form_open($this->uri->uri_string()) ?>
                    <fieldset>
                        <?php echo $this->dx_auth->get_auth_error(); ?>
                        <div class="form-group">
                            <?php echo form_label('Email', $username['id']); ?>
                            <?php echo form_input($username, '', 'class="form-control" placeholder="E-mail" name="email" type="email" autofocus') ?>
                            <?php echo form_error($username['name']); ?>
                        </div>
                        <div class="form-group">
                            <?php echo form_label('Heslo', $password['id']); ?>
                            <?php echo form_password($password, '', 'class="form-control" placeholder="Password" name="password" type="password" value=""') ?>
                            <?php echo form_error($password['name']); ?>
                        </div>
                        <?php if ($show_captcha): ?>

                        <dt>Enter the code exactly as it appears. There is no zero.</dt>
                            <dd><?php echo $this->dx_auth->get_captcha_image(); ?></dd>

                                    <dt><?php echo form_label('Confirmation Code', $confirmation_code['id']); ?></dt>
                                <dd>
                                    <?php echo form_input($confirmation_code); ?>
                                    <?php echo form_error($confirmation_code['name']); ?>
                                </dd>

                            <?php endif; ?>
                            <div class="checkbox">
                                <?php echo form_checkbox($remember); ?>
                                <?php echo form_label('Zapamätať prihlásenie', $remember['id']); ?>
                            </div>
                            <?php echo form_submit('login', 'Prihlásiť', 'class="btn btn-lg btn-success btn-block"'); ?>
                            <?php echo anchor($this->dx_auth->forgot_password_uri, 'Zabudnuté heslo', 'class="btn btn-lg btn-warning btn-block"'); ?>
                            <?php
                            if ($this->dx_auth->allow_registration) {
                                echo anchor($this->dx_auth->register_uri, 'Registrácia', 'class="btn btn-lg btn-info btn-block"');
                            };
                            ?>

                               
                    </fieldset>
                    <?php echo form_close() ?>

                </div>
            </div>
        </div>
    </div>
    <!-- /.container je ukonceny vo footer -->