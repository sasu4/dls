<?php
//var_dump($coun);
?>
<!-- Page Content -->
<div class="container">
    <!-- Page Heading/Breadcrumbs -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Lektoráty
                <small></small>
            </h1>
        </div>
    </div>
    <!-- /.row -->

    <!-- Intro Content -->
    <div class="row">
        <div class="col-md-6">
            <img class="img-responsive" src="<?php echo base_url('assets/images/intro3.png') ?>" alt="">
        </div>
        <div class="col-md-6">
            <h2>Slovenské lektoráty vo svete</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed voluptate nihil eum consectetur similique? Consectetur, quod, incidunt, harum nisi dolores delectus reprehenderit voluptatem perferendis dicta dolorem non blanditiis ex fugiat.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, consequuntur, modi mollitia corporis ipsa voluptate corrupti eum ratione ex ea praesentium quibusdam? Aut, in eum facere corrupti necessitatibus perspiciatis quis?</p>
            <?php
            if ($typ == 'Lektorát') {
                echo anchor('lectorate', 'Zobraziť iné ogranizácie', 'class="btn btn-default btn-lg"');
            } else {
                echo anchor('lectorate', 'Zobraziť lektoráty', '');
}
            ?>
        </div>

    </div>
    <!-- /.row -->
    <hr />
    <!-- Team Members -->
    <div class="row">
        <div class="well well-sm"></div>
        <?php
        $nastavene = 0;
        if ($list->num_rows() > 0) {
            foreach ($list->result() as $row) {
                if ($nastavene == 0) {
                    $id = $row->country_id;
                    $nastavene = 1;
                }
                if ($id == $row->country_id) {
                    //$data = $this->lectorate->get_lectorate_c($row->country_id);
                    ?>
<!--        <div class="well well-sm">
                        <?php //echo $data['name']; ?>
                    </div>-->
                    <?php
                    $id = $row->country_id;
                }
                ?>
        <div class="col-md-4 text-center">
                    <div class="thumbnail">
        <!--<img class="img-responsive" src="http://placehold.it/750x450" alt="">-->
                        <div class="caption">
                                            <h3><?php echo anchor('profile/lectorate/' . $row->id, $row->name_sk); ?><br />

                                                <small>
                                            <?php echo $row->name_orig; ?>
                                        </small>
                                    </h3>
                                    <p>
                                                <?php echo $row->street . ' ' . $row->number . '<br />' . $row->city . ', ' . $row->zip; ?>
                                            <hr />
                                                    <?php echo substr($row->focus, 0, 250) . '... ' . anchor('profile/lectorate/' . $row->id, 'Zobraziť viac', 'class="btn btn-default btn-xs"') ?>
                                </p>
                                    <hr />
                                    <ul class="list-inline">
                                        <li><a href="<?php echo $row->facebook;?>" target="_blank"><i class="fa fa-2x fa-facebook-square"></i></a>
                                        </li>
                                        <li><a href="<?php echo $row->linkedin;?>" target="_blank"><i class="fa fa-2x fa-linkedin-square"></i></a>
                                        </li>
                                        <li><a href="<?php echo $row->twitter;?>" target="_blank"><i class="fa fa-2x fa-twitter-square"></i></a>
                                        </li>
                                        <li>
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
