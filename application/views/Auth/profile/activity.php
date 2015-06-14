<h2>Aktivity</h2>
<p></p>
<table style="max-width: 800px;">
    <tr>
        <td colspan="2">Kategória</td>
        <td>Informácie o aktivite</td>
        <td>Platné pre rok</td>
        <td> </td>
    </tr>
    <?php
    if($query->num_rows()>0) {
        foreach($query->result() as $row) {
            echo form_open('profile_edit/edit_activities');
            echo form_hidden('id',$row->id);
            $data = $this->profile->get_categorie_info($row->category_id);
            ?>
    <tr>
        <td><?php echo form_input('type',$data['type']);?></td>
        <td><?php echo form_input('despcription',$data['description']);?></td>
        <td><?php echo form_textarea('info',$row->info);?></td>
        <td><?php echo form_input('year',$row->year);?></td>
        <td><?php echo form_submit('profile_edit/edit_activities','Upraviť');?></td>
    </tr>
    <?php
    echo form_close();
        }
    }
    ?>
</table>