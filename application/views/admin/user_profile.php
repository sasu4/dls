<h2>Profil</h2>
<?php 
if($query->num_rows()>0) {
    foreach($query->result() as $row) {
?>
<table style="max-width: 800px;">
    <?php echo form_open('profile_edit/lector_edit');
    echo form_hidden('id',$row->id);
    if($row->country_id!=0) {
        $country = $this->lectorate->get_country_name($row->country_id);
    } 
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
        <td><?php echo form_label('E-mail');?></td>
        <td><?php echo form_input('email',$row->email);?></td>
    </tr>
    <tr>
        <td><?php echo form_label('Telefon');?></td>
        <td><?php echo form_input('telephone',$row->telephone);?></td>
    </tr>
    <tr>
        <td><?php echo form_label('Krajina');?></td>
        <td><?php 
        if(isset($country)) {
            echo form_dropdown('country_id',$countries,$country);
        } else {
            echo form_dropdown('country_id',$countries);
        }
        ?></td>
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
        <td><?php echo form_label('Webová stránka');?></td>
        <td><?php echo form_input('website',$row->website);?></td>
    </tr>
    <tr>
        <td><?php echo form_submit('profile_edit/lector_edit','Uložiť'); ?></td>
    </tr>
<?php
    echo form_close();
?>
</table>
<?php 
    }
}
?>