<h2>Aktivity</h2>
<p></p>
<?php //aktivity, mozno by bolo fajn pouzit checkbox
    $this->table->set_heading('Kategória', 'Viac informácií', 'Rok', '');
    echo form_open();
    foreach ($query->result() as $row) {
        $this->table->add_row(
                form_dropdown('category_id',$cat),  //kategorie 
                form_textarea('info',$row->info), 
                form_input('year',$row->year),
                form_hidden('id',$row->id).form_submit('')
            );
    }
    echo $this->table->generate(); 