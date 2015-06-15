<h2>Aktivity</h2>
<p></p>
<?php if(isset($id)) {
    ?>
<table style="max-width: 800px;">
    <?php echo form_open('profile_edit/edit_activities');
    echo form_hidden('id',$id);?>
    <tr>
        <td>Kategória</td>
        <td><?php echo form_dropdown('category_id',$categ,$category_id);?></td>
    </tr>
    <tr>
        <td>Viac informácií</td>
        <td><?php echo form_textarea('info',$info);?></td>
    </tr>
    <tr>
        <td>Rok</td>
        <td><?php echo form_input('year',$year);?></td>
    </tr>
    <tr>
        <td><?php echo form_submit('profile_edit/edit_activities','Upraviť');?></td>
    </tr>
</table>
    <?php
} else {?>
<table style="max-width: 800px;">
    <?php echo form_open('profile_edit/edit_activities');
    echo form_hidden('id',NULL);?>
    <tr>
        <td>Kategória</td>
        <td><?php echo form_dropdown('category_id',$categ);?></td>
    </tr>
    <tr>
        <td>Viac informácií</td>
        <td><?php echo form_textarea('info','');?></td>
    </tr>
    <tr>
        <td>Rok</td>
        <td><?php echo form_input('year','');?></td>
    </tr>
    <tr>
        <td><?php echo form_submit('profile_edit/edit_activities','Pridať');?></td>
    </tr>
</table>
<?php 
    echo form_close();
}