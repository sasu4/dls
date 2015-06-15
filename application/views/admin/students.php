<table cellspacing="50" cellpadding="10">
<?php
if($query->num_rows()>0) {
    foreach($query->result() as $row) {
        echo form_open();?>
<tr>
    <td><b>Bakalári</b></td>
    <td><?php echo form_input('bc',$row->bc); ?></td>
</tr>
<tr>
    <td><b>Magistri</b></td>
    <td><?php echo form_input('mgr',$row->mgr); ?></td>
</tr>
<tr>
    <td><b>Doktorandi</b></td>
    <td><?php echo form_input('phd',$row->phd); ?></td>
</tr>
<tr>
    <td><b>Študenti inej národnosti</b></td>
    <td><?php echo form_input('nonsvk',$row->nonsvk); ?></td>
</tr>
<tr>
    <td><b>Počet študentov v kurzoch pre verejnosť</b></td>
    <td><?php echo form_input('public',$row->public); ?></td>
</tr>
<tr>
    <td><b>Stav k roku</b></td>
    <td><?php echo form_input('year',$row->year); ?></td>
</tr>
<tr>
    <td><b>&nbsp;</b></td>
    <td>&nbsp;</td>
</tr>
<tr>
    <td><b>&nbsp;</b></td>
    <td>&nbsp;</td>
</tr>
<tr>
    <td><b>&nbsp;</b></td>
    <td>&nbsp;</td>
</tr>
<tr>
    <td><b>A1</b></td>
    <td><?php echo form_input('a1',$row->a1); ?></td>
</tr>
<tr>
    <td><b>A2</b></td>
    <td><?php echo form_input('a2',$row->a2); ?></td>
</tr>
<tr>
    <td><b>B1</b></td>
    <td><?php echo form_input('b1',$row->b1); ?></td>
</tr>
<tr>
    <td><b>B2</b></td>
    <td><?php echo form_input('b2',$row->b2); ?></td>
</tr>
<tr>
    <td><b>C1</b></td>
    <td><?php echo form_input('c1',$row->c1); ?></td>
</tr>
<tr>
        <td colspan="2"><?php echo form_submit();?></td>
    </tr>
</table>
<?php
    }
}
?>

