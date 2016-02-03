
<section id="title" class="emerald">
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <img class="img-responsive" src="<?php echo base_url('assets/images/intro1.png'); ?>" alt="">
            </div>
            <div class="col-sm-5">
                <h1><?php echo $typ; ?></h1>
                <p>Vyslané lektorky a lektori sú nenahraditeľnými aktérmi vo vyučovaní slovenského jazyka v zahraničí, v propagácii Slovenska a jeho kultúrnych špecifík. V tejto sekcii nájdete profily v súčasnosti aktívnych aj prehľad bývalých lektorov a lektoriek.</p>
            </div>
            <div class="col-sm-3" class="right">
                <ul class="breadcrumb pull-right">
                    <li><?php echo anchor('home', 'Domov'); ?></li>
                    <li class="active"><?php echo $typ; ?></li>
                </ul>
            </div>
        </div>
    </div>
</section><!--/#title-->
<!-- Page Content -->
<section id="lectorates" class="container">
    <div class="row">
        <?php
        if ($list->num_rows() > 0) {
            foreach ($list->result() as $row) {
                $data = $this->lectorate->get_lectorate_c($row->country_id);
                ?>
        <div class="col-md-4 text-center">
                    <div class="thumbnail">
        <!--<img class="img-responsive" src="http://placehold.it/750x150" alt="">-->
                        <div class="caption">
                            <h4><?php 
                            if($row->name_sk!="") {
                                echo anchor('profile/lectorate/' . $row->id, $row->name_sk); 
                            } else {
                                echo anchor('profile/lectorate/' . $row->id, $row->name_orig); 
                            }
                                ?>                                
                                <br />
                                <small><?php echo $row->name_orig; ?></small>
                            </h4>
                                    <p>
                                        <?php echo $data['name_sk'] . ', ' . $row->street . ' ' . $row->number . ',' . $row->city . ', ' . $row->zip; ?>
                                    </p>
                                    <p class="gap"></p>

                                            <p>
                                        <?php
                                        echo anchor('profile/lectorate/' . $row->id, 'Zobraziť viac', 'class="btn btn-success"')
// echo substr($row->focus, 0, 250) . '... ' . anchor('profile/lectorate/' . $row->id, 'Zobraziť viac', 'class="btn btn-info btn-xs"')
                                        ?>
                                    </p>
                                   
                                    <ul class="list-inline">
                                        <?php if (strlen($row->facebook) > 0) { ?>
                                            <li><a href="<?php echo $row->facebook; ?>" target="_blank"><i class="fa fa-2x fa-facebook-square"></i></a>
                                            </li>
                                            <?php
                                        }
                                        if (strlen($row->linkedin) > 0) {
                                            ?>
                                            <li><a href="<?php echo $row->linkedin; ?>" target="_blank"><i class="fa fa-2x fa-linkedin-square"></i></a>
                                            </li>
                                            <?php
                                        }
                                        if (strlen($row->twitter) > 0) {
                                            ?>
                                            <li><a href="<?php echo $row->twitter; ?>" target="_blank"><i class="fa fa-2x fa-twitter-square"></i></a>
                                            </li>
                                        <?php } ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                }
                ?>
    </div>
    <!-- /.row -->
</section>