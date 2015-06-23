<table class="table table-hover">
<?php
if($query->num_rows()>0) {
    foreach($query->result() as $row) {
        echo form_open('profile_edit/edit_workplace');
        echo form_hidden('id',$row->id);?>
    <h1><?php echo $row->name_orig; ?></h1>
<tr>
    <td><b>Name</b></td>
    <td><?php echo form_input('lect_name_o',$row->name_orig); ?></td>
</tr>
<tr>
    <td><b>Názov(svk)</b></td>
    <td><?php echo form_input('lect_name_s',$row->name_sk); ?></td>
</tr>
<tr>
    <td><b>University</b></td>
    <td><?php echo form_input('uni_name_o',$row->univ_orig); ?></td>
</tr>
<tr>
    <td><b>Univerzita (svk)</b></td>
    <td><?php echo form_input('uni_name_s',$row->univ_sk); ?></td>
</tr>
<tr>
    <td><b>Ulica</b></td>
    <td><?php echo form_input('street',$row->street); ?></td>
</tr>
<tr>
    <td><b>Číslo</b></td>
    <td><?php echo form_input('numb',$row->number); ?></td>
</tr>
<tr>
    <td><b>Mesto</b></td>
    <td><?php echo form_input('city',$row->city); ?></td>
</tr>
<tr>
    <td><b>Krajina</b></td>
    <td><?php $c_sel = $this->lectorate->get_country_name($row->country_id);
        if($c_sel==NULL) {
            echo form_dropdown('country',$countries);
        } else {
            echo form_dropdown('country',$countries,$c_sel);
        } ?></td>
</tr>
<tr>
    <td><b>PSČ</b></td>
    <td><?php echo form_input('psc',$row->zip); ?></td>
</tr>
<tr>
    <td><b>Telefonický kontakt</b></td>
    <td><?php echo form_input('tel',$row->telephone); ?></td>
</tr>
<tr>
    <td><b>Webová stránka</b></td>
    <td><?php echo form_input('web',$row->website); ?></td>
</tr>
<tr>
    <td><b>Zameranie</b></td>
    <td><?php echo form_input('focus',$row->focus); ?></td>
</tr>
<tr>
        <td colspan="2"><?php echo form_submit('profile_edit/edit_workplace','Upraviť');?></td>
    </tr>
</table>
<?php
echo form_close();
    }
}
?>
