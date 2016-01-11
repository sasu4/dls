<?php if (!$this->dx_auth->is_logged_in()) { ?>
<section id="main-slider" class="no-margin">
    <div class="carousel slide wet-asphalt">
        <ol class="carousel-indicators">
            <li data-target="#main-slider" data-slide-to="0" class="active"></li>
            <li data-target="#main-slider" data-slide-to="1"></li>
            <li data-target="#main-slider" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="item active" style="background-image: url(<?php echo base_url('assets/images/slider/bg1.jpg'); ?>)">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="carousel-content centered">
                                <h2 class="boxed animation animated-item-1">Study Little Great Language</h2>
                                <p class="animation animated-item-2"></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/.item-->
            <div class="item" style="background-image: url(<?php echo base_url('assets/images/slider/bg2.jpg'); ?>)">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="carousel-content center centered">
                                <h2 class="boxed animation animated-item-1">Slovak E-learning Courses</h2>
                                <p class="animation animated-item-2"></p>
                                <br>
                                <a class="btn btn-md animation animated-item-3" href="#">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/.item-->
            <div class="item" style="background-image: url(<?php echo base_url('assets/images/slider/bg4.jpg'); ?>)">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="carousel-content centered">
                                <h2 class="boxed animation animated-item-1">51st Summer School of Slovak Language and Culture</h2>
                                <p class="boxed animation animated-item-2"></p>
                                <a class="btn btn-md animation animated-item-3" href="#">Learn More</a>
                            </div>
                        </div>
                        <div class="col-sm-6 hidden-xs animation animated-item-4">
                            <div class="centered">
                                <div class="embed-container">
<!--                                    <iframe src="//player.vimeo.com/video/69421653?title=0&amp;byline=0&amp;portrait=0&amp;color=a22c2f" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>-->
                                    <iframe width="560" height="315" src="https://www.youtube.com/embed/ZiHLXMYWt2M" frameborder="0" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/.item-->
        </div><!--/.carousel-inner-->
    </div><!--/.carousel-->
    <a class="prev hidden-xs" href="#main-slider" data-slide="prev">
        <i class="icon-angle-left"></i>
    </a>
    <a class="next hidden-xs" href="#main-slider" data-slide="next">
        <i class="icon-angle-right"></i>
    </a>
</section><!--/#main-slider-->

<section id="services" class="emerald">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-6">
                <div class="media">
                    <div class="pull-left">
                        <i class="icon-group icon-md"></i>
                    </div>
                    <div class="media-body">
                        <h3 class="media-heading"><?php echo anchor('lectors', 'Naši lektori'); ?></h3>
                        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae.</p>
                    </div>
                </div>
            </div><!--/.col-md-4-->
            <div class="col-md-4 col-sm-6">
                <div class="media">
                    <div class="pull-left">
                        <i class="icon-flag icon-md"></i>
                    </div>
                    <div class="media-body">
                        <h3 class="media-heading"><?php echo anchor('lectorate', 'Naše pracoviská'); ?></h3>
                        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae.</p>
                    </div>
                </div>
            </div><!--/.col-md-4-->
            <div class="col-md-4 col-sm-6">
                <div class="media">
                    <div class="pull-left">
                        <i class="icon-globe icon-md"></i>
                    </div>
                    <div class="media-body">
                        <h3 class="media-heading"><?php echo anchor('country', 'Krajiny'); ?></h3>
                        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae.</p>
                    </div>
                </div>
            </div><!--/.col-md-4-->
        </div>
    </div>
</section><!--/#services-->

<section id="recent-works">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <h3>Naše ostatné projekty</h3>
                <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                <div class="btn-group">
                    <a class="btn btn-danger" href="#scroller" data-slide="prev"><i class="icon-angle-left"></i></a>
                    <a class="btn btn-danger" href="#scroller" data-slide="next"><i class="icon-angle-right"></i></a>
                </div>
                <p class="gap"></p>
            </div>
            <div class="col-md-9">
                <div id="scroller" class="carousel slide">
                    <div class="carousel-inner">
                        <div class="item active">
                            <div class="row">
                                <div class="col-xs-4">
                                    <div class="portfolio-item">
                                        <div class="item-inner">
                                            <img class="img-responsive" src="<?php echo base_url('assets/images/portfolio/recent/e-slovak.png'); ?>" alt="">
                                            <h5>
                                                E-learningové kurzy
                                            </h5>
                                            <div class="overlay">
                                                <a class="preview btn btn-danger" title="E-learningové kurzy" href="<?php echo base_url('assets/images/portfolio/full/e-slovak.png'); ?>" rel="prettyPhoto"><i class="icon-eye-open"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-4">
                                    <div class="portfolio-item">
                                        <div class="item-inner">
                                            <img class="img-responsive" src="<?php echo base_url('assets/images/portfolio/recent/myslovak.png'); ?>" alt="">
                                            <h5>
                                                On-line kurz
                                            </h5>
                                            <div class="overlay">
                                                <a class="preview btn btn-danger" title="On-line kurz" href="<?php echo base_url('assets/images/portfolio/full/myslovak.png'); ?>" rel="prettyPhoto"><i class="icon-eye-open"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-4">
                                    <div class="portfolio-item">
                                        <div class="item-inner">
                                            <img class="img-responsive" src="<?php echo base_url('assets/images/portfolio/recent/webumenia.png'); ?>" alt="">
                                            <h5>
                                                Slovenské reálie dostupné cez umelecké diela Slovenskej národnej galérie
                                            </h5>
                                            <div class="overlay">
                                                <a class="preview btn btn-danger" title="Slovenské reálie dostupné cez umelecké diela Slovenskej národnej galérie" href="<?php echo base_url('assets/images/portfolio/full/weumenia.png'); ?>" rel="prettyPhoto"><i class="icon-eye-open"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!--/.row-->
                        </div><!--/.item-->
                        <div class="item">
                            <div class="row">
                                <div class="col-xs-4">
                                    <div class="portfolio-item">
                                        <div class="item-inner">
                                            <img class="img-responsive" src="images/portfolio/recent/item2.png" alt="">
                                            <h5>
                                                Flat Theme - Business Theme
                                            </h5>
                                            <div class="overlay">
                                                <a class="preview btn btn-danger" title="Malesuada fames ac turpis egestas" href="images/portfolio/full/item1.jpg" rel="prettyPhoto"><i class="icon-eye-open"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-4">
                                    <div class="portfolio-item">
                                        <div class="item-inner">
                                            <img class="img-responsive" src="images/portfolio/recent/item1.png" alt="">
                                            <h5>
                                                Nova - Corporate site template
                                            </h5>
                                            <div class="overlay">
                                                <a class="preview btn btn-danger" title="Malesuada fames ac turpis egestas" href="images/portfolio/full/item1.jpg" rel="prettyPhoto"><i class="icon-eye-open"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-4">
                                    <div class="portfolio-item">
                                        <div class="item-inner">
                                            <img class="img-responsive" src="images/portfolio/recent/item3.png" alt="">
                                            <h5>
                                                Fornax - Apps site template
                                            </h5>
                                            <div class="overlay">
                                                <a class="preview btn btn-danger" title="Malesuada fames ac turpis egestas" href="images/portfolio/full/item1.jpg" rel="prettyPhoto"><i class="icon-eye-open"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!--/.item-->
                    </div>
                </div>
            </div>
        </div><!--/.row-->
    </div>
</section><!--/#recent-works-->

<section id="news" class="alizarin">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="center">
                    <h2>Novinky</h2>
                    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                </div>
                <div class="gap"></div>
                <div class="row">
                    <div class="col-md-6">
                        <blockquote>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                            <small>Someone famous in <cite title="Source Title">Source Title</cite></small>
                        </blockquote>
                        <blockquote>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                            <small>Someone famous in <cite title="Source Title">Source Title</cite></small>
                        </blockquote>
                    </div>
                    <div class="col-md-6">
                        <blockquote>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                            <small>Someone famous in <cite title="Source Title">Source Title</cite></small>
                        </blockquote>
                        <blockquote>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                            <small>Someone famous in <cite title="Source Title">Source Title</cite></small>
                        </blockquote>
                    </div>
                </div>
            </div>
        </div>
    </div>
        </section><!--/#news-->

<section id="bottom" class="wet-asphalt">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-6">
                <h4>O nás</h4>
                        <p>DSL je produktom  Studia Academia Slovaca – Centrum pre slovenčinu ako cudzí jazyk a slúži:</p>
                    <ul>
                        <li>na informovanie verejnosti o možnostiach štúdia slovenského jazyka, kultúry a literatúry na univerzitách mimo územia Slovenskej republiky,</li>
                        <li>na vzájomnú komunikáciu medzi jednotlivými pracoviskami, vyslanými lektormi a slovakistami v zahraničí,</li>
                        <li>na sprehľadnenie vzdelávacích i kultúrnych aktivít  jednotlivých zahraničných slovakistických pracovísk a možnostiach spolupráce (organizovanie konferencií, seminárov, výstav atď).</li>
                    </ul>
            </div><!--/.col-md-4-->

            <div class="col-md-4 col-sm-6">
                <h4>Studia Academica Slovaca</h4>
                <div>
                    <ul class="arrow">
                        <li><a href="#">Company Overview</a></li>
                        <li><a href="#">Meet The Team</a></li>
                        <li><a href="#">Our Awesome Partners</a></li>
                        <li><a href="#">Our Services</a></li>
                        <li><a href="#">Frequently Asked Questions</a></li>
                        <li><a href="#">Conatct Us</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Terms of Use</a></li>
                        <li><a href="#">Copyright</a></li>
                    </ul>
                </div>
            </div><!--/.col-md-4-->

            <!--            <div class="col-md-3 col-sm-6">
                            <h4>Posledné novinky</h4>
                <div>
                    <div class="media">
                        <div class="pull-left">
                            <img src="images/blog/thumb1.jpg" alt="">
                        </div>
                        <div class="media-body">
                            <span class="media-heading"><a href="#">Pellentesque habitant morbi tristique senectus</a></span>
                            <small class="muted">Posted 17 Aug 2013</small>
                        </div>
                    </div>
                    <div class="media">
                        <div class="pull-left">
                            <img src="images/blog/thumb2.jpg" alt="">
                        </div>
                        <div class="media-body">
                            <span class="media-heading"><a href="#">Pellentesque habitant morbi tristique senectus</a></span>
                            <small class="muted">Posted 13 Sep 2013</small>
                        </div>
                    </div>
                    <div class="media">
                        <div class="pull-left">
                            <img src="images/blog/thumb3.jpg" alt="">
                        </div>
                        <div class="media-body">
                            <span class="media-heading"><a href="#">Pellentesque habitant morbi tristique senectus</a></span>
                            <small class="muted">Posted 11 Jul 2013</small>
                        </div>
                    </div>
                </div>
                        </div>/.col-md-3-->

            <div class="col-md-4 col-sm-6">
                <h4>Adresa</h4>
                <address>
                    <strong>Studia Academica Slovaca - centrum pre slovenčinu ako cudzí jazyk</strong><br>
                    Univerzita Komenského, Filozofická fakulta<br>
                    Gondova 2<br>
                    814 99 Bratislava, Slovensko<br/>
                    <abbr title="Phone"><i class="icon-phone"></i></abbr> +421 2 59 339 497<br/>
                    <abbr title="E-mail"><i class="icon-envelope"></i></abbr> sas@fphil.uniba.sk
                </address>
                <!--                <h4>Newsletter</h4>
                                <form role="form">
                    <div class="input-group">
                        <input type="text" class="form-control" autocomplete="off" placeholder="Enter your email">
                        <span class="input-group-btn">
                            <button class="btn btn-danger" type="button">Go!</button>
                        </span>
                    </div>
                                </form>-->
            </div> <!--/.col-md-4-->
        </div>
    </div>
</section><!--/#bottom-->
    <?php
} else { // ponuka tlacidiel po prihlaseni
    ?>
        <!-- Page Content -->
    <section id="title" class="emerald">
        <div class="container">
            <div class="row">
                        <div class="col-sm-6">
                    <img class="img-responsive" src="<?php echo base_url('assets/images/intro1.png'); ?>" alt="">
                </div>
                        <div class="col-sm-6">
                    <h1>Vitajte v DLS</h1>
                    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada</p>
                </div>
            </div>
        </div>
    </section><!--/#title-->
<section id="home_after_login" class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="media">
                    <div class="pull-left">
                        <span class="fa-stack fa-2x">
                            <i class="fa fa-circle fa-stack-2x text-success"></i>
                            <i class="fa fa-user fa-stack-1x fa-inverse"></i>
                        </span>
                    </div>
                    <div class="media-body">
                                <h2 class="page-header">O mne</h2>
                        <?php echo anchor('profile_edit/lector', 'Upraviť', 'class="btn btn-outline btn-success"'); ?>
                    </div>
                </div>
             
            </div>
        </div>
        <!-- /.row -->
        <!-- Service List -->
        <!-- The circle icons use Font Awesome's stacked icon classes. For more information, visit http://fontawesome.io/examples/ -->
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Nastavenia</h2>
            </div>
            <div class="col-md-6">
                <div class="media">
                    <div class="pull-left">
                        <span class="fa-stack fa-2x">
                            <i class="fa fa-circle fa-stack-2x text-primary"></i>
                            <i class="fa fa-university fa-stack-1x fa-inverse"></i>
                        </span>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">Moje pracovisko</h4>
                                <p>Vložte údaje o pracovisku</p>
                        <?php echo anchor('profile_edit/workplace', 'Upraviť', 'class="btn btn-outline btn-primary"'); ?>
                    </div>
                </div>
                <div class="media">
                    <div class="pull-left">
                        <span class="fa-stack fa-2x">
                            <i class="fa fa-circle fa-stack-2x text-primary"></i>
                            <i class="fa fa-sitemap fa-stack-1x fa-inverse"></i>
                        </span>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">Vedúci pracoviska</h4>
                                <p>Vložte alebo pridajte vedúceho pracoviska</p>
                        <?php echo anchor('profile_edit/head', 'Upraviť', 'class="btn btn-outline btn-primary"'); ?>
                    </div>
                </div>
                <div class="media">
                    <div class="pull-left">
                        <span class="fa-stack fa-2x">
                            <i class="fa fa-circle fa-stack-2x text-primary"></i>
                            <i class="fa fa-info fa-stack-1x fa-inverse"></i>
                        </span>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">Ďalšie informácie</h4>
                                <p>Pridajte informácie o vašom pracovisku</p>
                        <?php echo anchor('profile_edit/additional', 'Upraviť', 'class="btn btn-outline btn-primary"'); ?>
                    </div>
                </div>
                <div class="media">
                    <div class="pull-left">
                        <span class="fa-stack fa-2x">
                            <i class="fa fa-circle fa-stack-2x text-primary"></i>
                            <i class="fa fa-newspaper-o fa-stack-1x fa-inverse"></i>
                        </span>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">Novinky</h4>
                                <p>Pridajte alebo prečítajte si aktuálne novinky</p>
                        <?php echo anchor('profile_edit/news', 'Upraviť', 'class="btn btn-outline btn-primary"'); ?>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="media">
                    <div class="pull-left">
                        <span class="fa-stack fa-2x">
                            <i class="fa fa-circle fa-stack-2x text-primary"></i>
                            <i class="fa fa-road fa-stack-1x fa-inverse"></i>
                        </span>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">Typy štúdia</h4>
                                <p>Vložte informácie o rôznych typoch štúdia, ktoré vaše pracovisko poskytuje</p>
                        <?php echo anchor('profile_edit/types_of_study', 'Upraviť', 'class="btn btn-outline btn-primary"'); ?>
                    </div>
                </div>
                <div class="media">
                    <div class="pull-left">
                        <span class="fa-stack fa-2x">
                            <i class="fa fa-circle fa-stack-2x text-primary"></i>
                            <i class="fa fa-graduation-cap fa-stack-1x fa-inverse"></i>
                        </span>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">Študenti</h4>
                                <p>Vložte informácie o počtoch študentov</p>
                        <?php echo anchor('profile_edit/students', 'Upraviť', 'class="btn btn-outline btn-primary"'); ?>
                    </div>
                </div>
                <div class="media">
                    <div class="pull-left">
                        <span class="fa-stack fa-2x">
                            <i class="fa fa-circle fa-stack-2x text-primary"></i>
                            <i class="fa fa-book fa-stack-1x fa-inverse"></i>
                        </span>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">Publikácie</h4>
                                <p>Vložte informácie o vašich publikáciách</p>
                        <?php echo anchor('profile_edit/publication', 'Upraviť', 'class="btn btn-outline btn-primary"'); ?>
                    </div>
                </div>
                <div class="media">
                    <div class="pull-left">
                        <span class="fa-stack fa-2x">
                            <i class="fa fa-circle fa-stack-2x text-primary"></i>
                            <i class="fa fa-tasks fa-stack-1x fa-inverse"></i>
                        </span>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">Aktivity pracoviska</h4>
                                <p>Vložte informácie o kultúrnych, vedeckých a vzdelávacích aktivitách pracoviska</p>
                        <?php echo anchor('profile_edit/activities', 'Upraviť', 'class="btn btn-outline btn-primary"'); ?>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.row -->
        <?php if ($this->dx_auth->is_admin()) { ?>
            <!-- Service List -->
            <!-- The circle icons use Font Awesome's stacked icon classes. For more information, visit http://fontawesome.io/examples/ -->
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="page-header">Administrácia systému</h2>
                </div>
                <div class="col-md-6">
                    <div class="media">
                        <div class="pull-left">
                            <span class="fa-stack fa-2x">
                                <i class="fa fa-circle fa-stack-2x text-primary"></i>
                                <i class="fa fa-eye fa-stack-1x fa-inverse"></i>
                            </span>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">Zobraziť/Skryť používateľov</h4>
                            <p></p>
                            <?php echo anchor('backend', 'Upraviť', 'class="btn btn-outline btn-primary"'); ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="media">
                        <div class="pull-left">
                            <span class="fa-stack fa-2x">
                                <i class="fa fa-circle fa-stack-2x text-primary"></i>
                                <i class="fa fa-check fa-stack-1x fa-inverse"></i>
                            </span>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">Aktivovať používateľov</h4>
                            <p></p>
                            <?php echo anchor('backend/waiting_users', 'Upraviť', 'class="btn btn-outline btn-primary"'); ?>
                        </div>
                    </div>
                </div>
                <p></p>
                <div class="col-md-6">
                    <div class="media">
                        <div class="pull-left">
                            <span class="fa-stack fa-2x">
                                <i class="fa fa-circle fa-stack-2x text-primary"></i>
                                <i class="fa fa-sliders fa-stack-1x fa-inverse"></i>
                            </span>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">Správa organizácií</h4>
                            <p></p>
                            <?php echo anchor('admin', 'Upraviť', 'class="btn btn-outline btn-primary"'); ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="media">
                        <div class="pull-left">
                            <span class="fa-stack fa-2x">
                                <i class="fa fa-circle fa-stack-2x text-primary"></i>
                                <i class="fa fa-newspaper-o fa-stack-1x fa-inverse"></i>
                            </span>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">Správa noviniek</h4>
                            <p></p>
                            <?php echo anchor('admin/news', 'Upraviť', 'class="btn btn-outline btn-primary"'); ?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        <?php } ?>

    </section>
    <?php }
    ?>