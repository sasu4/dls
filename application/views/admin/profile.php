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
                echo anchor('admin/profile/' . $idl, '<i class="fa fa-university fa-fw"></i>&nbsp;Základné informácie', 'class="list-group-item"');
                echo anchor('admin/page/head/' . $idl, '<i class="fa fa-sitemap fa-fw"></i>&nbsp;Vedúci pracoviska', 'class="list-group-item"');
                echo anchor('admin/page/types_study/' . $idl, '<i class="fa fa-road fa-fw"></i>&nbsp;Druhy štúdia', 'class="list-group-item"');
                echo anchor('admin/page/students/' . $idl, '<i class="fa fa-tasks fa-fw"></i>&nbsp;Študenti', 'class="list-group-item"');
                echo anchor('admin/page/activity/' . $idl, '<i class="fa fa-graduation-cap fa-fw"></i>&nbsp;Aktivity', 'class="list-group-item"');
                echo anchor('admin/page/publications/' . $idl, '<i class="fa fa-book fa-fw"></i>&nbsp;Publikácie', 'class="list-group-item"');
                echo anchor('admin/page/additional/' . $idl, '<i class="fa fa-info fa-fw"></i>&nbsp;Ďalšie informácie', 'class="list-group-item"');
                ?>
            </div>
        </div>
        <!-- Content Column -->