
<section><!--<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">-->
        <div class="col-md-9">
            <!--<div class="login-panel panel panel-default">-->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Typy štúdia <?php echo $name; ?></h3>
                </div>
                <div class="panel-body">
                    <div class="well well-sm">
                        Bližšie charakterizujte  konkrétne typy štúdia slovenského jazyka.
                    </div>
                    <?php if ($query->num_rows() > 0) { ?>
                            <table class="table table-striped">
                            <?php foreach ($query->result() as $row) {
                                ?>
                            <tr>
                                        <td><?php echo $row->type; ?></td>
                                        <td>
                                                    <?php
                                                    echo anchor('profile_edit/study_more/' . $row->id, 'Upraviť', 'class="btn btn-outline btn-success btn-xs"');
                                                    echo ' ' . anchor('home' . $row->id, 'Odstrániť', 'class="btn btn-outline btn-danger btn-xs"');
                                                    ?>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </table>
                        <?php } ?>
                    <hr />
                    <?php echo anchor('profile_edit/study_more/0/'.$idl, 'Pridať nový typ štúdia', 'class="btn btn-lg btn-success btn-block"'); ?>
                    <?php echo anchor('admin', 'Späť', 'class="btn btn-lg btn-info btn-block"'); ?>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
