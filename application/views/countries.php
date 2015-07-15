<?php
//var_dump($coun);
?>
<!-- Page Content -->
<div class="container">
    <!-- Page Heading/Breadcrumbs -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Krajiny
                <small></small>
            </h1>
        </div>
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                </div>
                <!-- .panel-heading -->
                <?php if ($coun->num_rows() > 0) {
                    $i = 0;
                    foreach ($coun->result() as $row) {
                        $i++;
                    $data = $this->lectorate->get_lectorate_c($row->country_id)?>
                <div class="panel-body">
                    <div class="panel-group" id="accordion">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $i;?>"><?php echo $data['name'];?></a>
                                </h4>
                            </div>
                            <div id="collapse<?php echo $i;?>" class="panel-collapse collapse out">
                                <?php $lects = $this->lectorate->get_lectorate_of_country($row->country_id);
                                foreach($lects->result() as $row2) {?>
                                <div class="panel-body">
                                    <?php echo anchor('profile/lectorate/'.$row2->id,$row2->name_orig);?>
                                </div>
                                <?php }?>
                            </div>
                                </div>
                            </div>
                        </div>
                <!-- .panel-body -->
                    <?php }
                    }
                ?>
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
