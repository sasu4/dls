<table class="table table-hover">
<?php
if($query->num_rows()>0) {
    foreach($query->result() as $row) {?>
    <h1>
<?php echo $row->name_orig ?>
    </h1>
<tr>
    <td><b>Name </b></td>
    <td><?php echo $row->name_orig ?></td>
</tr>
<tr>
    <td><b>Názov(svk) </b></td>
    <td><?php echo $row->name_sk ?></td>
</tr>
<tr>
    <td><b>University </b></td>
    <td><?php echo $row->univ_orig ?></td>
</tr>
<tr>
    <td><b>Univerzita (svk) </b></td>
    <td><?php echo $row->univ_sk ?></td>
</tr>
<tr>
    <td><b>Ulica </b></td>
    <td><?php echo $row->street ?></td>
</tr>
<tr>
    <td><b>Číslo </b></td>
    <td><?php echo $row->number ?></td>
</tr>
<tr>
    <td><b>Mesto </b></td>
    <td><?php echo $row->city ?></td>
</tr>
<tr>
    <td><b>ID krajiny </b></td>
    <td><?php echo $row->country_id ?></td>
</tr>
<tr>
    <td><b>PSČ </b></td>
    <td><?php echo $row->zip ?></td>
</tr>
<tr>
    <td><b>Telefonický kontakt </b></td>
    <td><?php echo $row->telephone ?></td>
</tr>
<tr>
    <td><b>Webová stránka </b></td>
    <td><?php echo $row->website ?></td>
</tr>
<tr>
    <td><b>Zameranie </b></td>
    <td><?php echo $row->focus ?></td>
</tr>
</table>
<?php
    }
}
?>
