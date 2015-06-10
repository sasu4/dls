<h2>Publikácie</h2>
<p>Uveďte všetky publikácie, ktoré sa týkajú slovenského jazyka a kultúry a vznikli v rámci Vášho pracoviska. Zo zoznamu vyberte všetky relevantné kategórie a uveďte bibliografický údaj v podobe: <br>Priezvisko, Meno. Rok. Názov publikácie. In Názov zborníku/časopisu. Mesto : Vydavateľstvo, rok, s. od-do. ISBN. (Opäť nás zaujímajú predovšetkým aktivity za posledné tri roky.)</p>
<table style="max-width: 800px;">
    <?php echo form_open('profile/edit_publication');
        echo form_hidden('id',$id);?>
    <tr>
        <td><?php echo form_label('Publikácia');?></td>
        <td><?php echo form_textarea('publication_info',$publication_info);?></td>
    </tr>
    <tr>
        <?php 
            $cat = array(
                'odborná monografia',
                'príspevok v zborníku',
                'príspevok v odbornom časopise',
                'popularizačná práca',
                'učebnica',
                'didaktická príručka',
                'cvičebnica',
                'manuál pre študentov',
                'preklad',
                'iné'
            );
        ?>
        <td><?php echo form_label('Kategória');?></td>
        <td><?php echo form_dropdown('category',$cat);?></td>
    </tr>
    <tr>
        <td><?php echo form_label('Rok');?></td>
        <td><?php echo form_input('year',$year);?></td>
    </tr>
</table>
<?php 
//    echo form_button('add','Add');
?>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
<script>
//var i = 1;
//$('#add').click(function(){
//    var newEl = ''.
//            '';
//    $('#form').append(newEl);
//});
</script>
    <table>
        <tr><td><?php
            echo form_submit('profile/edit_publication','Uložiť');
        ?></td></tr>
</table>
<?php 
    
    echo form_close();
?>