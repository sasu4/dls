<h2>Študenti</h2>
<p>Aký je celkový počet študentov a študentiek študujúcich na jednotlivých stupňoch štúdia (špecifikujte, či ide o samostatný odbor alebo súčasť širšieho štúdia)?</p>
<table>
    <?php echo form_open(); ?>
    <tr>
        <td><?php echo form_label('Bakalárske');?></td>
        <td><?php echo form_input('bc',$bc);?></td>
    </tr>
    <tr>
        <td><?php echo form_label('Magisterské');?></td>
        <td><?php echo form_input('mgr',$mgr);?></td>
    </tr>
    <tr>
        <td><?php echo form_label('Doktorandské');?></td>
        <td><?php echo form_input('phd',$phd);?></td>
    </tr>
    <tr>
        <td><?php echo form_label('Koľko študentov neslovakistov navštevuje kurzy slovenčiny? ');?></td>
        <td><?php echo form_input('nonsvk',$nonsvk);?></td>
    </tr>
    <tr>
        <td><?php echo form_label('Aký je počet študentov slovenčiny v kurzoch pre verejnosť (ak sú v ponuke)?');?></td>
        <td><?php echo form_input('public',$public);?></td>
    </tr>
    <tr>
        <td><?php echo form_label('Stav k roku');?></td>
        <td><?php echo form_input('year',$year);?></td>
    </tr>
</table>
<p>Aký je momentálny počet študentov podľa stupňa jazykovej kompetencie?</p>
<table>
    <tr>
        <td><?php echo form_label('Úplní začiatočníci (A1)');?></td>
        <td><?php echo form_input('a1',$a1);?></td>
    </tr>
    <tr>
        <td><?php echo form_label('Začiatočníci (A2) ');?></td>
        <td><?php echo form_input('a2',$a2);?></td>
    </tr>
    <tr>
        <td><?php echo form_label('Mierne pokročilí (B1) ');?></td>
        <td><?php echo form_input('b1',$b1);?></td>
    </tr>
    <tr>
        <td><?php echo form_label('Stredne pokročilí (B2) ');?></td>
        <td><?php echo form_input('b2',$b2);?></td>
    </tr>
    <tr>
        <td><?php echo form_label('Pokročilí (C1) ');?></td>
        <td><?php echo form_input('c1',$c1);?></td>
    </tr>
    <tr>
        <td><?php echo form_submit(); ?></td>
    </tr>
<?php
    echo form_close();
?>
</table>