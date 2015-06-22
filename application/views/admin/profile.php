<div class="nav">
    <?php 
        echo anchor('admin/profile/'.$idl,'Základné informácie').' | ';
        echo anchor('admin/pages/head/'.$idl,'Vedúci pracoviska').' | ';
        echo anchor('admin/pages/types_study/'.$idl,'Druh štúdia').' | ';
        echo anchor('admin/pages/students/'.$idl,'Študenti').' | ';
        echo anchor('admin/pages/activity/'.$idl,'Aktivity').' | ';
        echo anchor('admin/pages/publication/'.$idl,'Publikácie').' | ';
        echo anchor('admin/pages/additional/'.$idl,'Ďalšie informácie');
    ?>
</div>