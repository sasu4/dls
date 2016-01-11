<!-- Page Content -->
<section id="title" class="emerald">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <h1><?php echo $name; ?></h1>
                <p>Pellentesque habitant morbi tristique senectus et netus et malesuada</p>
            </div>
            <div class="col-sm-6">
                <ul class="breadcrumb pull-right">
                    <li><?php echo anchor('home', 'Domov'); ?></li>
                    <li class="active"><?php echo $name ?></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<div class="container">
    <p class="gap"></p>
    <!-- Content Row -->
    <div class="row">
        <!-- Sidebar Column -->
        <div class="col-md-3">
            <div class="list-group">
                <?php
                echo anchor('profile/lectorate/' . $idl, 'Základné informácie', 'class="list-group-item"');
                echo anchor('profile/pages/head/' . $idl, 'Vedúci pracoviska', 'class="list-group-item"');
                echo anchor('profile/pages/types_study/' . $idl, 'Druhy štúdia', 'class="list-group-item"');
                echo anchor('profile/pages/students/' . $idl, 'Študenti', 'class="list-group-item"');
                echo anchor('profile/pages/activity/' . $idl, 'Aktivity', 'class="list-group-item"');
                echo anchor('profile/pages/publication/' . $idl, 'Publikácie', 'class="list-group-item"');
                echo anchor('profile/pages/additional/' . $idl, 'Ďalšie informácie', 'class="list-group-item"');
                ?>
            </div>
        </div>
