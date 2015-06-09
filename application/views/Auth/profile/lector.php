<h2>Profil</h2>
<table>
    <?php echo form_open(); ?>
    <tr>
        <td><?php echo form_label('Meno');?></td>
        <td><?php echo form_input('first_name',$name);?></td>
    </tr>
    <tr>
        <td><?php echo form_label('Priezvisko');?></td>
        <td><?php echo form_input('surname',$surname);?></td>
    </tr>
    <tr>
        <td><?php echo form_label('E-mail');?></td>
        <td><?php echo form_input('email',$email);?></td>
    </tr>
    <tr>
        <td><?php echo form_label('Telefon');?></td>
        <td><?php echo form_input('mobile',$mobile);?></td>
    </tr>
    <tr>
        <td><?php echo form_label('Pracovisko');?></td>
        <td><?php echo form_dropdown();?></td>
    </tr>
    <tr>
        <td><?php echo form_label('Krajina');?></td>
        <td><?php echo form_dropdown();?></td>
    </tr>
    <tr>
        <td><?php echo form_submit(); ?></td>
    </tr>
<?php
    echo form_close();
?>
</table>