<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" context="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <meta name="description" content="">

    <title>DLS - Database of Slovak Lectors and Lectorates</title>
    <link href="/assets/images/sasicon.png" rel="shortcut icon" />
    <link href="<?php echo base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/font-awesome.min.css') ?>" rel="stylesheet">
</head>
<body>
    <div class="navbar">
        <img src="/assets/images/saslogo.png"> <span style="color: #F7AA26"><font size="6">Database of Slovak Lectors and Lectorates</font></span>
        <div style="position: absolute; right: 0px; width: 300px;">
        <?php if(!$this->dx_auth->is_logged_in()) {
            echo anchor('home','Domov');
            echo ' | '.anchor('auth/login','Prihlásenie');
        } elseif($this->dx_auth->is_admin()) {
            echo $this->dx_auth->get_name();
            echo ' ('.anchor('auth/logout','Odhlásenie').')';
            echo ' | '.anchor('home','Domov');
            echo ' | '.anchor('backend','Správa používateľov');
            echo ' | '.anchor('admin','Správa lektorátov');
        } else {
            echo $this->dx_auth->get_name();
            echo ' ('.anchor('auth/logout','Odhlásenie').')';
            echo ' | '.anchor('home','Domov');
            echo ' | '.anchor('profile_edit','Upraviť lektorát');
        }
            ?>
        </div>
    </div>