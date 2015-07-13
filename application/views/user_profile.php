<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Profil lektora</h3>
                </div>
                <div class="panel-body">
                    <table class="table table-striped">
                        <?php
                        if ($query->num_rows() > 0) {
                            foreach ($query->result() as $row) {
                                ?>
                        <tr>
                                    <td><?php echo form_label('Meno a priezvisko'); ?></td>
                                    <td><?php echo $row->name . ' ' . $row->surname; ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo form_label('E-mail'); ?></td>
                                    <td><?php echo $row->email ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo form_label('Telefon'); ?></td>
                                    <td><?php echo $row->telephone; ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo form_label('Krajina'); ?></td>
                                    <td><?php
                                        if ($row->country_id == 0) {
                                            echo '';
                                        } else {
                                            $cnt = $this->model_lectorate->get_lectorate_c($row->country_id);
                                            echo $cnt['name'];
                                                }
                                                ?></td>
                                                </tr>
                                        <tr>
                                            <td><?php echo form_label('Odborné zameranie'); ?></td>
                                            <td><?php echo $row->expertise; ?></td>
                                        </tr>
                                        <tr>
                                            <td><?php echo form_label('Profil'); ?></td>
                                            <td><?php echo $row->about; ?></td>
                                        </tr>
                                        <tr>
                                            <td><?php echo form_label('Webová stránka'); ?></td>
                                            <td><?php echo $row->website; ?></td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">
                                                <?php echo anchor('lectors', 'Späť', 'class="btn btn-lg btn-info btn-block"'); ?>
                                            </td>
                                        </tr>
                                        <?php
                                    }
                        }
                        ?>
                    </table>
                </div>
            </div>
        </div>
    </div>