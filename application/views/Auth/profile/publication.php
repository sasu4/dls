<div class="container">
    <div class="row"><br /></div>
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Pridať/Upraviť publikáciu</h3>
                </div>
                <div class="panel-body">
                    <div class="well well-sm">
                        Uveďte všetky publikácie, ktoré sa týkajú slovenského jazyka a kultúry a vznikli v rámci Vášho pracoviska. Zo zoznamu vyberte všetky relevantné kategórie a uveďte bibliografický údaj v podobe: <br>Priezvisko, Meno. Rok. Názov publikácie. In Názov zborníku/časopisu. Mesto : Vydavateľstvo, rok, s. od-do. ISBN. (Opäť nás zaujímajú predovšetkým aktivity za posledné tri roky.)
                    </div>
                    <?php
                    if ($query->num_rows() > 0) {
                        foreach ($query->result() as $row) {
                            ?>
                            <?php echo form_open('profile_edit/edit_publication'); ?>
                            <fieldset>
                                <?php echo form_hidden('id', $row->id); ?>
                                <div class="form-group">
                                    <?php echo form_label('Publikácia'); ?>
                                    <?php echo form_textarea('publication_info', $row->publication_info, 'class="form-control"'); ?>
                                </div>
                                <div  class="form-group">
                                    <?php
                                    $cat = array(
                                        'odborná monografia' => 'odborná monografia',
                                        'príspevok v zborníku' => 'príspevok v zborníku',
                                        'príspevok v odbornom časopise' => 'príspevok v odbornom časopise',
                                        'popularizačná práca' => 'popularizačná práca',
                                        'učebnica' => 'učebnica',
                                        'didaktická príručka' => 'didaktická príručka',
                                        'cvičebnica' => 'cvičebnica',
                                        'manuál pre študentov' => 'manuál pre študentov',
                                        'preklad' => 'preklad',
                                        'iné' => 'iné'
                                    );
                                    ?>
                                            <?php echo form_label('Kategória'); ?>
                                            <?php echo form_dropdown('category', $cat, $row->category, 'class="form-control"'); ?>
                                        </div>
                                        <div class="form-group">
                                            <?php echo form_label('Rok'); ?>
                                            <?php echo form_input('year', $row->year, 'class="form-control"'); ?>
                                        </div>
                                        <hr />
                                        <?php echo form_submit('profile_edit/edit_publication', 'Uložiť', 'class="btn btn-lg btn-success btn-block"'); ?>
                                        <?php echo anchor('profile_edit/publication', 'Späť', 'class="btn btn-lg btn-info btn-block"'); ?>
                                    </fieldset>
                                    <?php
                                    echo form_close();
                        }
                    } else {
                        ?>
                        <?php echo form_open('profile_edit/edit_publication'); ?>
                        <fieldset>
                            <?php
                            echo form_hidden('id', NULL);
                            echo form_hidden('idl', $idl);
                            ?>
                                    <div class="form-group">
                                    <?php echo form_label('Publikácia'); ?>
                                    <?php echo form_textarea('publication_info', '', 'class="form-control"'); ?>
                                </div>
                                <div class="form-group">
                                    <?php
                                    $cat = array(
                                    'odborná monografia' => 'odborná monografia',
                                    'príspevok v zborníku' => 'príspevok v zborníku',
                                    'príspevok v odbornom časopise' => 'príspevok v odbornom časopise',
                                    'popularizačná práca' => 'popularizačná práca',
                                    'učebnica' => 'učebnica',
                                    'didaktická príručka' => 'didaktická príručka',
                                    'cvičebnica' => 'cvičebnica',
                                    'manuál pre študentov' => 'manuál pre študentov',
                                    'preklad' => 'preklad',
                                    'iné' => 'iné'
                                );
                                ?>
                                    <?php echo form_label('Kategória'); ?>
                                    <?php echo form_dropdown('category', $cat, '', 'class="form-control"'); ?>
                                </div>
                                <div class="form-group">
                                    <?php echo form_label('Rok'); ?>
                                    <?php echo form_input('year', '', 'class="form-control"'); ?>
                                </div>
                                <hr />
                                <?php echo form_submit('profile_edit/edit_publication', 'Uložiť', 'class="btn btn-lg btn-success btn-block"'); ?>
                                <?php echo anchor('profile_edit/publication', 'Späť', 'class="btn btn-lg btn-info btn-block"'); ?>
                            <?php } ?>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container je ukonceny vo footer -->
