<section>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Novinky</h3>
                    </div>
                    <div class="panel-body">
                        <div class="well well-sm">
                            V zozname sa nachádzajú vytvorené novinky.
                        </div>


                        <?php if ($query->num_rows() > 0) { ?>
                            <table class="table table-striped">
                                <?php foreach ($query->result() as $row) {
                                    ?>
                                    <tr>
                                        <td><small class="text-muted"><?php echo $row->date_created; ?></small></td>
                                        <td><?php echo $row->title; ?></td>
                                        <td><?php echo $this->user->get_user_name($row->created); ?></td> 
                                        <td>
                                            <?php
                                            echo anchor('profile_edit/news_more/' . $row->id, 'Upraviť', 'class="btn btn-outline btn-success btn-xs"');
                                            if ($row->public != 0) {
                                                echo ' ' . anchor('admin/news_hide/' . $row->id, 'Skryť', 'class="btn btn-outline btn-warning btn-xs"');
                                            } else {
                                                echo ' ' . anchor('admin/news_publ/' . $row->id, 'Publikovať', 'class="btn btn-outline btn-warning btn-xs"');
                                            }
                                            echo ' ' . anchor('admin/news_delete/' . $row->id, 'Odstrániť', 'class="btn btn-outline btn-danger btn-xs"');
                                            ?>

                                                        </td>
                                            </tr>
                                        <?php }
                                        ?>
                                    </table>
                            <?php } ?>
                            <hr />
                        <?php echo anchor('profile_edit/news_add', 'Pridať novinku', 'class="btn btn-lg btn-success btn-block"'); ?>
                        <?php echo anchor('home', 'Späť', 'class="btn btn-lg btn-info btn-block"'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
