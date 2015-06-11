<h2>Vedúci pracoviska</h2>
<p>Vyberte používateľa ako vedúceho pracoviska. Ak nie je registrovaný, tak zvoľte možnosť Iné.</p>
<table style="max-width: 800px;">
    <?php echo form_open(); ?>
    <tr>
        <td><?php echo form_label('Registrovaní používatelia');?></td>
        <td><?php echo form_dropdown('user_id',$user,'Iné');?></td>
    </tr>
    <tr>
        <td><?php echo form_submit(); ?></td>
    </tr>
<?php
    echo form_close();
?>
</table>