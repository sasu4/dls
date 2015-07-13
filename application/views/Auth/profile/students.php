<div class="container">
    <div class="row"><br /></div>
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Študenti pracoviska</h3>
                </div>
                <div class="panel-body">
                    <div class="well well-sm">
                        Aký je celkový počet študentov a študentiek študujúcich na jednotlivých stupňoch štúdia (špecifikujte, či ide o samostatný odbor alebo súčasť širšieho štúdia)?
                    </div>
                    <?php echo form_open('profile_edit/edit_students'); ?>
                    <fieldset>
                        <?php echo form_hidden('id', $id); ?>
                        <div class="form-group">
                            <?php echo form_label('Bakalárske'); ?>
                            <?php echo form_input('bc', $bc, 'class="form-control"'); ?>
                        </div>
                        <div class="form-group">
                            <?php echo form_label('Magisterské'); ?>
                            <?php echo form_input('mgr', $mgr, 'class="form-control"'); ?>
                        </div>
                        <div class="form-group">
                            <?php echo form_label('Doktorandské'); ?>
                            <?php echo form_input('phd', $phd, 'class="form-control"'); ?>
                        </div>
                        <div class="form-group">
                            <?php echo form_label('Koľko študentov neslovakistov navštevuje kurzy slovenčiny? '); ?>
                            <?php echo form_input('nonsvk', $nonsvk, 'class="form-control"'); ?>
                        </div>
                        <div class="form-group">
                            <?php echo form_label('Aký je počet študentov slovenčiny v kurzoch pre verejnosť (ak sú v ponuke)?'); ?>
                            <?php echo form_input('public', $public, 'class="form-control"'); ?>
                        </div>
                        <div class="form-group">
                            <?php echo form_label('Stav k roku'); ?>
                            <?php echo form_input('year', $year, 'class="form-control"'); ?>
                        </div>
                        <div class="form-group">
                            <div class="well well-sm">Aký je momentálny počet študentov podľa stupňa jazykovej kompetencie?</div>
                        </div>
                        <div class="form-group">
                            <?php echo form_label('Úplní začiatočníci (A1)'); ?>
                            <?php echo form_input('a1', $a1, 'class="form-control"'); ?>
                        </div>
                        <div class="form-group">
                            <?php echo form_label('Začiatočníci (A2) '); ?>
                            <?php echo form_input('a2', $a2, 'class="form-control"'); ?>
                        </div>
                        <div class="form-group">
                            <?php echo form_label('Mierne pokročilí (B1) '); ?>
                            <?php echo form_input('b1', $b1, 'class="form-control"'); ?>
                        </div>
                        <div class="form-group">
                            <?php echo form_label('Stredne pokročilí (B2) '); ?>
                            <?php echo form_input('b2', $b2, 'class="form-control"'); ?>
                        </div>
                        <div class="form-group">
                            <?php echo form_label('Pokročilí (C1) '); ?>
                            <?php echo form_input('c1', $c1, 'class="form-control"'); ?>
                        </div>
                        <hr />
                        <?php echo form_submit('profile_edit/edit_students', 'Uložiť', 'class="btn btn-lg btn-success btn-block"'); ?>
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