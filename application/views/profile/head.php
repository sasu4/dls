<!-- Content Column -->
<div class="col-md-9">
    <div class="panel panel-default">
        <div class="panel-heading">Vedúci pracoviska</div>
        <!-- /.panel-heading -->
        <div class="panel-body">
            <table class="table table-striped">
                <?php
                if ($query->num_rows() > 0) {
                    foreach ($query->result() as $row) {
                        ?>
                        <tr>
                            <td><b>Meno a priezvisko</b></td>
                            <td><?php echo $row->name . ' ' . $row->surname; ?></td>
                        </tr>
                        <tr>
                            <td><b>Zameranie</b></td>
                            <td><?php echo $row->expertise; ?></td>
                        </tr>
                        <tr>
                            <td><b>Profil</b></td>
                            <td><?php echo $row->about; ?></td>
                        </tr>
                        <tr>
                            <td><b>Email</b></td>
                            <td><?php echo $row->email; ?></td>
                        </tr>
                        <tr>
                            <td><b>Webová stránka </b></td>
                            <td><?php echo $row->website; ?></td>
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