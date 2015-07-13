<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Vedúci pracoviska</h3>
                </div>
                <div class="panel-body">
                    <div class="well well-sm">
                        Vyberte používateľa ako vedúceho pracoviska. Ak nie je registrovaný, tak zvoľte možnosť Iné.
                    </div>

                    <?php echo form_open('profile_edit/choose_head'); ?>
                    <fieldset>
                        <?php echo form_hidden('idl', $idl);
                        $users = $users+array('-1'=>'Iné');?>
                        <div>
        <?php echo form_label('Registrovaní používatelia');?>
                            <?php echo form_dropdown('user_id', $users, '-1', 'class="form-control"'); ?>
                        </div>
                        <hr />
                        <?php echo form_submit('profile_edit/choose_head', 'Vybrať', 'class="btn btn-lg btn-success btn-block"'); ?>
                        <?php echo anchor('home', 'Späť', 'class="btn btn-lg btn-info btn-block"'); ?>
                </div>
                    </fieldset>
<?php
    echo form_close();
?>
                </div>
            </div>
        </div>
    </div>
<!-- /.container je ukonceny vo footer -->