<h2>Publikácie</h2>
<p>Uveďte všetky publikácie, ktoré sa týkajú slovenského jazyka a kultúry a vznikli v rámci Vášho pracoviska. Zo zoznamu vyberte všetky relevantné kategórie a uveďte bibliografický údaj v podobe: <br>Priezvisko, Meno. Rok. Názov publikácie. In Názov zborníku/časopisu. Mesto : Vydavateľstvo, rok, s. od-do. ISBN. (Opäť nás zaujímajú predovšetkým aktivity za posledné tri roky.)</p>
<?php 
    if($query->num_rows() > 0) {
        foreach($query->result() as $row) {
            ?>
<table style="max-width: 800px;">
    <?php echo form_open('profile_edit/edit_publication');
        echo form_hidden('id',$row->id);?>
    <tr>
        <td><?php echo form_label('Publikácia');?></td>
        <td><?php echo form_textarea('publication_info',$row->publication_info);?></td>
    </tr>
    <tr>
        <?php 
            $cat = array(
                'odborná monografia'=>'odborná monografia',
                'príspevok v zborníku'=>'príspevok v zborníku',
                'príspevok v odbornom časopise'=>'príspevok v odbornom časopise',
                'popularizačná práca'=>'popularizačná práca',
                'učebnica'=>'učebnica',
                'didaktická príručka'=>'didaktická príručka',
                'cvičebnica'=>'cvičebnica',
                'manuál pre študentov'=>'manuál pre študentov',
                'preklad'=>'preklad',
                'iné'=>'iné'
            );
        ?>
        <td><?php echo form_label('Kategória');?></td>
        <td><?php echo form_dropdown('category',$cat,$row->category);?></td>
    </tr>
    <tr>
        <td><?php echo form_label('Rok');?></td>
        <td><?php echo form_input('year',$row->year);?></td>
    </tr>
    <tr>
        <td><?php echo form_submit('profile_edit/edit_publication','Uložiť');?></td>
    </tr>
</table>
<?php 
    echo form_close();
        }
    } else {
?>
<table style="max-width: 800px;">
    <?php echo form_open('profile_edit/edit_publication');
        echo form_hidden('id',NULL);
        echo form_hidden('idl',$idl);?>
    <tr>
        <td><?php echo form_label('Publikácia');?></td>
        <td><?php echo form_textarea('publication_info','');?></td>
    </tr>
    <tr>
        <?php 
            $cat = array(
                'odborná monografia'=>'odborná monografia',
                'príspevok v zborníku'=>'príspevok v zborníku',
                'príspevok v odbornom časopise'=>'príspevok v odbornom časopise',
                'popularizačná práca'=>'popularizačná práca',
                'učebnica'=>'učebnica',
                'didaktická príručka'=>'didaktická príručka',
                'cvičebnica'=>'cvičebnica',
                'manuál pre študentov'=>'manuál pre študentov',
                'preklad'=>'preklad',
                'iné'=>'iné'
            );
        ?>
        <td><?php echo form_label('Kategória');?></td>
        <td><?php echo form_dropdown('category',$cat);?></td>
    </tr>
    <tr>
        <td><?php echo form_label('Rok');?></td>
        <td><?php echo form_input('year','');?></td>
    </tr>
    <tr>
        <td><?php echo form_submit('profile_edit/edit_publication','Uložiť');?></td>
    </tr>
</table>
    <?php } ?>
