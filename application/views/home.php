<p>Welcome to The Slovakists Around the World Database.</p><br>
<?php
    echo anchor('home/pages/about','About');
    echo '<br>';
    echo anchor('home/pages/services','Services');
    echo '<br>';
    echo anchor('home/pages/people','People');
    echo '<br>';
    echo anchor('home/pages/contact','Contact');
    echo '<br>';
    echo anchor('home/pages/sas','SAS');
    echo '<br>';
    echo anchor('home/pages/more','More activities');
?>
<br>
<h2>Lectorates</h2>
<?php
if ($list->num_rows() > 0) {
    foreach ($list->result() as $row) {
        echo anchor('lectorate/lect/'.$row->id,$row->name);
        echo '<br>';
    }
}?>
<h2>Countries</h2>
<?php
if ($coun->num_rows() > 0) {
    foreach ($coun->result() as $row) {
        $data = $this->lectorate->get_lectorate_c($row->id_country);
        echo anchor('country/'.$data['id'],$data['name']);
        echo '<br>';
    }
}

    