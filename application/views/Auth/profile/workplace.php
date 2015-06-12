<h2>Pracovisko</h2>
<table style="max-width: 800px;">
    <?php echo form_open('profile/edit_workplace'); 
        echo form_hidden('id',$id);
    ?>
    <tr>
        <td><?php echo form_label('Aký je presný názov pracoviska, pod ktoré spadá lektorát slovenského jazyka a kultúry, respektíve kde sa vyučuje slovenský jazyk a kultúra? (uveďte originálny aj preložený názov).');?></td>
        <td><?php echo form_input('lect_name_o',$lect_name_o);?><br>
        <?php echo form_input('lect_name_s',$lect_name_s);?></td>
    </tr>
    <tr>
        <td><?php echo form_label('Na akej fakulte a univerzite pracovisko pôsobí? (napíšte originálny názov a preklad).');?></td>
        <td><?php echo form_input('uni_name_o',$uni_name_o);?><br>
        <?php echo form_input('uni_name_s',$uni_name_s);?></td>
    </tr>
    <tr>
        <td colspan="2">Vyplňte identifikačné údaje pracoviska:</td>
    </tr>
    <tr>
        <td><?php echo form_label('Ulica');?></td>
        <td><?php echo form_input('street',$street);?></td>
    </tr>
    <tr>
        <td><?php echo form_label('Číslo');?></td>
        <td><?php echo form_input('numb',$numb);?></td>
    </tr>
    <tr>
        <td><?php echo form_label('Mesto');?></td>
        <td><?php echo form_input('city',$city);?></td>
    </tr>   
    <tr>
        <td><?php echo form_label('Krajina');?></td>
        <td><?php 
        if($c_sel==NULL) {
            echo form_dropdown('country',$countries);
        } else {
            echo form_dropdown('country',$countries,$c_sel);
        } ?></td>
    </tr>
    <tr>
        <td><?php echo form_label('PSČ');?></td>
        <td><?php echo form_input('psc',$psc);?></td>
    </tr>
    <tr>
        <td><?php echo form_label('Telefonický kontakt');?></td>
        <td><?php echo form_input('tel',$tel);?></td>
    </tr>
    <tr>
        <td><?php echo form_label('Webová stránka pracoviska ');?></td>
        <td><?php echo form_input('web',$web);?></td>
    </tr>
    <tr>
        <td><?php echo form_label('Na čo sa pracovisko konkrétne zameriava? (uveďte jeho krátky profil) ');?></td>
        <td><?php echo form_textarea('focus',$focus);?></td>
    </tr>
    <tr>
        <td><?php echo form_submit('profile/edit_workplace','Uložiť'); ?></td>
    </tr>
<?php
    echo form_close();
?>
</table>