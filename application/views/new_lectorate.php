<h2>Pridajte nový lektorát</h2>
<p>Aký je presný názov pracoviska, pod ktoré spadá lektorát slovenského jazyka a kultúry, respektíve kde sa vyučuje slovenský jazyk a kultúra? (uveďte originálny aj preložený názov).</p>
<table>
    <?php echo form_open('lectorate/add_lect'); ?>
    <tr>
        <td><?php echo form_label('Originálny názov');?></td>
        <td><?php echo form_input('lect_name_o','');?></td>
    </tr>
    <tr>
        <td><?php echo form_label('Preložený názov');?></td>
        <td><?php echo form_input('lect_name_s','');?></td>
    </tr>
    <tr>
        <td><?php echo form_label('Krajina, v ktorej sa lektorát nachádza:');?></td>
        <td><?php echo form_dropdown('country_id',$countries);?></td>
    </tr>
    <tr>
        <td><?php echo form_submit('lectorate/add_lect','Vytvoriť'); ?></td>
    </tr>
<?php
    echo form_close();
?>
</table>