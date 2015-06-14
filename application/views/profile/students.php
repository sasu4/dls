<table cellspacing="50" cellpadding="10">
<?php
if($query->num_rows()>0) {
    foreach($query->result() as $row) {?>
<tr>
    <td><b>Bakalári</b></td>
    <td><?php echo $row->bc ?></td>
</tr>
<tr>
    <td><b>Magistri</b></td>
    <td><?php echo $row->mgr ?></td>
</tr>
<tr>
    <td><b>Doktorandi</b></td>
    <td><?php echo $row->mgr ?></td>
</tr>
<tr>
    <td><b>Študenti inej národnosti</b></td>
    <td><?php echo $row->nonsvk ?></td>
</tr>
<tr>
    <td><b>Počet študentov v kurzoch pre verejnosť</b></td>
    <td><?php echo $row->public ?></td>
</tr>
<tr>
    <td><b>Stav k roku</b></td>
    <td><?php echo $row->year ?></td>
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
    <td><?php echo $row->a1 ?></td>
</tr>
<tr>
    <td><b>A2</b></td>
    <td><?php echo $row->a2 ?></td>
</tr>
<tr>
    <td><b>B1</b></td>
    <td><?php echo $row->b1 ?></td>
</tr>
<tr>
    <td><b>B2</b></td>
    <td><?php echo $row->b2 ?></td>
</tr>
<tr>
    <td><b>C1</b></td>
    <td><?php echo $row->c1 ?></td>
</tr>
</table>
<?php
    }
}
?>

