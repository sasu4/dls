<h2>Publikácie</h2>
<p>Uveďte všetky publikácie, ktoré sa týkajú slovenského jazyka a kultúry a vznikli v rámci Vášho pracoviska. Zo zoznamu vyberte všetky relevantné kategórie a uveďte bibliografický údaj v podobe: <br>Priezvisko, Meno. Rok. Názov publikácie. In Názov zborníku/časopisu. Mesto : Vydavateľstvo, rok, s. od-do. ISBN. (Opäť nás zaujímajú predovšetkým aktivity za posledné tri roky.)</p>
<?php 
    if($query->num_rows() > 0) {
        foreach($query->result() as $row) {
            ?>
<table style="max-width: 800px;">
    <tr>
        <td><?php echo anchor('profile_edit/publication_more/'.$row->id,$row->publication_info);?></td>
    </tr>
    <tr><td>&nbsp;</td></tr>
    <tr>
        <td><?php echo anchor('profile_edit/add_publication','Pridať novú publikáciu');?></td>
    </tr>
</table>
<?php 
        }
    } 
?>