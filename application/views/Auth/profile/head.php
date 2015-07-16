<?php if(!$this->dx_auth->is_admin()) {?>
<div class="container">
    <div class="row"><br /></div>
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
<?php } else {?>
            <div class="col-md-9">
<?php }?>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Vedúci pracoviska</h3>
                </div>
                <div class="panel-body">
                    <div class="well well-sm">
                        Uveďte meno, priezvisko, tituly a odborné zameranie vedúceho/vedúcej pracoviska, napíšte jej/jeho krátky profesijný profil a uveďte odkaz na internetovú stránku – ak je k dispozícii, prípadne uveďte aj e-mail.</p>
                    </div>
                    <?php
                    if ($query->num_rows() > 0) {
                        foreach ($query->result() as $row) {
                            ?>
                            <?php echo form_open('profile_edit/edit_head'); ?>
                            <fieldset>
                                <?php
                                echo form_hidden('id', $row->id);
                                echo form_hidden('idl', $idl);
                                //if (!$can_update) {
                                    echo form_hidden('head', 1);
                                //}
                                ?>
                                                <div class="form-group">
                                            <?php echo form_label('Meno'); ?>
                                            <?php
                                            if ($edit) {
                                        $nam = array('name' => 'name', 'value' => $row->name);
                                    } else {
                                        $nam = array('name' => 'name', 'value' => $row->name, 'readonly' => 'false');
                                    }
                                    echo form_input($nam, '', 'class="form-control"');
                                    ?>
                                                </div>
                                        <div class="form-group">
                                            <?php echo form_label('Priezvisko'); ?>
                                            <?php
                                            if ($edit) {
                                        $sur = array('name' => 'surname', 'value' => $row->surname,);
                                    } else {
                                        $sur = array('name' => 'surname', 'value' => $row->surname, 'readonly' => 'false');
                                    }
                                    echo form_input($sur, '', 'class="form-control"');
                                    ?>
                                                </div>
                                        <div class="form-group">
                                            <?php echo form_label('Odborné zameranie'); ?>
                                            <?php
                                            if ($edit) {
                                        $exper = array('name' => 'expertise', 'value' => $row->expertise);
                                    } else {
                                        $exper = array('name' => 'expertise', 'value' => $row->expertise, 'readonly' => 'false');
                                    }
                                    echo form_textarea($exper, '', 'class="form-control"');
                                    ?>
                                                </div>
                                        <div class="form-group">
                                            <?php echo form_label('Profil'); ?>
                                            <?php
                                            if ($edit) {
                                        $about = array('name' => 'about', 'value' => $row->about);
                                    } else {
                                        $about = array('name' => 'about', 'value' => $row->about, 'readonly' => '"false"');
                                            }
                                            echo form_textarea($about, '', 'class="form-control"');
                                    ?>
                                                </div>
                                        <div class="form-group">
                                            <?php echo form_label('E-mail'); ?>
                                            <?php
                                            if ($edit) {
                                        $emaill = array('name' => 'email', 'value' => $row->email);
                                    } else {
                                        $emaill = array('name' => 'email', 'value' => $row->email, 'readonly' => 'false');
                                    }
                                    echo form_input($emaill, '', 'class="form-control"');
                                    ?>
                                                </div>
                                        <div class="form-group">
                                            <?php echo form_label('Webová stránka'); ?>
                                            <?php
                                            if ($edit) {
                                        $web = array('name' => 'website', 'value' => $row->website);
                                    } else {
                                        $web = array('name' => 'website', 'value' => $row->website, 'readonly' => 'false');
                                    }
                                    echo form_input($web, '', 'class="form-control"');
                                    ?>
                                                </div>
                                        <hr />
                                        <?php echo form_submit('profile_edit/edit_head', 'Uložiť', 'class="btn btn-lg btn-success btn-block"'); ?>
                                        <?php if($this->dx_auth->is_admin()) {
                                            echo anchor('admin', 'Späť', 'class="btn btn-lg btn-info btn-block"');
                                        } else {
                                            echo anchor('home', 'Späť', 'class="btn btn-lg btn-info btn-block"');
                                        }
                                             ?>

                                            </fieldset>
                                    <?php
                                    echo form_close();
                            ?>

                            <?php
                        }
                    } else {
                        ?>

                        <?php echo form_open('profile_edit/edit_head'); ?>
                        <fieldset>
                            <?php
                            echo form_hidden('id', NULL);
                            echo form_hidden('idl', $idl);
                        ?>
                                <div class="form-group">
                        <?php echo form_label('Meno'); ?>
                        <?php echo form_input('name', '', 'class="form-control"'); ?>
                                </div>
                                <div class="form-group">
                        <?php echo form_label('Priezvisko'); ?>
                        <?php echo form_input('surname', '', 'class="form-control"'); ?>
                                </div>
                                <div class="form-group">
                        <?php echo form_label('Odborné zameranie'); ?>
                        <?php echo form_textarea('expertise', '', 'class="form-control"'); ?>
                                </div>
                                <div class="form-group">
                        <?php echo form_label('Profil'); ?>
                        <?php echo form_textarea('about', '', 'class="form-control"'); ?>
                                </div>
                                <div class="form-group">
                        <?php echo form_label('E-mail'); ?>
                        <?php echo form_input('email', '', 'class="form-control"'); ?>
                                </div>
                                <div class="form-group">
                        <?php echo form_label('Webová stránka'); ?>
                        <?php echo form_input('website', '', 'class="form-control"'); ?>
                                </div>
                                <hr />
                        <?php echo form_submit('profile_edit/edit_head', 'Uložiť', 'class="btn btn-lg btn-success btn-block"'); ?>
                        <?php if($this->dx_auth->is_admin()) {
                                echo anchor('admin', 'Späť', 'class="btn btn-lg btn-info btn-block"');
                            } else {
                                echo anchor('home', 'Späť', 'class="btn btn-lg btn-info btn-block"');
                            } ?>
                            </fieldset>
                        <?php
                        echo form_close();
                        ?>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container je ukonceny vo footer -->
