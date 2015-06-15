<table>
<?php
if($query->num_rows()>0) {
    foreach($query->result() as $row) {
        echo form_open();
        ?>
    <tr>
        <td>Ďalšie informácie</td>
        <td><?php echo form_textarea('info',$row->info);?></td>
    </tr>
    <tr>
        <td></td>
        <td><?php echo form_textarea('plans',$row->plans);?></td>
    </tr>
    <tr>
        <td colspan="2"><?php echo form_submit();?></td>
    </tr>
    <?php
    echo form_close();
    }
}?>
</table>
