<h2>Typy štúdia</h2>
<p>Bližšie charakterizujte  konkrétne typy štúdia slovenského jazyka.</p>
<table style="max-width: 800px;">
    <?php echo form_open(); ?>
    <tr>
        <td><?php echo form_label('Typ štúdia');?></td>
        <td><?php echo form_input('type',$type);?></td>
    </tr>
    <tr>
        <td><?php echo form_label('Pre koho je program určený?');?></td>
        <td><?php echo form_textarea('aimgr',$aimgr);?></td>
    </tr>
    <tr>
        <td><?php echo form_label('Odborné zameranie');?></td>
        <td><?php echo form_textarea('specialism',$specialism);?></td>
    </tr>
    <tr>
        <td><?php echo form_label('Ako často sa otvára a ako dlho trvá?');?></td>
        <td><?php echo form_textarea('period',$period);?></td>
    </tr>
    <tr>
        <td><?php echo form_label('Bližšie informácie');?></td>
        <td><?php echo form_textarea('info',$info);?></td>
    </tr>
    <tr>
        <td><?php echo form_submit(); ?></td>
    </tr>
<?php
    echo form_close();
?>
</table>