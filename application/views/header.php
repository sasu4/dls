<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" context="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <meta name="description" content="">

    <title>CodeIgniter Bootstrap</title>

    <link href="<?php echo base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/font-awesome.min.css') ?>" rel="stylesheet">
</head>
<body>
    <div class="navbar"><right>
        <?php if(!$this->dx_auth->is_logged_in()) {
            echo anchor('auth/login','Prihlásenie');
        } else {
            echo $this->dx_auth->get_name();
            echo ' ('.anchor('auth/logout','Odhlásenie').')';
            echo ' | '.anchor('home','Domov');
            echo ' | '.anchor('profile_edit','Upraviť profil');
        }
            ?>
        </right>
    </div>