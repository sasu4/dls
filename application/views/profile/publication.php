<table class="table table-hover">
    <h1>
        <?php echo $name ?>
    </h1>
<?php
if($query->num_rows()>0) {
    foreach($query->result() as $row) {
        ?>
    <tr>
        <td><b>Publikácia</b></td>
        <td><?php echo $row->publication_info;?></td>
    </tr>
    <tr>
        <td><b>Kategória</b></td>
        <td><?php echo $row->category;?></td>
    </tr>
    <tr>
        <td><b>Rok</b></td>
        <td><?php echo $row->year;?></td>
    </tr>
    <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
        <?php
    }
}?>
</table>
