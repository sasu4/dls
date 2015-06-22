<h2>Profil</h2>
<table class="table table-hover">
<?php 
if($query->num_rows()>0) {
    foreach($query->result() as $row) {
?>
    <tr>
        <td><?php echo form_label('Meno a priezvisko');?></td>
        <td><?php echo $row->name.' '.$row->surname;?></td>
    </tr>
    <tr>
        <td><?php echo form_label('E-mail');?></td>
        <td><?php echo $row->email?></td>
    </tr>
    <tr>
        <td><?php echo form_label('Telefon');?></td>
        <td><?php echo $row->telephone;?></td>
    </tr>
    <tr>
        <td><?php echo form_label('Krajina');?></td>
        <td><?php if($row->country_id==0) {
            echo '';
        } else {
            $cnt = $this->model_lectorate->get_lectorate_c($row->country_id);
            echo $cnt['name'];
        }?></td>
    </tr>
    <tr>
        <td><?php echo form_label('Odborné zameranie');?></td>
        <td><?php echo $row->expertise;?></td>
    </tr>
    <tr>
        <td><?php echo form_label('Profil');?></td>
        <td><?php echo $row->about;?></td>
    </tr>
    <tr>
        <td><?php echo form_label('Webová stránka');?></td>
        <td><?php echo $row->website;?></td>
    </tr>
<?php 
    }
}
?>
</table>