<p>Welcome to The Slovakists Around the World Database.</p><br>

<table>
<?php
$id = 0;
if ($coun->num_rows() > 0) {
    foreach ($coun->result() as $row) {
        $data = $this->lectorate->get_lectorate_c($row->country_id);
        if($id!=$row->country_id) {
            if($id!=0) {
                echo '</ul></td></tr>';
            }
            echo '<tr><td><b>';
            echo anchor('country/'.$data['id'],$data['name']).'</b><ul>';
            echo '<li>';
            echo anchor('profile/lectorate/'.$row->id,$row->name_orig);
            echo '</li>';
        } else {
            echo '<li>';
            echo anchor('profile/lectorate/'.$row->id,$row->name_orig);
            echo '</li>';
        }
        $id = $row->country_id;
    }
    echo '</ul></td></tr>';
}
?>
</table>
<?php
//    echo anchor('home/pages/about','About');
//    echo '<br>';
//    echo anchor('home/pages/services','Services');
//    echo '<br>';
//    echo anchor('home/pages/people','People');
//    echo '<br>';
//    echo anchor('home/pages/contact','Contact');
//    echo '<br>';
//    echo anchor('home/pages/sas','SAS');
//    echo '<br>';
//    echo anchor('home/pages/more','More activities');
?>
<br>
    