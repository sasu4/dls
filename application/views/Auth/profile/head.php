<h2>Vedúci pracoviska</h2>
<p>Uveďte meno, priezvisko, tituly a odborné zameranie vedúceho/vedúcej pracoviska, napíšte jej/jeho krátky profesijný profil a uveďte odkaz na internetovú stránku – ak je k dispozícii, prípadne uveďte aj e-mail.</p>
<?php 
if($query->num_rows()>0) {
    foreach($query->result() as $row) {
?>
<table style="max-width: 800px;">
    <?php echo form_open('profile_edit/edit_head'); 
    echo form_hidden('id',$row->id);
    echo form_hidden('head',1);
    ?>
    <tr>
        <td><?php echo form_label('Meno');?></td>
        <td><?php echo form_input('name',$row->name);?></td>
    </tr>
    <tr>
        <td><?php echo form_label('Priezvisko');?></td>
        <td><?php echo form_input('surname',$row->surname);?></td>
    </tr>
    <tr>
        <td><?php echo form_label('Odborné zameranie');?></td>
        <td><?php echo form_textarea('expertise',$row->expertise);?></td>
    </tr>
    <tr>
        <td><?php echo form_label('Profil');?></td>
        <td><?php echo form_textarea('about',$row->about);?></td>
    </tr>
    <tr>
        <td><?php echo form_label('E-mail');?></td>
        <td><?php 
            $emaill = array('name'=>'email','value'=>$row->email,'disabled'=>'true');
            echo form_input($emaill);?></td>
    </tr>
    <tr>
        <td><?php echo form_label('Webová stránka');?></td>
        <td><?php echo form_input('website',$row->website);?></td>
    </tr>
    <tr>
        <td><?php echo form_submit('profile_edit/edit_head','Potvrdiť'); ?></td>
    </tr>
<?php
    echo form_close();
?>
</table>
<?php }
} else {?>
<table style="max-width: 800px;">
    <?php echo form_open('profile_edit/edit_head'); 
    ?>
    <tr>
        <td><?php echo form_label('Meno');?></td>
        <td><?php echo form_input('name','');?></td>
    </tr>
    <tr>
        <td><?php echo form_label('Priezvisko');?></td>
        <td><?php echo form_input('surname','');?></td>
    </tr>
    <tr>
        <td><?php echo form_label('Odborné zameranie');?></td>
        <td><?php echo form_textarea('expertise','');?></td>
    </tr>
    <tr>
        <td><?php echo form_label('Profil');?></td>
        <td><?php echo form_textarea('about','');?></td>
    </tr>
    <tr>
        <td><?php echo form_label('E-mail');?></td>
        <td><?php echo form_input('email','');?></td>
    </tr>
    <tr>
        <td><?php echo form_label('Webová stránka');?></td>
        <td><?php echo form_input('website','');?></td>
    </tr>
    <tr>
        <td><?php echo form_submit('profile_edit/edit_head','Potvrdiť'); ?></td>
    </tr>
<?php
    echo form_close();
?>
</table>
<?php } ?>
