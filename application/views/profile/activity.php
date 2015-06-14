<?php

if($query->num_rows()>0) {
    foreach($query->result() as $row) {
        $data = $this->profile->get_categorie_info($row->category_id);
        echo $data['type']; //typ kategorie
        echo $data['description']; //popis kategorie
        echo $row->info; //viac informacii
        echo $row->year; //platne pre rok
    }
}

