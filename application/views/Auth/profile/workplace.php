<h2>Pracovisko</h2>
<table>
    <?php echo form_open(); ?>
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
</table>
<p>Vyplňte identifikačné údaje pracoviska:</p>
<table>
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
        <td><?php echo form_dropdown();?></td>
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
        <td><?php echo form_textarea('about',$about);?></td>
    </tr>
    <tr>
        <td><?php echo form_submit(); ?></td>
    </tr>
<?php
    echo form_close();
?>
</table>