<!-- Page Content -->
<div class="container">
    <!-- Page Heading/Breadcrumbs -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header"><?php echo $name; ?>
                <small></small>
            </h1>
        </div>
    </div>
    <!-- /.row -->

    <!-- Image Header -->
    <div class="row">
        <div class="col-lg-12">
            <img class="img-responsive" src="http://placehold.it/1200x300" alt="">
        </div>
    </div>
    <!-- /.row -->
    <hr />
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
        <!-- Content Column -->