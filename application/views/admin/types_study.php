<h2><?php echo $name; ?></h2>
<p>Bližšie charakterizujte  konkrétne typy štúdia slovenského jazyka.</p>
<table class="table table-hover">
<?php 
    if($query->num_rows() > 0) {
        foreach($query->result() as $row) {
            ?>
    <tr>
        <td><?php echo anchor('profile_edit/study_more/'.$row->id,$row->type);?></td>
    </tr>
    <tr><td>&nbsp;</td></tr>
        <?php } 
    }?>
    <tr>
        <td><?php echo anchor('profile_edit/study_more/0','Pridať nový typ štúdia');?></td>
    </tr>
</table>