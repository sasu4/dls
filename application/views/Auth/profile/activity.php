<h2>Aktivity</h2>
<p></p>
<?php //aktivity, mozno by bolo fajn pouzit checkbox
    $this->table->set_heading('', 'Kategória', 'Viac informácií', 'Rok');
		
    foreach ($query->result() as $row) {
        $this->table->add_row(
            form_checkbox('checkbox_'.$row->id, $user->username).form_hidden('key_'.$user->id, $user->activation_key),
            //kategorie form_dropdown('category_id',$cat), 
            form_textarea('info',$row->info), 
            form_input('year',$row->year)
            );
    }
    echo $this->table->generate(); 