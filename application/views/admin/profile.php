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
    
    <hr />
    <!-- Content Row -->
    <div class="row">
        <!-- Sidebar Column -->
        <div class="col-md-3">
            <div class="list-group">
                <?php
                echo anchor('admin/profile/' . $idl, 'Základné informácie', 'class="list-group-item"');
                echo anchor('admin/page/head/' . $idl, 'Vedúci pracoviska', 'class="list-group-item"');
                echo anchor('admin/page/types_study/' . $idl, 'Druhy štúdia', 'class="list-group-item"');
                echo anchor('admin/page/students/' . $idl, 'Študenti', 'class="list-group-item"');
                echo anchor('admin/page/activity/' . $idl, 'Aktivity', 'class="list-group-item"');
                echo anchor('admin/page/publications/' . $idl, 'Publikácie', 'class="list-group-item"');
                echo anchor('admin/page/additional/' . $idl, 'Ďalšie informácie', 'class="list-group-item"');
                ?>
            </div>
        </div>
        <!-- Content Column -->