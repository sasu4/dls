<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <?php echo anchor('home', 'DLS Home', 'class="navbar-brand"'); ?>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <?php
                    echo anchor('lectors', 'Lektori');
                    ?>
                </li>
                <li>
                    <?php
                    echo anchor('lectorate', 'Lektoráty');
                    ?>
                </li>
                <li>
                    <?php
                    echo anchor('country', 'Krajiny');
                    ?>
                </li>
                <li>
                    <?php
                    echo anchor('services', 'Služby');
                    ?>
                </li>
                <li>
                    <?php
                    echo anchor('faq', 'FAQ');
                    ?>
                </li>
                <?php if (!$this->dx_auth->is_logged_in()) { ?>
                    <li>
                        <?php echo anchor('auth/login', 'Prihlásenie'); ?>
                    </li>
                <?php } else { ?>
                    <li>
                        <?php
                        echo anchor('auth/logout', 'Odhlásenie (' . $this->dx_auth->get_name() . ')');
                        ?>
                    </li>
                    <?php
                }
                if ($this->dx_auth->is_admin()) {
                        ?>
                        <li>
                                <?php echo anchor('backend', 'Správa používateľov'); ?>
                        </li>
                    <?php }
                    ?>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>