<?php

$first_name = array(
    'name' => 'first_name',
    'id' => 'first_name',
    'size' => 30,
    'value' => set_value('first_name')
);

$surname = array(
    'name' => 'surname',
    'id' => 'surname',
    'size' => 30,
    'value' => set_value('surname')
);

$password = array(
    'name' => 'password',
    'id' => 'password',
    'size' => 30,
    'value' => set_value('password')
);

$confirm_password = array(
    'name' => 'confirm_password',
    'id' => 'confirm_password',
    'size' => 30,
    'value' => set_value('confirm_password')
);

$email = array(
    'name' => 'email',
    'id' => 'email',
    'maxlength' => 80,
    'size' => 30,
    'value' => set_value('email')
);
?>
<section id="register_form">
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="login-panel panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Registrácia</h3>
                </div>
                <div class="panel-body">
                    <?php echo form_open($this->uri->uri_string()) ?>
                    <fieldset>
                        <div class="form-group">
                            <?php echo form_label('Meno', $first_name['id']); ?>
                            <?php echo form_input($first_name, '', 'class="form-control" placeholder="Meno"') ?>
                            <?php echo form_error($first_name['name']); ?>
                        </div>
                        <div class="form-group">
                            <?php echo form_label('Priezvisko', $surname['id']); ?>
                            <?php echo form_input($surname, '', 'class="form-control" placeholder="Priezvisko"') ?>
                            <?php echo form_error($surname['name']); ?>
                        </div>
                        <div class="form-group">
                            <?php echo form_label('Heslo', $password['id']); ?>
                            <?php echo form_password($password, '', 'class="form-control" placeholder="Heslo"') ?>
                            <?php echo form_error($password['name']); ?>
                        </div>
                        <div class="form-group">
                            <?php echo form_label('Potvrdiť heslo', $confirm_password['id']); ?>
                            <?php echo form_password($confirm_password, '', 'class="form-control" placeholder="Potvrdiť heslo"'); ?>
                            <?php echo form_error($confirm_password['name']); ?>
                        </div>
                        <div class="form-group">
                            <?php echo form_label('Email', $email['id']); ?>
                            <?php echo form_input($email, '', 'class="form-control" placeholder="E-mail"'); ?>
                            <?php echo form_error($email['name']); ?>
                        </div>

                        <?php if ($this->dx_auth->captcha_registration): ?>


                        <div class="form-group">
                                <?php
                                // Show recaptcha imgage

                                echo $this->dx_auth->get_recaptcha_image();
                                // Show reload captcha link
                                ?>
                                    </div>
                                <div class="form-group">
                                    <?php
                                    echo $this->dx_auth->get_recaptcha_reload_link();
                                    // Show switch to image captcha or audio link
                                    echo $this->dx_auth->get_recaptcha_switch_image_audio_link();
                                    ?>
                                </div>
                                <div class="form-group">

                                    <?php echo $this->dx_auth->get_recaptcha_label(); ?>

                                    <?php echo $this->dx_auth->get_recaptcha_input(); ?>
                                    <?php echo form_error('recaptcha_response_field'); ?>


                                    <?php
                                    // Get recaptcha javascript and non javasript html
                                    echo $this->dx_auth->get_recaptcha_html();
                                    ?>
                                </div>
                            <?php endif; ?>


                        <?php echo form_submit('register', 'Registrovať', 'class="btn btn-lg btn-success"'); ?>

                    </fieldset>
                    <?php echo form_close() ?>
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
</div>
</section>