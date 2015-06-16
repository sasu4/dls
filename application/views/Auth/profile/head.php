<h2>Vedúci pracoviska</h2>
<p>Uveďte meno, priezvisko, tituly a odborné zameranie vedúceho/vedúcej pracoviska, napíšte jej/jeho krátky profesijný profil a uveďte odkaz na internetovú stránku – ak je k dispozícii, prípadne uveďte aj e-mail.</p>
<?php 
if($query->num_rows()>0) {
    foreach($query->result() as $row) {
?>
<table style="max-width: 800px;">
    <?php echo form_open('profile_edit/edit_head'); 
    echo form_hidden('id',$row->id);
    if(!$can_update) {
        echo form_hidden('head',1);
    }    
    ?>
    <tr>
        <td><?php echo form_label('Meno');?></td>
        <td><?php 
        if($edit) {
            $nam = array('name'=>'name','value'=>$row->name);
        }    else {
            $nam = array('name'=>'name','value'=>$row->name,'readonly'=>'false');
        } 
        echo form_input($nam);?></td>
    </tr>
    <tr>
        <td><?php echo form_label('Priezvisko');?></td>
        <td><?php if($edit) {
            $sur = array('name'=>'surname','value'=>$row->surname,);
        } else {
            $sur = array('name'=>'surname','value'=>$row->surname,'readonly'=>'false');
        }
        echo form_input($sur);?></td>
    </tr>
    <tr>
        <td><?php echo form_label('Odborné zameranie');?></td>
        <td><?php if($edit) {
            $exper = array('name'=>'expertise','value'=>$row->expertise);
        } else {
            $exper = array('name'=>'expertise','value'=>$row->expertise,'readonly'=>'false');
        }
        echo form_textarea($exper);?></td>
    </tr>
    <tr>
        <td><?php echo form_label('Profil');?></td>
        <td><?php if($edit) {
            $about = array('name'=>'about','value'=>$row->about);
        } else {
            $about = array('name'=>'about','value'=>$row->about,'readonly'=>'false');
        }        
        echo form_textarea($about);?></td>
    </tr>
    <tr>
        <td><?php echo form_label('E-mail');?></td>
        <td><?php if($edit) {
            $emaill = array('name'=>'email','value'=>$row->email);
        } else {
            $emaill = array('name'=>'email','value'=>$row->email,'readonly'=>'false');
        }
        echo form_input($emaill);?></td>
    </tr>
    <tr>
        <td><?php echo form_label('Webová stránka');?></td>
        <td><?php if($edit) {
            $web = array('name'=>'website','value'=>$row->website);
        } else {
            $web = array('name'=>'website','value'=>$row->website,'readonly'=>'false');
        }
        echo form_input($web);?></td>
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
    echo form_hidden('id',NULL);
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
