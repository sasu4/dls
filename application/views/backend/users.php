<div class="container">
    <div class="row"><br /></div>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Zobraziť/Skryť používateľov</h3>
                </div>
                <div class="panel-body">
                    <div class="well well-sm">
                    </div>
                    <?php
                    // Show reset password message if exist
                    if (isset($reset_message)) {
                        ?>
                    <div class="alert alert-success">
                            <?php echo $reset_message; ?>
                        </div>
                    <?php }
                    ?>

                    <?php if (validation_errors()) { ?>
                    <div class="alert alert-warning">                        
                            <?php echo validation_errors(); // Show error ?>
                        </div>
                        <?php
                    }
                    echo form_open($this->uri->uri_string());
                    ?>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Označiť</th>
                                    <th>Meno</th>
                                    <th>Priezvisko</th>
                                    <th>Email</th>
                                    <th>Rola</th>
                                    <th>Zablokovaný</th>
                                    <th>Posledná IP</th>
                                    <th>Posledné prihlásenie</th>
                                    <th>Vytvorený</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($users as $user) {

                                    $banned = ($user->banned == 1) ? 'Yes' : 'No';
                                    ?>
                                    <tr>
                                        <td><?php echo form_checkbox('checkbox_' . $user->id, $user->id) ?></td>
                                        <td><?php echo $user->name; ?></td>
                                        <td><?php echo $user->surname; ?></td>
                                        <td><?php echo $user->email; ?></td>
                                        <td><?php echo $user->role_name; ?></td>
                                        <td><?php echo $banned; ?></td>
                                        <td><?php echo $user->last_ip; ?></td>
                                        <td><?php echo date('Y-m-d', strtotime($user->last_login)); ?></td>
                                        <td><?php echo date('Y-m-d', strtotime($user->created)); ?></td>
                                    </tr>
<?php } ?>
                            </tbody>
                        </table>
                    </div>
                    <hr />
                                        <?php
                    echo form_submit('ban', 'Skryť vybraných', 'class="btn btn-lg btn-success"');
                    echo form_submit('unban', 'Zobraziť vybraných', 'class="btn btn-lg btn-success "');
                    echo form_submit('reset_pass', 'Resetovať heslo', 'class="btn btn-lg btn-warning"');
                    echo anchor('home', 'Späť', 'class="btn btn-lg btn-info"');
//     echo anchor('backend/waiting_users','Prejsť na aktiváciu používateľov');
//   echo $this->table->generate();

echo form_close();

//    echo $pagination;
?>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container je ukonceny vo footer -->