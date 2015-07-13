<div class="container">
    <div class="row"><br /></div>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Profil lektorátu</h3>
                </div>
                <div class="panel-body">
                    <table class="table table-striped">
                        <?php
                        if ($query->num_rows() > 0) {
                            foreach ($query->result() as $row) {
                                ?>
                        <tr>
                                    <td><?php echo form_label('Názov (SVK)'); ?></td>
                                    <td><?php echo $row->name_sk; ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo form_label('Univerzita (SVK)'); ?></td>
                                    <td><?php echo $row->univ_sk; ?></td>
                                                </tr>
                                        <tr>
                                            <td><?php echo form_label('Originálny názov'); ?></td>
                                                            <td><?php echo $row->name_orig; ?></td>
                                        </tr>
                                        <tr>
                                            <td><?php echo form_label('Originálny názov univerzity'); ?></td>
                                                            <td><?php echo $row->univ_orig; ?></td>
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
                                            echo $this->lectorate->get_country_name($row->country_id);

                                                    // $cnt = $this->$row->country_id);
                                                    //    echo $cnt['name'];
                                        }
                                        ?>
                                                    </td>
                                        </tr>
                                        <tr>
                                            <td><?php echo form_label('Webová stránka'); ?></td>
                                            <td><?php echo anchor($row->website, $row->website); ?></td>
                                        </tr>
                                        <tr>
                                            <td><?php echo form_label('Zameranie'); ?></td>
                                            <td><?php echo $row->focus; ?></td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">
                                                <?php echo anchor('lectorate', 'Späť', 'class="btn btn-lg btn-info btn-block"'); ?>
                                            </td>
                                        </tr>
                                        <?php
                                    }
                                    ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <?php
    } else {
        ?>
        <h2>Lectorate - not found</h2>
    <?php } ?>
