<table class="table table-hover">
    <h1>
        <?php echo $name ?>
    </h1>
<?php
if($query->num_rows()>0) {
    foreach($query->result() as $row) {
        ?>
    <tr>
        <td><b>Meno a priezvisko</b></td>
        <td><?php echo $row->name.' '.$row->surname;?></td>
    </tr>
    <tr>
        <td><b>Zameranie</b></td>
        <td><?php echo $row->expertise;?></td>
    </tr>
    <tr>
        <td><b>Profil</b></td>
        <td><?php echo $row->about;?></td>
    </tr>
    <tr>
        <td><b>Email</b></td>
        <td><?php echo $row->email;?></td>
    </tr>
    <tr>
        <td><b>Webová stránka </b></td>
        <td><?php echo $row->website;?></td>
    </tr>
        <?php
    }
}
?>
</table>