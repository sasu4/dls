<section>
    <div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><?php echo $typ;?></h3>
                </div>
                <div class="panel-body">
                    <div class="well well-sm">
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped">
                                <tr>
                                    <th>Lektorát</th>
                                    <th>Zverejnenie</th>
                                    <th>Úprava</th>
                                </tr>
                                <?php
                                if ($query->num_rows() > 0) {
                                foreach ($query->result() as $row) {
                                    ?>
                                <tr>
                                        <td><?php echo $row->name_orig; ?></td>
                                        <td>
                                            <?php 
                                                if($row->public == 1) {
                                                    echo form_open('admin/lec_publicize');
                                                    echo form_hidden('id',$row->id);
                                                    echo form_hidden('publ',0);
                                                    echo form_submit('admin/lec_publicize','Skryť', 'class="btn btn-outline btn-danger btn-xs"');
                                                    echo form_close();
                                                } else {
                                                    echo form_open('admin/lec_publicize');
                                                    echo form_hidden('id',$row->id);
                                                    echo form_hidden('publ',1);
                                                    echo form_submit('admin/lec_publicize','Zverejniť', 'class="btn btn-outline btn-success btn-xs"');
                                                    echo form_close();
                                                }
                                                ?>
                                        </td>
                                        <td>
                                            <?php
                                                echo form_open('admin/profile/'.$row->id);
                                                echo form_hidden('id',$row->id);
                                                echo form_submit('admin/profile/'.$row->id,'Upraviť profil', 'class="btn btn-outline btn-success btn-xs"');
                                                echo form_close();
                                            ?>
                                        </td>
                                    </tr>
<?php }
                                }?>
                        </table>
                    </div>
                    <hr />
                    <?php
                    echo anchor('lectorate/new_lectorate','Vytvoriť novú organizáciu', 'class="btn btn-lg btn-success"');
                    if($typ=='Lektorát') {
                        echo anchor('admin/other','Zobraziť iné ogranizácie', 'class="btn btn-lg btn-warning"');
                    } else {
                        echo anchor('admin','Zobraziť lektoráty', 'class="btn btn-lg btn-warning"');
                    }
                    echo anchor('home', 'Späť', 'class="btn btn-lg btn-info"');
                    echo form_close();
?>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>

