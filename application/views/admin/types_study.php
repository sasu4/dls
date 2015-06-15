<?php

if($query->num_rows()>0) {
    foreach($query->result() as $row) {
        echo $row->type;
        echo $row->target_group;
        echo $row->period;
        echo $row->info;
    }
}
