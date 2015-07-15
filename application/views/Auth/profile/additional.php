<div class="container">
    <div class="row"><br /></div>
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Moje pracovisko</h3>
                </div>
                <div class="panel-body">
                    <div class="well well-sm">
                        Akékoľvek aktuálne informácie týkajúce sa lektorátu, pracoviska alebo Vášho lektorského pôsobenia, ktoré by ste radi prezentovali na našej stránke, môžete uviesť tu.
                    </div>
                    <?php
                    echo form_open('profile_edit/edit_additional');
                    echo form_hidden('id', $id);
                    ?>
                    <div class="form-group">
                        <?php echo form_label('Aktuálne informácie'); ?>
                        <?php echo form_textarea('info', $info, 'class="form-control"'); ?>
                    </div>
                    <div class="form-group">
                        <?php echo form_label('Plánujete na rok 2015 nejaké kultúrne podujatia, ako sú prednášky, tematické večery a podobne (napríklad pri príležitosti dvestého výročia narodenia Ľ. Štúra)?'); ?>
                        <?php echo form_textarea('plans', $plans, 'class="form-control"'); ?>
                    </div>
                    <div class="form-group">
                        <?php echo form_label('Budeme veľmi vďační za akékoľvek Vaše poznámky, komentáre, návrhy. '); ?>
                        <?php echo form_textarea('comments', $comments, 'class="form-control"'); ?>
                    </div>
                    <hr />
                    <?php echo form_submit('profile_edit/edit_additional', 'Uložiť', 'class="btn btn-lg btn-success btn-block"'); ?>
                    <?php if($this->dx_auth->is_admin()) {
                            echo anchor('admin', 'Späť', 'class="btn btn-lg btn-info btn-block"');
                        } else {
                            echo anchor('home', 'Späť', 'class="btn btn-lg btn-info btn-block"');
                        } ?>
                    <?php
                    echo form_close();
                    ?>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container je ukonceny vo footer -->