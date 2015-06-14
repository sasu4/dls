<?php

if($query->num_rows()>0) {
    foreach($query->result() as $row) {
        echo $row->name_orig;
        echo $row->name_sk;
        echo $row->univ_orig;
        echo $row->univ_sk;
        echo $row->street;
        echo $row->number;
        echo $row->city;
        echo $row->country_id;
        echo $row->zip;
        echo $row->telephone;
        echo $row->website;
        echo $row->focus;
    }
}
