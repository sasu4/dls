<?php
if ($list->num_rows() > 0) {
    foreach ($list->result() as $row) {
        ?>
<h2>Lectorate - <?php echo $row->name; ?></h2>

<?php
    }
} else {
?>
<h2>Lectorate - not found</h2>
<?php } ?>
