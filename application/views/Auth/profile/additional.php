<h2>Doplňujúce informácie</h2>
<p>Akékoľvek aktuálne informácie týkajúce sa lektorátu, pracoviska alebo Vášho lektorského pôsobenia, ktoré by ste radi prezentovali na našej stránke, môžete uviesť tu. </p>
<table style="max-width: 800px;">
    <?php echo form_open('profile/edit_additional'); 
        echo form_hidden('id',$id);
    ?>
    <tr>
        <td><?php echo form_label('Aktuálne informácie');?></td>
        <td><?php echo form_textarea('info',$info);?></td>
    </tr>
    <tr>
        <td><?php echo form_label('Plánujete na rok 2015 nejaké kultúrne podujatia, ako sú prednášky, tematické večery a podobne (napríklad pri príležitosti dvestého výročia narodenia Ľ. Štúra)?');?></td>
        <td><?php echo form_textarea('plans',$plans);?></td>
    </tr>
    <tr>
        <td><?php echo form_label('Budeme veľmi vďační za akékoľvek Vaše poznámky, komentáre, návrhy. ');?></td>
        <td><?php echo form_input('comments',$comments);?></td>
    </tr>
    <tr>
        <td><?php echo form_submit('profile/edit_additional','Ulož'); ?></td>
    </tr>
<?php
    echo form_close();
?>
</table>