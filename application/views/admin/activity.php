<table>
<?php
if($query->num_rows()>0) {
    foreach($query->result() as $row) {
        $data = $this->profile->get_categorie_info($row->category_id);
        echo form_open();
        ?>
    <tr>
        <td>Typ kategórie</td>
        <td><?php echo form_input();?></td>
    </tr>
    <tr>
        <td>Popis kategórie</td>
        <td><?php echo form_dropdown('description',$data['desctiption']);?></td>
    </tr>
    <tr>
        <td>Viac informácií</td>
        <td><?php echo form_textarea('info',$row->info);?></td>
    </tr>
    <tr>
        <td>Platné pre rok</td>
        <td><?php echo form_input('year',$row->year);?></td>
    </tr>
    <tr>
        <td colspan="2"><?php echo form_submit();?></td>
    </tr>
    <?php
    echo form_close();
    }
}
?>
</table>