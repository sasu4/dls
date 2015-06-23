<div class="nav">
    <?php 
        echo anchor('admin/profile/'.$idl,'Základné informácie').' | ';
        echo anchor('admin/page/head/'.$idl,'Vedúci pracoviska').' | ';
        echo anchor('admin/page/types_study/'.$idl,'Druh štúdia').' | ';
        echo anchor('admin/page/students/'.$idl,'Študenti').' | ';
        echo anchor('admin/page/activity/'.$idl,'Aktivity').' | ';
        echo anchor('admin/page/publications/'.$idl,'Publikácie').' | ';
        echo anchor('admin/page/additional/'.$idl,'Ďalšie informácie');
    ?>
</div>