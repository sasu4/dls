<div class="col-md-9">
    <div class="panel panel-default">
        <div class="panel-heading">Ďalšie informácie</div>
        <!-- /.panel-heading -->
        <div class="panel-body">
            <?php if ($query->num_rows() > 0) { ?>
                <table class="table table-striped">
                    <?php
                    foreach ($query->result() as $row) {
                        ?>
                        <tr>
                            <td><b>Ďalšie informácie</b></td>
                            <td><?php echo $row->info; ?></td>
                        </tr>
                        <tr>
                            <td><b>Plány na tento rok</b></td>
                            <td><?php echo $row->plans; ?></td>
                        </tr>
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