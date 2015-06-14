<?php

if($query->num_rows()>0) {
    foreach($query->result() as $row) {
        echo $row->bc;
        echo $row->mgr;
        echo $row->phd;
        echo $row->nonskv;
        echo $row->public;
        echo $row->year;
        //Aký je momentálny počet študentov podľa stupňa jazykovej kompetencie?
        echo $row->a1;
        echo $row->a2;
        echo $row->b1;
        echo $row->b2;
        echo $row->c1;
    }
}
