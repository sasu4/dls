<div class="container">
    <div class="row"><br /></div>
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="panel panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Môj profil</h3>
                </div>
                <div class="panel-body">

                    <?php if ($query->num_rows() > 0) { ?>
                        <?php foreach ($query->result() as $row) {
                            ?>
                    <fieldset>
                                <?php
                                echo form_open('profile_edit/lector_edit');
                                echo form_hidden('id', $row->id);
                                if ($row->country_id != 0) {
                                    $country = $this->model_lectorate->get_country_name($row->country_id);
                                }
                                ?>
                                                <div class="form-group">
                                            <?php echo form_label('Meno'); ?>
                                            <?php echo form_input('name', $row->name, 'class="form-control"'); ?>
                                        </div>
                                        <div class="form-group">
                                            <?php echo form_label('Priezvisko'); ?>
                                            <?php echo form_input('surname', $row->surname, 'class="form-control"'); ?>
                                        </div>
                                        <div class="form-group">
                                            <?php echo form_label('E-mail'); ?>
                                            <?php echo form_input('email', $row->email, 'class="form-control"'); ?>
                                        </div>
                                        <div class="form-group">
                                            <?php echo form_label('Telefon'); ?>
                                            <?php echo form_input('telephone', $row->telephone, 'class="form-control"'); ?>
                                        </div>
                                        <div class="form-group">
                                            <?php echo form_label('Krajina'); ?>
                                            <?php
                                            if (isset($country)) {
                                                echo form_dropdown('country_id', $countries, $country, 'class="form-control"');
                                            } else {
                                                echo form_dropdown('country_id', $countries, 'Slovakia', 'class="form-control"');
                                            }
                                            ?>
                                        </div>
                                        <div class="form-group">
                                            <?php echo form_label('Odborné zameranie'); ?>
                                            <?php echo form_input('expertise', $row->expertise, 'class="form-control"'); ?>
                                        </div>
                                        <div class="form-group">
                                            <?php echo form_label('Profil'); ?>
                                            <?php echo form_input('about', $row->about, 'class="form-control"'); ?>
                                        </div>
                                        <div class="form-group">
                                            <?php echo form_label('Webová stránka'); ?>
                                            <?php echo form_input('website', $row->website, 'class="form-control"'); ?>
                                        </div>
                                        <div class="form-group">
                                            <?php echo form_label('Facebook'); ?>
                                            <?php echo form_input('facebook', $row->facebook, 'class="form-control"'); ?>
                                        </div>
                                        <div class="form-group">
                                            <?php echo form_label('Twitter'); ?>
                                            <?php echo form_input('twitter', $row->twitter, 'class="form-control"'); ?>
                                        </div>
                                        <div class="form-group">
                                            <?php echo form_label('LinkedIn'); ?>
                                            <?php echo form_input('linkedin', $row->linkedin, 'class="form-control"'); ?>
                                        </div>
                                        <hr/>
                                        <?php echo form_submit('profile_edit/lector_edit', 'Uložiť', 'class="btn btn-lg btn-success btn-block"'); ?>
                                        <?php echo anchor('home', 'Späť', 'class="btn btn-lg btn-info btn-block"'); ?>
                                    </fieldset>
                                    <?php
                                    echo form_close();
                                }
                            }
                            ?>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container je ukonceny vo footer -->