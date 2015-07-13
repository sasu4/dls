<div class="container">
    <div class="row"><br /></div>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Aktivovať používateľov</h3>
                </div>
                <div class="panel-body">
                    <div class="well well-sm">
                    </div>
                    <?php if (validation_errors()) { ?>
                        <div class="alert alert-warning">
                            <?php echo validation_errors(); // Show error  ?>
                        </div>
                        <?php
                    }
                    ?>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Označiť</th>
                                    <th>Meno</th>
                                    <th>Priezvisko</th>
                                    <th>Email</th>
                                    <th>Posledná IP</th>
                                    <th>Vytvorený</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                echo form_open($this->uri->uri_string());
                                foreach ($users as $user) {
                                    ?>
                                <tr>
                                        <td><?php echo form_checkbox('checkbox_' . $user->id, $user->username) ?></td>
                                        <td><?php echo $user->name; ?></td>
                                        <td><?php echo $user->surname; ?></td>
                                        <td><?php echo $user->email; ?></td>
                                        <td><?php echo $user->last_ip; ?></td>
                                        <td><?php echo date('Y-m-d', strtotime($user->created)); ?></td>
                                    </tr>
<?php } ?>
                            </tbody>
                        </table>
                    </div>
                    <hr />
                                        <?php
                    echo form_submit('activate', 'Aktivovať používateľov', 'class="btn btn-lg btn-success"');
                    echo anchor('home', 'Späť', 'class="btn btn-lg btn-info"');
                    echo form_close();
?>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container je ukonceny vo footer -->