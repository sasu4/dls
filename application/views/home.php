<?php if (!$this->dx_auth->is_logged_in()) { ?>
        <!-- Header Carousel -->
    <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

                <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <!--<div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide One');"></div>-->
                    <div class="fill" style="<?php
                    echo "background-image:url('";
                    echo base_url('assets/images/sas_carousel_1.png') . "');";
                    ?>"></div>
                    <div class="carousel-caption">
                        <h2>Slovak E-learning Courses</h2>
                    </div>
                </div>
                <div class="item">
                    <div class="fill" style="<?php
                    echo "background-image:url('";
                    echo base_url('assets/images/sas_carousel_2.png') . "');";
                    ?>"></div>
                    <div class="carousel-caption">
                        <h2>Study Little Great Language</h2>
                    </div>
                </div>
                <div class="item">
                    <div class="fill" style="<?php
                    echo "background-image:url('";
                    echo base_url('assets/images/sas_carousel_3.png') . "');";
                    ?>"></div>
                    <div class="carousel-caption">
                        <h2>51st summer school of Slovak language and culture Studia Academica Slovaca</h2>
                    </div>
                </div>
            </div>

                <!-- Controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="icon-prev"></span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="icon-next"></span>
            </a>
        </header>
<?php } ?>

<!-- Page Content -->
<div class="container">
    <?php if (!$this->dx_auth->is_logged_in()) { ?>
    <!-- Marketing Icons Section -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Databáza slovenských lektorov
                </h1>
            </div>
            <div class="col-md-4">
                        <div class="panel panel-default">
                    <div class="panel-heading">
                                <h4>
    <!--                            <i class="fa fa-fw fa-check"></i>-->
                                Lektori</h4>
                    </div>
                    <div class="panel-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>

                            <?php echo anchor('lectors', 'Zobraziť viac', 'class="btn btn-default"') ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                                    <h4>
    <!--                                <i class="fa fa-fw fa-gift"></i>-->
                                    Lektoráty</h4>
                        </div>
                        <div class="panel-body">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            <?php echo anchor('lectorate', 'Zobraziť viac', 'class="btn btn-default"') ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4>
    <!--                                        <i class="fa fa-fw fa-globe"></i>-->
                                    Krajiny</h4>
                        </div>
                        <div class="panel-body">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                <?php echo anchor('country', 'Zobraziť viac', 'class="btn btn-default"') ?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
            <hr />
            <!-- Content Row -->
            <div class="row">
                <!-- Map Column -->
                <div class="col-md-8">
                    <!-- Embedded Google Map -->
                            <!--<iframe width="100%" height="400px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.sk/maps/place/Gondova+70%2F2,+811+02+Bratislava/@48.1404629,17.1163727,17z/data=!3m1!4b1!4m2!3m1!1s0x476c8941d2b09c51:0x7037e8b88011c966"></iframe>-->
                    <iframe  width="100%" height="400px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2662.432688876589!2d17.116372700000003!3d48.14046289999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x476c8941d2b09c51%3A0x7037e8b88011c966!2sGondova+70%2F2%2C+811+02+Bratislava!5e0!3m2!1ssk!2ssk!4v1436442900150"></iframe>
                </div>
                <!-- Contact Details Column -->
                <div class="col-md-4">
                    <h3>Kontaktné informácie</h3>
                    <p>
                        Studia Academica Slovaca - centrum pre slovenčinu ako cudzí jazyk<br />
                        Univerzita Komenského, Filozofická fakulta <br />
                        Gondova 2 <br />814 99  Bratislava, Slovensko<br />
                    </p>
                    <p><i class="fa fa-phone"></i>
                        <abbr title="Phone"></abbr>: +421 2 59 339 497</p>
                    <p><i class="fa fa-envelope-o"></i>
                        <abbr title="Email"></abbr>: <a href="mailto:sas@fphil.uniba.sk">sas@fphil.uniba.sk</a>
                    </p>
                    <p><i class="fa fa-clock-o"></i>
                        <abbr title="Hours"></abbr>: Monday - Friday: 9:00 AM to 5:00 PM</p>
                    <ul class="list-unstyled list-inline list-social-icons">
                        <li>
                            <a href="https://www.facebook.com/welovesas"><i class="fa fa-facebook-square fa-2x"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-linkedin-square fa-2x"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-twitter-square fa-2x"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-google-plus-square fa-2x"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- /.row -->
            <hr />
            <!-- Contact Form -->
            <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
            <div class="row">
                <div class="col-md-8">
                    <h3>Pošlite nám správu</h3>
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="control-group form-group">
                            <div class="controls">
                                <label>Celé meno:</label>
                                <input type="text" class="form-control" id="name" required data-validation-required-message="Please enter your name.">
                                <p class="help-block"></p>
                            </div>
                        </div>
                        <div class="control-group form-group">
                            <div class="controls">
                                <label>Telefón:</label>
                                <input type="tel" class="form-control" id="phone" required data-validation-required-message="Please enter your phone number.">
                            </div>
                        </div>
                        <div class="control-group form-group">
                            <div class="controls">
                                <label>Email:</label>
                                <input type="email" class="form-control" id="email" required data-validation-required-message="Please enter your email address.">
                            </div>
                        </div>
                        <div class="control-group form-group">
                            <div class="controls">
                                <label>Správa:</label>
                                <textarea rows="10" cols="100" class="form-control" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
                            </div>
                        </div>
                        <div id="success"></div>
                        <!-- For success/fail messages -->
                        <button type="submit" class="btn btn-primary">Poslať správu</button>
                    </form>
                </div>

                </div>
            <!-- /.row -->

                <!-- /.container je ukonceny vo footer -->
            <?php
        } else {
            ?>
            <!-- Page Content -->
            <div class="container">
                    <!-- Page Heading/Breadcrumbs -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Vitajte
                            <small></small>
                        </h1>
                    </div>
                </div>
                <!-- /.row -->

                    <!-- Intro Content -->
                <div class="row">
                    <div class="col-md-6">
                        <img class="img-responsive" src="<?php echo base_url('assets/images/intro1.png') ?>" alt="">
                    </div>
                    <div class="col-md-6">
                        <div class="media">
                            <div class="pull-left">
                                <span class="fa-stack fa-2x">
                                    <i class="fa fa-circle fa-stack-2x text-success"></i>
                                    <i class="fa fa-user fa-stack-1x fa-inverse"></i>
                                </span>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">O mne</h4>
                                <?php echo anchor('profile_edit/lector', 'Upraviť', 'class="btn btn-outline btn-success btn-xs"'); ?>
                            </div>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed voluptate nihil eum consectetur similique? Consectetur, quod, incidunt, harum nisi dolores delectus reprehenderit voluptatem perferendis dicta dolorem non blanditiis ex fugiat.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, consequuntur, modi mollitia corporis ipsa voluptate corrupti eum ratione ex ea praesentium quibusdam? Aut, in eum facere corrupti necessitatibus perspiciatis quis?</p>


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
                                <p></p>
                                <?php echo anchor('profile_edit/workplace', 'Upraviť', 'class="btn btn-outline btn-primary btn-xs"'); ?>
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
                                <p></p>
                                <?php echo anchor('profile_edit/head', 'Upraviť', 'class="btn btn-outline btn-primary btn-xs"'); ?>
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
                                <p></p>
                                <?php echo anchor('profile_edit/additional', 'Upraviť', 'class="btn btn-outline btn-primary btn-xs"'); ?>
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
                                    <p></p>
                                    <?php echo anchor('profile_edit/types_of_study', 'Upraviť', 'class="btn btn-outline btn-primary btn-xs"'); ?>
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
                                <p></p>
                                <?php echo anchor('profile_edit/students', 'Upraviť', 'class="btn btn-outline btn-primary btn-xs"'); ?>
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
                                <p></p>
                                <?php echo anchor('profile_edit/publication', 'Upraviť', 'class="btn btn-outline btn-primary btn-xs"'); ?>
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
                                    <p></p>
                                    <?php echo anchor('profile_edit/activities', 'Upraviť', 'class="btn btn-outline btn-primary btn-xs"'); ?>
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
                                                <?php echo anchor('backend', 'Upraviť', 'class="btn btn-outline btn-primary btn-xs"'); ?>
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
                                                <?php echo anchor('backend/waiting_users', 'Upraviť', 'class="btn btn-outline btn-primary btn-xs"'); ?>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- /.row -->
                    <?php } ?>
                <!-- /.container je ukonceny vo footer -->
                <?php }
                ?>