<?php

if($query->num_rows()>0) {
    foreach($query->result() as $row) {
        echo $row->info;
        echo $row->plans;
    }
}
