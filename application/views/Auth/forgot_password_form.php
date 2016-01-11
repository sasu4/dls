<?php
$login = array(
	'name'	=> 'login',
	'id'	=> 'login',
	'maxlength'	=> 80,
	'size'	=> 30,
	'value' => set_value('login')
);
?>
<section>
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Prihlásenie</h3>
                </div>
                <div class="panel-body">

<?php echo form_open($this->uri->uri_string()); ?>
<fieldset>
<?php echo $this->dx_auth->get_auth_error(); ?>
    <?php echo form_label('Vložte vaše používateľské meno alebo email', $login['id']); ?>
    <div class="form-group">
        <?php echo form_input($login, '', 'class="form-control"'); ?>
        <?php echo form_error($login['name']); ?>
    </div>
    <?php echo form_submit('reset', 'Reset', 'class="btn btn-lg btn-success btn-block"'); ?>
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