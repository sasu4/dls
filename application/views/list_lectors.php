<!-- Page Content -->
<section id="title" class="emerald">
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <img class="img-responsive" src="<?php echo base_url('assets/images/intro2.png'); ?>" alt="">
            </div>
            <div class="col-sm-5">
                <h1>Lektori</h1>
                <p>Vyslané lektorky a lektori sú nenahraditeľnými aktérmi vo vyučovaní slovenského jazyka v zahraničí, v propagácii Slovenska a jeho kultúrnych špecifík.. . V tejto sekcii nájdete profily tých v súčasnosti aktívnych aj prehľad bývalých lektorov a lektoriek. </p>
            </div>
            <div class="col-sm-3">
                <ul class="breadcrumb pull-right">
                    <li><?php echo anchor('home', 'Domov'); ?></li>
                    <li class="active">Lektori</li>
                </ul>
            </div>
        </div>
    </div>
</section><!--/#title-->

<section id="lectorates_list" class="container">
    <!-- Intro Content -->
    <!--    <div class="row">
            <div class="col-md-6">
            <img class="img-responsive" src="<?php //echo base_url('assets/images/intro2.png');      ?>" alt="">
        </div>
        <div class="col-md-6">
            <h2>Slovenskí lektori vo svete</h2>
            <p>Vyslané lektorky a lektori sú nenahraditeľnými aktérmi vo vyučovaní slovenského jazyka v zahraničí, v propagácii Slovenska a jeho kultúrnych špecifík.. . V tejto sekcii nájdete profily tých v súčasnosti aktívnych aj prehľad bývalých lektorov a lektoriek. </p>

        </div>
        </div>-->
    <!-- /.row -->
    <!-- Team Members -->
    <div class="row">
        <?php
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                ?>

        <div class="col-md-4 text-center">
                            <div class="thumbnail">
                        <div class="caption">
                            <h3><?php echo anchor('lectors/profile/' . $row->id, $row->name . ' ' . $row->surname); ?><br>
                                <small><?php echo $this->lectorate->get_country_name($row->country_id);
                ?>
                                                </small>
                                    </h3>
                                    <p><?php echo substr($row->about, 0, 200); ?>
                                    </p>
                                    <p class="gap"></p>
                                    <p><?php
                                        echo anchor('lectors/profile/' . $row->id, 'Zobraziť viac', 'class="btn btn-success"')
        ?></p>

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
<!-- /.lectorate_list -->

