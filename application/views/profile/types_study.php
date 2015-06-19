<table class="table table-hover">
    <h1>
        <?php echo $name ?>
    </h1>
<?php
if($query->num_rows()>0) {
    foreach($query->result() as $row) {?>
    <tr>
        <td><b>Druh štúdia</b></td>
        <td><?php echo $row->type;?></td>
    </tr>
    <tr>
        <td><b>Cieľová skupina</b></td>
        <td><?php echo $row->target_group;?></td>
    </tr>
    <tr>
        <td><b>Obdobie</b></td>
        <td><?php echo $row->period;?></td>
    </tr>
    <tr>
        <td><b>Ďalšie informácie</b></td>
        <td><?php echo $row->info;?></td>
    </tr>
    <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
        <?php
    }
}?>
</table>
