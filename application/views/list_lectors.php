<h4>Lektori</h4>
<table class="table table-hover">
<?php
if ($query->num_rows() > 0) {
    foreach ($query->result() as $row) {
        ?>
    <tr><td><?php echo anchor('lectors/profile/'.$row->id,$row->name.' '.$row->surname);?></td></tr>
    <?php
    }
}
?>
</table>

