<!-- Page Content -->

<section id="title" class="emerald">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <h1>Novinky a zaujímavé odkazy</h1>
                <p>Pellentesque habitant morbi tristique senectus et netus et malesuada</p>
            </div>
            <div class="col-sm-6">
                <ul class="breadcrumb pull-right">
                    <li><?php echo anchor('home', 'Domov'); ?></li>
                    <li class="active">Novinky a zaujímavé odkazy</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section id="novinky">
    <div class="container">
    <div class="row">
        <div class="col-lg-12">
                            <ul class="timeline">
                                <?php 
                                    if ($query->num_rows() > 0) {
                                        foreach ($query->result() as $row) {
                                ?>
                                <?php if($this->dx_auth->is_admin()) {?>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-toggle="dropdown">
                                        <i class="fa fa-gear"></i>  <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><?php echo anchor('profile_edit/news_more/'.$row->id,'Upraviť');?></li>
                                        <li><?php echo anchor('admin/news_hide/'.$row->id,'Skryť');?></li>
                                    </ul>
                                </div>
                                <?php }?>
                                <li>
                                    <div class="timeline-badge"><!--<i class="fa fa-check"></i>-->
                                    </div>
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <h4 class="timeline-title"><span style="text-transform: capitalize"><?php echo $row->title; ?></span></h4>
                                            <p><small class="text-muted"><i class="fa fa-user"></i><?php echo ' '.anchor('lectors/profile/'.$row->created,$this->model_user->get_user_name($row->created)).' ';?><i class="fa fa-clock-o"></i> <?php echo $row->date_edited; ?></small>
                                            </p>
                                        </div>
                                        <div class="timeline-body">
                                            <p><?php echo $row->content; ?></p>
                                        </div>
                                    </div>
                                </li>
                                <?php }
                                    }?>
                            </ul>
                    </div>
                    <!-- /.panel -->
                </div>
    </div>
</div>
</section>