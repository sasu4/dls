<?php
if($query->num_rows()>0) {
    foreach($query->result() as $row) {
        echo $row->name;
        echo $row->surname;
        echo $row->expertise;
        echo $row->about;
        echo $row->email;
        echo $row->website;
    }
}
