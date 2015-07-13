<div class="navbar">
    <img src="/assets/images/saslogo.png"> <span style="color: #F7AA26"><font size="6">Database of Slovak Lectors and Lectorates</font></span>
    <div style="position: absolute; right: 0px; width: 300px;">
        <?php
        if (!$this->dx_auth->is_logged_in()) {
            echo anchor('home', 'Domov');
            echo ' | ' . anchor('lectors', 'Zoznam lektorov');
            echo ' | ' . anchor('auth/login', 'PrihlĂˇsenie');
        } elseif ($this->dx_auth->is_admin()) {
            echo $this->dx_auth->get_name();
            echo ' (' . anchor('auth/logout', 'OdhlĂˇsenie') . ')';
            echo ' | ' . anchor('home', 'Domov');
            echo ' | ' . anchor('lectors', 'Zoznam lektorov');
            echo ' | ' . anchor('backend', 'SprĂˇva pouĹľĂ­vateÄľov');
            echo ' | ' . anchor('admin', 'SprĂˇva lektorĂˇtov');
        } else {
            echo $this->dx_auth->get_name();
            echo ' (' . anchor('auth/logout', 'OdhlĂˇsenie') . ')';
            echo ' | ' . anchor('home', 'Domov');
            echo ' | ' . anchor('lectors', 'Zoznam lektorov');
            echo ' | ' . anchor('profile_edit', 'UpraviĹĄ lektorĂˇt');
        }
        ?>
    </div>
</div>

<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
