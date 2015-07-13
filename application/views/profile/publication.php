<div class="col-md-9">
    <div class="panel panel-default">
        <div class="panel-heading">Publikácie</div>
        <!-- /.panel-heading -->
        <div class="panel-body">
            <?php if ($query->num_rows() > 0) { ?>
                <table class="table table-striped">
                    <?php foreach ($query->result() as $row) {
                        ?>
                        <tr>
                            <td><b>Publikácia</b></td>
                            <td><?php echo $row->publication_info; ?></td>
                        </tr>
                        <tr>
                            <td><b>Kategória</b></td>
                            <td><?php echo $row->category; ?></td>
                        </tr>
                        <tr>
                            <td><b>Rok</b></td>
                            <td><?php echo $row->year; ?></td>
                        </tr>
                        <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
                        <?php
                    }
                }
                ?>
            </table>
        </div>
        <!-- /.panel-body -->
    </div>
    <!-- /.panel -->
</div>
</div>
<!-- /.row -->
<!-- /.container je vo footer -->