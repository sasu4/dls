<table cellspacing="50" cellpadding="10">
<?php
if($query->num_rows()>0) {
    foreach($query->result() as $row) {
        echo form_open();?>
    <h1>
<?php echo $row->name_orig ?>
    </h1>
<tr>
    <td><b>Name</b></td>
    <td><?php echo form_input('name_orig',$row->name_orig); ?></td>
</tr>
<tr>
    <td><b>Názov(svk)</b></td>
    <td><?php echo form_input('name_sk',$row->name_sk); ?></td>
</tr>
<tr>
    <td><b>University</b></td>
    <td><?php echo form_input('univ_orig',$row->univ_orig); ?></td>
</tr>
<tr>
    <td><b>Univerzita (svk)</b></td>
    <td><?php echo form_input('univ_sk',$row->univ_sk); ?></td>
</tr>
<tr>
    <td><b>Ulica</b></td>
    <td><?php echo form_input('street',$row->street); ?></td>
</tr>
<tr>
    <td><b>Číslo</b></td>
    <td><?php echo form_input('number',$row->number); ?></td>
</tr>
<tr>
    <td><b>Mesto</b></td>
    <td><?php echo form_input('city',$row->city); ?></td>
</tr>
<tr>
    <td><b>ID krajiny</b></td>
    <td><?php echo form_input('country_id',$row->country_id) ?></td>
</tr>
<tr>
    <td><b>zip</b></td>
    <td><?php echo form_input('zip',$row->zip); ?></td>
</tr>
<tr>
    <td><b>Telefonický kontakt</b></td>
    <td><?php echo form_input('telephone',$row->telephone); ?></td>
</tr>
<tr>
    <td><b>Webová stránka</b></td>
    <td><?php echo form_input('website',$row->website); ?></td>
</tr>
<tr>
    <td><b>Zameranie</b></td>
    <td><?php echo form_input('focus',$row->focus); ?></td>
</tr>
<tr>
        <td colspan="2"><?php echo form_submit();?></td>
    </tr>
</table>
<?php
echo form_close();
    }
}
?>
