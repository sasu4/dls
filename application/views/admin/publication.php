<?php

if($query->num_rows()>0) {
    foreach($query->result() as $row) {
        echo $row->publication_info;
        echo $row->category;
        echo $row->year;
    }
}
