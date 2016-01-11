<section id="activity">
    <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Aktivity pracoviska</h3>
                </div>
                <div class="panel-body">
                    <div class="well well-sm">Uveďte významné aktivity pracoviska</div>
                    <?php
                    if ($query->num_rows() > 0) {
                        ?>
                    <table class="table table-striped">
                            <?php
                            foreach ($query->result() as $row) {
                                ?>
                                <tr>
                                    <td><?php echo $row->info; ?>
                                    </td> 
                                    <td>
                                        <?php
                                        echo anchor('profile_edit/activity_more/' . $row->id, 'Upraviť', 'class="btn btn-outline btn-success btn-xs"');
                                        echo ' ' . anchor('home' . $row->id, 'Odstrániť', 'class="btn btn-outline btn-danger btn-xs"');
                                        ?>

                                                    </td>
                                        </tr>
                                    <?php }
                                    ?>
                            </table>
                        <?php } ?>
                        <hr />
                        <?php echo anchor('profile_edit/add_activities/1', 'Pridať aktivitu kategórie <i>Vzdelávanie</i>', 'class="btn btn-lg btn-success btn-block"'); ?>
                        <?php echo anchor('profile_edit/add_activities/2', 'Pridať aktivitu kategórie <i>Veda</i>', 'class="btn btn-lg btn-success btn-block"'); ?>
                        <?php echo anchor('profile_edit/add_activities/3', 'Pridať aktivitu kategórie <i>Kultúra</i>', 'class="btn btn-lg btn-success btn-block"'); ?>
                        <?php if($this->dx_auth->is_admin()) {
                                echo anchor('admin', 'Späť', 'class="btn btn-lg btn-info btn-block"');
                            } else {
                                echo anchor('home', 'Späť', 'class="btn btn-lg btn-info btn-block"');
                            } ?>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
