<header class="navbar navbar-inverse navbar-fixed-top wet-asphalt" role="banner">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/"><img src="<?php echo base_url('assets/images/logo.png'); ?>" alt="logo"></a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="/">Domov</a></li>
                <li><?php echo anchor('news', 'Novinky'); ?></li>
                <li><?php echo anchor('lectors', 'Lektori'); ?></li>
                <li><?php echo anchor('country', 'Krajiny'); ?></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pracoviská<i class="icon-angle-down"></i></a>
                    <ul class="dropdown-menu">
                        <li><?php echo anchor('lectorate', 'Lektoráty'); ?></li>
                        <li><?php echo anchor('lectorate/other', 'Iné slovakistické pracoviská'); ?></li>
                    </ul>
                </li>
                <li><?php echo anchor('contact', 'Kontakt'); ?></li>
                <?php if (!$this->dx_auth->is_logged_in()) { ?>
                    <li><?php echo anchor('auth/login', 'Prihlásenie'); ?></li>
                <?php } else {
                    ?>
                    <li><?php echo anchor('auth/logout', 'Odhlásenie (' . $this->dx_auth->get_name() . ')'); ?></li>
                <?php } ?>
            </ul>
        </div>
    </div>
</header><!--/header-->