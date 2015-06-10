<h2>Vedúci pracoviska</h2>
<p>Uveďte meno, priezvisko, tituly a odborné zameranie vedúceho/vedúcej pracoviska, napíšte jej/jeho krátky profesijný profil a uveďte odkaz na internetovú stránku – ak je k dispozícii, prípadne uveďte aj e-mail.</p>
<table style="max-width: 800px;">
    <?php echo form_open(); 
    //najprv moznost vyberu z pouzivatelov a potom rozbalenie formulara
    ?>
    <tr>
        <td><?php echo form_label('Meno');?></td>
        <td><?php echo form_input('first_name',$name);?></td>
    </tr>
    <tr>
        <td><?php echo form_label('Priezvisko');?></td>
        <td><?php echo form_input('surname',$surname);?></td>
    </tr>
    <tr>
        <td><?php echo form_label('Odborné zameranie');?></td>
        <td><?php echo form_textarea('specialism',$specialism);?></td>
    </tr>
    <tr>
        <td><?php echo form_label('E-mail');?></td>
        <td><?php echo form_input('email',$email);?></td>
    </tr>
    <tr>
        <td><?php echo form_label('Webová stránka');?></td>
        <td><?php echo form_input('web',$web);?></td>
    </tr>
    <tr>
        <td><?php echo form_submit(); ?></td>
    </tr>
<?php
    echo form_close();
?>
</table>