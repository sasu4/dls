<div class="col-md-9">
    <div class="panel panel-default">
        <div class="panel-heading">Základné informácie</div>
        <!-- /.panel-heading -->
        <div class="panel-body">


            <?php
            if ($query->num_rows() > 0) {
                foreach ($query->result() as $row) {
                    ?>
            <table class="table table-striped">

                                        <tr>
                                    <td><b>Názov (svk) </b></td>
                                    <td><?php echo $row->name_sk ?></td>
                                </tr>
                                <tr>
                                    <td><b>Univerzita (svk) </b></td>
                                    <td><?php echo $row->univ_sk ?></td>
                                </tr>
                                <tr>
                                    <td><b>University </b></td>
                                    <td><?php echo $row->univ_orig ?></td>
                                </tr>
                                <tr>
                                    <td><b>Name </b></td>
                                    <td><?php echo $row->name_orig ?></td>
                                </tr>
                                <tr>
                                    <td><b>Ulica </b></td>
                                    <td><?php echo $row->street ?></td>
                                </tr>
                                <tr>
                                    <td><b>Číslo </b></td>
                                    <td><?php echo $row->number ?></td>
                                </tr>
                                <tr>
                                    <td><b>Mesto </b></td>
                                    <td><?php echo $row->city ?></td>
                                </tr>
                                <tr>
                                    <td><b>Krajina </b></td>
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
                                    <td><b>PSČ </b></td>
                                    <td><?php echo $row->zip ?></td>
                                </tr>
                                <tr>
                                    <td><b>Telefonický kontakt </b></td>
                                    <td><?php echo $row->telephone ?></td>
                                </tr>
                                <tr>
                                    <td><b>Webová stránka </b></td>
                                    <td><?php echo anchor($row->website, '', array('target' => '_blank')); ?></td>
                                </tr>
                                <tr>
                                    <td><b>Zameranie </b></td>
                                    <td><?php echo $row->focus ?></td>
                                </tr>
                            </table>
                            <?php
                        }
            }
            ?>
        </div>
        <!-- /.panel-body -->
    </div>
    <!-- /.panel -->
</div>
</div>
<!-- /.row -->
<!-- /.container je vo footer -->