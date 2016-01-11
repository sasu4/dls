
        <div class="col-md-9">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Pracovisko</h3>
                </div>
                <div class="panel-body">
    <?php 
    if($query->num_rows()>0) {
        foreach($query->result() as $row) {
        echo form_open('profile_edit/edit_workplace'); 
        echo form_hidden('id',$row->id);
    ?>
                    <div class="form-group">
        <?php echo form_label('Aký je presný názov pracoviska, pod ktoré spadá lektorát slovenského jazyka a kultúry, respektíve kde sa vyučuje slovenský jazyk a kultúra? (uveďte originálny aj preložený názov).');?>
                        <?php echo form_input('lect_name_o', $row->name_orig, 'class="form-control"'); ?><br>
                        <?php echo form_input('lect_name_s', $row->name_sk, 'class="form-control"'); ?>
                    </div>
    <div class="form-group">
        <?php echo form_label('Na akej fakulte a univerzite pracovisko pôsobí? (napíšte originálny názov a preklad).');?>
        <?php echo form_input('uni_name_o', $row->univ_orig, 'class="form-control"'); ?><br>
        <?php echo form_input('uni_name_s', $row->univ_sk, 'class="form-control"'); ?>
    </div>
                    <div class="well well-sm">
                        Vyplňte identifikačné údaje pracoviska.
                    </div>
    <hr />
    <div class="form-group">
        <?php echo form_label('Ulica');?>
        <?php echo form_input('street', $row->street, 'class="form-control"'); ?>
    </div>
    <div class="form-group">
        <?php echo form_label('Číslo');?>
        <?php echo form_input('numb', $row->number, 'class="form-control"'); ?>
    </div>
    <div class="form-group">
        <?php echo form_label('Mesto');?>
        <?php echo form_input('city', $row->city, 'class="form-control"'); ?>
    </div>
    <div>
        <?php echo form_label('Krajina');?>
        <?php $c_sel = $this->lectorate->get_country_name($row->country_id);
        if($c_sel==NULL) {
            echo form_dropdown('country', $countries, 'class="form-control"');
} else {
            echo form_dropdown('country', $countries, $c_sel, 'class="form-control"');
} ?>
    </div>
    <div class="form-group">
        <?php echo form_label('PSČ');?>
        <?php echo form_input('psc', $row->zip, 'class="form-control"'); ?>
    </div>
    <div class="form-group">
        <?php echo form_label('Telefonický kontakt');?>
        <?php echo form_input('tel', $row->telephone, 'class="form-control"'); ?>
    </div>
    <div class="form-group">
        <?php echo form_label('Webová stránka pracoviska ');?>
        <?php echo form_input('web', $row->website, 'class="form-control"'); ?>
    </div>
    <div class="form-group">
        <?php echo form_label('Facebook pracoviska');?>
        <?php echo form_input('facebook', $row->facebook, 'class="form-control"'); ?>
    </div>
    <div class="form-group">
        <?php echo form_label('Twitter pracoviska ');?>
        <?php echo form_input('twitter', $row->twitter, 'class="form-control"'); ?>
    </div>
    <div class="form-group">
        <?php echo form_label('LinkedIn pracoviska ');?>
        <?php echo form_input('linkedin', $row->linkedin, 'class="form-control"'); ?>
    </div>
    <div class="form-group">
        <?php echo form_label('Na čo sa pracovisko konkrétne zameriava? (uveďte jeho krátky profil) ');?>
        <?php echo form_textarea('focus', $row->focus, 'class="form-control"'); ?>
    </div>
    <hr />
        <?php echo form_submit('profile_edit/edit_workplace', 'Uložiť', 'class="btn btn-lg btn-success btn-block"'); ?>
        <?php echo anchor('admin', 'Späť', 'class="btn btn-lg btn-info btn-block"'); ?>
<?php
    echo form_close();
        }
    }
?>
                </div>
            </div>
        </div>
        </section>
