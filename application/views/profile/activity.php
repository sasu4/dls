<div class="col-md-9">
    <div class="panel panel-default">
        <div class="panel-heading">Aktivity pracoviska</div>
        <!-- /.panel-heading -->
        <div class="panel-body">
            <?php if ($query->num_rows() > 0) { ?>

                <?php
                foreach ($query->result() as $row) {
                    $data = $this->profile->get_categorie_info($row->category_id);
                    ?>
            <table class="table table-striped">
                        <tr>
                            <td><b>Kategória </b></td>
                            <td><?php echo $data['type']; //typ kategorie    ?></td>
                        </tr>
                        <tr>
                            <td><b>Typ kategórie </b></td>
                            <td><?php echo $data['description']; //popis kategorie    ?></td>
                        </tr>
                        <tr>
                            <td><b>Viac informácií </b></td>
                            <td><?php echo $row->info; //viac informacii    ?></td>
                        </tr>
                        <tr>
                            <td><b>Platné pre rok </b></td>
                            <td><?php echo $row->year; //platne pre rok    ?></td>
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