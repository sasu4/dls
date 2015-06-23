<h2><?php echo $name; ?></h2>
<table class="table table-hover">
<?php
if($query->num_rows()>0) {
    foreach($query->result() as $row) {
        echo form_open('profile_edit/edit_additional');
        echo form_hidden('id',$row->id);
        ?>
    <tr>
        <td>Ďalšie informácie</td>
        <td><?php echo form_textarea('info',$row->info);?></td>
    </tr>
    <tr>
        <td>Plánujete na rok 2015 nejaké kultúrne podujatia, ako sú prednášky, tematické večery a podobne?</td>
        <td><?php echo form_textarea('plans',$row->plans);?></td>
    </tr>
    <tr>
        <td><?php echo 'Budeme veľmi vďační za akékoľvek Vaše poznámky, komentáre, návrhy. ';?></td>
        <td><?php echo form_input('comments',$row->comments);?></td>
    </tr>
    <tr>
        <td colspan="2"><?php echo form_submit('profile_edit/edit_additional','Uložiť');?></td>
    </tr>
    <?php
    echo form_close();
    }
}?>
</table>
