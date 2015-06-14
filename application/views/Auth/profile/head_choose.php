<h2>Vedúci pracoviska</h2>
<p>Vyberte používateľa ako vedúceho pracoviska. Ak nie je registrovaný, tak zvoľte možnosť Iné.</p>
<table style="max-width: 800px;">
    <?php
    echo form_open('profile_edit/choose_head'); 
    $users = $users+array('-1'=>'Iné');?>
    <tr>
        <td><?php echo form_label('Registrovaní používatelia');?></td>
        <td><?php echo form_dropdown('user_id',$users,'-1');?></td>
    </tr>
    <tr>
        <td><?php echo form_submit('profile_edit/choose_head','Vybrať'); ?></td>
    </tr>
<?php
    echo form_close();
?>
</table>