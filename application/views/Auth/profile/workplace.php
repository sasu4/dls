<div class="container">
    <div class="row"><br /></div>
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Moje pracovisko</h3>
                </div>
                <div class="panel-body">
    <?php echo form_open('profile_edit/edit_workplace'); 
        echo form_hidden('id',$id);
    ?>
                    <div class="form-group">
        <?php echo form_label('Aký je presný názov pracoviska, pod ktoré spadá lektorát slovenského jazyka a kultúry, respektíve kde sa vyučuje slovenský jazyk a kultúra? (uveďte originálny aj preložený názov).');?>
                        <?php echo form_input('lect_name_o', $lect_name_o, 'class="form-control"'); ?><br>
                        <?php echo form_input('lect_name_s', $lect_name_s, 'class="form-control"'); ?>
                    </div>
    <div class="form-group">
        <?php echo form_label('Na akej fakulte a univerzite pracovisko pôsobí? (napíšte originálny názov a preklad).');?>
        <?php echo form_input('uni_name_o', $uni_name_o, 'class="form-control"'); ?><br>
        <?php echo form_input('uni_name_s', $uni_name_s, 'class="form-control"'); ?>
    </div>
                    <div class="well well-sm">
                        Vyplňte identifikačné údaje pracoviska.
                    </div>
    <hr />
    <div class="form-group">
        <?php echo form_label('Ulica');?>
        <?php echo form_input('street', $street, 'class="form-control"'); ?>
    </div>
    <div class="form-group">
        <?php echo form_label('Číslo');?>
        <?php echo form_input('numb', $numb, 'class="form-control"'); ?>
    </div>
    <div class="form-group">
        <?php echo form_label('Mesto');?>
        <?php echo form_input('city', $city, 'class="form-control"'); ?>
    </div>
    <div>
        <?php echo form_label('Krajina');?>
        <?php 
        if($c_sel==NULL) {
            echo form_dropdown('country', $countries, 'class="form-control"');
} else {
            echo form_dropdown('country', $countries, $c_sel, 'class="form-control"');
} ?>
    </div>
    <div class="form-group">
        <?php echo form_label('PSČ');?>
        <?php echo form_input('psc', $psc, 'class="form-control"'); ?>
    </div>
    <div class="form-group">
        <?php echo form_label('Telefonický kontakt');?>
        <?php echo form_input('tel', $tel, 'class="form-control"'); ?>
    </div>
    <div class="form-group">
        <?php echo form_label('Webová stránka pracoviska ');?>
        <?php echo form_input('web', $web, 'class="form-control"'); ?>
    </div>
    <div class="form-group">
        <?php echo form_label('Facebook pracoviska');?>
        <?php echo form_input('facebook', $facebook, 'class="form-control"'); ?>
    </div>
    <div class="form-group">
        <?php echo form_label('Twitter pracoviska ');?>
        <?php echo form_input('twitter', $twitter, 'class="form-control"'); ?>
    </div>
    <div class="form-group">
        <?php echo form_label('LinkedIn pracoviska ');?>
        <?php echo form_input('linkedin', $linkedin, 'class="form-control"'); ?>
    </div>
    <div class="form-group">
        <?php echo form_label('Na čo sa pracovisko konkrétne zameriava? (uveďte jeho krátky profil) ');?>
        <?php echo form_textarea('focus', $focus, 'class="form-control"'); ?>
    </div>
    <hr />
        <?php echo form_submit('profile_edit/edit_workplace', 'Uložiť', 'class="btn btn-lg btn-success btn-block"'); ?>
        <?php echo anchor('home', 'Späť', 'class="btn btn-lg btn-info btn-block"'); ?>
<?php
    echo form_close();
?>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container je ukonceny vo footer -->