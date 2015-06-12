<h2>Aktivity</h2>
<p></p>
<table style="max-width: 800px;">
    <?php echo form_open('profile/edit_activities');
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
        <td><?php echo form_submit('profile/edit_activities','Pridať');?></td>
    </tr>
</table>
<?php 
    echo form_close();