<div class="container">
    <div class="row"><br /></div>
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Pridať/Upraviť aktivity</h3>
                </div>
                <div class="panel-body">
                    <?php if (isset($id)) {
                        ?>
                        <?php echo form_open('profile_edit/edit_activities'); ?>
                        <fieldset>
                            <?php echo form_hidden('id', $id); ?>
                            <div class="form-group">
                                <?php echo form_label(' Kategória'); ?>
                                <?php echo form_dropdown('category_id', $categ, $category_id, 'class="form-control"'); ?>
                            </div>
                            <div class="form-group">
                                <?php echo form_label('Viac informácií'); ?>
                                <?php echo form_textarea('info', $info, 'class="form-control"'); ?>
                            </div>
                            <div class="form-group">
                                <?php echo form_label('Rok'); ?>
                                <?php echo form_input('year', $year, 'class="form-control"'); ?>
                            </div>
                            <hr />
                            <?php echo form_submit('profile_edit/edit_activities', 'Uložiť', 'class="btn btn-lg btn-success btn-block"'); ?>
                                <?php if($this->dx_auth->is_admin()) {
                                                echo anchor('admin', 'Späť', 'class="btn btn-lg btn-info btn-block"');
                                            } else {
                                                echo anchor('profile_edit/activities', 'Späť', 'class="btn btn-lg btn-info btn-block"');
                                            } ?>
                        <?php } else {
                            ?>
                            <?php echo form_open('profile_edit/edit_activities'); ?>
                            <fieldset>
                                <?php
                                echo form_hidden('id', NULL);
                                echo form_hidden('idl', $idl);
                                ?>
                                <div class="form-group">
                                    <?php echo form_label('Kategória'); ?>
    <?php echo form_dropdown('category_id', $categ, '', 'class="form-control"'); ?>
                                </div>
                                <div class="form-group">
                                    <?php echo form_label('Viac informácií'); ?>
    <?php echo form_textarea('info', '', 'class="form-control"'); ?>
                                </div>
                                <div class="form-group">
                                    <?php echo form_label('Rok</td'); ?>
    <?php echo form_input('year', '', 'class="form-control"'); ?>
                                </div>
                                <hr />
                                <?php echo form_submit('profile_edit/edit_activities', 'Pridať', 'class="btn btn-lg btn-success btn-block"'); ?>
                                    <?php if($this->dx_auth->is_admin()) {
                                                echo anchor('admin', 'Späť', 'class="btn btn-lg btn-info btn-block"');
                                            } else {
                                                echo anchor('profile_edit/activities', 'Späť', 'class="btn btn-lg btn-info btn-block"');
                                            } ?>
                            </fieldset>
                            <?php
                            echo form_close();
                        }
                        ?>
                </div>
            </div>
        </div>
    </div>
</div>