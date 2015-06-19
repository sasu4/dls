<table class="table table-hover">
    <h1>
        <?php echo $name ?>
    </h1>
<?php
if($query->num_rows()>0) {
    foreach($query->result() as $row) {
        ?>
    <tr>
        <td><b>Ďalšie informácie</b></td>
        <td><?php echo $row->info;?></td>
    </tr>
    <tr>
        <td><b>Plány na tento rok</b></td>
        <td><?php echo $row->plans;?></td>
    </tr>
    <?php
    }
}
?>
</table>