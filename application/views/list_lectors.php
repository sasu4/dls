<!-- Page Content -->
<div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Lektori
                <small></small>
            </h1>
        </div>
    </div>
    <!-- /.row -->

    <!-- Intro Content -->
    <div class="row">
        <div class="col-md-6">
            <img class="img-responsive" src="<?php echo base_url('assets/images/intro2.png'); ?>" alt="">
        </div>
        <div class="col-md-6">
            <h2>Slovenskí lektori vo svete</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed voluptate nihil eum consectetur similique? Consectetur, quod, incidunt, harum nisi dolores delectus reprehenderit voluptatem perferendis dicta dolorem non blanditiis ex fugiat.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, consequuntur, modi mollitia corporis ipsa voluptate corrupti eum ratione ex ea praesentium quibusdam? Aut, in eum facere corrupti necessitatibus perspiciatis quis?</p>
        </div>
    </div>
    <!-- /.row -->
    <hr />
    <!-- Team Members -->
    <div class="row">
        <?php
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                ?>

        <div class="col-md-4 text-center">
                    <div class="thumbnail">
        <!--<img class="img-responsive" src="http://placehold.it/750x450" alt="">-->
                        <div class="caption">
                            <h3><?php echo anchor('lectors/profile/' . $row->id, $row->name . ' ' . $row->surname); ?><br>
                                                <small><?php echo $this->lectorate->get_country_name($row->country_id);
        ?>
                                </small>
                            </h3>
                            <p><?php
                                echo substr($row->about, 0, 200);
                                ?></p>
                                            <p><?php
                                        echo substr($row->expertise, 0, 200) . ' ... ' . anchor('lectors/profile/' . $row->id, 'Zobraziť viac', 'class="btn btn-default btn-xs"')
                                ?></p>
                                            <ul class="list-inline">
                                        <li><a href="<?php echo $row->facebook;?>" target="_blank"><i class="fa fa-2x fa-facebook-square"></i></a>
                                        </li>
                                        <li><a href="<?php echo $row->linkedin;?>" target="_blank"><i class="fa fa-2x fa-linkedin-square"></i></a>
                                        </li>
                                        <li><a href="<?php echo $row->twitter;?>" target="_blank"><i class="fa fa-2x fa-twitter-square"></i></a>
                                        </li>
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


