<section>
    <div class="container">
        <div class="row"><br /></div>
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Pridať/Upraviť typy štúdia</h3>
                </div>
                <div class="panel-body">
                    <div class="well well-sm">
                        Bližšie charakterizujte  konkrétne typy štúdia slovenského jazyka.</div>
                    <?php echo form_open('profile_edit/edit_study'); ?>
                    <fieldset>
                        <?php
                        echo form_hidden('id', $id);
                        echo form_hidden('idl', $idl);
$types = array(
    'Slovakistika ako samostatný odbor/program' => 'Slovakistika ako samostatný odbor/program',
    'Slovakistika ako súčasť širšieho štúdia (napr. v kombinácii)' => 'Slovakistika ako súčasť širšieho štúdia (napr. v kombinácii)',
    'Slovenčina ako povinný predmet' => 'Slovenčina ako povinný predmet',
    'Slovenčina ako povinne voliteľný predmet' => 'Slovenčina ako povinne voliteľný predmet',
    'Slovenčina ako výberový predmet' => 'Slovenčina ako výberový predmet',
    'Slovenčina pre verejnosť' => 'Slovenčina pre verejnosť',
    'Iné' => 'Iné'
);
?>
                        <div class="form-group">
                            <?php echo form_label('Typ štúdia'); ?>
<?php echo form_dropdown('type', $types, $type, 'class="form-control"'); ?>
                        </div>
                        <div class="form-group">
                            <?php echo form_label('Pre koho je program určený?'); ?>
<?php echo form_textarea('target_group', $target_group, 'class="form-control"'); ?>
                        </div>
                        <div class="form-group">
                            <?php echo form_label('Ako často sa otvára a ako dlho trvá?'); ?>
<?php echo form_textarea('period', $period, 'class="form-control"'); ?>
                        </div>
                        <div class="form-group">
                            <?php echo form_label('Bližšie informácie'); ?>
<?php echo form_textarea('info', $info, 'class="form-control"'); ?>
                        </div>
                        <hr />
                        <?php echo form_submit('profile_edit/edit_study', 'Uložiť', 'class="btn btn-lg btn-success btn-block"'); ?>
                        <?php if($this->dx_auth->is_admin()) {
                                                echo anchor('admin', 'Späť', 'class="btn btn-lg btn-info btn-block"');
                                            } else {
                                                echo anchor('profile_edit/types_of_study', 'Späť', 'class="btn btn-lg btn-info btn-block"');
                                            } ?>
                </div>
                </fieldset>
                <?php
                echo form_close();
                ?>
            </div>
        </div>
    </div>
</div>
</div>
</section>