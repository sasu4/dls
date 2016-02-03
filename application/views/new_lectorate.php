<section><div class="container">
        <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Pridajte nový lektorát</h3>
                </div>
                <div class="panel-body">
                    <?php echo form_open('lectorate/add_lect'); ?>
                    <div class="form-group">
                        <?php echo form_label('Aký je presný názov pracoviska, pod ktoré spadá lektorát slovenského jazyka a kultúry, respektíve kde sa vyučuje slovenský jazyk a kultúra? (uveďte originálny aj preložený názov).');?>
                        <?php echo form_label('Originálny názov');?>
                        <?php echo form_input('lect_name_o','','class="form-control" required="required"');?><br />
                        <?php echo form_label('Preložený názov');?>
                        <?php echo form_input('lect_name_s','','class="form-control" required="required"');?>
                    </div>
                    <div class="form-group">
                        <?php echo form_label('Krajina');?>
                        <?php echo form_dropdown('country_id',$countries,'Slovakia','class="form-control"');?>
                    </div>
                    <div class="form-group">
                        <?php echo form_label('Typ organizácie');?><br>
                        <?php $type = array(
                            'lektorát' => 'lektorát',
                            'iné' => 'iné'
                        );
                        echo form_dropdown('organization',$type,'lektorát','class="form-control"');?>
                    </div>
                    <hr />
                        <?php echo form_submit('lectorate/add_lect','Vytvoriť','class="btn btn-lg btn-success btn-block"'); ?>
                        <?php echo anchor('home', 'Späť', 'class="btn btn-lg btn-info btn-block"'); ?>
                    <?php
                        echo form_close();
                    ?>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>