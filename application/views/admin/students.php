<!--<div class="container">
    <div class="row"><br /></div>
    <div class="row">
        <div class="col-md-6 col-md-offset-3">-->
        <div class="col-md-9">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Študenti pracoviska <?php echo $name; ?></h3>
                </div>
                <div class="panel-body">
                    <div class="well well-sm">
                        Aký je celkový počet študentov a študentiek študujúcich na jednotlivých stupňoch štúdia (špecifikujte, či ide o samostatný odbor alebo súčasť širšieho štúdia)?
                    </div>
                    <?php echo form_open('profile_edit/edit_students');
                    if($query->num_rows()>0) {
                    foreach($query->result() as $row) {?>
                    <fieldset>
                        <?php echo form_hidden('id', $row->id); ?>
                        <div class="form-group">
                            <?php echo form_label('Bakalárske'); ?>
                            <?php echo form_input('bc', $row->bc, 'class="form-control"'); ?>
                        </div>
                        <div class="form-group">
                            <?php echo form_label('Magisterské'); ?>
                            <?php echo form_input('mgr', $row->mgr, 'class="form-control"'); ?>
                        </div>
                        <div class="form-group">
                            <?php echo form_label('Doktorandské'); ?>
                            <?php echo form_input('phd', $row->phd, 'class="form-control"'); ?>
                        </div>
                        <div class="form-group">
                            <?php echo form_label('Koľko študentov neslovakistov navštevuje kurzy slovenčiny? '); ?>
                            <?php echo form_input('nonsvk', $row->nonsvk, 'class="form-control"'); ?>
                        </div>
                        <div class="form-group">
                            <?php echo form_label('Aký je počet študentov slovenčiny v kurzoch pre verejnosť (ak sú v ponuke)?'); ?>
                            <?php echo form_input('public', $row->public, 'class="form-control"'); ?>
                        </div>
                        <div class="form-group">
                            <?php echo form_label('Stav k roku'); ?>
                            <?php echo form_input('year', $row->year, 'class="form-control"'); ?>
                        </div>
                        <div class="form-group">
                            <div class="well well-sm">Aký je momentálny počet študentov podľa stupňa jazykovej kompetencie?</div>
                        </div>
                        <div class="form-group">
                            <?php echo form_label('Úplní začiatočníci (A1)'); ?>
                            <?php echo form_input('a1', $row->a1, 'class="form-control"'); ?>
                        </div>
                        <div class="form-group">
                            <?php echo form_label('Začiatočníci (A2) '); ?>
                            <?php echo form_input('a2', $row->a2, 'class="form-control"'); ?>
                        </div>
                        <div class="form-group">
                            <?php echo form_label('Mierne pokročilí (B1) '); ?>
                            <?php echo form_input('b1', $row->b1, 'class="form-control"'); ?>
                        </div>
                        <div class="form-group">
                            <?php echo form_label('Stredne pokročilí (B2) '); ?>
                            <?php echo form_input('b2', $row->b2, 'class="form-control"'); ?>
                        </div>
                        <div class="form-group">
                            <?php echo form_label('Pokročilí (C1) '); ?>
                            <?php echo form_input('c1', $row->c1, 'class="form-control"'); ?>
                        </div>
                        <hr />
                        <?php echo form_submit('profile_edit/edit_students', 'Uložiť', 'class="btn btn-lg btn-success btn-block"'); ?>
                        <?php echo anchor('admin', 'Späť', 'class="btn btn-lg btn-info btn-block"'); ?>
                
                
                <?php
                echo form_close();
                    }
                    } else {
                        echo form_open('profile_edit/edit_students');
                        echo form_hidden('id',NULL);
                        echo form_hidden('idl',$idl);?>
                    <div class="form-group">
                            <?php echo form_label('Bakalárske'); ?>
                            <?php echo form_input('bc', '', 'class="form-control"'); ?>
                        </div>
                        <div class="form-group">
                            <?php echo form_label('Magisterské'); ?>
                            <?php echo form_input('mgr', '', 'class="form-control"'); ?>
                        </div>
                        <div class="form-group">
                            <?php echo form_label('Doktorandské'); ?>
                            <?php echo form_input('phd', '', 'class="form-control"'); ?>
                        </div>
                        <div class="form-group">
                            <?php echo form_label('Koľko študentov neslovakistov navštevuje kurzy slovenčiny? '); ?>
                            <?php echo form_input('nonsvk', '', 'class="form-control"'); ?>
                        </div>
                        <div class="form-group">
                            <?php echo form_label('Aký je počet študentov slovenčiny v kurzoch pre verejnosť (ak sú v ponuke)?'); ?>
                            <?php echo form_input('public', '', 'class="form-control"'); ?>
                        </div>
                        <div class="form-group">
                            <?php echo form_label('Stav k roku'); ?>
                            <?php echo form_input('year', '', 'class="form-control"'); ?>
                        </div>
                        <div class="form-group">
                            <div class="well well-sm">Aký je momentálny počet študentov podľa stupňa jazykovej kompetencie?</div>
                        </div>
                        <div class="form-group">
                            <?php echo form_label('Úplní začiatočníci (A1)'); ?>
                            <?php echo form_input('a1', '', 'class="form-control"'); ?>
                        </div>
                        <div class="form-group">
                            <?php echo form_label('Začiatočníci (A2) '); ?>
                            <?php echo form_input('a2', '', 'class="form-control"'); ?>
                        </div>
                        <div class="form-group">
                            <?php echo form_label('Mierne pokročilí (B1) '); ?>
                            <?php echo form_input('b1', '', 'class="form-control"'); ?>
                        </div>
                        <div class="form-group">
                            <?php echo form_label('Stredne pokročilí (B2) '); ?>
                            <?php echo form_input('b2', '', 'class="form-control"'); ?>
                        </div>
                        <div class="form-group">
                            <?php echo form_label('Pokročilí (C1) '); ?>
                            <?php echo form_input('c1', '', 'class="form-control"'); ?>
                        </div>
                        <hr />
                        <?php echo form_submit('profile_edit/edit_students', 'Uložiť', 'class="btn btn-lg btn-success btn-block"'); ?>
                        <?php echo anchor('admin', 'Späť', 'class="btn btn-lg btn-info btn-block"'); ?>
                <?php
                echo form_close();
                    }
                ?>
                        </fieldset>
                    </div>
            </div>
        </div>
    </div>
</div>
<!-- /.container je ukonceny vo footer -->
