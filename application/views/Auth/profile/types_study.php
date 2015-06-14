<h2>Typy štúdia</h2>
<p>Bližšie charakterizujte  konkrétne typy štúdia slovenského jazyka.</p>
<table style="max-width: 800px;">
    <?php echo form_open('profile_edit/edit_study'); 
    echo form_hidden('id',$id);
    $type = array(
        'Slovakistika ako samostatný odbor/program',
        'Slovakistika ako súčasť širšieho štúdia (napr. v kombinácii)',
        'Slovenčina ako povinný predmet',
        'Slovenčina ako povinne voliteľný predmet',
        'Slovenčina ako výberový predmet',
        'Slovenčina pre verejnosť',
        'Iné'
    );?>
    <tr>
        <td><?php echo form_label('Typ štúdia');?></td>
        <td><?php echo form_dropdown('type',$type);?></td>
    </tr>
    <tr>
        <td><?php echo form_label('Pre koho je program určený?');?></td>
        <td><?php echo form_textarea('target_group',$target_group);?></td>
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
        <td><?php echo form_submit('profile_edit/edit_study','Uložiť'); ?></td>
    </tr>
<?php
    echo form_close();
?>
</table>