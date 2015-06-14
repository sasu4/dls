<h2>Lectorates</h2>
<?php
if ($query->num_rows() > 0) {
    foreach ($query->result() as $row) {
        echo anchor('lectorate/lect/'.$row->id,$row->name_orig);
        echo '<br>';
    }
}?>