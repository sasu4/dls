<h2>Lectorates</h2>
<table>
    <tr>
        <td>Lektorát</td>
        <td></td>
    </tr>
<?php
if ($query->num_rows() > 0) {
    foreach ($query->result() as $row) {?>
    <tr>
        <td><?php echo anchor('admin/profile/'.$row->id,$row->name_orig); ?></td>
        <td><?php 
        if($row->public == 1) {
            echo form_open('admin/lec_publicize');
            echo form_hidden('id',$row->id);
            echo form_hidden('publ',0);
            echo form_submit('admin/lec_publicize','Skryť');
            echo form_close();
        } else {
            echo form_open('admin/lec_publicize');
            echo form_hidden('id',$row->id);
            echo form_hidden('publ',1);
            echo form_submit('admin/lec_publicize','Zverejniť');
            echo form_close();
        }
        ?></td>
    </tr>
        
        <?php
    }
}?>
</table>