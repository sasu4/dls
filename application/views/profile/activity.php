<table class="table table-hover">
    <h1>
        <?php echo $name ?>
    </h1>
<?php
if($query->num_rows()>0) {
    foreach($query->result() as $row) {
        $data = $this->profile->get_categorie_info($row->category_id);
        ?>
    <tr>
        <td><b>Kategória </b></td>
        <td><?php echo $data['type']; //typ kategorie?></td>
    </tr>
    <tr>
        <td><b>Typ kategórie </b></td>
        <td><?php echo $data['description']; //popis kategorie?></td>
    </tr>
    <tr>
        <td><b>Viac informácií </b></td>
        <td><?php echo $row->info; //viac informacii?></td>
    </tr>
    <tr>
        <td><b>Platné pre rok </b></td>
        <td><?php echo $row->year; //platne pre rok?></td>
    </tr>
    <tr><td>&nbsp;</td></tr>
   <?php     
    }
}
?>
</table>
