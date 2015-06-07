<h2>Lectorates</h2>
<?php
if ($list->num_rows() > 0) {
    foreach ($list->result() as $row) {
        echo anchor('lectorate/lect/'.$row->id,$row->name);
        echo '<br>';
    }
}?>