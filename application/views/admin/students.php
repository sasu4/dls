<h2><?php echo $name; ?></h2>
<table class="table table-hover">
<?php
if($query->num_rows()>0) {
    foreach($query->result() as $row) {
        echo form_open('profile_edit/edit_students');
        echo form_hidden('id',$row->id);?>
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
    <td columnspan="2">Aký je momentálny počet študentov podľa stupňa jazykovej kompetencie?</td>
</tr>
<tr>
    <td><b>Úplní začiatočníci (A1)</b></td>
    <td><?php echo form_input('a1',$row->a1); ?></td>
</tr>
<tr>
    <td><b>Začiatočníci (A2)</b></td>
    <td><?php echo form_input('a2',$row->a2); ?></td>
</tr>
<tr>
    <td><b>Mierne pokročilí (B1)</b></td>
    <td><?php echo form_input('b1',$row->b1); ?></td>
</tr>
<tr>
    <td><b>Stredne pokročilí (B2)</b></td>
    <td><?php echo form_input('b2',$row->b2); ?></td>
</tr>
<tr>
    <td><b>Pokročilí (C1)</b></td>
    <td><?php echo form_input('c1',$row->c1); ?></td>
</tr>
<tr>
        <td colspan="2"><?php echo form_submit('profile_edit/edit_students','Uložiť');?></td>
    </tr>
</table>
<?php
echo form_close();
    }
}
?>

