<h2>Aktivity</h2>
<p></p>
<table style="max-width: 800px;">
<?php 
    if($query->num_rows() > 0) {
        foreach($query->result() as $row) {
            ?>
    <tr>
        <td><?php echo anchor('profile_edit/activity_more/'.$row->id,$row->info);?></td>
    </tr>
    <tr><td>&nbsp;</td></tr>
        <?php } 
    }?>
    <tr><td><?php echo anchor('profile_edit/add_activities/1','Pridať aktivitu kategórie <i>Vzdelávanie</i>');?></td></tr>
    <tr><td><?php echo anchor('profile_edit/add_activities/2','Pridať aktivitu kategórie <i>Veda</i>');?></td></tr>
    <tr><td><?php echo anchor('profile_edit/add_activities/3','Pridať aktivitu kategórie <i>Kultúra</i>');?></td></tr>
</table>